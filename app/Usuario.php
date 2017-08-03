<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='users';
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable=[
    'email',
    ];
}