<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mangment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.teachercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
        toastr()->success('Save');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('teacher.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $user->update($request->all());
        return view('teacher.allteacher');
        // if(Auth::user()->type=='1')
        // return view('teacher.allteacher');

        // elseif(Auth::user()->type=='2')
        // return view('teacher.allteacher');

        // else
        // return view('teacher.allteacher');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();
        toastr()->error('deleted');
        return redirect()->back();
    }
    public function block($id){
        $user = User::find($id);
        $user->update([
            'block'=>1,
        ]);
        toastr()->info('School Terminate','Done');
        return redirect()->back();
    }
    public function unblock($id){
        $user = User::find($id);
        $user->update([
            'block'=>0,
        ]);
        toastr()->info('School Active','Done');
        return redirect()->back();
    }
}
