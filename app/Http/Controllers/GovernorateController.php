<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Governorate;

class GovernorateController extends Controller
{
    public function index(){
   
    
    $records = Governorate::paginate(20);

    return view('governorate.index',compact('records'));

}
public function create(){

    $governorate = new Governorate;
    return view('governorate.create',compact($governorate));

}
public function store(Request $request){
     
    $rules = [
        'name' => 'required'
    ];
    $messages = [
        'name.required' => 'Name Is Required'
    ];


    $this->validate($request,$rules,$messages);

    $record       = new Governorate;
    $record->name = $request->input('name');
    $record->save();

    flash('success')->success();

    return redirect(route('governorate.index'));

}
public function edit($id){
    $model = Governorate::findOrFail($id);
    return view('governorate.edit',compact('model'));
}
public function update(Request $request,$id){
    $record  = Governorate::findOrFail($id);
    $record->update($request->all());

    flash('Was Updated')->success();

    return redirect(route('governorate.index'));
}
public function destroy(Request $request,$id){

    $record  = Governorate::findOrFail($id);
    $record->delete();

    flash('Was Deleted')->success();

    return back();
}
}
