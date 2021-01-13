<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $user=Auth::user();
        if($user->type=='superadmin'){
            $schools=User::where('type','admin')->get();
            $scount=$schools->count();
            return view('dashboard', compact('scount'));
        }
        elseif($user->type=='admin'){
            return view('dashboard');
        }
        
    }
}
