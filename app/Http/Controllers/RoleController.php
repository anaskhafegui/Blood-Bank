<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
public function index(){

    $records = Role::paginate(20);
    return view('roles.index',compact('records'));

}
public function create(){

    $post = new Role;
    return view('roles.create',compact($post));

}
public function store(Request $request){
     
    $rules = [
        'name' => 'required|unique:roles',
        
        
    ];
    $messages = [
        'name.required' => 'Name Is Required',
        'permission_list.required' => 'Permission list Is Required'
    ];


    $this->validate($request,$rules,$messages);

    $record = Role::create($request->all());

    flash('تم اضافه الرتبه بنجاح')->success();

    return redirect(route('roles.index'));

}
public function edit($id){
    $model = Role::findOrFail($id);
    return view('roles.edit',compact('model'));
}

public function update(Request $request,$id){
    $rules = [
        'name' => 'required',
        'permission_list' => 'required|array'
    ];
    $messages = [
        'name.required' => 'الاسم مطلوب'
    ];
    $this->validate($request,$rules,$messages);

    $record  = Role::findOrFail($id);
    $record->update($request->all());

    flash('Role Was Updated')->success();

    return redirect(route('roles.index'));
}
public function show(Request $request,$id){

}

public function destroy(Request $request,$id){

    $record  = Role::findOrFail($id);
    $record->delete();

    flash('Role Was Deleted')->success();

    return back();
}

}
