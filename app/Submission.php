<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $guarded = [];

    public function detail()
    {
    	return $this->belongsTo(Detail::class, 'detail_id');
    }
}
