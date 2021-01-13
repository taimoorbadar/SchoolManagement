@extends('layout')
@section('title')
Subject Add
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-200">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Enter Subject Information </h4>
                                <p class="text-muted m-b-30 font-14"></p>
                            <form class="" action="{{route('subject.store')}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label><strong> Subject Name:</strong></label>
                                                <div>
                                                    <input type="text"  name="name" class="form-control"
                                                        required placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label><strong>Subject Code:</strong> </label>
                                                <div>
                                                    <input type="text"  name="scode" class="form-control"
                                                        required placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>Subject type</strong></label>
                                                <select name="stype" class="form-control" required>
                                                    <option value="">--select--</option>
                                                    <option value="Theory">Theory</option>
                                                    <option value="Theory">Paractical</option>
                                                  </select>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>Class</strong></label>
                                                <select name="grade_id" class="form-control" required>
                                                    <option>--Select--</option>
                                                    @foreach (App\Models\Grade::all() as $grade)
                                                  <option value="{{$grade->id}}">{{$grade->classname}}</option>     
                                                    @endforeach
                                                  </select>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label><strong>Full Marks:</strong> </label>
                                                <div>
                                                    <input type="number"  name="fmarks" class="form-control"
                                                        required placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label><strong>Passing Marks:</strong> </label>
                                                <div>
                                                    <input type="number"  name="pmarks" class="form-control"
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
                
            </div>

        </div>
        @endsection



    