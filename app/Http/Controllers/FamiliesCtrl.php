<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Families;
use App\Models\FamiliesCategories;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class FamiliesCtrl extends Controller
{
    public function FamilyList()
    {
        $familiesCount = Families::all()->count();
        $families = Families::paginate(10);

        return view(
            'backend.Products.Families.familiesList',
            [
                'families' => $families,
                'familiesCount' => $familiesCount,
            ]
        );
    }

    public function FamilyCreate()
    {
        return view('backend.Products.Families.familyCreate');
    }

    public function FamilyAdd(Request $request)
    {

        $request->validate([
            "nameFamily" => ["required"],
            "descriptionFamily" => [],
        ], [
            "nameFamily.required" => "El nombre de la familia es requerido",
            "descriptionFamily.required" => "La descripción de la familia es requerida",
        ]);

        Families::create([
            'name'        => $request->nameFamily,
            'description' => $request->descriptionFamily,
            'order'       => $request->orderFamily
        ]);

        return redirect()->route('familiesList');
    }

    public function FamilyEdit($id)
    {
        $family = Families::find($id);

        return view('backend.Products.Families.familyEdit', [
            "family" => $family
        ]);
    }

    public function FamilyUpdate(Request $request, $id)
    {

        $request->validate([
            "nameFamily" => ["required"],
            "descriptionFamily" => [],
        ], [
            "nameFamily.required" => "El nombre de la sub categoría es requerido",
            "descriptionFamily.required" => "La descripción de la sub categoría es requerida",
        ]);

        $family = Families::find($id);

        $family->name = $request->nameFamily;
        $family->description = $request->descriptionFamily;
        $family->order = $request->orderFamily;
        $family->statusRegister = $request->statusRegisterFamily;

        $family->save();

        return redirect()->route('familiesList');
    }

    public function FamilyDelete($id)
    {
        $family = Families::find($id);
        $family->delete();

        return redirect()->route('familiesList');
    }

     public function FamilyCategories($familyId)
    {
        $family = Families::find($familyId);

        $allCategories = Category::all();

        if ($family->getFamilyCategories->isEmpty()){
        
            $categories = false;
            $selectCategories = $allCategories;

        }else{
            
            $categories = $family->getFamilyCategories->map(function ($relation) {
                return $relation->getCategory;
            })->filter();

            $selectCategories = $allCategories->diff($categories);
        }


        return view(
            'backend.Products.Families.addFamilyCategories',
            [
                'family' => $family,
                'categories' => $categories,
                'selectCategories' => $selectCategories,
            ]
        );
    }

    public function AddCategory(Request $request)
    {
        $request->validate([
            "familyId" => ["required"],
            "categoryId" => ["required"],
        ], [
            "familyId.required" => "El id de la familia es requerido",
            "categoryId.required" => "El id categoría es requerido",
        ]);

        FamiliesCategories::create([
            'family_id' => $request->familyId,
            'category_id'    =>  $request->categoryId,
        ]);

        return redirect()->route('addFamilyCategories', $request->familyId);
    }

    public function CategoryDelete($familyId, $categoryId)
    {
        $categoryRelation = FamiliesCategories::where('family_id', $familyId)
                                              ->where('category_id', $categoryId);
        $categoryRelation->delete();

        return redirect()->route('addFamilyCategories', $familyId);
    }

}
