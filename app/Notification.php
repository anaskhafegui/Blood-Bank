<?php

namespace App;

use App\Client;
use App\Donation;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    protected $fillable = ['content','donations_id','title','read_statue'];
    
    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
    public function donation()
    {
        return $this->belongsTo(Donation::class,'donations_id');
    }
}
