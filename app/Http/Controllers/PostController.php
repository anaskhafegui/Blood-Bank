<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
   
    
    $records = Post::paginate(20);

    return view('post.index',compact('records'));

}
public function create(){

    $post = new Post;
    return view('post.create',compact($post));

}
public function store(Request $request){
     
    $rules = [
        'title' => 'required',
        'image' => 'required',
        'content' => 'required',
        'category_id' =>'required'
    ];
    $messages = [
        'title.required' => 'title Is Required'
    ];


    $this->validate($request,$rules,$messages);

    $record          = new Post;
    $record->title   = $request->input('title');
    $record->image   = $request->input('image');
    $record->content = $request->input('content');
    $record->category_id = $request->input('category_id');
    $record->save();

    flash('success')->success();

    return redirect(route('post.index'));

}
public function edit($id){
    $model = Post::findOrFail($id);
    return view('post.edit',compact('model'));
}

public function update(Request $request,$id){
    $record  = Post::findOrFail($id);
    $record->update($request->all());

    flash('Post Was Updated')->success();

    return redirect(route('post.index'));
}
public function destroy(Request $request,$id){

    $record  = Post::findOrFail($id);
    $record->delete();

    flash('Post Was Deleted')->success();

    return back();
}
}
