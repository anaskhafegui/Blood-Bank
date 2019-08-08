<?php

namespace App;

use App\Client;
use App\Donation;
use App\Governorate;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }
  
    public function clients()
    {
        return $this->hasMany(Client::class);
    }

/*
    public function donations()
    {
        return $this->belongsToManny(Donation::class);
    }*/
}
