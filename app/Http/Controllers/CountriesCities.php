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
    private $descriptions;

    public function __construct()
    {
        $this->countries = Country::all();
        $this->cities = City::all();
        $this->attractions = Attraction::all();
        $this->descriptions = Description::all();
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
        $names = '';

        if ($request->has('orderBy')){
            $orderBy = $request->get('orderBy');
            $request->session()->put('orderBy', $orderBy);
        }else{
            $orderBy = '';
        }

        if ($title == 'Country'){
            $names = $this->countries;
        }

        if ($title == 'City'){
            if (!empty($orderBy)){
                $names = Country::where('name', '=', $orderBy)->first()->cities;
            }else{
                $names = City::orderBy('country_id')->get();
            }
        }

        if ($title == 'Attraction'){
            if(!empty($orderBy)) {
                $names = City::where('name', '=', $orderBy)->first()->attractions;
            }else {
                $names = Attraction::orderBy('city_id')->get();
            }
        }

        if ($title == 'Description'){
            if(!empty($orderBy)){
                $names = Attraction::where('name', '=', $orderBy)->get();
            }else{
                $names = Attraction::orderBy('city_id')->get();
            }
        }

        $selectCountry = $this->getSelect($request->session()->get('orderBy'), $this->countries, 'orderBy');
        $selectCity = $this->getSelect($request->session()->get('orderBy'), $this->cities, 'orderBy');
        $selectAttraction = $this->getSelect($request->session()->get('orderBy'), $this->attractions, 'orderBy');

        return view('countriesCities.show', ['title'=>$title,
            'countries'=>$this->countries,
            'cities'=>$this->cities,
            'attractions'=>$this->attractions,
            'descriptions'=>$this->descriptions,
            'names'=>$names,
            'selectCountry'=>$selectCountry,
            'selectCity'=>$selectCity,
            'selectAttraction'=>$selectAttraction
        ]);
    }

    public function add(Request $request, $title)
    {
        $new = $request->new;

        $selectNewCountry = '<input name="newCountryName" placeholder="!!new country name!!"><br><br>';
        $selectNewCity = '<input name="newCityName" placeholder="!!new city name!!"><br><br>';
        $selectNewAttraction = '<input name="newAttractionName" placeholder="!!new attraction name!!"><br><br>';
        $selectNewDescription = '<textarea name="newDescriptionName"></textarea><br><br>';

        $selectCountry = $this->getSelect($request->session()->get('orderBy'), $this->countries, 'selectCountry');
        $selectCity = $this->getSelect($request->session()->get('orderBy'), $this->cities, 'selectCity');
        $selectAttraction = $this->getSelect($request->session()->get('orderBy'), $this->attractions, 'selectAttraction');
        $selectDescription = $this->getSelect('', $this->descriptions, 'selectDescription');

        if ($title == 'City'){
            if(!empty($request->session()->get('orderBy'))){
                $selectCountry = $this->getSelect($request->session()->get('orderBy'), $this->countries, 'selectCountry');
                $selectCity = '';
            }
        }

        if ($title == 'Attraction'){
            $country = City::where('name', '=', $request->session()->get('orderBy'))->first()->country;
            $selectCountry = $this->getSelect($country['name'], $this->countries, 'selectCountry');
            $selectCity = $this->getSelect($request->session()->get('orderBy'), $this->cities, 'selectCity');
            $selectAttraction = '';
        }

        if ($title == 'Description'){
            $city = Attraction::where('name', '=', $request->session()->get('orderBy'))->first()->city;
            $selectCity = $this->getSelect($city['name'], $this->cities, 'selectCity');
            $country = City::where('name', '=', $city['name'])->first()->country;
            $selectCountry = $this->getSelect($country['name'], $this->countries, 'selectCountry');
            $selectAttraction = $this->getSelect($request->session()->get('orderBy'), $this->attractions, 'selectAttraction');
            $selectDescription = '';
        }

        if($request->has('add')) {
            if($request->has('newCountryName')){
                $newCountryName = $request->get('newCountryName');
            }else{
                $newCountryName = $request->get('selectCountry');
            }

            if($request->has('newCityName')){
                $newCityName = $request->get('newCityName');
            }else{
                $newCityName = $request->get('selectCity');
            }

            if($request->has('newAttractionName')){
                $newAttractionName = $request->get('newAttractionName');
            }else{
                $newAttractionName = $request->get('selectAttraction');
            }

            if($request->has('newDescriptionName')){
                $newDescriptionName = $request->get('newDescriptionName');
            }else{
                $newDescriptionName = $request->get('selectDescription');
            }

            $newCountry = new Country;
            $this->addNew($newCountry, $newCountryName, '', 'Country', 'id');

            $country = Country::where('name', '=', $newCountryName)->first();
            $id = $country->id;
            $newCity = new City;
            $this->addNew($newCity, $newCityName, $id, 'City', 'country_id');

            $city = City::where('name', '=', $newCityName)->first();
            $id = $city->id;
            $newAttraction = new Attraction;
            $this->addNew($newAttraction, $newAttractionName, $id, 'Attraction', 'city_id');

            $attraction = Attraction::where('name', '=', $newAttractionName)->first();
            $id = $attraction->id;
            $newDescription = new Description;
            $this->addNew($newDescription, $newDescriptionName, $id, 'Description', 'attraction_id');
        }

        return view('countriesCities.add', [
            'title'=>$title,
            'selectCountry'=>$selectCountry,
            'selectCity'=>$selectCity,
            'selectAttraction'=>$selectAttraction,
            'selectDescription'=>$selectDescription,
            'selectNewCountry'=>$selectNewCountry,
            'selectNewCity'=>$selectNewCity,
            'selectNewAttraction'=>$selectNewAttraction,
            'selectNewDescription'=>$selectNewDescription
        ]);


    }

    public function edit(Request $request, $title)
    {
        $selectNewCountry = '<input name="newCountryName" value="default" placeholder="!!new country name!!"><br><br>';
        $selectNewCity = '<input name="newCityName" placeholder="!!new city name!!"><br><br>';
        $selectNewAttraction = '<input name="newAttractionName" placeholder="!!new attraction name!!"><br><br>';
        $selectNewDescription = '<textarea name="newDescriptionName" value="default">default</textarea><br><br>';

        if($title == 'Country'){
            if($request->has('edit')){
                $whatEdit = new Country;
                $newName = $request->get('newCountryName');
                $oldName = $request->get('selectCountry');
                $this->editHelper($whatEdit, $newName, $oldName);
                return redirect('/countries/admin/show/Country');
            }
            $selectCountry = $this->getSelect($request->get('editName'), $this->countries, 'selectCountry');
            return view('countriesCities.edit', ['selectCountry'=>$selectCountry, 'selectNewCountry'=>$selectNewCountry]);
        }

        if($title == 'City'){
            if($request->has('edit')){
                $whatEdit = new City;
                $newName = $request->get('newCityName');
                $oldName = $request->get('selectCity');
                $this->editHelper($whatEdit, $newName, $oldName);
                return redirect('/countries/admin/show/City');
            }
            $selectCity = $this->getSelect($request->get('editName'), $this->cities, 'selectCity');
            return view('countriesCities.edit', ['selectCity'=>$selectCity, 'selectNewCity'=>$selectNewCity]);
        }

        if($title == 'Attraction'){
            if($request->has('edit')){
                $whatEdit = new Attraction;
                $newName = $request->get('newAttractionName');
                $oldName = $request->get('selectAttraction');
                $this->editHelper($whatEdit, $newName, $oldName);
                return redirect('/countries/admin/show/Attraction');
            }
            $selectAttraction = $this->getSelect($request->get('editName'), $this->attractions, 'selectAttraction');
            return view('countriesCities.edit', ['selectAttraction'=>$selectAttraction, 'selectNewAttraction'=>$selectNewAttraction]);
        }

        if($title == 'Description'){
            if($request->has('edit')){
                $whatEdit = new Description;
                $newName = $request->get('newDescriptionName');
                $oldName = $request->get('selectDescription');
                $this->editHelper($whatEdit, $newName, $oldName);
                return redirect('/countries/admin/show/Description');
            }
            $selectDescription = $this->getSelect($request->get('editName'), $this->descriptions, 'selectDescription');
            return view('countriesCities.edit', ['selectDescription'=>$selectDescription, 'selectNewDescription'=>$selectNewDescription]);
        }
    }

    public function delete(Request $request, $title)
    {
        if($title == 'Country'){
            $whatDelete = new Country;
        }
        if($title == 'City'){
            $whatDelete = new City;
        }
        if($title == 'Attraction'){
            $whatDelete = new Attraction;
        }
        if($title == 'Description'){
            $whatDelete = new Description;
        }
        if($request->has('deleteId')){
            $id = $request->deleteId;
            $delete = $whatDelete::find($id);
            $delete->delete();
            return redirect("/countries/admin/show/$title");
        }
    }

    private function editHelper($whatEdit, $newName, $oldName)
    {
        $editing = $whatEdit::where('name', '=', $oldName)->first();
        $editing->name = $newName;
        $editing->save();
    }

    private function addNew($whatNew, $newName, $id, $title, $a){
        $exist = $whatNew::where('name', '=', $newName)->first();
        if(empty($exist)){
            $newItem = $whatNew;
            $newItem->name = $newName;
            if(!empty($id)){
                $newItem->$a = $id;
            }
            $newItem->save();
        }

        return redirect("/countries/admin/add/$title")->with('status', "Add a new $title is successful");
    }

    private function getSelect($orderBy, $items, $selectName){
        $select = '<select name="'.$selectName.'">';
        foreach ($items as $item){
            if($item->name == $orderBy){
                $select .= '<option selected>'.$item->name.'</option>';
            }else {
                $select .= '<option>'.$item->name.'</option>';
            }
        }
        $select .= '</select><br><br>';
        return $select;
    }
}
