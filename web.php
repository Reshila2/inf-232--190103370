<?php

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

// That view should contain your first name, last name. 
Route::get('user/{name}/{last}', function ($name,$last) {
    return $name." ".$last;
})->where(['name'=>'[a-zA-Z]+','last'=>'[a-zA-Z]+']);
// Route::get('/post/{id}','PostsController@index');
// Route::resource('/post2','PostsController');
// // Route::get('/username/{name}/{age}',function($name,$age){
// //     return view('user',compact('name','age'));
// // });
// Route::get('/user/{number1}/{sign}/{number2}','calculator@operation');


// Route::get('/stu/{id}',function($id){
//     return view('student_information');
// });