<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MheApproveMail extends Mailable
{
    use Queueable, SerializesModels;

    public $ucode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ucode)
    {
        $this->ucode = $ucode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Selamat! Pendaftaran Berhasil!')->markdown('emails.mhe_approve');
    }
}
