<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RoomCategory;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    public function getRoomCategoryList(){

        $categoryObj = New RoomCategory();
        $categories  = $categoryObj->roomCategoryList();
        return view("pages.admin.room_categories")->with(["title" => "Room Categories","categories"=>$categories]);
    }
}
