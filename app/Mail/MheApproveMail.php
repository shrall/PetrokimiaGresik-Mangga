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
    public $is_online;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ucode, $is_online)
    {
        $this->ucode = $ucode;
        $this->is_online = $is_online;
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
