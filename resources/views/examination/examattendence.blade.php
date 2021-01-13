@extends('layout')
@section('title')
Exam Create Add
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-200">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Exam Create Information </h4>
                                <p class="text-muted m-b-30 font-14"></p>
                                <form class="" action="" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">                                        
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>Select Class</strong></label>
                                                <select name="partner" class="form-control" required>
                                                    <option value="jet charter">Male</option>
                                                    <option value="helicopter charter">Female</option>
                                                </select>
                                            </div>
                                        </div>                                       
                                         <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>Select Section</strong></label>
                                                <select name="partner" class="form-control" required>
                                                    <option value="jet charter">Male</option>
                                                    <option value="helicopter charter">Female</option>
                                                </select>
                                            </div>
                                        </div>                                       
                                         <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>Select Subject</strong></label>
                                                <select name="partner" class="form-control" required>
                                                    <option value="jet charter">Male</option>
                                                    <option value="helicopter charter">Female</option>
                                                </select>
                                            </div>
                                        </div>                                         
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>Select Exam</strong></label>
                                                <select name="partner" class="form-control" required>
                                                    <option value="jet charter">Male</option>
                                                    <option value="helicopter charter">Female</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                         <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>Select Attendence</strong></label>
                                                <select name="partner" class="form-control" required>
                                                    <option value="jet charter">Male</option>
                                                    <option value="helicopter charter">Female</option>
                                                </select>
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



    