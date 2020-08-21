<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function selectCities(){
        $sql="select DISTINCT * from cities" ;
        $allCities = DB::select($sql);    
        return view('MainPage',['cities'=>$allCities]);
    }
}
