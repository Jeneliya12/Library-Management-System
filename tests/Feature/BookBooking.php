<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookBooking extends TestCase
{ 
     public function a_book_can_be_added_to_the_library() 
    {
        $this->withoutExceptionHandling();
   
        $attributes= $this->post('/books', [

        'title'=>'Book Title',
        'author'=>'Jenny',
        ]);
    
    $response->assertOk();
    $this->assertCount(1, Book::all());
    } 
}
