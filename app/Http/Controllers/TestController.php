<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\Student;
use App\Models\Detail;
use App\Models\Data;
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
        ]);
    }
    public function storeDetails(Request $request)
    {
        dd($request->all());

         $name=$request->input('name');
         $email=$request->input('email');
         $phone=$request->input('phone');

            $result=Detail::insert([
            'email'=>$email,
            'name'=>$name,
            'phone'=>$phone,
        ]);
            return $result;
    }
    public function showDetails()
    {
        $show=Detail::all();
        return $show;
    }
        public function showData()
    {
        $show=Data::all();
        return $show;
    }
    public function DataDetails($id)
    {
        $show=Data::where('id',$id)->get();
        return $show;
    }
}
