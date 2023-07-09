<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Schema;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [PageController::class, 'getIndex']);
//  Route::get('/ac', [App\Http\Controllers\PageController::class, 'loai_sanpham']);
Route::get('/detail/{id}', [PageController::class, 'getDetail']);

Route::get('database',function(){
    Schema::create('loaisanpham',function($table){
        $table->increments('id');
        $table->string('ten',200);
    });
    echo"Đã thực hiện lệnh tạo bảng thành công";
});
Route::get('/contact', [PageController::class, 'getContact']);
Route::get('/about', [PageController::class, 'getAbout']);
Route::get('/type/{id}', [PageController::class, 'getLoaiSp']);
Route::get('/admin', [PageController::class, 'getIndexAdmin']);											
Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);	
Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);
Route::post('admin-edit-form/{id}', [PageController::class, 'postAdminEdit']);	
Route::post('admin-delete/{id}', [PageController::class, 'postAdminDelete']);	
Route::get('/admin-export', [PageController::class, 'exportAdminProduct'])->name('export');													

Route::get('/add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');														
Route::get('/del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');														


// Register
Route::get('/register', function () {					
	return view('users.register');					
});	
    
Route::post('/register', [UserController::class, 'Register']);	

Route::get('/login', function () {						
    return view('users.login');						
});

Route::post('/login', [UserController::class, 'Login']);
Route::get('/logout', [UserController::class, 'Logout']);	

Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');												
Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');												

Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');												

Route::get('check-out', [PageController::class, 'getCheckout'])->name('dathang');				
Route::post('check-out', [PageController::class, 'postCheckout'])->name('dathang');				

// Route::post('/add-rating', [App\Http\Controllers\RatingController::class, 'addRating']);


Route::post('/add-rating', [RatingController::class,'store'])->name('add-rating');
Route::get('/products/{id}', [PageController::class, 'getDetail'])->name('products.show');