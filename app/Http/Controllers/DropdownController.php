<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class DropdownController extends Controller
{
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
    
}
