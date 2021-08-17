<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Business;
use App\Models\Back;

class NewBackNotification extends Mailable {

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $back;
    public $user;
    public $business;
    public $pdfBase64;

    public function __construct(Back $back, $pdfBase64) {
        $this->back = $back;
        $this->user = $back->findUser();
        $this->business = $back->findBusiness();
        $this->pdfBase64 = $pdfBase64;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->from('info@cargoseguros.com', 'CargoSeguros')
            ->subject('Confirmación de Respaldo')
            ->attachData($this->pdfBase64, 'respaldo.pdf', ['mime' => 'application/pdf'])
            ->markdown('mails.exmpl');
        //return $this->view('view.name');
    }
}
