<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviarEmailProposta extends Mailable
{
    use Queueable, SerializesModels;

    public $remetente;
    public $destinatario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($remetente,$destinatario)
    {
        $this->remetente = $remetente;
        $this->destinatario = $destinatario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.proposta')
                    ->subject($this->destinatario->assunto)
                    ->from($this->remetente->username);
    }
}
