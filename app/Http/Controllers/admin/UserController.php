<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function editProfile($user_id = null){
        if($user_id == null)
            $user_id = auth()->user()->id;
        $businessTypes = BusinessType::getBusinessTypes($user_id);
        return view("pages.admin.account-settings")->with(["title"=>"Account Settings","businessTypes"=>$businessTypes]);
    }

    public function channelList(){
        return view("pages.admin.channelList")->with(["title"=>"Channel List"]);
    }
}
