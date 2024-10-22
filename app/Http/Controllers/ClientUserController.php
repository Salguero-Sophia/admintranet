<?php

namespace App\Http\Controllers;

use App\Models\ClientUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class ClientUserController extends Controller
{
    protected $baseUrl;
    protected $countryId; 

    public function __construct()
    {
        $this->baseUrl = env('API_ENDPOINT');
        $this->countryId = env('COUNTRY_ID');;
    }

    public function CostumerUserRegister(Request $request)
    {
        $request->validate([
            'first_name' => ['required'],
            'last_name'  => ['required'],
            'email'      => ['required', 'unique:client_users'],
            'password'   => ['required'],
        ], [
            'first_name'     => "First Name is required",
            'last_name'      => "Last Name is required",
            'email.required' => "Email is required",
            'email.unique'   => "The email address already exists",
            'password'       => "password is required",
        ]);

        $customerSession = ClientUser::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        $this->createSession($customerSession, (string) $customerSession->id);

        return redirect()->route('menu')->with('success', "Welcome! You're logged in.");
    }

    public function CostumerUserLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $customer = ClientUser::where('email', $credentials['email'])->first();

        if ($customer && Hash::check($credentials['password'], $customer->password)) {

            $this->createSession($customer, (string) $customer->id);

            return redirect()->route('menu')->with('success', "Success! Welcome You're logged in.");
        } else {
            return redirect()->route('customerLogin')->with('error', 'Invalid credentials. Please try again.');
        }
    }

    public function CustomerGoogleLogin()
    {
        $user_google = Socialite::driver('google')->stateless()->user();

        $user_san_martin = ClientUser::where('email', $user_google->email)->first();

        if ($user_san_martin) {

            $user_san_martin->update([
                'google_id' => $user_google->id,
            ]);
        } else {

            $user_san_martin = ClientUser::create(
                [
                    'first_name' => $user_google->user['given_name'],
                    'last_name'  => $user_google->user['family_name'],
                    'email'      => $user_google->email,
                    'google_id'  => $user_google->id,
                ]
            );
        }

        $this->createSession($user_san_martin, $user_google->id);

        return redirect()->route('menu')->with('success', "Success! Welcome You're logged in.");
    }

    public function CustomerFacebookLogin()
    {
        $user_facebook = Socialite::driver('facebook')->user();

        $user_san_martin = ClientUser::where('email', $user_facebook->email)->first();

        if ($user_san_martin) {

            $user_san_martin->update([
                'facebook_id' => $user_facebook->id,
            ]);
        } else {

            $user_san_martin = ClientUser::create(
                [
                    'first_name'  => $user_facebook->name,
                    'last_name'   => '',
                    'email'       => $user_facebook->email,
                    'facebook_id' => $user_facebook->id,
                ]
            );
        }

        $this->createSession($user_san_martin, $user_facebook->id);

        return redirect()->route('menu')->with('success', "Success! Welcome You're logged in.");
    }

    private function createSession($user, $id){
        
        $user = [
            "identityId"  => $id,
            "firstName"   => $user->first_name,
            "lastName"    => $user->last_name,
            "phoneNumber" => "",
            "email"       => $user->email,
            "nit"         => "",
            "countryId"   => $this->countryId,
        ];

        $response = Http::post($this->baseUrl . 'customer', $user);

        $responseCustomer = (json_decode($response->getBody()->getContents()));

        $session_user = [
            'first_name'  => $responseCustomer->name,
            'last_name'   => "",
            'email'       => $responseCustomer->email,
            'id'          => $responseCustomer->id,
            'identityId'  => $responseCustomer->identityId,
        ];

        Session::put('customerSession',  $session_user, 1440);
    }

    public function CustomerUserLogout()
    {
        Session::forget('customerSession');

        Session::flush();

        return redirect()->route('menu')->with('success', "You've been logged out successfully.");
    }
}
