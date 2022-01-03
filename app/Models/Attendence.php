<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\User;
use App\Models\Attendenceout;

class Attendence extends Model
{
    use HasFactory;
    protected $guarded=[];
    // public function employee()
    //     {
    //        return $this->belongsTo(Employee::class,'user_id');
    //     }
     public function user()
        {
           return $this->belongsTo(User::class,'user_id');
        }
        public function attendenceout()
        {
           return $this->belongsTo(Attendenceout::class,'user_id');
        }

}
