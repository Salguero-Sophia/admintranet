<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Product;
use App\Models\LevelProductRelation;

class LevelCtrl extends Controller
{
    public function Index($product_id)
    {
        $levels = Level::where('product_id', $product_id)
            ->orderBy('numberLevel', 'asc')
            ->get();

        $product = Product::find($product_id);

        return view('backend.Products.Levels.levelsList', [
            'levels' => $levels,
            '_product' => $product
        ]);
    }

    public function LevelCreate($product_id)
    {
        return view('backend.Products.Levels.levelCreate', [
            'product_id' => $product_id
        ]);
    }

    public function LevelAdd(Request $request)
    {

        Level::create([
            "numberLevel" => $request->numberLevel,
            "codeLevel" => $request->codeLevel,
            "nameLevel" => $request->nameLevel,
            "description" => $request->description,
            "product_id" => $request->product_id,
        ]);

        return redirect()->route('levelsIndex', [
            'product_id' => $request->product_id
        ])->with('success', 'Nivel creado con éxito');
    }

    public function LevelAddProduct($level_id)
    {
        $level = Level::find($level_id);
        $products = Product::where('statusRegister', true)->get();

        return view('backend.Products.Levels.AddProductLevel', [
            'level' => $level,
            'products' => $products
        ]);
    }

    public function LevelAddProductRelation(Request $request)
    {


        LevelProductRelation::create([
            'level_id' => $request->level_id,
            'product_id' => $request->product_id
        ]);

        return redirect()->route('levelsIndex', [
            'product_id' => $request->indexProduct_id
        ])->with('success', 'Producto agregado con éxito');
    }

    public function LevelDeleteProductRelation($relation_id)
    {
        $relation = LevelProductRelation::find($relation_id);

        //LLAMAMOS EL ID DEL PRODUCTO PADRE
        $product_id = $relation->getLevel->product_id;

        $relation->delete();

        return redirect()->route('levelsIndex', [
            'product_id' => $product_id
        ])->with('success', 'Producto eliminado con éxito');
    }
}
