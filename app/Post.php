<?php

namespace App;

use App\Client;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function clients()
     {
       return $this->belongsToMany(Client::class,'client_post');
    }
}
