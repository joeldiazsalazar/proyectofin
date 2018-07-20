<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Postulant extends Model
{

	// AGREGAR CAMPOS A LA CLASE
    protected $fillable = [
        'puesto_trabajo', 'dni', 'primer_apellido','segundo_apellido','nombres','avatar','fecha_nacimiento','correo','celular','telefono',
        	'direccion','estado_civil','grado_academico','experiencia_laboral','celular_corporativo',
        	'tipo_contrato','sueldo_basico','fecha_contrato',
        	'correo_corporativo','estado','duracion'
    ];


    protected $hidden = [
       'remember_token',
    ];

}
