<?php

namespace App\Http\Controllers;

use App\Mail\BotonEtica;
use App\Models\etica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ExtenController extends Controller
{
    public function historia(){
        return view('General/Historia');      
    }

    public function sso(){
        return view('General/SSO');      
    }

    public function docsso(){
        return view('General/docsso');      
    }

    // Salvador
    public function salvador(){
        return view('Salvador/Salvador');      
    }

    public function tiendas(){
        return view('Salvador/sal-tien');      
    }
    // Dallas
    public function usa(){
        return view('Dallas/Usa');      
    }

    public function tiend(){
        return view('Dallas/dal-tien');      
    }
    // Guatemala
    public function guatemala(){
        return view('Guatemala/Guatemala');      
    }
// dd($request->comment);
    public function SendEtica(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'country' => 'required',
            'firstname' => 'required|string', 
            'phonenumber' => 'required', 
        ]);

        $comentario = Etica::create([
            'comments' => $request->comment,
            'country' => $request->country,
            'firstname' => $request->firstname,
            'phonenumber' => $request->phonenumber,
        ]);

        // dd($comentario);
        
        if (filter_var("etica@sanmartinbakery.com", FILTER_VALIDATE_EMAIL)) {
        
            if ($request->country == 'gt') {
                Mail::to('karinamasaya@sanmartinbakery.com')->queue(new BotonEtica($comentario));
                return redirect()->route('guatemala')->with('success', '¡Muchas gracias por confiar en nosotros!');
            } elseif ($request->country == 'sv') {
                Mail::to('karinamasaya@sanmartinbakery.com')->queue(new BotonEtica($comentario));
                return redirect()->route('salvador')->with('success', '¡Muchas gracias por confiar en nosotros!');
            } elseif ($request->country == 'usa') {
                Mail::to('karinamasaya@sanmartinbakery.com')->queue(new BotonEtica($comentario));
                return redirect()->route('usa')->with('success', '¡Muchas gracias por confiar en nosotros!');
            }
        } else {
            
            return false;
        }
    }



    public function planta(){
        return view('Guatemala/ext-planta');      
    }

    public function tienda(){
        return view('Guatemala/ext-tienda');      
    }

    public function conoce(){
        return view('Guatemala/conoce');      
    }

    public function interna(){
        return view('Guatemala/interna');      
    }

    public function preguntas(){
        return view('Guatemala/preguntas');      
    }

    public function nomina(){
        return view('Guatemala/nomina');      
    }
}