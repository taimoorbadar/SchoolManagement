@extends('layout')
@section('title')
Class Add
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-200">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Enter Class Information </h4>
                        <p class="text-muted m-b-30 font-14"></p>
                    <form class="" action="{{route('grade.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <div>
                                            <input type="text" name="classname" class="form-control" required
                                                placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Add
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">All Class Details</h4>
                                <p class="text-muted m-b-30 font-14">
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>Class Id</th>
                                            <th>Class Name</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach (App\Models\Grade::all() as $key=> $grade)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$grade->classname}}</td>
                                            <td>
                                                <form action="{{route('grade.destroy',$grade->id)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-primary btn-xs"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <button type="button" class="edit-btn btn btn-danger"
                                                    id="{{$grade->id}}" classname="{{$grade->classname}}"
                                                    data-toggle="modal" data-target="#edit-modal"><i
                                                        class="fa fa-pencil"></i></button>

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
    <div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Class Update</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="updateForm" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label><strong>Class Name:</strong> </label>
                                    <div>
                                        <input type="text" name="classname" id="classname" class="form-control" required
                                            placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 left">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
                $('body').on('click','.edit-btn',function(){
                    var id = $(this).attr('id');
                    var classname = $(this).attr('classname');
                    // console.log(id);
                    $('#classname').val(classname);
                    $('#updateForm').attr('action','{{route('grade.update','')}}'+'/'+id);
                });
            });
</script>
@endsection