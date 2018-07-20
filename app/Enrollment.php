<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use Notifiable;
    

    protected $fillable = [
        'student_id', 'user_id', 'monto','estado','programming_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];

    public function user(){

        return $this->belongsTo(User::class);

    }

     public function student(){

        return $this->belongsTo(Student::class);

    }

         public function programming(){

        return $this->belongsTo(Programming::class);

    }


    public function qualification(){
        
        return $this->hasMany(Qualification::class);
    }

    public function payment(){
        
        return $this->hasMany(Payment::class);
    }


}
