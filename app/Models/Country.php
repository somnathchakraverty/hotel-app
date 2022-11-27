<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = "country_master";

    public function countryList($status = null)
    {
        if ($status == null) {
            $countries = Country::all();
        } else {
            $countries = Country::where("status", $status)->get();
        }

        return $countries;

    }
}
