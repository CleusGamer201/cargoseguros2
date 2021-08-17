<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Notification;
use App\Models\Back;

class NewPdfNotification extends Notification {
    
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $back;
    public function __construct(Back $back) {
        $this->back = $back;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable) {
        return ['database'];
    }

    public function toArray($notifiable) {
        $user = $this->back->findUser();
        $business = $this->back->findBusiness();
        return [
            'id' => $this->back->id,
            'user' => $this->back->user,
            'userName' => $user->name,
            'userLastName' => $user->lastname,
            'business' => $this->back->business,
            'consecutive' => $this->back->consecutive,
            'backcode' => $this->back->backcode,
            'transport' => $this->back->transport,
            'driver' => $this->back->driver,
            'vehicle_plate' => $this->back->vehicle_plate,
            'exit_departament' => $this->back->exit_departament,
            'exit_municipality' => $this->back->exit_municipality,
            'exit_address' => $this->back->exit_address,
            'exit_date' => $this->back->exit_date,
            'arrival_departament' => $this->back->arrival_departament,
            'arrival_municipality' => $this->back->arrival_municipality,
            'arrival_address' => $this->back->arrival_address,
            'arrival_date' => $this->back->arrival_date,
            'user_generator' => $this->back->user_generator,
            'user_identity' => $this->back->user_identity,
            'user_phone' => $this->back->user_phone,
            'commodity' => $this->back->commodity,
            'packing' => $this->back->packing,
            'freigh' => $this->back->freigh,
            'price' => $this->back->price,
            'percentage' => $this->back->percentage,
            'total' => $this->back->total,
            'approved' => $this->back->approved,
            'delete_requested' => $this->back->delete_requested,
            'created_at' => $this->back->created_at,
        ];
    }
}
