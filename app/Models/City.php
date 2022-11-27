<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class City extends Model
{
    use HasFactory;
    protected $table = "city_master";

    public function cityList($status = null)
    {
        $cities = DB::table("city_master as cm")
            ->join("state_master as sm", "cm.state_id", "=", "sm.id")
            ->join("country_master as cmm", "sm.country_id", "=", "cmm.id")
            ->select('country_name', 'state_name', 'city_name','country_id', 'cm.id as city_id','sm.id as state_id', 'cm.status')->get();
        return $cities;

    }
}
