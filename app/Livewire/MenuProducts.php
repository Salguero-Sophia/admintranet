<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class MenuProducts extends Component
{
    public $categorySearch;

    public $baseUrl;
    public $countryId;
    public $storeId;

    public $category;
    public $defaultCategory;
    public $selectedCategory = 0;
    public $subCategory = 0;
    public $selectedSubCategory = 0;
    public $categoryNavigate = '';

    public function mount($category, $categorySearch)
    {
        if ($categorySearch == 'all') {
            $this->categorySearch = $category;
        } else {
            $this->categorySearch = $categorySearch;
            $this->selectedCategory = $categorySearch;
        }

        $this->defaultCategory = $category;
        $this->baseUrl = env('API_ENDPOINT');
        $this->countryId = env('COUNTRY_ID');
        $this->storeId = env('STORE_ID');
    }

    public function searchByDefaultCategory($categoryCode)
    {
        $this->categorySearch = $categoryCode;
        $this->subCategory = 0;
        $this->selectedSubCategory = 0;
        $this->selectedCategory = 0;
    }

    public function searchCategory($categoryCode)
    {
        $this->categorySearch = $categoryCode;
        $this->subCategory = 0;
        $this->selectedSubCategory = 0;
        $this->selectedCategory = $categoryCode;
    }

    public function searchSubCategory($subCategoryId)
    {
        $this->subCategory = $subCategoryId;
        $this->selectedSubCategory = $subCategoryId;
    }

    public function addProduct($productId)
    {
        $pedido = Session::get('pedido');

        if ($pedido) {
            $data = [
                "orderDetail" => [
                    "productId" => $productId,
                    "quantity" => 1,
                    "observations" => ""
                ],
                "orderId" => $pedido
            ];

            $response = Http::post($this->baseUrl . 'orderdetail', $data);
        } else {
            $data = [
                "orderDetail" => [
                    "productId" => $productId,
                    "quantity" => 1,
                    "observations" => ""
                ]
            ];

            $response = Http::post($this->baseUrl . 'order/create-with-detail', $data);

            $pedido = json_decode($response->getBody()->getContents());

            Session::put('pedido', $pedido);
        }

        return redirect()->route('menu')->with('success', "Delicious food item added successfully!");
    }

    public function render()
    {
        $responseCategories = Http::get($this->baseUrl. 'productcategory/fathercode/' . urlencode($this->category) . '/' . $this->countryId);

        $categories = json_decode($responseCategories->getBody()->getContents());

        $responseSubCategories = Http::get($this->baseUrl . 'productcategory/fathercode/' . urlencode($this->selectedCategory) . '/' . $this->countryId);

        $subCategories = json_decode($responseSubCategories->getBody()->getContents());

        if ($this->subCategory !== 0) {
            $responseProducts = Http::get($this->baseUrl . 'product/bycategory?CategoryCode=' . urlencode($this->subCategory) . '&CountryId=' . $this->countryId . '&StoreId=' . $this->storeId);
        } else {
            $responseProducts = Http::get($this->baseUrl . 'product/bycategory?CategoryCode=' . urlencode($this->categorySearch) . '&CountryId=' . $this->countryId . '&StoreId=' . $this->storeId);
        }

        $products = json_decode($responseProducts->getBody()->getContents());

        if($products->category->level === 1){
            $this->categoryNavigate = $products->category->code;
        }

        return view('livewire.menu-products', [
            'categories'       => $categories,
            'subCategories'    => $subCategories,
            'products'         => $products->products,
        ]);
    }
}
