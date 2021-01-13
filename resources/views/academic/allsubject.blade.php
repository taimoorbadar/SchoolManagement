@extends('layout')
@section('title')
Subject New Add
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
                                    <a href="{{route('subject.create')}}"><button class="btn btn-danger right"> <i
                                                class="fa fa-plus"></i> Create Subject</button></a>
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject Name</th>
                                            <th>Subject Code</th>
                                            <th>Class</th>
                                            <th>Full Marks</th>
                                            <th>Pass Marks</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach (App\Models\Subject::all() as $key => $subject)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$subject->name}}</td>
                                            <td>{{$subject->scode}}</td>
                                            <td>{{$subject->grade_id}}</td>
                                            <td>{{$subject->fmarks}}</td>
                                            <td>{{$subject->pmarks}}</td>
                                    <td>
                                        <form action="{{route('subject.destroy',$subject->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                       
                                        <a href="{{route('subject.edit',$subject->id)}}"  class="btn btn-danger btn-xs btn-detail">Edit</a>
                                     
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