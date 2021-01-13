<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rana',
            'email' => 'admin@mail.com',
            'password' => '1234',
            'type' =>'superadmin'
        ]);  
       
        User::create([
            'name' => 'Bilal',
            'email' => 'moid@mail.com',
            'password' => '1234',
            'type' =>'admin'
        ]);    
          
          User::create([
            'name' => 'kaka',
            'email' => 'teacher@mail.com',
            'password' => '1234',
            'type' =>'teacher'
        ]);

        User::create([
            'name' => 'bashir',
            'email' => 'student@mail.com',
            'password' => '1234',
            'type' =>'student'
        ]); 
        DB::table('grades')->insert([
    ['classname'=>'A'],
    ['classname'=>'B'],
    ['classname'=>'C'],
    ['classname'=>'D'],
    ['classname'=>'E'],
    ['classname'=>'F']
        ]);       
        //  DB::table('sections')->insert([
        //   ['name'=>'sectiona','roomno'=>'11','grade_id'=>'2','user_id'=>'2','rank'=>'11','capacity'=>'110']
        // ]);
    }
}
