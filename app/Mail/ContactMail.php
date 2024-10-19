<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    public $name;
    public $email;
    public $body;
    public $subject;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $subject, $body)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,

        );
    }
    public function content()
    {
        return new Content(
            view: 'email.contact_us',
        );
    }

    /**
     * Get the message content definition.
     */
//    public function build()
//    {
//        return $this->subject($this->subject)
//            ->from($this->email)  // Optional: Set the sender as the form's email
//            ->replyTo($this->email)
//            ->text('email.contact_us', [
//                'name' => $this->name,
//                'email' => $this->email,
//                'body' => $this->body
//            ]);
//    }

    public function attachments(): array
    {
        return [];
    }
    
}
