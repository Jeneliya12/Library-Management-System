<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BookCreated
{
    use Dispatchable, SerializesModels;
    public $book;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($book)
    {
        $this->book= $book;
    }

}
