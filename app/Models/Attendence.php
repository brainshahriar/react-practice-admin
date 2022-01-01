<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Attendence extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function employee()
        {
           return $this->belongsTo(Employee::class,'user_id');
        }
}
