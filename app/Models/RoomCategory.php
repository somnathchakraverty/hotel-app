<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    use HasFactory;
    protected $table = "room_categories";

    public function roomCategoryList($status = null)
    {
        if ($status == null) {
            $categories = RoomCategory::all();
        } else {
            $categories = RoomCategory::where("status", $status)->get();
        }

        return $categories;

    }
}
