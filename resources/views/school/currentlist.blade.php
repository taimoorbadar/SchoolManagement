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

                                    
                                    <th>School Name</th>
                                    <th>School Email</th>
                                    <th>Phone Number</th>
                                    <th>Package</th>
                                    
                                    <th>Action</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>


                            <tbody>
                                @foreach (App\Models\User::School() as $key => $user)
                                @php
                                $package=App\Models\Package::where('school_id', $user->id)->first();
                                @endphp
                                <tr>
                                    
                                    <td>{{$user->school_name}}</td>
                                    <td>{{$user->school_email}}</td>
                                    <td>{{$user->phone}}</td>
                                    @if(isset($package))
                                    <td>{{$package->package}}</td>
                                    @else
                                    <td>No Package</td>
                                    @endif
                                    
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
@endsection