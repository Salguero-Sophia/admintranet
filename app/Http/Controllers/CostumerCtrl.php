<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumerCtrl extends Controller
{
    public function Index(){
        return view('backend.costumers.index');
    }

    public function Costumers(){
        return view('backend.costumers.index');
    }
}
