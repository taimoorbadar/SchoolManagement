@extends('layout')
@section('title')
Teacher New Add
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
                                    <a href="{{route('teacher.create')}}"><button class="btn btn-danger right"> <i
                                                class="fa fa-plus"></i> Create Teacher</button></a>
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Teacher Name</th>
                                            <th>Teacher Email</th>
                                            <th>Designation</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach (App\Models\User::Teacher() as $key => $user)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->designation}}</td>
                                            <td><img src="{{$user->image}}" width="50" height="50" /><style>img {border:; }</style> </td>
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
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div><!-- container-fluid -->


        </div>
    </div>
</div>
@endsection