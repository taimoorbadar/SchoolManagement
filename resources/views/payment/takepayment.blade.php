@extends('layout')
@section('title')
Take Payment Information 
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-200">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Enter  Information </h4>
                                <p class="text-muted m-b-30 font-14"></p>
                                <form class="" action="" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>School Name</strong></label>
                                                <select name="school_id" class="form-control" required>
                                                    <option value="">--Select--</option>
                                                    @foreach (App\Models\User::School() as $section)
                                                  <option value="{{$section->school_name}}">{{$section->school_name}}</option>     
                                                    @endforeach
                                                  </select>
                                            </div>
                                        </div>                                         
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>Package Name</strong></label>
                                                <select name="school_id" class="form-control" required>
                                                    <option value="">--Select--</option>
                                                    @foreach (App\Models\User::School() as $section)
                                                  <option value="{{$section->school_name}}">{{$section->school_name}}</option>     
                                                    @endforeach
                                                  </select>
                                            </div>
                                        </div>                                         
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""><strong>School Package</strong></label>
                                                <select name="school_id" class="form-control" required>
                                                    <option value="">--Select--</option>
                                                    @foreach (App\Models\User::School() as $section)
                                                  <option value="{{$section->school_name}}">{{$section->school_name}}</option>     
                                                    @endforeach
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
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                
                
                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                           
                                            </tbody>
                                        </table>
                
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                </div>
            </div>

        </div>
        @endsection



    