<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;

class DonationController extends Controller
{
    public function index(){
   
    $records = Donation::paginate(20);

    return view('donation.index',compact('records'));

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

    $record  = Donation::findOrFail($id);
    $record->delete();

    flash('Donation Was Deleted')->success();

    return back();
}
}
