<?php

namespace App;

use App\Client;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','image','content','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function clients()
     {
       return $this->belongsToMany(Client::class,'client_post');
    }
}
