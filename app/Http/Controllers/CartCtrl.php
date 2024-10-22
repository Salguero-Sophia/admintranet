<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CartCtrl extends Controller
{
    public function Checkout()
    {
        return view('frontend.cart.checkout');
    }

    public function OrderConfirm(Request $request)
    {
        $baseUrl = env('API_ENDPOINT');

        $store_id = Session::get('store_id');

        if ($store_id === null) {
            return redirect()->route('checkout')->with('error', "Select a store to continue");
        }

        $data = [
                "name"             => $request->first_name,
                "lastName"         => $request->last_name,
                "phoneNumber"      => $request->phone,
                "email"            => Session::get('customerSession.email'),
                "nit"              => '0000',
                "observation"      => '',
                "deliveryDateTime" => Session::get('ScheduleOrder'),
                "paymentMethod"    => 0,
                "orderId"          => Session::get('pedido'),
                "cardNumber"       => $request->card_number,
                "expirationDate"   => $request->expiration_date,
                "cardCode"         => $request->cvc,
                "address"          => $request->address,
                "city"             => $request->city,
                "zip"              => $request->zip,
                "customerId"       => Session::get('customerSession.id'),
                "storeId"          => $store_id
        ];

        $response = Http::timeout(120)->put($baseUrl . 'order/confirm/' . Session::get('pedido'), $data);
        
        // dd(json_decode($response));

        if(isset($response['status']) && $response['status'] !== 204){

            $dataErrors = [];
            if (isset($response['errors'])) {
                $errorMessages = $response['errors'];
                foreach ($errorMessages as $key => $messages) {
                    foreach ($messages as $message) {
                        $dataErrors[] = $message;
                    }
                }
            } else if (isset($response['title'])) {
                $dataErrors[] = $response['title'];
            } else {
                $dataErrors[] = "Error no desconocido valide su información";
            }

            return redirect()->route('checkout')->with('error', implode(", ", $dataErrors));
        }

        $pedido = json_decode($response->getBody()->getContents());

        $orderDetail = Session::get('pedido');

        Session::forget('pedido', $pedido);

        return redirect()->route('orderDetail', $orderDetail)->with('success', "Your order was sent successfully!");
    }
}
