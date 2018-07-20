<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
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
        
        return $this->hasMany(Detail::class);
    }


    public function qualification(){
        
        return $this->hasMany(Qualification::class);
    }

    public function assistance(){
        
        return $this->hasMany(Assistance::class);
    }
    
}
