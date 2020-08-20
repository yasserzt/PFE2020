<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Room;
use App\Models\Hotel;
use App\User;
use App\Models\Booking;
use App\Models\Event;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;


class HotelController extends Controller
{



  public function dashboard(){
    $id = auth()->user()->id;

    $hotel = Hotel::where('idUser',$id)->get();

    return view('NewPanelHotel.dash')->with('hotel',$hotel);
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  //Customer
  public function customer()
  {
    //

    $id = auth()->user()->id;

    $hotel = Hotel::where('idUser',$id)->get();
    $idHotel = 0;
    foreach ($hotel as   $val ) {
      // $customers = Price::with(['hotel','bookings'])->where('idHotel',$val->idHotel)->get();
      $idHotel = $val->idHotel;

    }
    $booking   = Booking::with(['client','price'])->where('idHotel',$idHotel)->get();
    return view('NewPanelHotel.customers')->with('booking',$booking)->with('hotel',$hotel);
    // return View::make('PanelHotel.customers', array('booking' => $booking));
  }


  public function eventVue(){
    // $id = auth()->user()->id;
    //
    // $hotel = Hotel::where('idUser',$id)->get();
    // $idHotel = 0;
    // foreach ($hotel as   $val ) {
    //   // $customers = Price::with(['hotel','bookings'])->where('idHotel',$val->idHotel)->get();
    //   $idHotel = $val->idHotel;
    //
    // }
    $event = Event::with(['hotel'])->get();
    return response()->json($event);
  }

  public function eventShow($idE){

    $event = Event::with(['hotel'])->where('idEvent',$idE)->get();


    if($event){

      return response()->json($event);
    }else{
      return response()->json(['failed'=>'error']);

    }
  }

  public function eventRegistre(){
    return view('event.eventregistre');
  }

  public function event(){
    $id = auth()->user()->id;

    $hotel = Hotel::where('idUser',$id)->get();
    $idHotel = 0;
    foreach ($hotel as   $val ) {
      // $customers = Price::with(['hotel','bookings'])->where('idHotel',$val->idHotel)->get();
      $idHotel = $val->idHotel;

    }
    $event = Event::where('idHotel',$idHotel)->get();
    return view('NewPanelHotel.event')->with('hotel',$hotel)->with('events',$event);
  }


  public function addEvent(Request $req){
    $id = auth()->user()->id;

    $hotel = Hotel::where('idUser',$id)->get();
    $idHotel = 0;
    foreach ($hotel as   $val ) {
      // $customers = Price::with(['hotel','bookings'])->where('idHotel',$val->idHotel)->get();
      $idHotel = $val->idHotel;

    }

    $type   = $req->typeRoom;
    $price  = $req->price;
    $start  = $req->startDate;
    $end    = $req->endDate;

    $event =  Event::create([
      'idHotel'   => $idHotel,
      'type'      => $type,
      'price'     => $price,
      'startDate' => $start,
      'endDate'   => $end,

    ]);

    if($event){
      return response()->json($event);
    }else{
      return response()->json((['failed'=>'evnet not created']));
    }

  }



  // rooms
  public function rooms(){
    $id = auth()->user()->id;
    $hotel = Hotel::where('idUser',$id)->get();

    foreach ($hotel as   $val ) {
      $prices  = Price::with(['hotel','bookings'])->where('idHotel',$val->idHotel)->get();
      $rooms   = Room::with(['hotel'])->where('idHotel', $val->idHotel)->get();

    }
    return view('NewPanelHotel.rooms')->with('room',$rooms)->with('price',$prices) ->with('hotel',$hotel);
  }

  // ADD ROOM

  public function addRoom(Request $request){



    $id = auth()->user()->id;
    $hotel = Hotel::where('idUser',$id)->get();

    foreach ($hotel as   $val ) {
      $idHotel = $val->idHotel;
    }

    $type      = $request->typeRoom;
    $price     = $request->price;
    $PT        = $request->typePrice;

    $Price =  Price::create([
      'typePrice' => $PT,
      'price' => $price,
      'roomCategory' => $type,
      'idHotel' => $idHotel,
    ]);



    if($Price ){
      foreach ($hotel as   $val ) {
        $prices = Price::with(['hotel','bookings'])->where('idHotel',$val->idHotel)->get();
      }
      return response()->json($prices);

    }
  }
  // End AddRoom

  public function profil(){

    $currentUser = auth()->user();


    $user  = User::find($currentUser->id);
    $hotel = Hotel::with(['user'])->where('idUser', $currentUser->id)->get()  ;







    return view('NewPanelHotel.profil')->with('hotel',$hotel);
  }


  public function roomDispo(){
    $currentUser = auth()->user();


    $user  = User::find($currentUser->id);
    $hotel = Hotel::with(['user'])->where('idUser', $currentUser->id)->get()  ;

    foreach ($hotel as  $val) {
      // code...

      $id = $val->idHotel;
    }

    $prices = Price::with(['hotel','bookings'])->where('idHotel',$id)->get();

    $rooms   = Room::with(['hotel'])->where('idHotel', $id)->get();

    $roomNumber = Room::where('idHotel',$id)->get();

    return view('PanelHotel.panel')->with('room',$rooms)->with('price',$prices) ;
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
    $price =  Price::find($id);


    $price->roomCategory = $request->typeRoom;
    $price->price = $request->price;
    $price->typePrice = $request->priceType;

    $price->save();


    $id = auth()->user()->id;
    $hotel = Hotel::where('idUser',$id)->get();

    if ($price){
      foreach ($hotel as   $val ) {
        $idHotel = $val->idHotel;
        $prices = Price::with(['hotel','bookings'])->where('idHotel',$val->idHotel)->get();

      }
      return response()->json($prices);

      // return $this->refresh();

    }

  }


  public function updateRoom(Request $request, $id){
    $room = Room::find($id);

    $room->roomType = $request->typeRoom;
    $room->roomNumber   = $request->nbr;
    $room->save();


    $id = auth()->user()->id;
    $hotel = Hotel::where('idUser',$id)->get();

    if ($room){
      foreach ($hotel as   $val ) {
        $idHotel = $val->idHotel;
        $rooms = Room::with(['hotel'])->where('idHotel',$val->idHotel)->get();

      }
      return response()->json($rooms);




    }
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
    $price =  Price::find($id);
    $id = auth()->user()->id;
    $hotel = Hotel::where('idUser',$id)->get();

    if ($price->delete()){
      foreach ($hotel as   $val ) {
        $idHotel = $val->idHotel;
        $prices = Price::with(['hotel','bookings'])->where('idHotel',$val->idHotel)->get();

      }

      return response()->json($prices);

      // return $this->refresh();

    }else{
      return response()->json(['error' => "Delete failed"],425);
    }

  }










  // public function hotelCount(Request $req){
  //
  //     $hotel = DB::table('hotels as h')->select(DB::raw('count(*) as region'))->groupBy('region')->get();
  //
  //
  //     return response()->json($hotel);
  // }



}
