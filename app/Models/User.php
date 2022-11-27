<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->hasOne(CompanyProfile::class);
    }

    public function businessTypes()
    {
        return $this->hasMany(UserBusinessMapping::class)->where(["status"=>1]);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function getChannelList()
    {
        return User::where("role_id", 3)->paginate(15)    ;
    }

    public static function getCompleteUserDetail($userId){
        $userDetails = DB::table("users as u")
            ->join("company_profile as cp", "u.id", "=", "cp.user_id")
            ->where("u.id",$userId)
            ->select('company_name', 'company_address', 'role_id','contact_number', 'alt_contact_number','company_logo', 'website_url',"u.name","u.email","u.profile_pic","account_status","u.id as user_id")
            ->get()->toArray();
        return $userDetails = $userDetails[0];
    }
}
