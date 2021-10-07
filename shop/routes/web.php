<?php

use App\Http\Controllers\SlideController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('khachhang')->group(function () {
    // Hiển thị danh sách
    Route::get('/', 'CustomerController@getView');

    //Hiển thị giao diện thêm
    Route::get('/them', 'CustomerController@getCreate');
    //Xử lý thêm

    Route::post('/save-customer', 'CustomerController@save');

    //Hiển thị giao diện sửa
    Route::get('/sua/{id}', 'CustomerController@getEdit'); 

    //Xử lý sửa
    Route::post('/edit-customer/{id}', 'CustomerController@Edit');

    //Xử lý xóa
    Route::get('/xoa/{id}', 'CustomerController@delete');
    
    
});
 

// Bills

Route::prefix('hoadon')->group(function (){

    Route::get('/xoa/{id}', 'BillsController@delete');

    Route::post('/edit-bills/{id}', 'BillsController@edit');

    Route::get('/', 'BillsController@getView');

    Route::get('/them', 'BillsController@getCreate');

    Route::get('/sua/{id}', 'BillsController@getEdit');

    Route::post('/save-bills', 'BillsController@save');

    //tao them cot san pham trong bills
    Route::get('/themcot', 'BillsController@renderColumnProduct');

    //Lay gia san pham khi chon
    Route::get('/laygia', 'BillsController@getProductPrice');

});

//News


Route::prefix('moi')->group(function (){

    // hiển thị danh sách

    Route::get('/', 'NewsController@getView');
    
    // hiển thị giao diện thêm 

    Route::get('/them', 'NewsController@getCreate');

    // xử lý thêm

    Route::post('/save-news', 'NewsController@save');

    // hiển thị giao diện edit

    Route::get('/sua/{id}', 'NewsController@getEdit');

    // xử lý edit

    Route::post('/edit-news/{id}', 'NewsController@edit');

    // xử lý xóa

    Route::get('/xoa/{id}', 'NewsController@delete');
});



Route::prefix('sanpham')->group(function(){

    //hiển thị danh sách

    Route::get('/', 'ProductsController@getView');

    // hiển thị giao diện thêm 

    Route::get('/them', 'ProductsController@getCreate');

    // xử lý thêm

    Route::post('/save-products', 'ProductsController@save');

    // hiển thị giao diện Edit

    Route::get('/sua/{id}', 'ProductsController@getEdit');

    // xử lý edit

    Route::post('/edit-products/{id}', 'ProductsController@edit');


    // xử lý xóa

    Route::get('/xoa/{id}', 'ProductsController@delete');


});

Route::prefix('slide')->group(function(){


    // hiển thị danh sách
    Route::get('/', 'SlideController@getview');

    // hiển thị giao diện thêm

    Route::get('/them', 'SlideController@getCreate');

    // xử lý thêm

    Route::post('/save-slide', 'SlideController@save');

    // hiển thị edit

    Route::get('/sua/{id}', 'SlideController@getedit');

    // xử lý edit

    Route::post('/edit-slide/{id}', 'SlideController@update');

    Route::get('/xoa/{id}', 'SlideController@delete');

});

Route::prefix('quantri')->group(function(){

    Route::get('/', 'AdminController@getview');



 });