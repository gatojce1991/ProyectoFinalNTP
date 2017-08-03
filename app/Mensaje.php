<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table='mensaje';
    protected $primaryKey='IDMENSAJE';

    public $timestamps=false;

    protected $fillable=[
    'mail',
    ];
}