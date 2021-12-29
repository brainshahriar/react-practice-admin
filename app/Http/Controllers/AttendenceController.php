<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendece;

class AttendenceController extends Controller
{
    public function indexapi(Request $request){

        $user_id=$request->input('user_id');
        $reason=$request->input('reason');
        date_default_timezone_set("ASIA/Dhaka");
        $contact_date=date("h:i:sa");
        $present_status=1;
        $present_time=date("d-m-Y");

        $result=Attendece::insert([
            'user_id'=>$user_id,
            'reason'=>$reason,
            'present_date'=>$present_date,
            'present_time'=>$present_time,
        ]);
        return $result;
    }
}
