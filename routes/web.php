<?php

Route::resource('/home/discentes', 'Painel\Discente\DiscenteController' );
Route::resource('/home/empresas', 'Painel\Empresa\EmpresaController' );

Route::get('painel/admin', function(){
    return view('painel.admin.index');
});

Route::get('/', function () {
    //return view('site.home.index');
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('/home/discente', 'Painel\Discente\DiscenteController@index');
//Route::get('/home/discente/cadastro', 'Painel\Discente\DiscenteController@create');
