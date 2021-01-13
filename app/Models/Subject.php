<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable =[
'name','scode','stype','grade_id','fmarks','pmarks'
    ];
}
