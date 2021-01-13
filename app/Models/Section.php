<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable =[
'name','roomno','grade_id','user_id','rank','capacity'
    ];
}
