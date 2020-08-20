<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Hotel;
use App\Models\Event;
use App\Models\Client;
use App\Models\Booking;
use App\User;
use App\Models\EventRegistre;
use DB;
class CheckoutController extends Controller
{
  //


  public function index($id){

    $hotel = DB::table('prices AS p')
    ->join('hotels AS h','h.idHotel','=','p.idHotel')
    ->where('idPrice',$id)
    ->get( );
    return view('checkout.checkout')->with('h',$hotel);
  }

  public function eventCheckout($id){
    $idUser = auth()->user()->id;
    $client = Client::where('idUser',$idUser)->get();
    $idClient = 0;
    foreach($client as $val){
      $idClient = $val->idClient;
    }

    $event = Event::with(['hotel','event_registres'])->where('idEvent',$id)->get( );
    return  view('event.eventregistre')->with('event',$event)->with('idClient',$idClient);
  }
  // registreEvent
  public function registreEvent(Request $req){
    $idEvent  = $req->idEvent;
    $nbr      = $req->nbr;
    $idUser = auth()->user()->id;
    $client = Client::where('idUser',$idUser)->get();
    $idClient = 0;
    foreach($client as $val){
      $idClient = $val->idClient;
    }

    $registreExist = DB::table('eventRegistre')->where('idClient',$idClient)->where('idEvent',$idEvent)->exists();
    $event      = Event::with(['event_registres'])->where('idEvent',$idEvent)->get();

    $max = 0;
    $nbrPlace = 0;

    foreach($event as $val){
      $max = $val->maxNumber;
    }

    // return $nbr;

    if($max == 0 || $nbr > $max){
      return response()->json( ['statu' =>'Sorry there is no empty place anymore . Only '.$max.' place left','color'=>'red'] );

    }else if($registreExist  ){
        if($nbr > $max){
          return response()->json(  ['statu' =>'Sorry there is no empty place anymore . Only '.$max.' place left' ,'color'=>'red'] );

        }else{

        $r      = EventRegistre::where('idEvent',$idEvent)->first();
        $r->numberPlace = $r->numberPlace + $nbr;
        $register = Event::where('idEvent',$idEvent)->first();
        $register->maxNumber -= $nbr;

        $r->update();
        $register->update();

        return response()->json(['statu'=>' Thank you for registring your name . please check your name on the spot if there is a problem contact us.','color'=>'green']);
        }

      // Thank you for registring your name . please check your name on the spot if there is a problem contact us.
    }else if(!$registreExist){


      $registred = EventRegistre::create([
          'idEvent'     => $idEvent,
          'idClient'    => $idClient,
          'numberPlace' => $nbr,
          'payment'     => 0
      ]);

      $event = Event::where('idEvent',$idEvent)->first();

      $event->maxNumber = $event->maxNumber  - $nbr;
      //
      $event->update();

      return response()->json(['statu'=>' Thank you for registring your name . please check your name on the spot if there is a problem contact us.','color'=>'green']);
    }


  }    // registreEvent


  public function create(Request $req){
    $idH   = $req->idHotel;
    $idP   = $req->idPrice;
    $sDate = strtotime($req->startDate);
    $rooms = $req->roomNumber;
    $days  = $req->days;
    $endDate = date('Y-m-d', strtotime(" +$days days", $sDate));
    //
    $userId = auth()->user()->id;


    $hotel = DB::table('clients AS h')->join('users AS u','u.id','=',"h.idUser")->where('h.idUser',$userId)->get();


    foreach ($hotel as $val) {
      $clientId = $val->idClient;
    }


    $book = Booking::create([
      'idHotel'    => $idH,
      'idPrice'    => $idP,
      'startDate'  => $sDate,
      'endDate'    => $endDate,
      'roomNumber' => $rooms,
      'idClient'   => $clientId,
    ]);

    // if($book ){
    //   return response()->json(['ok'=>'success']);
    // }else{
    //   return response()->json(['non'=>'Failed']);
    //
    // }
    return response()->json($req->startDate);
  }
}
