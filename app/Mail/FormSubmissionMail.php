<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormSubmissionMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(public $data, public $images, public $signature)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->data['email'], "{$this->data['first_name']} {$this->data['last_name']}"),
            to: [new Address(config('mail.from.address'), config('mail.from.name'))],
            replyTo: [
                new Address($this->data['email'], "{$this->data['first_name']} {$this->data['last_name']}")
            ],
            subject: 'Form Submission'
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.form-submission',
        );
    }

    public function attachments(): array
    {
        $attachments = [];

        foreach ($this->images as $name => $image) {
            $extension = File::extension(storage_path($image));
            $mime = Storage::mimeType($image);

            $attachments[] = Attachment::fromStorage($image)
                ->as("{$name}.{$extension}")
                ->withMime($mime);
        }

        $attachments[] = Attachment::fromData(fn() => $this->signature, 'signature.png')
            ->withMime('image/png');

        return $attachments;
    }
}
