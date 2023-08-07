<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about',function () {
    return view('about');
});

Route::get('/store/{category?}/{item?}',function($category,$item){
    return '<h1>'.$item.'';
});

// Route::get('/store', function (){
//     $filter = request('categorie');
//     if(isset($filter)){

//     return '<p> this page is viewing <span style="color:red;"> '.strip_tags($filter).' </span></p> ';
//     }
//     else 
//     return '<p> this page is viewing <span style="color:red;"> All product </span></p> ';

// });