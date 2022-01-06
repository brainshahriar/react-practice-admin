<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use Image;

class EmployeeController extends Controller
{
    public function indexapi()
    {
        $user=User::all();
        $employeeArray=[];
        foreach($user as $value){
            $employee=Employee::where('user_id',$value['id'])->get();
            $item=[

                'name'=>$value['name'],
                'employee'=>$employee

            ];
            array_push($employeeArray,$item);
        }
        return $employeeArray;
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
function updatestoreapi(Request $request,$id)
    {
      $image = $request->file('image');
      $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
      Image::make($image)->resize(250,250)->save('uploads/image/'.$name_gen);
      $save_url = 'uploads/image/'.$name_gen;

      $user_id=$request->input('user_id');
      $designation=$request->input('designation');

      $upload=Employee::where('user_id',$id)->update([

        'user_id'=>$user_id,
          'image' => $save_url,
          'designation'=>$designation

      ]);
      return $upload;
    }
}
