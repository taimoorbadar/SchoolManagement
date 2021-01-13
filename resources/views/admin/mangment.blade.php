@extends('layout')
@section('title')
    Current List of School
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Parients Datatable</h4>
                        <p class="text-muted m-b-30 font-14">
                        </p>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th> Name</th>
                                    <th> Email</th>
                                    <th> Type</th>
                                    <th> Password</th> 
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\User::showUsers() as $key => $user)
                                <tr>
                                    
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->type}}</td>
                                    <td>{{$user->password}}</td>
                                    
                            <td>
                                <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            <td>
                                <a href="{{route('user.edit',$user->id)}}"  class="btn btn-danger btn-xs btn-detail">Edit</a>
                            </td>
                            </tr>
                            @endforeach
                           
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> 
        </div> 


    </div>


</div>
@endsection