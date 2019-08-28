<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
   
    
    $records = Category::paginate(20);

    return view('category.index',compact('records'));

}
public function create(){

    $post = new Category;
    return view('category.create',compact($post));

}
public function store(Request $request){
     
    $rules = [
        'name' => 'required'
    ];
    $messages = [
        'name.required' => 'name Is Required'
    ];


    $this->validate($request,$rules,$messages);

    $record          = new Category;
    $record->name   = $request->input('name');
    $record->save();

    flash('success')->success();

    return redirect(route('category.index'));

}
public function edit($id){
    $model = Category::findOrFail($id);
    return view('category.edit',compact('model'));
}

public function update(Request $request,$id){
    $record  = Category::findOrFail($id);
    $record->update($request->all());

    flash('Post Was Updated')->success();

    return redirect(route('category.index'));
}
public function destroy(Request $request,$id){

    $record  = Category::findOrFail($id);
    $record->delete();

    flash('Category Was Deleted')->success();

    return back();
}
}
