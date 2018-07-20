<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cuota','periodo_inicio','periodo_fin','monto','adeuda','estado','enrollment_id','trimester_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function enrollment(){

        return $this->belongsTo(Enrollment::class);

    }
    public function trimester(){
        return $this->belongsTo(Trimester::class);
    }

}
