<?php

namespace App\Http\Controllers\Api;



use App\Donation;
use App\Governorate;
use App\Blood_type;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{

    public function r_donate()
    {

        $donate = Donation::paginate(10);
  
        return responsejson(1, 'success', $donate);
    }

    public function showdonate(Donation $id)
    {
        return responsejson(1, 'success', $id);
    }

    public function phonecall(Request $request,Donation $id)
    {
        $call=$id->contact;

        return responsejson(1, 'success', $call );
    }

    public function filterblood(Request $request){

        $bloodtype = Blood_type::where(function ($query) use ($request) {
        if ($request->has('id')) {$query->where('id',$request->id); }
        })->get();


        if($bloodtype){return responsejson(1, 'success', $bloodtype);}

        else{
            return responsejson(0, 'No Requests on this BloodType');
        }
  

    }

    public function filtergovern(Request $request){

        $governotre = Governorate::where(function ($query) use ($request) {
        if ($request->has('id')) {$query->where('id',$request->id); }
        })->get();


        if($governotre){return responsejson(1, 'success', $governotre);}

        else{
            return responsejson(0, 'No Requests on this Governotre');
        }   
    }
    public function createrequest(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'name'=>'required',
            'contact'=>'required',
            'hospital-name'=>'required',
            'address'=>'required',
            'blood_type_id' => 'required',
            'age' =>'required',
            'notes'=>'required',
            'nbags'=>'required',
            'city_id'=>'required']);

        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }


        $link = $request->address;

        $lat  = substr(explode('@', $link)[1], 0, 10);
        
        $long = substr(explode('@', $link)[1], 11, 10);

        $requests= Donation::create([
            'client_id' =>$request->user()->id,
            'name'     =>request('name'),
            'contact'  =>request('contact'),
            'hospital-name'=>request('hospital-name'),
            'address'=>request('address'),
            'blood_type_id'=>request('blood_type_id'),
            'age'=>request('age'),
            'notes'=>request('notes'),
            'nbags'=>request('nbags'),
            'city_id'=>request('city_id'),
            'longitude'=>$long,
            'latitude'=> $lat
                                     ]);
    
        return responsejson(1,'تم الاضافة للطلب بنجاح',$requests);
    }
}