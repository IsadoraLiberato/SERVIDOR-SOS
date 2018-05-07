<?php

use Illuminate\Http\Request;
//insere
Route::resource('oficinas','OficinaController');
//retorna
Route::resource('oficina','OficinaController');
//retorna o id por nome
Route::resource('oficinaid','OficinaController@getIdOficina');
//insere
Route::resource('clientes','ClienteController');
//retorna
Route::resource('cliente','ClienteController');
//insere
Route::resource('registros','RegistroController');
//retorna
Route::resource('registro','RegistroController');


