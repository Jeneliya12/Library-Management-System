<?php

namespace App\Http\Controllers;

use App\Task;
use App\Book;

use Illuminate\Http\Request;

class BookTasksController extends Controller
{
    public function store(Book $book)
    {
        //$attributes= request()->validate(['description'=>'required']);
        //$project->addTask($attributes);
        //$project->addTask(request('description'));
        $book->addTask(request()->validate(['description'=>'required']));
        return back();
    }
    public function update(Task $task)
    {
        $task->complete(request()->has('completed'));
        /*$task->update([
            'completed'=> request()->has('completed')
        ]);*/
        return back();
    }
}
