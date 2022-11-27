<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class State extends Model
{
    use HasFactory;

    protected $table = "state_master";

    public function stateList($status = null)
    {
        $states = DB::table("state_master as sm")
            ->join("country_master as cm", "sm.country_id", "=", "cm.id")->select('country_name', 'state_name', 'country_id', 'sm.id as state_id', 'sm.status')->get();
        return $states;

    }
}
