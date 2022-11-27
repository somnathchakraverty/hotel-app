<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class StateMasterController extends Controller
{
    public function getStateList(){
        $stateObj = New State;
        $states   = $stateObj->stateList();
        return view("pages.admin.state_master")->with(["title" => "State Master","states"=>$states]);
    }
}
