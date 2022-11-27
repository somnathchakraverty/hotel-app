<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelCategory extends Model
{
    use HasFactory;
    protected $table = "hotel_categories";

    public function hotelCategoryList($status = null)
    {
        if ($status == null) {
            $categories = HotelCategory::all();
        } else {
            $categories = HotelCategory::where("status", $status)->get();
        }

        return $categories;

    }
}
