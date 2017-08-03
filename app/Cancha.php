<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    protected $table='cancha';
    protected $primaryKey='IDCANCHA';

    public $timestamps=false;

    protected $fillable=[
    'nombre',
    ];
}