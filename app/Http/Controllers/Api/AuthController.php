<?php

namespace App\Http\Controllers\Api;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthController extends Authenticatable
{
    public function register(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'name' => 'required',
            'city_id' => 'required',
            'phone' => 'required',
            'last_donation_date' => 'required',
            'blood_type' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required|unique:clients',

        ]);
        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }

        $request->merge(['password' => bcrypt($request->password)]);
        $client = Client::create($request->all());
        $client->api_token = str_random(60);
        $client->save();

        return responsejson(
            1,
            'تم الاضافة بنجاح',
            [
                'api_token' => $client->api_token,
                'client' => $client,

            ]
        );
    }
    public function login(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'password' => 'required',
            'phone' => 'required',
       ]);

        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }

        $client = Client::where('phone', $request->phone)->first();
        //return auth()->guard('api')->validate($request->all());

        if ($client) {

            if (Hash::check($request->password, $client->password)) {
                return responsejson(
                    1,
                    'تم التسجيل الدخول',
                    [
                        'api_token' => $client->api_token,
                        'client' => $client,

                    ]
                );
            } else {

                return responsejson('0', ' تسجيل الدخول غير صحيح');
            }
        } else {

            return responsejson('0', ' تسجيل الدخول غير صحيح');
        }
       
    }
    public function resetPassword(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'phone' => 'required|min:11|max:14',
        ]);

        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }

        $client = Client::where('phone', $request->phone)->first();

        if ($client) {

            $pin_code = rand(1111, 9999);

            $client->pin_code = $pin_code;

            $client->email_verified_at= now();

            $client->save();
            //send email

            return responsejson(1, 'successs', [
                'pin_code' => $client->pin_code, 'client' => $client,
            ]);
        }

        else {  return responsejson('0',' الرقم المدخل غير موجود');  }
    }
    public function verifyclient(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'pin_code' => 'required|min:4|max:4',
            'password' => 'required|confirmed',
        ]);
        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }
        $client = Client::where('pin_code', $request->pin_code)->first();

        if ($client) {

            $client->password = bcrypt($request->password);
            $client->save();

            return responsejson(1, 'تم تغيير الباسورد بنجاح');
        } else {
            responsejson(1, $validator->errors->first(), $validator->errors());
            
        }
    }
}
