<?php

use App\Imovel;
use Illuminate\Http\Request;

##Site##
Route::get('/404', function () {
    $ativo = "";
    return view('errors.404',compact('ativo'));
})->name("404");

Route::get('/', function () {
    $imoveis = Imovel::where('destacar','=','s')->orderBy('created_at', 'desc')->get();
    $ativo = "home";
    return view('site.home',compact('imoveis','ativo'));
})->name("home");

Route::get('/contato', function () {
    $ativo = "contato";
    return view('site.contato',compact('ativo'));
})->name("contato");

Route::get('/seja-prime', function () {
    $ativo = "imovel|pr";
    return view('site.seja-prime',compact('ativo'));
})->name("seja.prime");

Route::get('/empresa', function () {
    $ativo = "empresa";
    return view('site.empresa',compact('ativo'));
})->name("empresa");

Route::get('/propriedade/{id}', function (Request $request, $id) {
    $ativo = "imovel";
    $imovel = Imovel::with(['imagens'])->find($id);
    $imoveis = Imovel::where('destacar','=','s')
                    ->orderBy('created_at', 'desc')
                    ->limit(3)
                    ->get();
    return view('site.propriedade',compact('imovel','imoveis','ativo'));
})->name("propriedade");

Route::get('/locacao-comercial', function () {
    $ativo = "imovel|lc";
    $imoveis = Imovel::where('tipo','=','lc')
                    ->orderBy('created_at', 'desc')
                    ->paginate(9);
    return view('site.locacao-comercial',compact('imoveis','ativo'));
})->name("locacao.comercial");

Route::get('/condominio-fechado', function () {
    $ativo = "imovel|cf";
    $imoveis = Imovel::where('tipo','=','cf')
                    ->orderBy('created_at', 'desc')
                    ->paginate(9);
    return view('site.condominio',compact('imoveis','ativo'));
})->name("condominio.fechado");

Route::get('/venda-comercial', function () {
    $ativo = "imovel|vc";
    $imoveis = Imovel::where('tipo','=','vc')
                    ->orderBy('created_at', 'desc')
                    ->paginate(9);
    return view('site.venda-comercial',compact('imoveis','ativo'));
})->name("venda.comercial");

Route::get('/venda-residencial', function () {
    $ativo = "imovel|vr";
    $imoveis = Imovel::where('tipo','=','vr')
                    ->orderBy('created_at', 'desc')
                    ->paginate(9);
    return view('site.venda-residencial',compact('imoveis','ativo'));
})->name("venda.residencial");

Route::get('/agradecimento', function () {
    $ativo = "";
    return view('site.mensagem-enviada',compact('ativo'));
})->name("agradecimento");

Route::post('/contato', ['as' => 'contato.create', 'uses' => 'ContatoController@contato']);
Route::post('/proposta', ['as' => 'proposta.create', 'uses' => 'ContatoController@proposta']);
Route::post('/seja-prime', ['as' => 'prime.create', 'uses' => 'ContatoController@prime']);

##ADM
Route::group(['prefix'=> 'admin', 'as'=>'admin.', 'middleware' => ['auth']],function(){

    Route::post('/admin/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

    Route::get('/', function () {
        return redirect()->route('admin.imoveis.index');
    });

    Route::get('/imoveis', ['as' => 'imoveis.index', 'uses' => 'ImovelController@index']);
    Route::get('/imoveis/create', ['as' => 'imoveis.create', 'uses' => 'ImovelController@create']);
    Route::post('/imoveis', ['as' => 'imoveis.store', 'uses' => 'ImovelController@store']);
    Route::get('/imoveis/edit/{id}', ['as' => 'imoveis.show', 'uses' => 'ImovelController@show']);
    Route::get('/imoveis/imagens/{id}', ['as' => 'imoveis.imagens.show', 'uses' => 'ImovelController@imagens']);
    Route::delete('/imoveis/imagens/{id}', ['as' => 'imoveis.imagens.delete', 'uses' => 'ImovelController@deletarImagem']);
    Route::put('/imoveis/{id}', ['as' => 'imoveis.update', 'uses' => 'ImovelController@update']);
    Route::delete('/imoveis/{id}', ['as' => 'imoveis.delete', 'uses' => 'ImovelController@delete']);
    Route::get('/ajax', ['as' => 'imoveis.ajax', 'uses' => 'ImovelController@ajax']);
});

//Auth::routes();
Route::post('/admin/login', ['uses' => 'Auth\LoginController@login']);
Route::get('/admin/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);




