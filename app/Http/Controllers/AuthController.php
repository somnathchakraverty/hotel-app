<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerification;
use App\Models\CompanyProfile;
use App\Models\User;
use App\Models\UserBusinessMapping;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only("email", "password"))) {
            return redirect("channel-manager-dashboard");
        } else {
            return redirect("login")->withError("Invalid Login Details");
        }

    }

    public function register()
    {
        return view("auth.register");
    }

    public function joinUs()
    {
        return view("pages.landing_pages.join-us.register_email")->with(["title" => "Join Us"]);
    }

    public function createAccount(Request $request)
    {
        $title = "Join Us";
        $messages = [
            "first_name.required" => "First Name is required",
            "last_name.required" => "Last Name is required",
        ];
        $processNumber = isset($request->process_number) ? Crypt::decryptString($request->process_number) : "";
        if (in_array($processNumber, [2, 3, 4])) {
            if ($processNumber == 2) {
                $validator = Validator::make($request->all(), [
                    'email' => 'required|unique:users,email|max:255|email',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withError('Email address already registered')->withInput();
                } else {
                    return view("pages.landing_pages.join-us.register_contact_details")->with(["title" => $title, "email" => Crypt::encryptString($request->email)]);
                }
            }
            if ($processNumber == 3) {
                $validator = Validator::make($request->all(), [
                    'first_name' => 'required|max:20|min:3',
                    'last_name' => 'required|max:20|min:3',
                ]);
                return view("pages.landing_pages.join-us.register_password")
                    ->with(
                        [
                            "title" => $title, "email" => $request->efghiu, "first_name" => Crypt::encryptString($request->first_name),
                            "last_name" => Crypt::encryptString($request->last_name),
                            "contact_number" => Crypt::encryptString($request->phone)

                        ]
                    );

            }
            if ($processNumber == 4) {
                $request->email = isset($request->w3hi) ? Crypt::decryptString($request->w3hi) : "";
                $request->first_name = isset($request->t5dfr) ? Crypt::decryptString($request->t5dfr) : "";
                $request->last_name = isset($request->L3hi) ? Crypt::decryptString($request->L3hi) : "";
                $request->contact_number = isset($request->pyt6) ? Crypt::decryptString($request->pyt6) : "";
                $request->request->add([
                    "email" => isset($request->w3hi) ? Crypt::decryptString($request->w3hi) : "",
                    "first_name" => isset($request->t5dfr) ? Crypt::decryptString($request->t5dfr) : "",
                    "last_name" => isset($request->L3hi) ? Crypt::decryptString($request->L3hi) : "",
                    "contact_number" => isset($request->pyt6) ? Crypt::decryptString($request->pyt6) : "",
                ]);
                $validator = Validator::make($request->all(), [
                    'first_name' => 'required|max:20|min:3',
                    'last_name' => 'required|max:20|min:3',
                    'contact_number' => 'required|max:20|min:3',
                    'email' => 'required|unique:users,email|max:255|email',
                    'password' => 'required|min:10|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/',
                    'confirm_password' => 'required|same:password'
                ], [
                    "first_name.required" => "First Name is required",
                    "first_name.max" => "First Name can be of max 20 characters",
                    "last_name.max" => "Last Name can be of max 20 characters",
                    "contact_number.max" => "Contact Number can be of max 20 characters",
                    "last_name.required" => "Last Name is required",
                    "email.required" => "Email is required",
                    "contact_number.required" => "Contact Number is required",
                    "password.required" => "Password is required",
                    "password.regex" => "Password must be minimum of 10 characters, including uppercase letters, lowercase letters, and numbers.",
                    "confirm_password.required" => "Confirm Password is required",
                    "confirm_password.same" => "Password and Confirm Password must be same",

                ]);

                if ($validator->fails()) {
                    return view("pages.landing_pages.join-us.register_password")
                        ->with(
                            [
                                "title" => $title, "email" => $request->efghiu, "first_name" => $request->t5dfr,
                                "last_name" => $request->L3hi,
                                "contact_number" => $request->pyt6, "email" => $request->w3hi

                            ]
                        )->withErrors($validator);
                } else {
                    $userSave = 0;
                    $businessMappingSave = 0;
                    $companyProfileSave = 0;
                    $user = new User();
                    $user->name = "";
                    $user->email = $request->email;
                    $user->first_name = $request->first_name;
                    $user->last_name = $request->last_name;
                    $user->contact_number = $request->contact_number;
                    $user->role_id = 3;
                    $user->account_status = 0;
                    $user->password = bcrypt($request->password);
                    if ($user->save()) {
                        $userSave = 1;
                        $user_id = $user->id;
                        $user_business_mapping = new UserBusinessMapping();
                        $user_business_mapping->user_id = $user_id;
                        $user_business_mapping->business_type_id = 1;
                        if ($user_business_mapping->save()) {
                            $businessMappingSave = 1;
                            $companyProfile = new CompanyProfile();
                            $companyProfile->user_id = $user_id;

                            if ($companyProfile->save()) {
                                $companyProfileSave = 1;
                            }
                        }
                    }
                    if ($userSave == 1 && $businessMappingSave == 1 && $companyProfileSave == 1) {
                        return redirect()->route('registration-success', ["email" => Crypt::encryptString($request->email)]);
                    } else {
                        return view("pages.landing_pages.join-us.register_password")
                            ->with(
                                [
                                    "title" => $title, "email" => $request->efghiu, "first_name" => $request->t5dfr,
                                    "last_name" => $request->L3hi,
                                    "contact_number" => $request->pyt6, "email" => $request->w3hi

                                ]
                            )->withError("Something went wrong while saving you account details");
                    }

                }

            }

        } else {
            return redirect()->back()->withError('Invalid Process');
        }
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
                    return redirect()->back()->withSuccess('You have been successfully registered.Please wait for admin to activate your account.');
                }
            }else{
              dd();
            }
        }else{

        }


    }

    public function registrationSuccess($email)
    {
        $email = Crypt::decryptString($email);

        $data = ['message' => 'This is a test!'];

       // Mail::to('chakravertysomnath@gmail.com')->send(new EmailVerification($data));
        return view("pages.landing_pages.join-us.registration-success")->with(["title" => "Success", "email" => $email]);
    }

    public function verifyEmail($email)
    {
        $email = Crypt::decryptString($email);

        $userDetails = User::where("email",$email)->first();
        $userDetails->account_status = 1;
        if ($userDetails->save()) {

        } else {

        }
        return view("pages.landing_pages.join-us.registration-success")->with(["title" => "Success", "email" => $email]);
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');

    }
}
