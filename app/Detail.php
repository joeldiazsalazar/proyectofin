<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
       use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'programming_id','teacher_id','course_id','hour_start','hour_end','day'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];


     public function programming(){

     return $this->belongsTo(Programming::class);

    }

     public function teacher(){

     return $this->belongsTo(Teacher::class);

    }


 	public function course(){

     return $this->belongsTo(Course::class);

    }

     public function assistance(){
        
        return $this->hasMany(Assistance::class);
    }

}
