<?php

use App\Http\Controllers\ApplicantsCtrl;
use App\Http\Controllers\CareersCtrl;
use App\Http\Controllers\CartCtrl;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


/* Back End Ctrls */
use App\Http\Controllers\ProductCtrl;
use App\Http\Controllers\LevelCtrl;

/* Front End Ctrls */
use App\Http\Controllers\ProductsCtrl;

/* Static Content */
use App\Http\Controllers\StaticContentCtrl;

/* Categories */
use App\Http\Controllers\ClientUserController;
use App\Http\Controllers\ExtenController;
use App\Http\Controllers\HomePageCtrl;
use App\Livewire\OrderDetail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Home */

Route::get('/', [HomePageCtrl::class, 'Home'])->name('home');

Route::get('/register', function () {
    Abort(404);
});

/* Products */
Route::get('menu-web', [ProductsCtrl::class, 'MenuCategories'])->name('menu');
Route::get('menu-web/category/{category}', [ProductsCtrl::class, 'MenuCategory'])->name('menuCategory');
Route::get('menu-web/{category}/{categorySearch}', [ProductsCtrl::class, 'MenuProducts'])->name('menuProducts');

Route::get('menu2/{id?}', [ProductsCtrl::class, 'Menu2'])->name('menu2');
Route::get('show-product/{id}', [ProductsCtrl::class, 'ShowProduct'])->name('showProduct');
Route::post('add-product', [ProductsCtrl::class, 'AddProduct'])->name('addProduct');

/* Order */
Route::post('scheduleOrder', [ProductsCtrl::class, 'ScheduleOrder'])->name('scheduleOrder');
Route::get('deleteScheduleOrder/{redirectTo}/{slug}', [ProductsCtrl::class, 'DeleteScheduleOrder'])->name('deleteScheduleOrder');
Route::get('order-detail/{order}/', [OrderDetail::class, 'render'])->name('orderDetail');

/* Registro usuarios */
Route::get('customer-registration', [StaticContentCtrl::class, 'CostumerRegistration'])->name('customerRegistration');
Route::post('customer-register', [ClientUserController::class, 'CostumerUserRegister'])->name('customerRegister');
Route::get('customer-login', [StaticContentCtrl::class, 'CostumerLogin'])->name('customerLogin');
Route::post('customer-login', [ClientUserController::class, 'CostumerUserLogin'])->name('customerLogin');
Route::get('customer-logout', [ClientUserController::class, 'CustomerUserLogout'])->name('customerLogout');
Route::get('/google-auth/callback', [ClientUserController::class, 'CustomerGoogleLogin']);
Route::get('/facebook-auth/callback', [ClientUserController::class, 'CustomerFacebookLogin']);

Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google-sign-in');

Route::get('/facebook-auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
})->name('facebook-sign-in');


/* Cart */
Route::get('checkout', [CartCtrl::class, 'Checkout'])->name('checkout');

Route::get('promotions', [StaticContentCtrl::class, 'Promotions'])->name('promotions');
Route::get('catering', [StaticContentCtrl::class, 'Catering'])->name('catering');
Route::get('nationwide', [StaticContentCtrl::class, 'Nationwide'])->name('nationwide');

    // Salvador
    Route::get('/el-salvador',[ExtenController::class,'salvador'])->name('salvador');
    Route::get('/extensiones-tiendas',[ExtenController::class,'tiendas'])->name('tiendas');


    // Guatemala

    Route::get('/gt',[ExtenController::class,'guatemala'])->name('guatemala');

    Route::get('/conocenos',[ExtenController::class,'historia'])->name('historia');

    Route::get('/conoce',[ExtenController::class,'conoce'])->name('conoce');

    Route::get('/nomina',[ExtenController::class,'nomina'])->name('nomina');

    Route::get('/comunicacion-interna',[ExtenController::class,'interna'])->name('interna');

    Route::get('/preguntas-frecuentes',[ExtenController::class,'preguntas'])->name('preguntas');

    Route::get('/extensiones-corporativas',[ExtenController::class,'planta'])->name('planta');

    Route::get('/extension-tiendas',[ExtenController::class,'tienda'])->name('tienda');

    Route::post('/boton-etica', [ExtenController::class, 'SendEtica'])->name('sendEtica');

    // Dallas
    Route::get('/usa',[ExtenController::class,'usa'])->name('usa');
    Route::get('/extension-tienda',[ExtenController::class,'tiend'])->name('tiend');

    //SSO
    Route::get('/portal-sso',[ExtenController::class,'sso'])->name('sso');  
    Route::get('/documentos-sso',[ExtenController::class,'docsso'])->name('docsso');

/* Careers */
Route::get('guatemala', [StaticContentCtrl::class, 'Careers'])->name('careers');
Route::get('careersList/{type_id}', [CareersCtrl::class, 'CareersList'])->name('careersList');
Route::get('careers-apply/{career_id}', [StaticContentCtrl::class, 'CareersApply'])->name('careersApply');

/* Applicants */
Route::post('applicant-add', [ApplicantsCtrl::class, 'ApplicantAdd'])->name('applicantAdd');

Route::post('pay', [CartCtrl::class, 'OrderConfirm'])->name('pay');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    /* HomePage Editor */
    Route::get('home-page-editor', [HomePageCtrl::class, 'HomePageEditor'])->name('homePageEditor');
    Route::post('change-image', [HomePageCtrl::class, 'ChangeImage'])->name('changeImage');
});
