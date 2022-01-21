<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;
use App\ImovelImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImovelController extends Controller
{
    public function index(){
        return view('adm.imoveis');
    }

    public function home(){
        return redirect()->route('admin.imoveis.index');
    }

    public function create(){
        return view('adm.imovel-create');
    }
    
    public function store(Request $request){
        $request->validate([
            'titulo' => 'bail|required',
            'endereco' => 'bail|required',
            'ref' => 'bail|required|unique:imoveis|numeric',
            'area' => 'bail|required',
            'bwc' => 'bail|required|numeric',
            'dormitorio' => 'bail|required|numeric',
            'vaga' => 'bail|required|numeric',
            'valor' => 'bail|required',
            'tipo' => 'bail|required',
            'foto_principal' => 'bail|required|mimes:bmp,gif,jpeg,jpg,png',
            'foto_slide' => 'bail|required',
            'foto_galeria' => 'bail|required',
            'foto_slide.*' => 'bail|mimes:bmp,gif,jpeg,jpg,png',
            'foto_galeria.*' => 'bail|mimes:bmp,gif,jpeg,jpg,png',
            'descricao' => 'bail|required'
        ]);


        $imovel = new Imovel();
        $imovel->titulo = $request->input('titulo');
        $imovel->endereco = $request->input('endereco');
        $imovel->ref = $request->input('ref');
        $imovel->area = formataMoedaBd($request->input('area'));
        $imovel->bwc = $request->input('bwc') ;
        $imovel->dormitorios = $request->input('dormitorio');
        $imovel->vagas = $request->input('vaga') ?? 0;
        $imovel->valor = formataMoedaBd($request->input('valor')) ?? 0;
        $imovel->tipo = $request->input('tipo');
        $imovel->descricao = $request->input('descricao');
        $imovel->destacar = $request->input('destacar') ?? 'n';
        
        $foto_principal = 'foto_principal'.rand(1, 9999).time().'.'.$request->foto_principal->extension();
        $pasta = 'imoveis/'.$imovel->ref;
        $upload = $request->foto_principal->storeAs($pasta, $foto_principal);

        if(!$upload){
            return back()->withErrors(['Erro ao fazer upload do arquivo'])->withInput();
        }
        $imovel->nome_imagem =  $upload;

        DB::beginTransaction();

        $imovel->save();

        foreach($request->allFiles()['foto_slide'] as $fotoSlide){
            $imovelImage = new ImovelImage();
            $imovelImage->imovel_id = $imovel->id;
            
            $imovelImage->tipo = 's';

            $foto_slide = 'foto_slide'.rand(1, 9999).time().'.'.$fotoSlide->extension();
            $pasta = 'imoveis/'.$imovel->ref;
            $upload = $fotoSlide->storeAs($pasta, $foto_slide);
            if($upload){
                $imovelImage->nome_imagem = $upload;
                $imovelImage->save();
            } 
        }

        foreach($request->allFiles()['foto_galeria'] as $fotoGaleria){
            $imovelImage = new ImovelImage();
            $imovelImage->imovel_id = $imovel->id;
            
            $imovelImage->tipo = 'g';

            $foto_galeria = 'foto_galeria'.rand(1, 9999).time().'.'.$fotoGaleria->extension();
            $pasta = 'imoveis/'.$imovel->ref;
            $upload = $fotoGaleria->storeAs($pasta, $foto_galeria);
            if($upload){
                $imovelImage->nome_imagem = $upload;
                $imovelImage->save();
            } 
        }
        
        DB::Commit();

        return redirect()
                ->route('admin.imoveis.index')
                ->with('sucesso',"Imóvel cadastrado com sucesso!");
    }

    public function ajax(Request $request){
        $imoveis = Imovel::orderBy('created_at', 'desc')->get();
        $dadosFormatados['data'] = $imoveis;

        return response()->json($dadosFormatados);
    }

    public function show(Request $request, $id){
        $imovel = Imovel::find($id);
        return view('adm.imovel-edit',compact('imovel'));
    }

    public function imagens(Request $request, $id){
        $imovel = Imovel::with(['imagens'])->find($id);
        return view('adm.imovel-imagens',compact('imovel'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'titulo' => 'bail|required',
            'endereco' => 'bail|required',
            'area' => 'bail|required',
            'bwc' => 'bail|required|numeric',
            'dormitorio' => 'bail|required|numeric',
            'vaga' => 'bail|required|numeric',
            'valor' => 'bail|required',
            'tipo' => 'bail|required',
            'descricao' => 'bail|required',
            'foto_principal' => 'bail|mimes:bmp,gif,jpeg,jpg,png',
            'foto_slide.*' => 'bail|mimes:bmp,gif,jpeg,jpg,png',
            'foto_galeria.*' => 'bail|mimes:bmp,gif,jpeg,jpg,png',
        ]);
        
        $imovel = Imovel::find($id);

        $imovel->titulo = $request->input('titulo');
        $imovel->endereco = $request->input('endereco') ;
        $imovel->area = formataMoedaBd($request->input('area'));
        $imovel->bwc = $request->input('bwc') ;
        $imovel->dormitorios = $request->input('dormitorio');
        $imovel->vagas = $request->input('vaga') ?? 0;
        $imovel->valor = formataMoedaBd($request->input('valor')) ?? 0.00;
        $imovel->tipo = $request->input('tipo');
        $imovel->descricao = $request->input('descricao');
        $imovel->destacar = $request->input('destacar') ?? 'n';

        if($request->hasFile('foto_principal')){
            $foto_principal = 'foto_principal'.rand(1, 9999).time().'.'.$request->foto_principal->extension();
            $pasta = 'imoveis/'.$imovel->ref;
            $upload = $request->foto_principal->storeAs($pasta, $foto_principal);

            if(!$upload){
                return back()->withErrors(['Erro ao fazer upload do arquivo'])->withInput();
            }
            if(Storage::disk('public')->exists("/".$imovel->nome_imagem)){
                Storage::disk('public')->delete("/".$imovel->nome_imagem);
            }
            
            $imovel->nome_imagem =  $upload;
        }
        $imovel->update();

        if($request->hasFile('foto_slide')){
            foreach($request->allFiles()['foto_slide'] as $fotoSlide){
                $imovelImage = new ImovelImage();
                $imovelImage->imovel_id = $imovel->id;
                
                $imovelImage->tipo = 's';
    
                $foto_slide = 'foto_slide'.rand(1, 9999).time().'.'.$fotoSlide->extension();
                $pasta = 'imoveis/'.$imovel->ref;
                $upload = $fotoSlide->storeAs($pasta, $foto_slide);
                if($upload){
                    $imovelImage->nome_imagem = $upload;
                    $imovelImage->save();
                } 
            }
        }

        if($request->hasFile('foto_galeria')){
            foreach($request->allFiles()['foto_galeria'] as $fotoGaleria){
                $imovelImage = new ImovelImage();
                $imovelImage->imovel_id = $imovel->id;
                
                $imovelImage->tipo = 'g';
    
                $foto_galeria = 'foto_galeria'.rand(1, 9999).time().'.'.$fotoGaleria->extension();
                $pasta = 'imoveis/'.$imovel->ref;
                $upload = $fotoGaleria->storeAs($pasta, $foto_galeria);
                if($upload){
                    $imovelImage->nome_imagem = $upload;
                    $imovelImage->save();
                } 
            }
        }
        
        return redirect()
                ->route('admin.imoveis.index')
                ->with('sucesso',"Imóvel alterado com sucesso!");
        
    }

    public function delete(Request $request, $id){
        $imovel = Imovel::find($id);
        $imovel->delete();

        Storage::disk('public')->deleteDirectory("/imoveis/". $imovel->ref);

        return response()->json([
            'success' => 'Imóvel deletado com sucesso! '.$imovel->titulo
        ]);
    }

    public function deletarImagem(Request $request, $id){
        $imovelImagem = ImovelImage::find($id);

        if(Storage::disk('public')->exists("/".$imovelImagem->nome_imagem)){
            Storage::disk('public')->delete("/".$imovelImagem->nome_imagem);
        }
        
        $imovelImagem->delete();

        return response()->json([
            'success' => 'Imagem deletado com sucesso! '.$imovelImagem->id
        ]);
    }
}
