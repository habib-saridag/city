<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $city=City::get();
        return view('city',compact('city'));
    }
    public function getDistrict($city_id){
        $district=District::where("city_id",$city_id)->get();
        return response()->json([
            "response"=>"ok",
            "district"=>$district
        ],200);
        return view('city',compact('district'));
    }
}
