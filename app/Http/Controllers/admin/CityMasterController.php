<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityMasterController extends Controller
{
    public function getCityList(){
        $cityObj  = New City();
        $cities   = $cityObj->cityList();
        return view("pages.admin.city_master")->with(["title" => "City Master","cities"=>$cities]);
    }
}
