<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBusinessMapping extends Model
{
    use HasFactory;
    protected $table = "user_business_mapping";

    public function business(){
        return $this->belongsTo(BusinessType::class);
    }
}
