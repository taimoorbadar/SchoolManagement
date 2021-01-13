@extends('layout')
@section('title')
 School List
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title"> School Status</h4>
                        <p class="text-muted m-b-30 font-14">
                        </p>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>


                                    <th>School Name</th>
                                    <th>School Email</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Action</th>

                                </tr>
                            </thead>


                            <tbody>
                                @foreach (App\Models\User::School() as $key => $user)
                                <tr>
                                    <td>{{$user->school_name}}</td>
                                    <td>{{$user->school_email}}</td>
                                    <td>{{$user->phone}}</td>

                                    @if ($user->block == 0)
                                    <td><span class="badge badge-danger">Active</span></td>
                                    @else
                                    <td><span class="badge badge-danger">Terminate</span></td>
                                    @endif



                                    <td>
                                        <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                    {{-- <td>
                               
                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-danger btn-xs
                                    btn-detail">Edit</a>

                                    </td> --}}
                                    <td>
                                        @if ($user->block == 0)
                                        <a href="{{route('block',$user->id)}}"> <button type="button"
                                                class="btn btn-sm btn-primary">Terminate</button></a>
                                        @else

                                        <a href="{{route('unblock',$user->id)}}"> <button type="button"
                                                class="btn btn-sm btn-danger">Active</button></a>
                                        @endif
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
@endsection