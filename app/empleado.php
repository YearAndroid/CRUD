<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class empleado extends Model
{
    //
    protected $table='empleado';
    protected $primarykey = 'id';
    public $timestamps = false;

    public $fillable= [
        'nombre',
        'direccion',
        'cargo',
        'edad',
        'celular',
        'usuario',
        'password'
    ];
}
