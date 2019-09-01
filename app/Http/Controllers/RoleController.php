<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permissions;

class RoleController extends Controller
{
public function index(){

    $records = Role::paginate(20);
    return view('roles.index',compact('records'));

}
public function create(){

    $role = new Role;
    return view('roles.create',compact($role));

}
public function store(Request $request){

    $rules = [
        'name' => 'required|unique:roles',
        'display_name' =>'required',
        'description' =>'required',
        'permission_list' =>'required|array'
    ];
    $messages = [
        'name.required' => 'Name Is Required',
        'permission_list.required' => 'Permission list Is Required',
        'display_name.requried' =>'Display Name is Required'
    ];


    $this->validate($request,$rules,$messages);

    $record = Role::create($request->all());

    $record->permissions()->attach($request->permission_list);

    
    flash('تم اضافه الرتبه بنجاح')->success();

    return redirect(route('roles.index'));

}
public function edit($id){
    $model = Role::findOrFail($id);
    return view('roles.edit',compact('model'));
}

public function update(Request $request,$id){
    $rules = [
        'name' => 'required|unique:roles,name,'.$id,
        'display_name' =>'required',
        'description' =>'required',
        'permission_list' =>'required|array'
    ];
    $messages = [
        'name.required' => 'Name Is Required',
        'permission_list.required' => 'Permission list Is Required',
        'display_name.requried' =>'Display Name is Required'
    ];
    $this->validate($request,$rules,$messages);

    $record  = Role::findOrFail($id);
    $record->update($request->all());
    $record->permissions()->sync($request->permission_list);

    flash('Role Was Updated')->success();

    return back();
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
