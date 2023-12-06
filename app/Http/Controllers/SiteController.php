<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imovel;

class SiteController extends Controller
{
    
    public function index(){
        $imoveis = Imovel::where('destacar','=','s')->orderBy('created_at', 'desc')->get();
        $ativo = "home";
        return view('site.home',compact('imoveis','ativo'));
    }

    public function contato(){
        $ativo = "contato";
        return view('site.contato',compact('ativo'));
    }

    public function sejaPrime(){
        $ativo = "imovel|pr";
        return view('site.seja-prime',compact('ativo'));
    }

    public function empresa(){
        $ativo = "empresa";
        return view('site.empresa',compact('ativo'));
    }

    public function propriedade(Request $request, $id, $slug){
        $ativo = "imovel";
        $imovel = Imovel::where('id','=',$id)->where('slug','=',$slug)->with(['imagens'])->first();
        $tipo = $imovel->tipo;
        $imoveis = Imovel::where('tipo','=',$tipo)
                        ->orderBy('created_at', 'desc')
                        ->limit(3)
                        ->get();
        return view('site.propriedade',compact('imovel','imoveis','ativo'));
    }

    public function locacao(){
        $ativo = "imovel|lc";
        $imoveis = Imovel::where('tipo','=','lc')
                        ->orderBy('created_at', 'desc')
                        ->paginate(9);
        return view('site.locacao-comercial',compact('imoveis','ativo'));
    }

    public function condominio(){
        $ativo = "imovel|cf";
        $imoveis = Imovel::where('tipo','=','cf')
                        ->orderBy('created_at', 'desc')
                        ->paginate(9);
        return view('site.condominio',compact('imoveis','ativo'));
    }

    public function lancamentos(){
        $ativo = "imovel|lm";
        $imoveis = Imovel::where('tipo','=','lm')
                        ->orderBy('created_at', 'desc')
                        ->paginate(9);
        return view('site.lancamentos',compact('imoveis','ativo'));
    }

    public function vendaComercial(){
        $ativo = "imovel|vc";
        $imoveis = Imovel::where('tipo','=','vc')
                        ->orderBy('created_at', 'desc')
                        ->paginate(9);
        return view('site.venda-comercial',compact('imoveis','ativo'));
    }

    public function vendaResidencial(){
        $ativo = "imovel|vr";
        $imoveis = Imovel::where('tipo','=','vr')
                        ->orderBy('created_at', 'desc')
                        ->paginate(9);
        return view('site.venda-residencial',compact('imoveis','ativo'));
    }

    public function agradecimento(){
        $ativo = "";
        return view('site.mensagem-enviada',compact('ativo'));
    }

    public function error(){
        $ativo = "";
        return view('errors.404',compact('ativo'));
    }

    public function politica(){
        $ativo = "";
        return view('site.politica-privacidade',compact('ativo'));
    }
}
