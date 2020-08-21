<?php

namespace App\Http\Controllers;
use App\trip;
use App\bus;
use DB;
use Validator;
use Input;
use Illuminate\Http\Request;
use App\client;
class TripController extends Controller
    
{           

    public function submit_ticket(Request $request){
        $GlobalTrip_ID=0;
        for ($i = 0; $i < $request->seats; $i++) {
            
            $First_Name = $request->first_name;
            $SSN = $request->ssn;
            $Phone = $request->phone;
            $Nationality = $request->nationality;
            $Email = $request->email;
            $Trip_ID = $request->trip_id;
            $GlobalTrip_ID=$Trip_ID;
            $Chair = $request->input('select'.$i);
            $temp =  DB::select("select * from clients where clients.ssn = '$SSN' AND clients.email = '$Email'");
             if($temp == null){
                $temp1 = DB::select("select * from clients where clients.ssn = '$SSN'");
             if($temp1 ==null){
                DB::table('clients')
                ->updateOrInsert(
                    ['email' => $Email],
                    ['firstname' => $First_Name,'ssn' => $SSN,'isadmin' => '0', 'phonenumber' => $Phone, 'nationality' => $Nationality]
                );
                 
             }
             else{
                DB::table('clients')
                ->where('ssn',$SSN)
                ->update(['email' => $Email]);
             }
                }
             DB::table('tickets')->insert(['client_id' => $SSN, 'trip_id' => $Trip_ID, 'chair_id' => $Chair]);        
             DB::table('trips')
            ->where('id', $Trip_ID)
            ->decrement('capacity');
            }
           return view('showuserid',['trip_id'=>$GlobalTrip_ID]);

    }
     public function view_book(Request $request)
    {   $seats = $request->input('seats');
        $tripinfo = DB::select("select * from trips WHERE trips.id = '$request->trip_id'");
        $chairs = DB::select("select chair_id from tickets WHERE trip_id = '$request->trip_id'");
        return view('book',compact('tripinfo','chairs','seats'));
    }
    public function qrcodeform(Request $request){
        $trip_id=$request->input('trip_id');
        $ssn=$request->input('ssn');
        $tripinfo=DB::table('trips')
        ->where([['id','=',$trip_id]]) 
        ->first();
        if($tripinfo){
          // $tripinfo;
           $bus_info=DB::table('buses')
           ->where([['id','=',$tripinfo->bus_id]]) 
           ->first();

           $ticketinfo =DB::table('tickets')
            ->where([['client_id','=',$ssn],['trip_id','=',$trip_id]])->get();
            if ($ticketinfo) {
                $tickets=" ";
                foreach  ($ticketinfo as $tic) { 
                   $tickets=$tickets . ($tic->chair_id).' ';
                }
                return view('qrcode',['tripinfo'=>$tripinfo,'ticketinfo'=>$tickets,'businfo'=>$bus_info]);
              //echo $ticketinfo;
            }else{
                return redirect()->back()->with('alert', 'Error in ssn or trip_id!');
            }
           
        }else{ return redirect()->back()->with('alert', 'error in trip_id!');}
        

        
    }
    
    public function selectAllTrips(){
    $DATE= date('Y-m-d');
    $allTrips = DB::select("select * from trips INNER JOiN `buses` WHERE trips.bus_id = buses.id and trips.trip_date >= '$DATE' order by trips.trip_date ");

    return view('admin',['info'=>$allTrips]);     
}
public function deleteTrip(Request $request){
    $id=$request->id_number;
    trip::destroy($id);
    $allTrips = DB::select("SELECT * FROM `trips` INNER JOiN `buses` WHERE trips.bus_id = buses.id" );
    return view('admin',['info'=>$allTrips]);     
}

public function selectSomeTrips(Request $request){
    $DATE= date('Y-m-d');
$sql="select * from trips INNER JOIN `buses` where (from_city_name = '".$request->city."' OR to_city_name='".$request->city."') AND trips.bus_id = buses.id and trips.trip_date >= '$DATE' order by trips.trip_date" ;
$allTrips = DB::select($sql);    
return view('admin',['info'=>$allTrips]);}
    public function view_main(){
        return view('MainPage');
    }
    
    public function view_admin(){
    return view('login');
}  
public function filtertrips(Request $request){
    $fromCity=$request->fromCity;
    $toCity=$request->toCity;
    $fromDay=$request->fromDay;
    $toDay=$request->toDay;
    $busClass=$request->busClass;
    $sql="select * from trips INNER JOIN `buses` where (from_city_name = '".$fromCity."' AND to_city_name='".$toCity."') and trip_date between '".$fromDay."' and '".$toDay."' AND trips.bus_id = buses.id " ;
    $allTrips = DB::select($sql);    
    return view('admin',['info'=>$allTrips]);
}
public function filterTripsDatePost(Request $request){
    
    $from_city_name=$request->fromCity;
    $to_city_name=$request->toCity;
    if($from_city_name ==$to_city_name ){
        return redirect()->back()->with('alert', 'Please Change Your Destination!');
    }
    $from_date=$request->fromDate;
    $number=$request->number;
    $trips=DB::table('trips')
    ->where([['from_city_name','=',$from_city_name],['to_city_name','=',$to_city_name],['trip_date','=',$from_date],['capacity','>=',$number]]) 
   ->get();
   foreach($trips as $trip){
    $id=$trip->bus_id;
    $trip->bus_type=bus::find($id)->type;
     $trip->times=date_create($trip->time);
     date_add($trip->times,date_interval_create_from_date_string((string)$trip->duration .' hours'));
   }
   $numberofseats = $request->input('number');
   return view('trips',['trips'=>$trips],['Seats'=>$numberofseats]);
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
     
     
     




    

