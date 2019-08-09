<?php

namespace App;

use App\City;
use App\Blood_type;
use App\Notification;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Client;




class Donation extends Model
{

    protected $table = 'donations';


    protected $fillable = ['name','contact','hospital-name','blood_type_id','age','notes','nbags','city_id','longitude','latitude','client_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function blood_type()
    {
        return $this->belongsTo(Blood_type::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function notification()
    {
        return $this->belongTo(Notification::class);
    }
}
