@extends('layout')
@section('title')
Income Add
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-200">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Enter Incom Information </h4>
                        <p class="text-muted m-b-30 font-14"></p>
                        <form class="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Date</strong></label>
                                        <div>
                                            <input type="date" name="email" class="form-control" required
                                                placeholder="Enter a title" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Account Bank</strong></label>
                                        <select name="partner" class="form-control" required>
                                            <option value="jet charter"></option>
                                            <option value="jet charter">Male</option>
                                            <option value="helicopter charter">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Account</strong></label>
                                        <div>
                                            <input type="date" name="email" class="form-control" required
                                                placeholder="Enter a title" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Income Type</strong></label>
                                        <select name="partner" class="form-control" required>
                                            <option value="jet charter"></option>
                                            <option value="jet charter">Male</option>
                                            <option value="helicopter charter">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Payer</strong></label>
                                        <select name="partner" class="form-control" required>
                                            <option value="jet charter"></option>
                                            <option value="jet charter">Male</option>
                                            <option value="helicopter charter">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Payment Method</strong></label>
                                        <select name="partner" class="form-control" required>
                                            <option value="jet charter"></option>
                                            <option value="jet charter">Male</option>
                                            <option value="helicopter charter">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Refrence </strong></label>
                                        <div>
                                            <input type="text" name="lname" class="form-control" required
                                                placeholder="Last Name" />
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Attachment </strong></label>
                                        <div>
                                            <input type="file" name="lname" class="form-control" required
                                                placeholder="Last Name" />
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Note </strong></label>
                                        <div>
                                            <input type="file" name="lname" class="form-control" required
                                                placeholder="Last Name" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
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