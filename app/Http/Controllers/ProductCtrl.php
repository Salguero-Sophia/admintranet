<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

/* Modelos */
use App\Models\Product;
use App\Models\ProductCategoryRelations;
use App\Models\ProductSubCategoryRelations;
use App\Models\SubCategories;

class ProductCtrl extends Controller
{

    public function Index()
    {
        return view('backend.Products.index');
    }

    public function Products()
    {
        //Livewire vista
        $products = Product::all()->count();

        return view('backend.Products.productsList', [
            "productsCount" => $products
        ]);
    }

    public function ProductCreate()
    {
        return view('backend.Products.productCreate');
    }

    public function ProductAdd(Request $request)
    {

        $request->validate([
            "nameProduct" => ["required"],
            "postItemId" => ["required"],
            "descriptionProduct" => ["required"],
            "priceProduct" => ["required"],
            "productCommet" => [""],
            "productImage" =>  ["required"],
            "useTakeOutPriceProduct" => ["required"],
            "quantity" =>  ["required"],
            "isDefaultProduct" => ["required"]
        ], [
            "nameProduct.required" => "El nombre del producto es requerido",
            "postItemId.required" => "El postItemId es requerido",
            "descriptionProduct.required" => "La descripción del producto es requerida",
            "priceProduct.required" => "El precio del producto es requerido",
            "productImage.required" => "La imagen del producto es requerida",
            "useTakeOutPriceProduct.required" => "El precio de llevar es requerido",
            "quantity.required" => "La cantidad es requerida",
            "isDefaultProduct.required" => "El producto por defecto es requerido"
        ]);

        Product::create([
            'postItem_id' => $request->postItemId,
            'name' =>  $request->nameProduct,
            'description' => $request->descriptionProduct,
            'price' => $request->priceProduct,
            'comment' => $request->productCommet,
            'image' => $request->productImage,
            'productParent_id' => $request->productParent_id,
            'useTakeOutPrice' => $request->useTakeOutPriceProduct,
            'quantity' => $request->quantity,
            'isDefault' => $request->isDefaultProduct,
            'statusRegister' => 1
        ]);

        return redirect()->route('productsList')->with('success', 'Producto agregado correctamente');
    }

    public function ProductEdit($id)
    {
        $product = Product::find($id);

        return view('backend.Products.productEdit', [
            "product" => $product
        ]);
    }

    public function ProductDelete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('productsList');
    }



    public function ProductUpdate(Request $request, $id)
    {
        //dd($request->all());
        $request->validate([
            "nameProduct" => ["required"],
            "postItemId" => ["required"],
            "descriptionProduct" => ["required"],
            "priceProduct" => ["required"],
            "productCommet" => [""],
            "productImage" =>  [""],
            "useTakeOutPriceProduct" => ["required"],
            "quantity" =>  ["required"],
            "isDefaultProduct" => ["required"],
            "showInMenu" => ["required"]
        ], [
            "nameProduct.required" => "El nombre del producto es requerido",
            "postItemId.required" => "El postItemId es requerido",
            "descriptionProduct.required" => "La descripción del producto es requerida",
            "priceProduct.required" => "El precio del producto es requerido",
            "productImage.required" => "La imagen del producto es requerida",
            "useTakeOutPriceProduct.required" => "El precio de llevar es requerido",
            "quantity.required" => "La cantidad es requerida",
            "isDefaultProduct.required" => "El producto por defecto es requerido",
            "showInMenu.required" => "El producto por defecto es requerido"
        ]);

        $product = Product::find($id);

        $product->update([
            "postItem_id" => $request->postItemId,
            "name" => $request->nameProduct,
            "description" => $request->descriptionProduct,
            "price" => $request->priceProduct,
            "comment" => $request->productCommet,
            "image" => ($request->productImage == null) ? $request->productImageRegister : $request->productImage,

            "useTakeOutPrice" => $request->useTakeOutPriceProduct,
            "isDefault" => $request->isDefaultProduct,
            "quantity" => $request->quantity,
            "showInMenu" => $request->showInMenu,
            "statusRegister" => $request->statusRegister
        ]);

        $product->save();

        return redirect()->route('productsList')->with('success', 'Producto actualizado correctamente');
    }

    public function Categories($productId)
    {
        $product = Product::find($productId);

        $allCategories = Category::all();

        if ($product->getProductCategoryRelation->isEmpty()) {

            $categories = false;
            $selectCategories = $allCategories;
        } else {

            $categories = $product->getProductCategoryRelation->map(function ($relation) {
                return $relation->getCategory;
            })->filter();

            $selectCategories = $allCategories->diff($categories);
        }


        return view(
            'backend.Products.addCategoriesList',
            [
                'product' => $product,
                'categories' => $categories,
                'selectCategories' => $selectCategories,
            ]
        );
    }

    public function AddCategory(Request $request)
    {
        $request->validate([
            "productId" => ["required"],
            "categoryId" => ["required"],
        ], [
            "productId.required" => "El id producto es requerido",
            "categoryId.required" => "El id categoría es requerido",
        ]);

        ProductCategoryRelations::create([
            'product_id'  => $request->productId,
            'category_id' =>  $request->categoryId,
        ]);

        return redirect()->route('addCategoriesList', $request->productId);
    }

    public function CategoryDelete($product_id, $category_id)
    {
        $productRelation = ProductCategoryRelations::where('product_id', $product_id)
            ->where('category_id', $category_id);
        $productRelation->delete();

        return redirect()->route('addCategoriesList', $product_id);
    }

    public function AddProductSubCategory($product_id, $category_id)
    {

        $category = Category::find($category_id);

        $product = Product::find($product_id);

        $categorySubCategories = $category->getCategorySubCategories;

        $subCategories = [];

        foreach ($categorySubCategories as $relation) {
            $subCategories[] = $relation->getSubCategory;
        }

        return view(
            'backend.Products.addProductSubCategories',
            [
                'category' =>  $category,
                'subCategories' => $subCategories,
                'product' => $product,
            ]
        );
    }

    public function AddProductSubCategoryRelation(Request $request)
    {
        ProductSubCategoryRelations::create([
            'product_id' => $request->product_id,
            'sub_category_id' => $request->sub_category_id
        ]);

        return redirect()->route('addCategoriesList', [
            'product_id' => $request->product_id
        ])->with('success', 'Sub categoría agregada con éxito');
    }

    public function ProductDeleteSubCategoryRelation($relation_id)
    {
        $relation = ProductSubCategoryRelations::find($relation_id);

        $product_id = $relation->getLevel->product_id;

        $relation->delete();

        return redirect()->route('addCategoriesList', [
            'product_id' => $product_id
        ])->with('success', 'Producto eliminado con éxito');
    }
}
