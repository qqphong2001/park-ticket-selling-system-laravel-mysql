<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\VnpayController;
use App\Http\Controllers\ZoneController;
use App\Models\product;
use App\Models\Promotion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => 'index'], function () {

    Route::get('/', [HomeController::class, 'index'])->name('user');
});

Route::get('/payment', [HomeController::class, 'congratulation']);


Route::get('/ajax/{id}', function($id){

    $data = [
        product::where('product_id',$id)->get()
    ];

    return response()->json($data);




});
Route::group(['prefix' => 'zones'], function () {

    Route::get('/index', [ZoneController::class, 'index']);
    Route::get('/keansburg-amusement-park', [ZoneController::class, 'keansburg_park']);
    Route::get('/runaway-rapids', [ZoneController::class, 'runaway_rapids']);
    Route::get('/go-karts', [ZoneController::class, 'go_karts']);
    Route::get('/detail/{id}', [ZoneController::class, 'details']);
});

Route::group(['prefix' => 'tickets'], function () {
    Route::get('/search', [TicketsController::class, 'search']);
    Route::get('/index', [TicketsController::class, 'index']);
    Route::get('/detail/{id}', [TicketsController::class, 'details']);
});

Route::group(['prefix' => 'food'], function () {
    Route::get('/search', [FoodController::class, 'search']);
    Route::get('/index', [FoodController::class, 'index']);
    Route::get('/index/{id}', [FoodController::class, 'callmodal']);
    Route::get('/detail/{id}', [FoodController::class, 'details']);
});
Route::group(['prefix' => 'cart'], function () {

    Route::get('/', [CartController::class, 'show']);
    Route::post('/add-cart', [CartController::class, 'index']);
    Route::get('/delete/{id}', [CartController::class, 'delete']);
    Route::post('/order', [CartController::class, 'order']);
    Route::post('/update-cart', [CartController::class, 'update']);



});


//contact - blog-  safe
Route::get('/contact', [AboutUsController::class, 'contact']);

Route::get('/news', [AboutUsController::class, 'news']);
Route::get('/news-details/{id}', [AboutUsController::class, 'news_details']);

Route::get('/safety-rules', [AboutUsController::class, 'safety_rules']);

Route::post('/contact-send', [AboutUsController::class, 'contact_send']);
Route::get('/contact-delete/{id}', [AdminController::class, 'contact_delete']);


//payment

Route::post('/vnpay_payment',[VnpayController::class,'index']);

//rangting

Route::post('/rating',[RatingController::class,'index']);

//account

Route::group(['prefix' => 'account'], function () {
    Route::get('/login', [AccountController::class, 'login'])->name('login');
    Route::post('/process-login', [AccountController::class, 'processLogin']);
    Route::get('/register', [AccountController::class, 'register']);
    Route::post('/process-register', [AccountController::class, 'processregister']);
    Route::get('/logout', [AccountController::class, 'logout']);
});

