<?php

function getCompanyBusinessTypes($user_id, $businessId)
{
    if (!in_array(auth()->user()->role_id, [1, 2])) {
        return \App\Models\BusinessType::getBusinessTypes($user_id, $businessId);
    }
}



