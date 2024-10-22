<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

use function PHPUnit\Framework\returnCallback;

class PayCtrl extends Controller
{
    public function PayTest(Request $request)
    {
        /*
            Is it to any of these:

            https://api.authorize.net/soap/v1/Service.asmx
            https://secure2.authorize.net/gateway/transact.dll

            those are just some of the endpoints


            For example, this is the URL/endpoint for Production: https://api.authorize.net/xml/v1/request.api

            And this one's for Test: https://apitest.authorize.net/xml/v1/request.api


                When using Sandbox credentials you want to post to this URL:
                Sandbox API Endpoint: https://apitest.authorize.net/xml/v1/request.api

                When using the production acount:
                Production API Endpoint: https://api.authorize.net/xml/v1/request.api
        */


        /* script de ejemplo */
        function authorizeCreditCard($requestPayment)
        {

            //Pruebas
            $usuario = "5KP3u95bQpv";
            $contrasena = "346HZ32z3fP4hTG2";

            //Produccion test
            // $usuario = "4Ndh7mABjs83";
            // $contrasena = "3f462jc2Z3X44NYb";

            /* Create a merchantAuthenticationType object with authentication details
            retrieved from the constants file */
            $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
            $merchantAuthentication->setName($usuario);
            $merchantAuthentication->setTransactionKey($contrasena);

            // Set the transaction's refId
            $refId = 'ref' . time();

            // Create the payment data for a credit card
            $creditCard = new AnetAPI\CreditCardType();
            //$creditCard->setCardNumber("4111111111111111");
            //$creditCard->setExpirationDate("2038-12");
            //$creditCard->setCardCode("123");

            $creditCard->setCardNumber($requestPayment->card_number);
            $creditCard->setExpirationDate($requestPayment->expiration_date);
            $creditCard->setCardCode($requestPayment->cvc);

            // Add the payment data to a paymentType object
            $paymentOne = new AnetAPI\PaymentType();
            $paymentOne->setCreditCard($creditCard);

            // Create order information
            $order = new AnetAPI\OrderType();
            $order->setInvoiceNumber("10101");
            $order->setDescription("Golf Shirts");

            // Set the customer's Bill To address
            $customerAddress = new AnetAPI\CustomerAddressType();
            $customerAddress->setFirstName($requestPayment->first_name);
            $customerAddress->setLastName($requestPayment->last_name);
            $customerAddress->setCompany("San Martin");
            $customerAddress->setAddress("158 Leslie Street");
            $customerAddress->setCity("Dallas");
            $customerAddress->setState("TX");
            $customerAddress->setZip("75207");
            $customerAddress->setCountry("USA");

            // Set the customer's identifying information
            $customerData = new AnetAPI\CustomerDataType();
            $customerData->setType("individual");
            $customerData->setId("99999456654");
            $customerData->setEmail(Session::get('customerSession.email'));

            // Add values for transaction settings
            $duplicateWindowSetting = new AnetAPI\SettingType();
            $duplicateWindowSetting->setSettingName("duplicateWindow");
            $duplicateWindowSetting->setSettingValue("60");

            // Add some merchant defined fields. These fields won't be stored with the transaction,
            // but will be echoed back in the response.
            $merchantDefinedField1 = new AnetAPI\UserFieldType();
            $merchantDefinedField1->setName("customerLoyaltyNum");
            $merchantDefinedField1->setValue("1128836273");

            $merchantDefinedField2 = new AnetAPI\UserFieldType();
            $merchantDefinedField2->setName("favoriteColor");
            $merchantDefinedField2->setValue("blue");

            // Create a TransactionRequestType object and add the previous objects to it
            $transactionRequestType = new AnetAPI\TransactionRequestType();
            $transactionRequestType->setTransactionType("authOnlyTransaction");
            $transactionRequestType->setAmount($requestPayment->amount);
            $transactionRequestType->setOrder($order);
            $transactionRequestType->setPayment($paymentOne);
            $transactionRequestType->setBillTo($customerAddress);
            $transactionRequestType->setCustomer($customerData);
            $transactionRequestType->addToTransactionSettings($duplicateWindowSetting);
            $transactionRequestType->addToUserFields($merchantDefinedField1);
            $transactionRequestType->addToUserFields($merchantDefinedField2);

            // Assemble the complete transaction request
            $request = new AnetAPI\CreateTransactionRequest();
            $request->setMerchantAuthentication($merchantAuthentication);
            $request->setRefId($refId);
            $request->setTransactionRequest($transactionRequestType);

            // Create the controller and get the response
            $controller = new AnetController\CreateTransactionController($request);

            //se cambia esta linea para produccion y pruebas
            //PRODUCTION / SANDBOX
            $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);


            // if ($response != null) {
            //     // Check to see if the API request was successfully received and acted upon
            //     if ($response->getMessages()->getResultCode() == "Ok") {
            //         // Since the API request was successful, look for a transaction response
            //         // and parse it to display the results of authorizing the card
            //         $tresponse = $response->getTransactionResponse();

            //         if ($tresponse != null && $tresponse->getMessages() != null) {
            //             echo " Successfully created transaction with Transaction ID: " . $tresponse->getTransId() . "\n";
            //             echo " Transaction Response Code: " . $tresponse->getResponseCode() . "\n";
            //             echo " Message Code: " . $tresponse->getMessages()[0]->getCode() . "\n";
            //             echo " Auth Code: " . $tresponse->getAuthCode() . "\n";
            //             echo " Description: " . $tresponse->getMessages()[0]->getDescription() . "\n";
            //         } else {
            //             echo "Transaction Failed \n";
            //             if ($tresponse->getErrors() != null) {
            //                 echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
            //                 echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
            //             }
            //         }
            //         // Or, print errors if the API request wasn't successful
            //     } else {
            //         echo "Transaction Failed \n";
            //         $tresponse = $response->getTransactionResponse();

            //         if ($tresponse != null && $tresponse->getErrors() != null) {
            //             echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
            //             echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
            //         } else {
            //             echo " Error Code  : " . $response->getMessages()->getMessage()[0]->getCode() . "\n";
            //             echo " Error Message : " . $response->getMessages()->getMessage()[0]->getText() . "\n";
            //         }
            //     }
            // } else {
            //     echo  "No response returned \n";
            // }

            $tresponse = $response->getTransactionResponse()->getAuthCode();

            return $tresponse;
        }

