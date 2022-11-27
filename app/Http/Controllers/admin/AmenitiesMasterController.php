<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenitiesMasterController extends Controller
{
    public function getAmenities(){

        $amenityObj = New Amenity();
        $amenities  = $amenityObj->amenityList();
        return view("pages.admin.amenities")->with(["title" => "Amenities","amenities"=>$amenities]);
    }
}
