<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\Student;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $test=Test::all();
        return $test;
    }
    public function store(Request $request){

        // $name=$request->input('name');
        // $email=$request->input('email');
        // $phone=$request->input('phone');
        //        $phone=$request->input('phone');

        $result=Student::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'course'=>$request->course,
            'phone'=>$request->phone,
        ]);
        return response()->json([
            'status'=>200,
            'message'=>'Added'
        ]);
    }
    public function show()
    {
        $result=Student::all();
        return response()->json([
            'status'=>200,
            'students'=>$result,
        ]);
    }
    public function edit($id)
    {
        $student=Student::find($id);
        return response()->json([
            'status'=>200,
            'student'=>$student,
        ]);
    }
}
