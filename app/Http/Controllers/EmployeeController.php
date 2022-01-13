<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use App\Models\Attendence;
use App\Models\Attendenceout;
use Image;
use Auth;

class EmployeeController extends Controller
{

    public function indexapi()
    {
        $user=User::where('id','!=','11')->get();
        // $employeeArray=[];
        // foreach($user as $value){
        //     $employee=Employee::where('user_id',$value['id'])->orderBy('id', 'desc')->take(1)->get();
        //     $item=[

        //         'name'=>$value['name'],
        //         'employee'=>$employee

        //     ];
        //     array_push($employeeArray,$item);
        // }
        return $user;
    }
    function storeapi(Request $request)
    {
      $image = $request->file('image');
      $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
      Image::make($image)->resize(250,250)->save('uploads/image/'.$name_gen);
      $save_url = 'uploads/image/'.$name_gen;

      $user_id=$request->input('user_id');
      $designation=$request->input('designation');

      $upload=Employee::insert([

        'user_id'=>$user_id,
          'image' => $save_url,
          'designation'=>$designation

      ]);
      return $upload;
    }
function updatestoreapi(Request $request)
    {
      $image = $request->file('image');
      $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
      Image::make($image)->resize(250,250)->save('uploads/image/'.$name_gen);
      $save_url = 'uploads/image/'.$name_gen;

      $id=$request->input('id');
      $designation=$request->input('designation');

      $upload=User::where('id',$id)->update([

        'id'=>$id,
          'image' => $save_url,
          'designation'=>$designation

      ]);
      return $upload;
    }
    public function index(){
        $employee=User::orderBy('id', 'desc')->get();
      return view('admin.employee_lists',compact('employee'));
    }

    public function details($id){
      $attendence=Attendence::where('user_id',$id)->orderBy('id', 'desc')->get();
      $attendenceout=Attendenceout::where('user_id',$id)->orderBy('id', 'desc')->get();
      // $attendence=User::join('attendenceouts','attendenceouts.user_id','=','attendences.user_id')->get();
      return view('admin.details',compact('attendence','attendenceout'));
  }
}
