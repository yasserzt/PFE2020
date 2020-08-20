<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Hotel;
use App\User;
use DB;


class SearchController extends Controller
{
  //

  public function index(){
    $price = Price::with(['hotel'])->paginate(8);

    return view('search.search')->with('card',$price);
  }


  public function Prices(Request $request){


    $hotel = DB::table('prices AS p')
    ->join('hotels AS h','h.idHotel','=','p.idHotel')
    ->paginate(6);
    // return view('cards.card')->with('card',$card);
    return response()->json($hotel);
  }


  public function Search(Request $request){

    $hotel = DB::table('prices AS p')->join('hotels AS h','h.idHotel','=','p.idHotel');

    $stars   = $request->stars;
    $region  = $request->region;
    $price   = $request->prix;
    $pension = $request->pension;

    $firstTab = implode(',',$price);
    $LastTab = explode(',',$firstTab);
    $max   = max($LastTab);
    $min   = min($LastTab);
    // Data



    if(!empty($request->pension)){
      $hotel->whereIn('typePrice',$pension);
    }

    if(!empty($request->stars)){
      $hotel->whereIn('h.stars',$stars);
    }

    if(!empty($request->region)){
      $hotel->where('h.region',$region);
    }

    if(!empty($request->prix)){
      $hotel->where('price',">=",min($LastTab));
      $hotel->where('price',"<=",max($LastTab));
    }

    $data = $hotel->paginate(6);



      if(empty($request->stars)  && empty($request->region) && empty($request->prix) && empty($request->pension)){
        $hotel = DB::table('prices AS p')
        ->join('hotels AS h','h.idHotel','=','p.idHotel')
        ->paginate(6);
        return response()->json($hotel);
    }else{
      return response()->json($data);

      }
      // return response()->json($request->pension);
  }


  public function HomeSearchOne(Request $request,$id){
    $hotel = DB::table('prices AS p')
    ->join('hotels AS h','h.idHotel','=','p.idHotel')
    ->where('idPrice',$id)
     ->paginate(3);
        return response()->json($hotel );
  }



  public function HomeSearchD(Request $request){
    $hotel = DB::table('prices AS p')
    ->join('hotels AS h','h.idHotel','=','p.idHotel')
     ->paginate(6);
        return response()->json($hotel);
  }
  public function HomeSearch(Request $request){
    $hotel = DB::table('prices AS p')
    ->join('hotels AS h','h.idHotel','=','p.idHotel')
    ->where('h.region',$request->q)
    ->paginate(3);
        return response()->json($hotel);
  }

  public function hotelPage($id){
    $price = Price::with(['hotel'])->where('idPrice',$id)->get();
    return view('search.hotelPage')->with('price',$price);
  }
}
