<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use App\Models\User;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function updateCompanyProfile(Request $request, $user_id = null)
    {
        $response = ["status" => "false", "message" => "Something went wrong"];
        if ($user_id == null) {
            $user_id = auth()->user()->id;
        }
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
        return response()->json($response);

    }
}
