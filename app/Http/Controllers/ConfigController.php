<?php

namespace App\Http\Controllers;

use App\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function edit($id)
    {
        $model = Config::FindOrFail($id);

        return view('config.index' , compact('model'));
    }

    public function update(Request $request , $id)
    {
       $record =  Config::FindOrFail($id)->update($request->all());
        return redirect()->back();
    }
}