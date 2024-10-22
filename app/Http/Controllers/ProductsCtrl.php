<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ProductsCtrl extends Controller
{
    protected $baseUrl;
    protected $countryId;

    public function __construct()
    {
        $this->baseUrl = env('API_ENDPOINT');
        $this->countryId = env('COUNTRY_ID');
    }

    public function MenuCategories()
    {
        $response = Http::get($this->baseUrl . 'productcategory/level/1/' . $this->countryId);

        $stores_response = Http::get($this->baseUrl . 'store/country/' . $this->countryId);

        $data = json_decode($response->getBody()->getContents());

        $stores = json_decode($stores_response->getBody()->getContents());

        $store_id = Session::get('store_id');

        if($store_id === null) {
            $store_id = $stores[0]->id;
            Session::put('store_id', $store_id);
        }

        return view('frontend.products.menu-categories', [
            'categories' => $data->items,
            'stores' => $stores,
            'store_id' => $store_id
        ]);
    }

    public function MenuCategory($category)
    {
        $response = Http::get($this->baseUrl . 'productcategory/fathercode/' . $category . '/' . $this->countryId);

        $categories = json_decode($response->getBody()->getContents());

        return view('frontend.products.menu-category', [
            'categories' => $categories,
        ]);
    }

    public function MenuProducts($category, $categorySearch)
    {
        return view('frontend.products.menu-products', [
            'category'       => $category,
            'categorySearch' => $categorySearch,
        ]);
    }

    public function ScheduleOrder(Request $request)
    {
        Session::put('ScheduleOrder', $request->scheduleOrder);

        return redirect()->route($request->redirectTo, $request->slug)->with('success', "The order will be scheduled successfully");
    }

    public function DeleteScheduleOrder($redirectTo, $slug)
    {
        Session::forget('ScheduleOrder');

        Session::forget('pedido');

        return redirect()->route($redirectTo, $slug)->with('success', "The order will be to pickup now successfully");
    }

    public function ShowProduct($id)
    {
        $response = Http::get($this->baseUrl . 'product/' . $id . '?CountryId=' . $this->countryId . '&scheduledDate=' . Session::get('ScheduleOrder'));

        $product = json_decode($response->getBody()->getContents());

        $options = [];
        if(array_search(2, array_column($product->modifiers, 'typeModifier')) !== false){
            $responseOptions = Http::get($this->baseUrl . 'product/options/' . $id . '/' . $this->countryId);
            $options = json_decode($responseOptions->getBody()->getContents());
        }

        $modifiers = [];
        $modifiersToShow = [];

        foreach ($product->modifiers as $modifier) {

            $response = Http::get($this->baseUrl . 'productmodifier/' . $modifier->id);
            $productModifiers = json_decode($response->getBody()->getContents());
            $modifier->products = [];
            
            foreach ($productModifiers as $productModifier) {
                $productModifier->product->price = $productModifier->price;
                $productModifier->product->typeChange = $productModifier->typeChange;
                $productModifier->product->isDefault = $productModifier->isDefault;
                $modifier->products[] = $productModifier->product;
            }

            $modifiers[] = $modifier;
        }

        $modifiersToShow = array_filter($modifiers, function($modifier) {
            return $modifier->typeModifier !== 2;
        });
        
        return view('frontend.products.showProduct', [
            'product'   => $product,
            'modifiers' => $modifiers,
            'options'   => $options,
            'modifiersToShow' => $modifiersToShow
        ]);
    }

    public function AddProduct(Request $request)
    {
        $pedido = Session::get('pedido');

        $productId = $request->productId;
        $modifierProduct = $request->modifierProduct;

        $orderDetail = [];

        $orderDetail['productId'] = $productId;
        $orderDetail['quantity'] = $request->quantity;
        $orderDetail['observations'] = "";

        if (is_array($modifierProduct))
            foreach ($modifierProduct as $modifierId => $productModifierId) {

                if(is_array($productModifierId)){
                    foreach($productModifierId as $productIdSelected){
                        $orderDetail['productsModifiers'][] = array(
                            "productId" => $productIdSelected,
                            "modifierId" => $modifierId,
                            "productFatherId" => $productId,
                        );        
                    }
                } else {
                    $orderDetail['productsModifiers'][] = array(
                        "productId" => $productModifierId,
                        "modifierId" => $modifierId,
                        "productFatherId" => $productId,
                    );
                }
            }

        if ($pedido) {
            $data = [
                "orderDetail" => $orderDetail,
                "orderId" => $pedido
            ];

            $response = Http::post($this->baseUrl . 'orderdetail', $data);
        } else {
            $data = [
                "orderDetail" => $orderDetail,
            ];

            $response = Http::post($this->baseUrl . 'order/create-with-detail', $data);

            $pedido = json_decode($response->getBody()->getContents());

            Session::put('pedido', $pedido);
        }

        return redirect()->route('menuProducts', [$request->categoryNavigate, $request->selectedCategory])->with('success', "Delicious food item added successfully!");
    }
}
