<?php

namespace App;

use App\Clinet;
use App\Donation;
use Illuminate\Database\Eloquent\Model;

class Blood_type extends Model
{
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
    public function client()
    {
        return $this->belongsToMany(Client::class);
    }
   /* public function donations()
    {
        return $this->belongsToMany(Donation::class);
    }*/
    
}
