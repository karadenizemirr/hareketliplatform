<?php

namespace App\Mail;

use App\Models\RequestEducation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EducationRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @var array;
     * @return void
     */
    public $requestEducation;
    public function __construct(RequestEducation $requestEducation)
    {
        $this->$requestEducation = $requestEducation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject(config('app.name', '- Eğitim Başvurusu'))
            ->view('email.html.education-request');
    }
}
