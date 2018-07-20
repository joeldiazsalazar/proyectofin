<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	use Notifiable;
    

    protected $fillable = [
        'nombres', 'apellidoPaterno', 'apellidoMaterno','email','dni','sexo','fecha_nacimiento','direccion','distrito','departamento','estado','attorney_id'
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
        
        return $this->hasMany(User::class);
    }

    public function attorney(){

        return $this->belongsTo(Attorney::class);

    }

      public function enrollment(){
        
        return $this->hasMany(Enrollment::class);
    }

}
