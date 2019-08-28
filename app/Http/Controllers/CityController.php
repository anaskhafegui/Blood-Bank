<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index($governId){
   
    $records = City::where('governorate_id',$governId)->get();

    return view('city.index',compact('records','governId'));

}
public function create($governId){

    
    return view('city.create',compact('governId'));

}
public function store($governId , Request $request)
{
    $this->validate($request , [
        'name' => 'required',
        $governId => 'exsits:governorate,id'
    ]);

    City::create($request->all() + ['governorate_id' => $governId]);
    return redirect()->route('governorate.city.index' , $governId);
}



public function edit($governId, $id)
{
    $model = City::findOrFail($id);

    return view('city.edit', compact('governId', 'model'));
}

public function update($governId, Request $request, City $city)
{
    $city->update($request->all());
    return redirect()->route('governorate.city.index', $governId);
}

/*public function destroy(Request $request,$id,$governId){

    $record  = City::findOrFail($id);
    $record->delete();

    flash('City Was Deleted')->success();

    return back();
}*/

public function destroy($governId, City $city)
{
    $city->delete();
    flash('City Was Deleted')->success();
    return redirect()->route('governorate.city.index', $governId);
}
}
