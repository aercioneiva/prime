<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EnviarEmailContato;
use App\Mail\EnviarEmailProposta;
use App\Mail\EnviarEmailPrime;
use App\Rules\GoogleRecaptcha;


class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $this->validate(
            $request,
            [
            'nome' => 'bail|required',
            'telefone' => 'bail|required',
            'email' => 'bail|required|email',
            'assunto' => 'bail|required',
            'grecaptcha' => ['required', new GoogleRecaptcha()]
        ],
        ["grecaptcha.required" => "O campo recaptcha é obrigatório."]
        );
        

        $remetente = new \stdClass;
        $remetente->username = env('MAIL_USERNAME');
        $remetente->assunto = $request->input('assunto');
        $remetente->mensagem = $request->input('mensagem');
        $remetente->email = $request->input('email');
        $remetente->telefone = $request->input('telefone');
        $remetente->nome = $request->input('nome');
        
        $destinatario = new \stdClass;
        $destinatario->email = env('MAIL_DESTINATARIO');
        $destinatario->nome = env('MAIL_DESTINATARIO_NOME');
        $destinatario->assunto = env('MAIL_DESTINATARIO_ASSUNTO');

        \Mail::to($destinatario->email)
        ->send(new EnviarEmailContato($remetente,$destinatario));

        return redirect()
                ->route('agradecimento');
    }

    public function proposta(Request $request)
    {
        $request->validate([
            'nome' => 'bail|required',
            'telefone' => 'bail|required',
            'email' => 'bail|required|email'
        ]);
        

        $remetente = new \stdClass;
        $remetente->username = env('MAIL_USERNAME');
        $remetente->mensagem = $request->input('mensagem');
        $remetente->email = $request->input('email');
        $remetente->telefone = $request->input('telefone');
        $remetente->nome = $request->input('nome');
        $remetente->ref = $request->input('ref');

        
        $destinatario = new \stdClass;
        $destinatario->email = env('MAIL_DESTINATARIO');
        $destinatario->nome = env('MAIL_DESTINATARIO_NOME');
        $destinatario->assunto = env('MAIL_DESTINATARIO_ASSUNTO');

        \Mail::to($destinatario->email)
        ->send(new EnviarEmailProposta($remetente,$destinatario));

        return redirect()
                ->route('agradecimento');
    }

    public function prime(Request $request)
    {
        $request->validate([
            'nome' => 'bail|required',
            'telefone' => 'bail|required',
            'email' => 'bail|required|email'
        ]);
        

        $remetente = new \stdClass;
        $remetente->username = env('MAIL_USERNAME');
        $remetente->mensagem = $request->input('mensagem');
        $remetente->email = $request->input('email');
        $remetente->telefone = $request->input('telefone');
        $remetente->nome = $request->input('nome');
        

        
        $destinatario = new \stdClass;
        $destinatario->email = env('MAIL_DESTINATARIO');
        $destinatario->nome = env('MAIL_DESTINATARIO_NOME');
        $destinatario->assunto = env('MAIL_DESTINATARIO_ASSUNTO');

        \Mail::to($destinatario->email)
        ->send(new EnviarEmailPrime($remetente,$destinatario));

        return redirect()
                ->route('agradecimento');
    }
}
