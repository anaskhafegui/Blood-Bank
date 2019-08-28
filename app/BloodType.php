<?php

namespace App;

use App\Clinet;
use App\Donation;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    public function clients()
    {
        return $this->hasMany(Client::class);
    }


    //BelongsTo

    public function client()
    {
        return $this->belongsToMany(Client::class,'blood_type_client');
    }



   /* public function donations()
    {
        return $this->belongsToMany(Donation::class);
    }*/
    
}
