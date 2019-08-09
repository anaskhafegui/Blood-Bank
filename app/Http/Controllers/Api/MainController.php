<?php

namespace App\Http\Controllers\Api;

use App\City;
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
