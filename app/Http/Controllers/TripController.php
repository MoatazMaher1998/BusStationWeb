<?php

namespace App\Http\Controllers;
use App\trip;
use App\bus;
use DB;
use Validator;
use Input;
use Illuminate\Http\Request;

class TripController extends Controller
{           public function selectAllTrips(){
    $allTrips = DB::select("SELECT * FROM `trips` INNER JOiN `buses` WHERE trips.bus_id = buses.id" );
    return view('admin',['info'=>$allTrips]);     
}
public function selectSomeTrips($id){
$sql="select * from trips INNER JOIN `buses` where (from_city_name = '".$id."' OR to_city_name='".$id."') AND trips.bus_id = buses.id " ;
$allTrips = DB::select($sql);    
return view('admin',['info'=>$allTrips]);}
    
    
    public function view_admin(){
    return view('login');
}  
public function filtertrips(Request $request){
   

}
public function submit_trip(Request $request){
     $trip = new trip();
     $trip->from_city_name = $request->fromCity;
     $trip->to_city_name = $request->toCity;
     $trip->trip_date = $request->date;
     $trip->duration = $request->duration;
     $trip->time =$request->time;
     $trip->price = $request->price;
     if ($request->class == "first") {
        $trip->bus_id = 1;
        $temp = bus::find(1)->capacity;
        if($request->seats > $temp ){
          $trip->capacity = $temp;
        }
        else {$trip->capacity = $request->seats;}
     }
        else if ($request->class == "second") {
        $trip->bus_id = 2;
        $temp = bus::find(2)->capacity;
        if($request->seats > $temp ){
         $trip->capacity = $temp;
        }
        else {$trip->capacity = $request->seats;}
    }
     
     $validator = Validator::make($request->all(), [
        'toCity' => 'required|different:fromCity'
    ]);

    if ($validator->fails()) {
        return redirect('admin')
                    ->withErrors($validator)
                    ->withInput();
                    return view('test');
                    }
     else {
        
        $trip->save();
        return $this->selectAllTrips();  
    }
    
     

    }
    
}
     
     
     




    

