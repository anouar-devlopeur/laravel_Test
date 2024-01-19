<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
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

Route::get('/',[StaticController::class,'index']);
Route::get('/about',[StaticController::class,'about']);
Route::get('/contact',[StaticController::class,'contact']);










// {request}
Route::get('/action/{category?}', function ($category=null) {
if(isset($category)){
    return '<h1>'.$category.'</h1>';
}
return '<h1>Action</h1>';
   
});

// Route::get('/action', function () {
//     $filter=request('style');
//     if(isset($filter)){
//         return 'this page is wiewing <span style="color:red">'.$filter.'</span>';
  
//     }
//     return 'this page is wiewing <span style="color:red">All Products</span>';
//     // return view('action');
// });