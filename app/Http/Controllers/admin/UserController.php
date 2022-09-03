<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function editProfile(){
        return view("pages.admin.account-settings")->with(["title"=>"Account Settings"]);
    }
}
