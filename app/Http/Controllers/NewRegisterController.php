<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Models\Client;
use App\Models\Hotel;
use App\Mail\Welcome;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
class NewRegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
  * Where to redirect users after registration.
  *
  * @var string
  */
  protected $redirectTo = '/R';

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
  * Get a validator for an incoming registration request.
  *
  * @param  array  $data
  * @return \Illuminate\Contracts\Validation\Validator
  */
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'username' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'hotelName' => ['required'],
      'typeAccount' => ['string']
    ]);
  }

  /**
  * Create a new user instance after a valid registration.
  *
  * @param  array  $data
  * @return \App\User
  */
  protected function create(array $data)
  {
    // $type       = $request->type;
    // $hotelName  = $request->hotelName;
    // $email      = $request->email;
    // $pwd =  Str::random(8);

    $user =  User::create([
      'username' => $data['username'],
      'email' => $data['email'],
      'typeAccount'=>$data['typeAccount'],
      // 'password' => Hash::make($pwd),
    ]);



    if($user && $user->typeAccount == "hotel"){
      $currentUser = auth()->user();
      Hotel::create([
        'idUser'      => $user->id,
        'hotelName' => $data['hotelName']
      ]);

      // Mail::to($user->email)->send(new Welcome($user));
      // Mail::to($user->email)->send(new Welcome($user,$pwd));

      return $user;
    }
  }
}





































//
//
// //
// protected function RegisterPost(Request $request)
// {
//
//   $erros = $request->validate([
//     'hotelName' => 'required',
//     'email'     => 'required', 'string', 'email', 'max:255', 'unique:users'
//   ]);
//   $type       = $request->type;
//   $hotelName  = $request->hotelName;
//   $email      = $request->email;
//
//   $user =  User::create([
//     'email' => $email,
//     'typeAccount'=>$type,
//   ]);
//
//   if($user){
//
//
//     $hotel  = Hotel::create([
//       'idUser'    => $user->id,
//       'hotelName' => $hotelName
//     ]);
//     return response()->json(['ok'=>'success']);
//   }
//   // return response()->json(['errors'=> $errors]);
//
// }
