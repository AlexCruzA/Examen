<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
	protected $fillable = ['marca','modelo', 'kilometraje', 'notas', 'foto', 'id_persona'];
}
