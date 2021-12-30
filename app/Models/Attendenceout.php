<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendence;

class Attendenceout extends Model
{
    use HasFactory;
    protected $guarded=[];
        public function attendence()
        {
           return $this->belongsTo(Attendence::class,'user_id');
        }

}
