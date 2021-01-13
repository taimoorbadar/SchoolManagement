@extends('layout')
@section('title')
   Add  School  Packages 
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-200">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Enter School Packages </h4>
                        <p class="text-muted m-b-30 font-14"></p>
                    <form class="" action="{{route('package.store')}}"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>School Name</strong></label>
                                        <select name="school_id" class="form-control" required>
                                            <option value="">--Select--</option>
                                            @foreach (App\Models\User::School() as $section)
                                          <option value="{{$section->id}}">{{$section->school_name}}</option>     
                                            @endforeach
                                          </select>
                                    </div>
                                </div>                                                                  
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Packegs</strong></label>
                                        <select name="package" class="form-control" required>
                                            <option >--select--</option>
                                            <option value="basic">Basic-if=>50-100</option>
                                            <option value="silver">Silver-if=>200-300</option>
                                            <option value="gold">Gold-if=>300-500</option>
                                            
                                        </select>
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