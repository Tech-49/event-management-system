<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $guarded=['']; //Black List

    public function user()
    {
    	return $this->belongsTo("App\User");
    }
}
