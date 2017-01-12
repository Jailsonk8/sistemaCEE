<?php

Route::get('painel/admin', function(){
    return view('painel.admin.index');
});

Route::get('/', function () {
    //return view('site.home.index');
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
