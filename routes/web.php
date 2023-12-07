<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\DemoControllers;

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

Route::get("/",function(){
    return view("welcome");
});


Route::get("/home",[DemoController::class,'index']);


Route::get('/layout1',function(){
    return view('layout1');
}
);
Route::get('/layout2',function(){
    return view('layout2');
}
);
Route::get('/demo',function(){
    return view('demo');
}
);