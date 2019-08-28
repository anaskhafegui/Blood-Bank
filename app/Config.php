<?php

namespace App;

use App\Donation;
use App\BloodType;
use App\Client;
use App\Token;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Client as Authenticatable;

class Config extends Model
{
    
protected $fillable = ['about','phone','email','instgram-url','twitter-url','facebook-url',
'name','cemail','cphone','title','content'];
  
}