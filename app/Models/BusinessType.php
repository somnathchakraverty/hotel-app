<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BusinessType extends Model
{
    use HasFactory;

    public static function getBusinessTypes($user_id,$businessId = 0){
        $whereCondition = "";
        if($businessId > 0){
            $whereCondition = " WHERE bt1.id = $businessId";
        }

        $businessTypes = DB::select("SELECT
                        bt1.business_name, bt1.id, t1.id as business_opted
                            FROM
                        business_types bt1
                            LEFT JOIN
                        (SELECT
                            bt.business_name, bt.id
                        FROM
                            business_types bt
                        JOIN user_business_mapping ubm ON bt.id = ubm.business_type_id
                        WHERE
                        user_id = $user_id AND ubm.status = 1) AS t1 ON bt1.id = t1.id $whereCondition");
        return $businessTypes;
    }
}
