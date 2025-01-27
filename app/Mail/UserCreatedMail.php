<?php

namespace App\Mail;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use LaravelLang\Publisher\Console\Add;

class UserCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;

    public function __construct($usuario)
    {
        $this->usuario = $usuario;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            new Address('Moon_Read@gmail.com', 'Christian Torres'),
            subject: 'Solicitud Cambiar Contraseña',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.recuperarClaveUsuario',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
