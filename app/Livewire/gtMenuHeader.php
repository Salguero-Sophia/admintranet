<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class gtMenuHeader extends Component
{

    public $baseUrl;

    public function mount()
    {
        $this->baseUrl = env('API_ENDPOINT');
    }

    public $productsQuantity = 0;

    public function deleteProduct($itemId)
    {
        $response = Http::delete($this->baseUrl . 'orderdetail/' . $itemId);

        $itemEliminated = json_decode($response->getBody()->getContents());

        return redirect()->route('menu')->with('success', "Item deleted successfully!");
    }

    public function render()
    {
        $pedido =  Session::get('pedido');

        if ($pedido !== null) {

            $response = Http::get($this->baseUrl . 'order/' . Session::get('pedido'));

            $data = json_decode($response->getBody()->getContents());

            $this->productsQuantity = count($data->orderDetails);
            
        } else {
            $data = [];
        }

        return view('livewire.gt-menu-header',[
            'data' => $data
        ]);

        
    }
}
