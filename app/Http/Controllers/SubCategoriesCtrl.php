<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SubCategories;

class SubCategoriesCtrl extends Controller
{
    public function SubCategoriesList()
    {
        $sub_categoriesCount = SubCategories::all()->count();
        $sub_categories = SubCategories::orderBy('order', 'asc')->paginate(10);

        return view('backend.Products.SubCategories.subcategoriesList', [
            "subcategoriesCount" => $sub_categoriesCount,
            "subcategories" => $sub_categories
        ]);
    }

    public function SubCategoryCreate()
    {
        return view('backend.Products.SubCategories.subcategoryCreate');
    }

    public function SubCategoryAdd(Request $request)
    {

        $request->validate([
            "namesubCategory" => ["required"],
            "descriptionsubCategory" => [],
        ], [
            "namesubCategory.required" => "El nombre de la Sub Categoría es requerido",
            "descriptionsubCategory.required" => "La descripción de la Sub Categoría es requerida",
        ]);

        SubCategories::create([
            'name'        => $request->namesubCategory,
            'description' => $request->descriptionsubCategory,
            'order'       => $request->ordersubCategory
        ]);

        return redirect()->route('subCategoriesList');
    }

    public function SubCategoryEdit($id)
    {
        $subCategory = SubCategories::find($id);

        return view('backend.Products.SubCategories.subcategoryEdit', [
            "subCategory" => $subCategory
        ]);
    }

    public function SubCategoryUpdate(Request $request, $id)
    {

        $request->validate([
            "nameSubCategory" => ["required"],
            "descriptionSubCategory" => [],
        ], [
            "nameSubCategory.required" => "El nombre de la sub categoría es requerido",
            "descriptionSubCategory.required" => "La descripción de la sub categoría es requerida",
        ]);

        $subcategory = SubCategories::find($id);
        
        $subcategory->name           = $request->nameSubCategory;
        $subcategory->description    = $request->descriptionSubCategory;
        $subcategory->order          = $request->orderSubCategory;
        $subcategory->statusRegister = $request->statusRegisterSubCategory;

        $subcategory->save();

        return redirect()->route('subCategoriesList');
    }

    public function SubCategoryDelete($id)
    {
        $subcategory = SubCategories::find($id);
        $subcategory->delete();

        return redirect()->route('subCategoriesList');
    }
}
