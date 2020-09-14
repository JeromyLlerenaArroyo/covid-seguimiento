<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function form()
    {
    	return $this->belongsTo(Form::class, 'form_id');
    }
}
