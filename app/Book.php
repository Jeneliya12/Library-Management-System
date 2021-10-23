<?php

namespace App;

use App\Events\BookCreated;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /*protected $fillable= [       
    'title', 'description' 
   ];*/ //allows these two keys to pass
 	protected $guarded= []; //this will allow the things to pass other than the keys inside guarded array.


 	protected $dispatchesEvents= [
	'created'=> BookCreated::class
 	];
 	
 	public function owner(){
 		return $this->belongsTo(User::class);
 	}
 	public function tasks()
 	{
 		return $this->hasMany(Task::class);
 	}
 	/*
 	public function validateProject()
 	{
 		return $this->hasMany(Task::class);
 	}*/
 	public function addTask($task)
 	{
 		$this->tasks()->create($task);
 		/*return Task::create([
		'project_id'=> $this->id,
		'description'=>$description
		]);
		*/
		//$this->tasks()->create(compact('description'));
 	}
 	
}
