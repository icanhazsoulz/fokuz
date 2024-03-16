<?php

namespace App\Listeners;

use App\Events\AppointmentCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentCreated as AppointmentCreatedMail;

class SendAppointmentCreatedEmail implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AppointmentCreated $event): void
    {
        Mail::to($event->appointment->user->email)
            ->send(new AppointmentCreatedMail($event->appointment));
    }
}
