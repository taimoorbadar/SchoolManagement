@extends('layout')
@section('title')
    Current Packages of School
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Packages Datatable</h4>
                        <p class="text-muted m-b-30 font-14">
                        </p>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>

                                    
                                    <th>School Name</th>
                                    <th>Package</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\Package::all() as $key => $package)
                                <tr>
                                    
                                    <td>{{$package->school_id}}</td>
                                    <td>{{$package->package}}</td>
                                    
                            <td>
                                <form action="{{route('package.destroy',$package->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            <td>
                                <a href="{{route('package.edit',$package->id)}}"  class="btn btn-danger btn-xs btn-detail">Edit</a>
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