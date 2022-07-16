<?php

##Site##
Route::get('/404', ['as' => '404', 'uses' => 'SiteController@error']);
Route::get('/', ['as' => 'home', 'uses' => 'SiteController@index']);
Route::get('/contato', ['as' => 'contato', 'uses' => 'SiteController@contato']);
Route::get('/seja-prime', ['as' => 'seja.prime', 'uses' => 'SiteController@sejaPrime']);
Route::get('/empresa', ['as' => 'empresa', 'uses' => 'SiteController@empresa']);
Route::get('/propriedade/{id}/{slug}', ['as' => 'propriedade', 'uses' => 'SiteController@propriedade']);
Route::get('/locacao-comercial', ['as' => 'locacao.comercial', 'uses' => 'SiteController@locacao']);
Route::get('/condominio-fechado', ['as' => 'condominio.fechado', 'uses' => 'SiteController@condominio']);
Route::get('/lancamentos', ['as' => 'lancamentos', 'uses' => 'SiteController@lancamentos']);
Route::get('/venda-comercial', ['as' => 'venda.comercial', 'uses' => 'SiteController@vendaComercial']);
Route::get('/venda-residencial', ['as' => 'venda.residencial', 'uses' => 'SiteController@vendaResidencial']);
Route::get('/agradecimento', ['as' => 'agradecimento', 'uses' => 'SiteController@agradecimento']);
Route::post('/contato', ['as' => 'contato.create', 'uses' => 'ContatoController@contato']);
Route::post('/proposta', ['as' => 'proposta.create', 'uses' => 'ContatoController@proposta']);
Route::post('/seja-prime', ['as' => 'prime.create', 'uses' => 'ContatoController@prime']);

##ADM
Route::group(['prefix'=> 'admin', 'as'=>'admin.', 'middleware' => ['auth']],function(){

    Route::post('/admin/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

    Route::get('/', ['as' => '', 'uses' => 'ImovelController@home']);

    Route::get('/imoveis', ['as' => 'imoveis.index', 'uses' => 'ImovelController@index']);
    Route::get('/imoveis/create', ['as' => 'imoveis.create', 'uses' => 'ImovelController@create']);
    Route::post('/imoveis', ['as' => 'imoveis.store', 'uses' => 'ImovelController@store']);
    Route::get('/imoveis/slug', ['as' => 'imoveis.slug', 'uses' => 'ImovelController@generateSlug']);
    Route::get('/imoveis/edit/{id}', ['as' => 'imoveis.show', 'uses' => 'ImovelController@show']);
    Route::get('/imoveis/imagens/{id}', ['as' => 'imoveis.imagens.show', 'uses' => 'ImovelController@imagens']);
    Route::delete('/imoveis/imagens/{id}', ['as' => 'imoveis.imagens.delete', 'uses' => 'ImovelController@deletarImagem']);
    Route::put('/imoveis/{id}', ['as' => 'imoveis.update', 'uses' => 'ImovelController@update']);
    Route::delete('/imoveis/{id}', ['as' => 'imoveis.delete', 'uses' => 'ImovelController@delete']);
    Route::get('/ajax', ['as' => 'imoveis.ajax', 'uses' => 'ImovelController@ajax']);
    Route::get('/imoveis/gerarSlug', ['as' => 'imoveis.slugGeral', 'uses' => 'ImovelController@generateSlugGeral']);
});

//Auth::routes();
Route::post('/admin/login', ['uses' => 'Auth\LoginController@login']);
Route::get('/admin/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);




