<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function person()
    {
    	return $this->belongsTo(Person::class, 'person_id');
    }

    public function submissions()
    {
    	return $this->hasMany(Submission::class, 'patient_id');
    }
}
