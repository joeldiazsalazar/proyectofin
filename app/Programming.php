<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Programming extends Model
{
    
	use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha','nivel','grado','turno','estado','classroom_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];





    public function classroom(){

        return $this->belongsTo(Classroom::class);

    }
    
       public function enrollment(){
        
        return $this->hasMany(Enrollment::class);
    }

     public function detail(){
        
        return $this->hasMany(Detail::class);
    }



}
