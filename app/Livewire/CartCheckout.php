<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CartCheckout extends Component
{
    public $baseUrl;

    public function mount()
    {
        $this->baseUrl = env('API_ENDPOINT');
    }

    public $productsSubtotal = 0;

    public function deleteProduct($itemId)
    {
        $response = Http::delete($this->baseUrl . 'orderdetail/' . $itemId);

        $itemEliminated = json_decode($response->getBody()->getContents());

        return redirect()->route('checkout')->with('success', "Item deleted successfully!");
    }

    public function render()
    {
        $pedido =  Session::get('pedido');

        if ($pedido !== null) {

            $response = Http::get($this->baseUrl . 'order/' . Session::get('pedido'));
            $responseStore = Http::get($this->baseUrl . 'store/' . Session::get('store_id'));
            $store = json_decode($responseStore->getBody()->getContents());

            $data = json_decode($response->getBody()->getContents());
            
        } else {
            $data = [];
        }

        return view('livewire.cart-checkout', [
            'data' => $data,
            'store' => $store
        ]);
    }
}
