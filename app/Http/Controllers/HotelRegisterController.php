<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class HotelRegisterController extends Controller
{
  //
  protected function RegisterPost(Request $request)
  {

    $validator = Validator::make($request->all(), [
       'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
       'typeAccount' => ['required'],
       'hotelName' => ['required']
    ]);

    if ($validator->passes()) {

    

      return response()->json(['success'=>'Added new records.']);
    }


    return response()->json(['error'=>$validator->errors()->all()]);
  }
}