        $auth =  authorizeCreditCard($request);

        $orderData = [
            "orderDetail" => [
                "productId" => "7728905b-350c-4bec-9635-cd4ad54b9575",
                "productsModifiers" => [
                    [
                        "productId" => "cb93a5bd-81b0-4c19-bab3-f33e546b44bf",
                        "modifierId" => "6421048a-3190-44c3-b66b-0962c534a8dd",
                        "productFatherId" => "7728905b-350c-4bec-9635-cd4ad54b9575"
                    ],
                    [
                        "productId" => "fef259ed-ae5e-4583-a9dc-b7f0a7d9cf15",
                        "modifierId" => "c1998806-2c95-4e2f-a21f-a3f5fbbef2a6",
                        "productFatherId" => "7728905b-350c-4bec-9635-cd4ad54b9575"
                    ],
                    [
                        "productId" => "59fca357-6026-4721-b0a4-bd32d4363f62",
                        "modifierId" => "69697ffc-6021-47be-8b6a-096fd3c8a0e0",
                        "productFatherId" => "7728905b-350c-4bec-9635-cd4ad54b9575"
                    ]
                ],
                "quantity" => 1,
                "observations" => ""
            ]
        ];

        $apiUrl = env('API_ENDPOINT');

        $orderData = [
            'data' => [
                'name' => Session::get('customerSession.first_name'),
                'lastName' => Session::get('customerSession.last_name'),
                'phoneNumber' => '123456789',
                'email' => Session::get('customerSession.email'),
                'nit' => '123456789',
                'observation' => 'Test',
                'deliveryDateTime' => null,
                'paymentMethod' => 0,
                'reference' => $auth
            ],
            'orderId' => Session::get('pedido'),
        ];

        $orderRespose = Http::put($apiUrl . 'order/confirm/' . Session::get('pedido'), $orderData);

        Session::forget('pedido');

        return redirect()->route('menu')->with('success', 'Your Order is' . $auth);
    }
}
