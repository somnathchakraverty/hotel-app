<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryMasterController extends Controller
{
    public function getCountryList(){

        $countryObj = New Country;
        $countries  = $countryObj->countryList();
        return view("pages.admin.country_master")->with(["title" => "Country Master","countries"=>$countries]);
    }
}
