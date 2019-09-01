<?php

namespace App;

use App\Donation;
use App\BloodType;
use App\Notification;
use App\Token;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Client as Authenticatable;

class Client extends Model
{
    protected $table = 'clients';

    protected $hidden = [
        'password', 'api_token', 'pin_code'
    ];

    protected $fillable = ['name', 'email', 'password', 'last_donation_date', 'city_id', 'bithday', 'phone', 'blood_types_id'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     // hasMany methodes

    public function notifications()
    {
        return $this->belongsToMany(Notification::class);
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class ,'client_post');
    }
    public function blood_types()
    {
        return $this->belongsToMany(BloodType::class, 'blood_type_client');
    } 
    public function governorates()
    {
        return $this->belongsToMany(Governorate::class,'client_governorate');
    } 
    public function tokens()
    {
        return $this->hasMany(Token::class);
    }

    // belongs to methodes

    public function bloodtype()
    {
        return $this->belongsTo(BloodType::class,'blood_types_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }
    
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
    
}
