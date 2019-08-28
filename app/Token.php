<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;
class Token extends Model
{
  protected $fillable = ['token','type','client_id'];
  
    public function client()
    {
      return $this->belongsTo(Client::class);
    }
}
