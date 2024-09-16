<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Semnas extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $semnasId;

    /**
     * Create a new message instance.
     * @param $user
     * @param $semnasId
     */

    public function __construct($user, $semnasId)
    {
        $this->user = $user;
        $this->semnasId = $semnasId;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Terima kasih telah mendaftar Seminar Nasional 2024',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.semnas',
            with: [
                'fullname' => $this->user->fullname,
                'semnasId' => $this->semnasId,
            ],
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
