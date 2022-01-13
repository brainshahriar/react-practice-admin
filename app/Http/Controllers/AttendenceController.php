<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendence;
use App\Models\Attendenceout;
use Carbon\Carbon;


class AttendenceController extends Controller
{

    public function indexapi(Request $request){

        $request->validate([
            'first_name_and_date'=>'required|unique:attendences,first_name_and_date',
        ]);


        $user_id=$request->input('user_id');
        $reason=$request->input('reason');
        $first_name_and_date=$request->input('first_name_and_date');
        $present_date=$request->input('present_date');
        date_default_timezone_set("ASIA/Dhaka");
        $present_time=date("h:i:sa");
        $present_status=1;

       


        $result=Attendence::insert([
            'user_id'=>$user_id,
            'reason'=>$reason,
            'present_date'=>$present_date,
            'present_time'=>$present_time,
            'first_name_and_date'=>$first_name_and_date
        ]);
        return $result;
    }

    public function updateapi(Request $request){


       $request->validate([
            'last_name_and_date'=>'required|unique:attendenceouts,last_name_and_date',
        ]);


        $user_id=$request->input('user_id');
        $out_reason=$request->input('out_reason');
        $last_name_and_date=$request->input('last_name_and_date');
        $out_date=$request->input('out_date');
        date_default_timezone_set("ASIA/Dhaka");
        $out_time=date("h:i:sa");
        $out_status=1;

       


        $result=Attendenceout::insert([
            'user_id'=>$user_id,
            'out_reason'=>$out_reason,
            'out_date'=>$out_date,
            'out_time'=>$out_time,
            'last_name_and_date'=>$last_name_and_date
        ]);
        return $result;
    }
    

    public function detailsapi($id){
        $attendence=Attendence::where('user_id',$id)->orderBy('id', 'DESC')->get();
        return $attendence;
    }
    public function detailsapi2($id){
        $attendenceout=Attendenceout::where('user_id',$id)->orderBy('id', 'DESC')->get();
        return $attendenceout;
    }
}
