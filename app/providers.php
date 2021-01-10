<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class providers extends Model
{
    protected $table='providers';
    protected $fillable=['name','user','occupation'];
}
