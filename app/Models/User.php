<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type','block','school_name','school_address','school_email','package','designation','gender','religion','dob',
        'phone','address','join_date','image','blood_group','student_phone','state','teacher_id','grade_id',
        'section_id','idcard','rollno','extra','remarks','father_name','mother_name','father_profession',
        'father_phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }


    public static function showUsers()
    {
    return (new static)->get();
    }

    public static function Superadmin()
    {
    return (new static)::where('type','superadmin')->get();
    } 

   public static function School()
   {
   return (new static)::where('type','admin')->get();
   } 
   public static function Teacher()
   {
   return (new static)::where('type','teacher')->get();
   } 
   
   public static function Student()
   {
   return (new static)::where('type','student')->get();
   }





   
   
   public function isOnline(){
    return Cache::has('user-is-online-'. $this->id);
}   










   public function setImageAttribute($value)
   {    
      $this->attributes['image'] = ImageHelper::saveImage($value,'/images/teacher/');
  }
}
