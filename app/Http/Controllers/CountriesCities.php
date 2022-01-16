<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\City;
use App\Attraction;
use App\Description;

class CountriesCities extends Controller
{
    private $countries;
    private $cities;
    private $attractions;

    public function __construct()
    {
        $this->countries = Country::all();
        $this->cities = City::all();
        $this->attractions = Attraction::all();
    }

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
        return view('countriesCities.admin');
    }

    public function show(Request $request, $title)
    {
        $countries = $this->countries;
        $cities = City::all();
        $attractions = Attraction::all();
        $description = Description::all();
        $names = '';

        if ($title == 'Country'){
            $names = $this->countries;
        }

        if ($title == 'City'){
            if ($request->has('orderByCountry')){
                $orderByCountry = $request->get('orderByCountry');
                $request->session()->put('orderByCountry', $orderByCountry);
                $names = Country::where('name', '=', $orderByCountry)->first()->cities;
            }else{
                $names = City::orderBy('country_id')->get();
            }
        }

        if ($title == 'Attraction'){
            if($request->has('orderByCountry') AND $request->has('orderByCity')){
                if($request->get('orderByCity') != 'all') {
                    $names = City::where('name', '=', $request->get('orderByCity'))->first()->attractions;
                }elseif($request->get('orderByCountry') != 'all'){
                    $names = Country::where('name', '=', $request->get('orderByCountry'))->first()->attractions;
                }else{
                    $names = Attraction::orderBy('city_id')->get();
                }
            }else{
                $names = Attraction::orderBy('city_id')->get();
            }
        }

        if ($title == 'Description'){
            if($request->has('orderByCountry') AND $request->has('orderByCity')){
                if($request->get('orderByAttraction') != 'all'){
                    $names = Attraction::where('name', '=', $request->get('orderByAttraction'))->get();
                }elseif($request->get('orderByCity') != 'all') {
                    $names = City::where('name', '=', $request->get('orderByCity'))->first()->attractions;
                }elseif($request->get('orderByCountry') != 'all'){
                    $names = Country::where('name', '=', $request->get('orderByCountry'))->first()->attractions;
                }else{
                    $names = Attraction::orderBy('city_id')->get();
                }
            }else{
                $names = Attraction::orderBy('city_id')->get();
            }
        }

        return view('countriesCities.show', ['title'=>$title,
            'countries'=>$countries,
            'cities'=>$cities,
            'attractions'=>$attractions,
            'descriptions'=>$description,
            'names'=>$names
        ]);
    }

    public function add(Request $request, $title)
    {
        $new = $request->new;

        $selectCity = $this->getSelect($request->session()->get('orderByCity'), $this->cities, 'selectCity');
        $selectCountry = $this->getSelect($request->session()->get('orderByCountry'), $this->countries, 'selectCountry');

        $selectAttraction = $this->getSelect($request->session()->get('orderByAttraction'), $this->attractions, 'selectAttraction');

        if($request->has('add')) {
            if ($title == 'Country'){
                /*$request->flash();

                foreach ($this->countries as $country){
                    if($country->name == $new){
                        return redirect('/countries/admin/add/Country')->with('status', 'country name already exists');
                    }
                }
                $newCountry = new Country;
                $newCountry->name = $new;
                $newCountry->save();
                return redirect('/countries/admin/add/Country')->with('status', 'Add a new country is successful');*/

            $id = '';
            $newCountry = new Country;
            $this->addNew($newCountry, $this->countries, $new, $id, $title, '');


            }

            if ($title == 'City'){
                /*$request->flash();
                foreach ($this->cities as $city){
                    if($city->name == $new){
                        return redirect('/countries/admin/add/City')->with('status', 'city name already exists');
                    }
                }
                $country = Country::where('name', '=', $request->get('selectCountry'))->first();
                $newCity = new City;
                $newCity->name = $new;
                $newCity->country_id = $country->id;
                $newCity->save();
                return redirect('/countries/admin/add/City')->with('status', 'Add a new city is successful');*/

                $country = Country::where('name', '=', $request->get('selectCountry'))->first();
                $id = $country->id;
                $newCity = new City;
                $this->addNew($newCity, $this->cities, $new, $id, $title, 'country_id');

            }

            if ($title == 'Attraction'){
                $city = City::where('name', '=', $request->get('selectCity'))->first();
                $id = $city->id;
                $newAttraction = new Attraction;
                $this->addNew($newAttraction, $this->cities, $new, $id, $title, 'city_id');
            }
        }


        return view('countriesCities.add', [
            'title'=>$title,
            'selectCountry'=>$selectCountry,
            'selectCity'=>$selectCity,
            'selectAttraction'=>$selectAttraction
        ]);
    }

    private function addNew($whatNew, $items, $newName, $id, $title, $a){
        foreach ($items as $item){
            if($item->name == $newName){
                return redirect("/countries/admin/add/$title")->with('status', "$title name already exists");
            }
        }
        $newItem = $whatNew;
        $newItem->name = $newName;
        if(!empty($id)){
            $newItem->$a = $id;
        }

        $newItem->save();
        return redirect("/countries/admin/add/$title")->with('status', "Add a new $title is successful");
    }

    private function getSelect($orderBy, $items, $selectName){
        $select = "<select name='$selectName'>";
        foreach ($items as $item){
            if($item->name == $orderBy){
                $select .= "<option selected>$item->name</option>";
            }else {
                $select .= "<option>$item->name</option>";
            }
        }
        $select .= '</select>';
        return $select;
    }
}
