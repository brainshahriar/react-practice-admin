<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendence;
use App\Models\User;

class Attendenceout extends Model
{
    use HasFactory;
    protected $guarded=[];
        // public function attendence()
        // {
        //    return $this->belongsTo(Attendence::class,'user_id');
        // }
        public function user()
        {
           return $this->belongsTo(User::class,'user_id');
        }
        public function attendence()
        {
           return $this->belongsTo(Attendence::class,'user_id');
        }


}
