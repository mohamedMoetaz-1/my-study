<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController  
{
    function play(Request $request) {

        return $request->all();
        
    }
    function sleep(Request $request) {
        return view('pages.about')->with('name', 'mohamed')->with('age', '25');
        
    }
    
    function drink($n){
        $auth = $this->testlogin($n);
        if($auth == true){
            return response()->json(["data"=>["name"=>"mohamed", "age"=>25]], 200);
            
        }else{
            return  redirect('pages/welcome');
            // back() redirect to the previous page
        }
    }
    
    private function testlogin($n){
        
        if($n == "mohamed"){
            $result = true;
        }else{
            $result = false;
        }
    }

}