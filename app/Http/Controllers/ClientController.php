<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
  
public function index(Request $request)
    {
        $search = $request->input('filter');
        if ($search != null) {
            $records = Client::where('name', 'LIKE', '%' . $request->filter . '%')->orWhere('email', 'LIKE', '%' . $request->filter . '%')->get();

        }else {
            $records = Client::paginate(20);
        }

        return view('client.index', compact('records'));
    }

public function create(){

    $client = new Client;
    return view('client.create',compact($client));

}
public function store(Request $request){
     
    $rules = [
        'name' => 'required'
    ];
    $messages = [
        'name.required' => 'name Is Required'
    ];


    $this->validate($request,$rules,$messages);

    
    $record = Client::create($request->all());

    flash('success')->success();

    return redirect(route('Clients.index'));

}
public function edit($id){
    $model = Client::findOrFail($id);
    return view('client.edit',compact('model'));
}

public function update(Request $request,$id){
    $record  = Client::findOrFail($id);
    $record->update($request->all());

    flash('Post Was Updated')->success();

    return redirect(route('clients.index'));
}
public function destroy(Request $request,$id){

    $record  = Client::findOrFail($id);
    $record->delete();

    flash('Category Was Deleted')->success();

    return back();
}
}
