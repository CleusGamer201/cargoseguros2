<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Business;
use App\Models\Back;

class NewUserNotification extends Mailable {

    use Queueable, SerializesModels;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $user;
    public function __construct(User $user) {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->from('info@cargoseguros.com', 'CargoSeguros')
            ->subject('Nuevo Usuario Registrado')
            ->markdown('mails.newuser');
        //return $this->view('view.name');
    }
}
