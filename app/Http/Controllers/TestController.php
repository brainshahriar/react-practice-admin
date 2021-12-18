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
    public function update(Request $request,$id){

             Student::findOrFail($id)->update([
                 'name' => $request->name,
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'course' => $request->course,
       
             ]);
            return response()->json([
            'status'=>200,
            'message'=>'Added'
        ]);
    }
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return response()->json([
        'status'=>200,
         'message'=>'Deleted'
    }
}
