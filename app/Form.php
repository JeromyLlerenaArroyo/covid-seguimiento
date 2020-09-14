<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public const HOME = 1;
    public const TRACK = 2;

    public function details()
    {
    	return $this->hasMany(Detail::class, 'form_id');
    }
}
