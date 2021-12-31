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
        $present_date=$request->input('present_date');
        date_default_timezone_set("ASIA/Dhaka");
        $present_time=date("h:i:sa");
        $present_status=1;
       


        $result=Attendence::insert([
            'user_id'=>$user_id,
            'reason'=>$reason,
            'present_date'=>$present_date,
            'present_time'=>$present_time,
        ]);
        return $result;
    }

    public function updateapi(Request $request){

        // $request->validate([
        //     'out_date'=>'required|unique:attendenceouts,out_date',
        // ]);

        $user_id=$request->input('user_id');
        $out_reason=$request->input('out_reason');
        $out_date=$request->input('out_date');
        date_default_timezone_set("ASIA/Dhaka");
        $out_time=date("h:i:sa");
        $out_status=1;
       


        $result=Attendenceout::insert([
            'user_id'=>$user_id,
            'out_reason'=>$out_reason,
            'out_date'=>$out_date,
            'out_time'=>$out_time,
        ]);
        return $result;

    }

    public function detailsapi($id){
        $details=Attendence::where('user_id',$id)->latest()->get();
        $detArray=[];
        foreach ($details as $value) {
            $details2=Attendenceout::where('user_id',$id)->latest()->get();
            $item=[
                'present_time'=>$value['present_time'],
                'present_date'=>$value['present_date'],
                'reason'=>$value['reason'],
                'attendeceoutdetails'=>$details2,
            ];
            array_push($detArray,$item);
        }
        return $detArray;
    }
}
