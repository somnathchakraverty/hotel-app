<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\User;
use App\Models\UserBusinessMapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function login(Request $request){
        if(Auth::attempt($request->only("email","password"))){

           print_r("<h1>Login Successfull!!! <a href='logout'>Logout</a></h1>");
        }else{
            return redirect("login")->withError("Invalid Login Details");
        }

    }

    public function register()
    {
        return view("auth.register");
    }

    public function createUser(Request $request){

        $user = new User();
        $user->name = "";
        $user->email= $request->email;
        $user->role_id= 3;
        $user->password = bcrypt($request->password);
        if($user->save()) {
            $user_id = $user->id;
            $companyProfile = new CompanyProfile();
            $companyProfile->user_id = $user_id;
            $companyProfile->company_name = $request->company_name;
            $companyProfile->company_address = $request->company_address;
            $companyProfile->contact_number = $request->mobile_number;
            if($companyProfile->save()){
                $companyProfileId = $companyProfile->id;
                $business_type = $request->business_type;
                if(count($business_type) > 0) {
                    foreach($business_type as $val):
                        $user_business_mapping = new UserBusinessMapping();
                        $user_business_mapping->user_id = $user_id;
                        $user_business_mapping->business_type_id = $val;
                        $user_business_mapping->save();
                    endforeach;
                    return redirect("login");
                }
            }else{

            }
        }else{

        }


    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');

    }
}
