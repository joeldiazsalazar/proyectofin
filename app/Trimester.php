<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;



class Trimester extends Model
{
    use Notifiable;
    

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


    public function qualification(){
        
        return $this->hasMany(Qualification::class);
    }

    public function payment(){
        
        return $this->hasMany(Payment::class);
    }
}
