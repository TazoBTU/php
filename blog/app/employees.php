<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $fillable=[
        "name","surname","position","phone","is_hired"
    ];
    public $timestamps = false;
}
