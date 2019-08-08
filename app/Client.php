<?php

namespace App;

use App\Donation;
use App\Blood_type;
use App\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Client as Authenticatable;

class Client extends Model
{
    protected $table = 'clients';

    protected $hidden = [
        'password', 'api_token', 'pin_code'
    ];

    protected $fillable = ['name', 'email', 'password', 'last_donation_date', 'city_id', 'bithday', 'phone', 'blood_type'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     // hasMany methodes

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class ,'client_post');
    }
    public function blood_types()
    {
        return $this->hasMany(Blood_type::class);
    } 
    public function governorates()
    {
        return $this->hasMany(Governorate::class);
    } 

    // belongs to methodes

    public function blood_type()
    {
        return $this->belongsTo(Blood_type::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    
    /*public function donations()
    {
        return $this->hasMany(Donation::class);
    }*/
    
}
