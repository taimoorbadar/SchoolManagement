@extends('layout')
@section('title')
 All Student 
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">

        </div>
        <br>
        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">


                                <p class="text-muted m-b-30 font-14">
                                    <a href="{{route('student.create')}}"><button class="btn btn-danger right"> <i
                                                class="fa fa-plus"></i> Create Student</button></a>
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>Profile</th>
                                            <th>Roll No </th>
                                            <th>Name</th>
                                            <th>Teacher</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th>Email</th>
                                            <th>ID Card NO </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach (App\Models\User::Student() as $key => $user)
                                        <tr>
                                            <td>img</td>
                                            <td>{{$user->rollno}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->teacher_id}}</td>
                                            <td>{{$user->grade_id}}</td>
                                            <td>{{$user->section_id}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->idcard}}</td>
                                            
                                    <td>
                                        <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-trash"></i></button>
                                        </form>
                                        <a href="{{route('user.edit',$user->id)}}"  class="btn btn-danger btn-xs btn-detail">Edit</a>
                                    </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div><!-- container-fluid -->


        </div>
    </div>
</div>
@endsection