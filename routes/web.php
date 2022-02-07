<?php

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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get ('/', function (){
    return view('breez.index');
});

Route::get ('/proyectos', function (){
    return view('breez.proyectos_main');
});

Route::get ('/polo', function (){
    return view('breez.sections.polo');
});

Route::get ('/lago', function (){
    return view('breez.sections.lago');
});

Route::get ('/boulevard', function (){
    return view('breez.sections.boulevard');
});

Route::get ('itemlink',function(){
    return view('breez.proyectos_item');
});

Route::get ('/actividades', function (){
    return view('breez.actividades');
});

Route::get('/nosotros', function(){
    return view('breez.nosotros');
});

Route::get ('/actividades/bar', function (){
    return view('breez.bar');
});
Route::get ('/actividades/nautica', function (){
    return view('breez.nautica');
});
Route::get ('/actividades/ecuestre', function (){
    return view('breez.ecuestre');
});
Route::get ('/actividades/corredor', function (){
    return view('breez.corredor');
});

Route::get ('/contacto', function (){
    return view('breez.contacto');
});



Route::get ('/about', function (){
    return view('hw.about');
});

Route::get ('/grid', function (){
    return view('hw.grid');
});
