<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HotelCategory;
use Illuminate\Http\Request;

class HotelCategoryController extends Controller
{
    public function getHotelCategoryList(){

        $categoryObj = New HotelCategory();
        $categories  = $categoryObj->hotelCategoryList();
        return view("pages.admin.hotel_categories")->with(["title" => "Hotel Categories","categories"=>$categories]);
    }
}
