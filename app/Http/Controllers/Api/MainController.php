<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Post;
use App\Governorate;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function governorates()
    {
        $governorates = Governorate::all();
        return responsejson(1, 'success', $governorates);
    }
    public function cities(Request $request)
    {
        $city = City::where(function ($query) use ($request) {

            if ($request->has('governorate_id')) {
                $query->where('governorate_id', $request->governorate_id);
            }
        })->get();

        return responsejson(1, 'success', $city);
    }

    public function posts(Request $request)
    {

        $posts = Post::where(function ($query) use ($request) {

            if ($request->has('category_id')) {
                $query->where('category_id', $request->category_id);
            }
        })->get();


        return responsejson(1, 'success', $posts);
    }
    public function filterposts(Request $request)
    {

        $posts = Post::where(function ($query) use ($request) {

            if ($request->has('id') and $request->has('category_id')) {
                $query->where(
                             [
                                 'id'=> $request->id ,
                                 'category_id'=> $request->category_id
                             ]);
                
            }
            else{  $query->where('id',$request->id);}
        })->get()->all();


        if($posts){return responsejson(1, 'success', $posts);}
        else{
            return responsejson(0, 'search on another');
        }
  

        
    }

    public function toggle(Request $request,$id)
    {
        $userid = $request->user()->id;

        $client = Client::find($userid);
        $post   = Post::find($id);

        $client->posts()->toggle($post); 
        

        return responsejson(1, 'success',$client);

    }
    




















    // public function categorypsots(Request $request)
    // {
    //     $posts = Post::where('category_id', $request->category_id)->paginate(10);

    //     return responsejson(1, 'success', $posts);
    // }

    // public function cities()
    // {
    //     $cities = City::all();

    //     return responsejson(1, 'success', $cities);
    // }
}
