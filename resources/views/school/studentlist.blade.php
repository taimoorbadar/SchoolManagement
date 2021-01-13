@extends('layout')
@section('title')
    Student List of Schools
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Class List Datatable</h4>
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
                            
                                <tr>
                                    
                                    <td>abc</td>
                                    <td>abc</td>
                                    <td>abc</td>
                                    <td>abc</td>
                                    <td>abc</td>
                                    <td>abc</td>
                           
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


    </div><!-- container-fluid -->


</div>
@endsection