Route::middleware(['auth'])->group(function () {


    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
        ->name('verification.verify')
        ->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

    Route::middleware(['verified'])->group(function () {

        Route::middleware(['role'])->group(function () {

            Route::group(['prefix' => 'admin'], function () {
                // Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
                Route::get('/', [AdminController::class, 'index'])->name('admin')->middleware('auth');

                //account

                Route::get('/add-account', [AdminController::class, 'add_account']);
                Route::get('/delete-account/{id}', [AdminController::class, 'delete_account']);
                Route::get('/list-account', [AdminController::class, 'list_account']);
                Route::get('/update-account/{id}', [AdminController::class, 'update_account']);
                Route::post('/save-edit-account/{id}', [AdminController::class, 'save_update_account']);



                //sản phẩm

                Route::get('/list-product', [AdminController::class, 'list_product']);
                Route::get('/detail-product/{id}', [AdminController::class, 'detail_product']);
                Route::get('/edit-product/{id}', [AdminController::class, 'edit_product']);
                Route::post('/save-edit-product/{id}', [AdminController::class, 'update_product']);



                Route::get('/list-service', [AdminController::class, 'list_service']);
                Route::post('/add-service', [AdminController::class, 'add_service']);
                Route::get('/delete-service/{id}', [AdminController::class, 'delete_service']);
                Route::get('/edit-service/{id}', [AdminController::class, 'edit_service']);
                Route::post('/save-edit-service', [AdminController::class, 'save_edit_service']);


                // menu_categories
                Route::get('/list-menu-cat/{id}', [AdminController::class, 'list_menu_cat']);
                Route::post('/add-menu-cat', [AdminController::class, 'add_menu_cat']);
                Route::get('/delete-menu-cat/{id}', [AdminController::class, 'delete_menu_cat']);


                //show tất cả các loại dvu có trong 1 danh mục
                Route::get('/view-service', [AdminController::class, 'view_service']);
                Route::get('/update-product/{id}', [AdminController::class, 'detail_product']);
                Route::post('/save-update-product/{id}', [AdminController::class, 'update_product']);
                Route::post('/add-product', [AdminController::class, 'add_product']);
                Route::get('/delete-product/{id}', [AdminController::class, 'delete_product']);


                //đơn hàng / carts

                Route::get('/list-order', [AdminController::class, 'list_order']);
                Route::get('/detail-order/{id}', [AdminController::class, 'detail_order']);

                Route::get('/delete-order/{id}', [AdminController::class, 'delete_order']);

                Route::get('/view-order', [AdminController::class, 'view_order']);
                Route::get('/update-order', [AdminController::class, 'detail_order']);
                Route::post('/update-order', [AdminController::class, 'update_order']);

                // tin tức

                Route::get('/list-article', [AdminController::class, 'list_article']);
                Route::get('/add-article-view', [AdminController::class, 'add_article_view']);
                Route::post('/add-article', [AdminController::class, 'add_article']);
                Route::get('/delete-article/{id}', [AdminController::class, 'delete_article']);
                Route::get('/detail-article/{id}', [AdminController::class, 'detail_article']);

                Route::get('/update-article/{id}', [AdminController::class, 'update_article_view']);
                Route::post('/update-article/{id}', [AdminController::class, 'update_article']);

                // poromotion
                Route::get('/list-promotion', [AdminController::class, 'list_promotion']);
                Route::post('/add-promotion', [AdminController::class, 'add_promotion']);
                Route::get('/delete-promotion/{id}', [AdminController::class, 'delete_promotion']);
                Route::get('/detail-promotion/{id}', [AdminController::class, 'detail_promotion']);

                Route::get('/update-promotion/{id}', [AdminController::class, 'update_promotion_view']);
                Route::post('/update-promotion/{id}', [AdminController::class, 'update_promotion']);


                //gallery
                Route::get('/list-gallery', [AdminController::class, 'list_gallery']);
                Route::post('/add-gallery', [AdminController::class, 'add_gallery']);
                Route::get('/delete-gallery/{id}', [AdminController::class, 'delete_gallery']);

                Route::get('/update-gallery', [AdminController::class, 'detail_gallery']);
                Route::post('/update-gallery', [AdminController::class, 'update_gallery']);

               //banner
               Route::get('/list-banner', [AdminController::class, 'list_banner']);
               Route::post('/add-banner', [AdminController::class, 'add_banner']);
               Route::get('/edit-banner/{id}', [AdminController::class, 'update_banner']);
               Route::post('/update-banner/{id}', [AdminController::class, 'save_update_banner']);


               Route::get('/delete-banner/{id}', [AdminController::class, 'delete_banner']);

                //review
                Route::get('/list-review', [AdminController::class, 'list_review']);
                Route::get('/delete-review/{id}', [AdminController::class, 'delete_review']);

                //contact us
                Route::get('/list-contactus', [AdminController::class, 'list_contactus']);
                //gallery
                Route::get('/update-gallery', [AdminController::class, 'detail_gallery']);
                Route::post('/update-gallery', [AdminController::class, 'update_gallery']);

                //email
                Route::get('/inbox', [AdminController::class, 'inbox']);
                Route::get('/composer', [AdminController::class, 'composer']);
            });
        });




    });
});
