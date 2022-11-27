<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessType;
use App\Models\CompanyProfile;
use App\Models\User;
use App\Models\UserBusinessMapping;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function editProfile($user_id = null)
    {
        if ($user_id == null) {
            $user_id = auth()->user()->id;
            $title = "Account Settings";
        }else{
            $user_id = Crypt::decryptString($user_id);
            $title = "Edit Channel Partner Details";
        }
        $businessTypes = BusinessType::getBusinessTypes($user_id);
        return view("pages.admin.account-settings")->with(["title" =>$title, "businessTypes" => $businessTypes]);
    }

    public function channelList()
    {
        $user = new User();
        $channel_lists = $user->getChannelList();
        return view("pages.admin.channelList")->with(["title" => "Manage Channel Partners", "channel_lists" => $channel_lists]);
    }

    public function updateUserStatus(Request $request)
    {
        $response = ["status" => "false", "message" => "Something went wrong"];
        $user_id = Crypt::decryptString($request->user_id);
        $userDetails = User::find($user_id);
        $userDetails->account_status = $userDetails->account_status == 1 ? 0 : 1;
        if ($userDetails->save()) {
            $response = ["status" => "true", "message" => "Success"];
            return response()->json($response);
        } else {
            return response()->json($response);
        }
    }

    public function ensureUserIsActive()
    {
        return isset(auth()->user()->account_status) ? auth()->user()->account_status : 0;
    }

    public function editChannelDetails($ChannelId)
    {
        $ChannelId = Crypt::decryptString($ChannelId);
        $title = "Edit Channel Partner Details";
        $businessTypes = BusinessType::getBusinessTypes($ChannelId);
        $user          = User::getCompleteUserDetail($ChannelId);
        return view("pages.admin.editDetail")->with(["title" => $title, "businessTypes" => $businessTypes,"user"=>$user]);

    }
    public function updateChannelDetails(Request $request)
    {
        $response = ["status" => "false", "message" => "Something went wrong"];
       $user_id = Crypt::decryptString($request->userId);
        $companyProfile = CompanyProfile::where("user_id", $user_id)->where("status", 1)->first();
        $user = User::where("id", $user_id)->first();
        if ($request->has("company_name")) {
            $companyProfile->company_name = $request->company_name;
        }
        if ($request->has("website_url")) {
            $companyProfile->website_url = $request->website_url;
        }
        if ($request->has("contact_number")) {
            $companyProfile->contact_number = $request->contact_number;
        }
        if ($request->has("alt_contact_number")) {
            $companyProfile->alt_contact_number = $request->alt_contact_number;
        }
        if ($request->has("company_address")) {
            $companyProfile->company_address = $request->company_address;
        }
        $companyLogoUpload = 0;
        if ($request->hasFile("company_logo")) {
            $file = $request->file('company_logo');
            $destinationPath = 'admin/uploads/brand_logo';
            $ext = $file->getClientOriginalName();
            $filename = rand() . time() . ".$ext";
            $file->move($destinationPath, $filename);
            $companyProfile->company_logo = $destinationPath . "/" . $filename;
            $companyLogoUpload = 1;
        }
        $userLogoUpload = 0;
        if ($request->hasFile("profile_pic")) {
            $file = $request->file('profile_pic');
            $destinationPath = 'admin/uploads/user_profile-image';
            $ext = $file->getClientOriginalName();
            $filename = rand() . time() . ".$ext";
            $file->move($destinationPath, $filename);
            $user->profile_pic = $destinationPath . "/" . $filename;
            $userLogoUpload = 1;
        }

        if ($companyProfile->save()) {
            $response["status"] = true;
            $response["message"] = "Company Profile successfully updated.";
            if ($companyLogoUpload == 1) {
                $response["message"] = "Company Logo successfully updated.";
            }
        }

        if ($request->has("contact_person_name")) {
            $user->name = $request->contact_person_name;
        }
        if ($user->save()) {
            $response["status"] = true;
            $response["message"] = "Company Profile successfully updated.";
            if ($userLogoUpload == 1) {
                $response["message"] = "User Profile Pic successfully updated.";
            }
        }

        $business_type = $request->businessType ?? [];
        if(count($business_type) > 0) {
            DB::table("user_business_mapping")->where("user_id",$user_id)->update(["status"=>0]);
            foreach($business_type as $val):
                $user_business_mapping = new UserBusinessMapping();
                $user_business_mapping->user_id = $user_id;
                $user_business_mapping->business_type_id = $val;
                $user_business_mapping->save();
            endforeach;
        }

        return response()->json($response);

    }
}
