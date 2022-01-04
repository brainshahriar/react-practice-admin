<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendence;
use App\Models\Attendenceout;
use Carbon\Carbon;


class AttendenceController extends Controller
{
    public function indexapi(Request $request){

        // $request->validate([
        //     'present_date'=>'required|unique:attendences,present_date',
        // ]);


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

    public function updateapi(Request $request,$id){


        date_default_timezone_set("ASIA/Dhaka");
        $out_time=date("h:i:sa");
        Attendence::where('user_id',$id)->update([
             'out_time'=>$out_time,
             'out_reason'=>$request->out_reason
        ]);
        return response('updated');

    }

    public function detailsapi($id){
        $attendence=Attendence::where('user_id',$id)->orderBy('id', 'DESC')->get();
        return $attendence;
    }
}
