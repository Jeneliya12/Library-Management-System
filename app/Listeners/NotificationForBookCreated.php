<?php

namespace App\Listeners;

use App\Mail\BookCreated as BookCreatedMail;
use App\Events\BookCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationForBookCreated implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    

    /**
     * Handle the event.
     *
     * @param  BookCreated  $event
     * @return void
     */
    public function handle(BookCreated $event)
    {
        //sleep(10);
        Mail::to($event->book->owner->email)->send(
        new BookCreatedMail($event->book)
        );  
    }
}
