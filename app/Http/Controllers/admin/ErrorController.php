<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function invalidAccess()
    {
        return view("pages.errorInvalidAccess")->with(["title" => "Channel List"]);

    }
}
