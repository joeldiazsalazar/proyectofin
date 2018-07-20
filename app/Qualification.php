<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
   use Notifiable;


    protected $fillable = [
        'trimester_id','nota1','nota2','nota3','nota4','promedio','course_id','user_id','teacher_id','programming_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];

    public function trimester(){

    	return $this->belongsTo(Trimester::class);
    }

     public function course(){
    	
    	return $this->belongsTo(Course::class);
    }

    public function user(){
        
        return $this->belongsTo(User::class);
    }
}
