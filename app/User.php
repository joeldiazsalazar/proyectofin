<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



  public function setPasswordAttribute($value){

        $this->attributes['password'] = bcrypt($value);
   
    }
    
     public function enrollment(){
        
        return $this->hasMany(Enrollment::class);
    }

    public function role(){

        return $this->belongsTo(Role::class);

    }

    public function student(){ // hacer una condicion si es alumno puede ver esta seccion.

        return $this->belongsToMany(Student::class, 'assigned_students');

    }


    public function attorney(){ // hacer una condicion si es apoderado puede ver esta seccion.

        return $this->belongsToMany(Attorney::class, 'assigned_attorneys');

    }


    public function teacher(){ // hacer una condicion si es apoderado puede ver esta seccion.

        return $this->belongsToMany(Teacher::class, 'assigned_teachers');

    }


    public function assistance(){
      
      return $this->hasMany(Assistance::class);
    }

     public function qualification(){
      
      return $this->hasMany(Qualification::class);
    }


    // public function teacher(){

    //     return $this->hasOne(Teacher::class);
    // }


    public function hasRoles(array $roles){
        foreach ($roles as $role) {

            if ($this->role->name === $role) {
               return true;
            }
        }
        return false;
    }


    public function isAdmin(){
        return $this->hasRoles(['admin']);
    }





    public function scopeName($query, $name){
        if ( trim($name) != "") {
          $query->where('name',"LIKE","%$name%");
        }
        

    }
}
