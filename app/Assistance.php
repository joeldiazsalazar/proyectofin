<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
     use Notifiable;
    

    protected $fillable = [
        'programming_id', 'course_id', 'user_id','teacher_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];


    public function detail(){

        return $this->belongsTo(Detail::class);

    }

    public function course(){

        return $this->belongsTo(Course::class);

    }


public function user(){

        return $this->belongsTo(User::class);

    }



public function teacher(){

        return $this->belongsTo(Teacher::class);

    }


}
