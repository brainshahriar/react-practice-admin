<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;

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
}
