<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function editProfile($user_id = null)
    {
        if ($user_id == null)
            $user_id = auth()->user()->id;
        $businessTypes = BusinessType::getBusinessTypes($user_id);
        return view("pages.admin.account-settings")->with(["title" => "Account Settings", "businessTypes" => $businessTypes]);
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

        return view("pages.admin.editDetail")->with(["title" => "Edit Channel Details"]);

    }
}
