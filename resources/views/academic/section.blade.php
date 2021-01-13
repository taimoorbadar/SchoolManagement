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
                            <form class="" action="{{route('section.store')}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label><strong>Name:</strong> </label>
                                                <div>
                                                    <input type="text"  name="name" class="form-control"
                                                        required placeholder="Eneter Section name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label><strong> Room Name/NO:</strong></label>
                                                <div>
                                                    <input type="number"  name="roomno" class="form-control"
                                                        required placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>Class</strong></label>
                                                <select name="grade_id" class="form-control" required>
                                                    <option value="">--Select--</option>
                                                    @foreach (App\Models\Grade::all() as $grade)
                                                  <option value="{{$grade->classname}}">{{$grade->classname}}</option>     
                                                    @endforeach
                                                  </select>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>Teacher</strong></label>
                                                <select name="user_id" class="form-control" required>
                                                    <option value="">--Select--</option>
                                                    @foreach (App\Models\User::Teacher() as $user)
                                                    <option value="{{$user->name}}">{{$user->name}}</option>     
                                                    @endforeach
                                                  </select>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label><strong> Rank:</strong></label>
                                                <div>
                                                    <input type="number"  name="rank" class="form-control"
                                                        required placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label><strong> Capacity:</strong></label>
                                                <div>
                                                    <input type="number"  name="capacity" class="form-control"
                                                        required placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
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
                
                                        <h4 class="mt-0 header-title">Parients Datatable</h4>
                                        <p class="text-muted m-b-30 font-14">
                                        </p>
                
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>

                                                    <th>#</th>
                                                    <th>Section  Name</th>
                                                    <th>Class Name</th>
                                                    <th>Rank</th>
                                                    <th>Class Teacher</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach (App\Models\Section::all() as $key=> $section)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$section->name}}</td>
                                                    <td>{{$section->grade_id}}</td>
                                                    <td>{{$section->rank}}</td>
                                                    <td>{{$section->user_id}}</td>
                                                    <td>
                                                        <form action="{{route('section.destroy',$section->id)}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-primary btn-xs"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                    {{-- <td>
                                                        <button type="button" class="edit-btn btn btn-danger"
                                                            id="{{$grade->id}}" classname="{{$grade->classname}}"
                                                            data-toggle="modal" data-target="#edit-modal"><i
                                                                class="fa fa-pencil"></i></button>
        
                                                    </td> --}}
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



    