<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\City;
use App\Attraction;
use App\Description;

class CountriesCities extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('attraction')){
            $name = $request->all();
            $description = Attraction::where('name', '=', $request->get('attraction'))->first()->descriptions;

            return view('countriesCities.description', ['description'=>$description,'name'=>$name]);
        }

        if ($request->has('city')){
            $name = $request->all();
            $attractions = City::where('name', '=', $request->get('city'))->first()->attractions;

            return view('countriesCities.attraction', ['attractions'=>$attractions, 'name'=>$name]);
        }

        if ($request->has('country')) {
            $cities = Country::where('name', '=', $request->get('country'))->first()->cities;

            return view('countriesCities.city', ['cities'=>$cities]);
        }

        $countries = Country::all();

        return view('countriesCities.index', ['countries'=>$countries]);
    }

    public function admin()
    {
        $countries = Country::get()->cities;

        return view('countriesCities.admin', ['countries'=>$countries]);
    }
}
