<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable =['id','nombre','apellido','correo' ,'telefono'];

    protected $hidden = [ 'updated_at'];
}
