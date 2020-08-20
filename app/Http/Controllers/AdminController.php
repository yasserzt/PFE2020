<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\Models\Sub;
use App\Models\Hotel;
use App\Models\Client;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
    $users = User::all( );

    return response()->json($users);
  }
  public function hotels(){

    $hotels = Hotel::with(['user'])->get();

    return view("PanelAdmin.panel")->with('hotels',$hotels);
  }

  public function hoteladmin(){

    $hotels = Hotel::with(['user'])->get();

    return view('PanelAdmin.hotels')->with('hotels',$hotels);
  }



  // Client
  public function Client(Request $request){

    $currentUser = auth()->user();
    $first      = $request->input('firstname');
    $last       = $request->input('lastname');
    $country    = $request->input('country');
    $region     = $request->input('region');
    $city       = $request->input('city');
    $address    = $request->input('address');
    $phone      = $request->input('phone');
    $codepostal = $request->input('codepostal');

    if($currentUser->role == 'client'){

      Client::create([
        'first_name'  => $first,
        'last_name'   => $last,
        'country'     => $country,
        'region'      => $region,
        'city'        => $city,
        'address'     => $address,
        'phone'       => $phone,
        'postalCode'  => $codepostal,
        'idUser'      => $currentUser->id,
      ]);

    }

    return response()->json(Client::all( ));
  }




  public function ActiveUser(Request $request,$id){
    $pwd   = Str::random(10);
    $user  = User::find($id);
    $hotel = Hotel::where('idUser', $id)->get()  ;
    foreach($hotel as $val){
      $idHotel = $val->idHotel;

    }

    $NewHotel = Hotel::find($idHotel);


      if($user->password == null){

        $user->password = Hash::make($pwd);
        $NewHotel->statu = true;

        $NewHotel->save();
        $user->update();

        Mail::to($user->email)->send(new Welcome($user,$pwd));
        return response()->json('with email');

      }else if($user->password != null){

        $NewHotel->statu = true;

        $NewHotel->save();
        return response()->json('without email');

      }





  }

  public function DesactiveUser(Request $request,$id){

    $user  = User::find($id);
    $hotel = Hotel::where('idUser', $id)->get()  ;
    foreach($hotel as $val){
      $idHotel = $val->idHotel;

    }


    $NewHotel = Hotel::find($idHotel);
    $NewHotel->statu = false;

    $NewHotel->save();


    return response()->json('ok');

  }
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
    $hotel = Hotel::with(['user'])->where('idHotel', $id)->get()  ;
    return response()->json($hotel) ;
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
