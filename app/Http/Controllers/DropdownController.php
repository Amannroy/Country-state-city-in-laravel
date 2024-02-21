<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Pincode;
use Illuminate\Support\Facades\Response;


class DropdownController extends Controller
{
    public function exportDatabase(){
        //Path to database export file
        $filePath = storage_path('app/database_export/csc-list.sql');

        //Checking if the file exists
        if(file_exists($filePath)){
            //Returning the file as a download response
            return Response::download($filePath, 'csc-list.sql', [
                'Content-Type' => 'application/sql',
            ]);
        }else{
            //If file not exist, return 404
            abort(404);
        }
        }
    public function index(){
        $data['countries'] = Country::get(["country_name","country_code","id"]);
        return view('dropdown', $data);
    }

    public function fetchState(Request $request){
        $data['states'] = State::where("country_id", $request->country_id)->get(["state_name","id", "state_code"]);
        return response()->json($data);
    }

    public function fetchCity(Request $request){
        $data['cities'] = City::where("state_id", $request->state_id)->get(["city_name","id"]);
        return response()->json($data);
    }
    // public function fetchPincode(Request $request){
    //     $data['pincodes'] = Pincode::where("city_id", $request->city_id)->get(["pincode","id"]);
    //     return response()->json($data);
    // }
    public function fetchPincode(Request $request){
        $city_id = $request->city_id;
        $state_id = $request->state_id;
    
        // Query pin codes based on both city_id and state_id
        $pincodes = Pincode::where('city_id', $city_id)
                           ->where('state_id', $state_id)
                           ->get(["pincode", "id"]);
    
        return response()->json(['pincodes' => $pincodes]);
    }
    
 }

