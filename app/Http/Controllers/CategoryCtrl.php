<?php

namespace App\Http\Controllers;

use App\Models\CategoriesRelation;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\CategorySubCategoriesRelation;
use App\Models\SubCategories;

class CategoryCtrl extends Controller
{
    public function CategoriesList()
    {

        $categoriesCount = Category::all()->count();
        $categories = Category::orderBy('order', 'asc')->paginate(10);

        return view('backend.Products.Categories.categoriesList', [
            "categoriesCount" => $categoriesCount,
            "categories" => $categories
        ]);
    }

    public function CategoryCreate()
    {
        return view('backend.Products.Categories.categoryCreate');
    }

    public function CategoryAdd(Request $request)
    {

        $request->validate([
            "nameCategory" => ["required"],
            "descriptionCategory" => [],
        ], [
            "nameCategory.required" => "El nombre de la categoría es requerido",
            "descriptionCategory.required" => "La descripción de la categoría es requerida",
        ]);

        Category::create([
            'name' =>  $request->nameCategory,
            'description' => $request->descriptionCategory,
            'order' => $request->orderCategory
        ]);

        return redirect()->route('categoriesList');
    }

    public function CategoryEdit($id)
    {
        $category = Category::find($id);

        return view('backend.Products.Categories.categoryEdit', [
            "category" => $category
        ]);
    }

    public function CategoryUpdate(Request $request, $id)
    {

        $request->validate([
            "nameCategory" => ["required"],
            "descriptionCategory" => [],
        ], [
            "nameCategory.required" => "El nombre de la categoría es requerido",
            "descriptionCategory.required" => "La descripción de la categoría es requerida",
        ]);

        $category = Category::find($id);

        $category->name = $request->nameCategory;
        $category->description = $request->descriptionCategory;
        $category->order = $request->orderCategory;
        $category->statusRegister = $request->statusRegisterCategory;

        $category->save();

        return redirect()->route('categoriesList');
    }

    public function CategoryDelete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categoriesList');
    }

    public function CategorySubCategories($categoryId)
    {
        $category = Category::find($categoryId);

        $allSubCategories = SubCategories::all();

        if ($category->getCategorySubCategories->isEmpty()){
        
            $subcategories = false;
            $selectSubCategories = $allSubCategories;

        }else{
            
            $subcategories = $category->getCategorySubCategories->map(function ($relation) {
                return $relation->getSubCategory;
            })->filter();

            $selectSubCategories = $allSubCategories->diff($subcategories);
        }


        return view(
            'backend.Products.Categories.addCategorySubCategories',
            [
                'category' => $category,
                'subcategories' => $subcategories,
                'selectSubCategories' => $selectSubCategories,
            ]
        );
    }

    public function AddSubCategory(Request $request)
    {
        $request->validate([
            "categoryId"     => ["required"],
            "subCategoryId" => ["required"],
        ], [
            "categoryId.required"     => "El id de la categoría es requerido",
            "subCategoryId.required" => "El id de la sub categoría es requerido",
        ]);

        CategorySubCategoriesRelation::create([
            'category_id'      => $request->categoryId,
            'sub_category_id'    =>  $request->subCategoryId,
        ]);

        return redirect()->route('addCategorySubCategories', $request->categoryId);
    }

    public function SubCategoryDelete($categoryId, $subCategoryId)
    {
        $categoryRelation = CategorySubCategoriesRelation::where('category_id', $categoryId)
                                              ->where('sub_category_id', $subCategoryId);
        $categoryRelation->delete();

        return redirect()->route('addCategorySubCategories', $categoryId);
    }

}
