<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;
    protected $table = "amenities";

    public function amenityList($status = null)
    {
        if ($status == null) {
            $amenities = Amenity::all();
        } else {
            $amenities = Amenity::where("status", $status)->get();
        }

        return $amenities;

    }
}
