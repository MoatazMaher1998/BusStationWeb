<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\client;
use Redirect;
class ClientController extends Controller
{

   // public function check_admin(Request $request){
    //    dd($request);
     //   $sql="select * from trips where from_city_name = '".$id."' OR to_city_name='".$id."'" ;
      //  $allTrips = DB::select($sql);    

    //}
    //firstname lastname age email phone password nationality SSNz
    function Addusers(Request $request){
        $success="Register complete";
      //  $hashed = Hash::make($request->input('password'), [
      //      'rounds' => 12,
       // ]);
        $newUser=new client();
        try {
        $newUser->ssn=$request->input('SSN');
        $newUser->firstname=$request->input('firstname');
        $newUser->lastname=$request->input('lastname');
        $newUser->age=$request->input('age');
        $newUser->email=$request->input('email');
        $newUser->password=$request->input('password');
        $newUser->phonenumber=$request->input('phone');
        $newUser->nationality=$request->input('nationality');
        $newUser->isadmin=false;
        $newUser->save();
        
         // Validate the value...
        } catch (\Exception $e) {
            $success="Duplicate in SSN Or Email";
          }
  
          return view('register',['success'=>$success]);
       
    }


    public function login(Request $request){
        $email = $request->input('email');
       // $hashed = Hash::make($request->input('password'), [
        //    'rounds' => 12,
        //]);
        $password = $request->input('password');

        try{
            $userRecord = client::where([['email','=',$email],['password','=', $password]])->first();
            if($userRecord!=NULL){
                if($userRecord->isadmin == 1){return Redirect::route('admin');}
                else {return view('client');}
            
            }
            else{
                return redirect()->back() ->with('alert', 'Invalid User Name or Password!');
                //return view('login');
            }
        }
        catch (\Exception $e) {
          return redirect()->back() ->with('alert', 'Invalid User Name or Password!');

        }
    }


}
