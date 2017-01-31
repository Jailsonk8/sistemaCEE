<?php

Route::resource('/home/discentes', 'Painel\Discente\DiscenteController' );
Route::resource('/home/empresas', 'Painel\Empresa\EmpresaController' );
Route::resource('/home/admin', 'Painel\Admin\AdminController' );


Route::get('/', function () {
    //return view('site.home.index');   
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/debug', 'HomeController@rolesPermissions');

//Route::get('/home/discente', 'Painel\Discente\DiscenteController@index');
//Route::get('/home/discente/cadastro', 'Painel\Discente\DiscenteController@create');
