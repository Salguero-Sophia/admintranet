<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class OrderDetail extends Component
{
    public $productsSubtotal = 0;

    public function render($order)
    {
        $baseUrl = env('API_ENDPOINT');

        $response = Http::get($baseUrl . 'order/' . $order);

        $data = json_decode($response->getBody()->getContents());

        foreach ($data->orderDetails as $product) {
            $this->productsSubtotal += $product->price;;
        }

        return view(
            'livewire.order-detail',
            [
                "order" => $data->numberReference,
                "data"  => $data,
            ]
        );
    }
}
