@extends('layout')
@section('title')
   Add School  Information 
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-200">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Enter School Information </h4>
                        <p class="text-muted m-b-30 font-14"></p>
                    <form class="" action="{{route('user.store')}}"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label><strong>School Name</strong></label>
                                        <div>
                                            <input type="text" name="school_name" class="form-control" required
                                                placeholder="Enter School name" />
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label><strong>School Address</strong></label>
                                        <div>
                                            <input type="text" name="school_address" class="form-control" required
                                                placeholder="Enter School Address" />
                                        </div>
                                    </div>
                                </div>                                   
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label><strong>School Email</strong></label>
                                        <div>
                                            <input type="email" name="school_email" class="form-control" required
                                                placeholder="demo@mail.com" />
                                        </div>
                                    </div>
                                </div>                              
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label><strong>School Phone Number</strong></label>
                                        <div>
                                            <input type="number" name="phone" class="form-control" required
                                                placeholder="+92-65248598" />
                                        </div>
                                    </div>
                                </div>                                
{{--                                  
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Packegs</strong></label>
                                        <select name="package" class="form-control" required>
                                            <option >--select--</option>
                                            <option value="basic">Basic</option>
                                            <option value="silver">Silver</option>
                                            <option value="gold">Gold</option>
                                            
                                        </select>
                                    </div>
                                </div>                                                               --}}
                               

                                <br><br>                                 
                                <div style="background-color: black;min-height:50px;width:100%">
                                    <h5 class="text-white text-center align-items-center justify-content-center"
                                      style="position: absolute;margin-left:10px">Login Details</h5>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form-group"><br><br>
                                          <label><strong>Name</strong></label>
                                          <div>
                                              <input type="text" name="name" class="form-control" required
                                                  placeholder="Enter Name" />
                                          </div>
                                      </div>
                                  </div>                                   
                                  <div class="col-lg-6">
                                      <div class="form-group"><br><br>
                                          <label><strong>Email</strong></label>
                                          <div>
                                              <input type="text" name="email" class="form-control" required
                                                  placeholder="Enter Email" />
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-6">
                                      <div class="form-group"><br><br>
                                          <label><strong>Password</strong></label>
                                          <div>
                                            <input class="form-control" value="admin" type="hidden" name="type"
                                            placeholder="Email">
                                              <input type="password" name="password" class="form-control" required
                                                  placeholder="Enter a paswsword" />
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label><strong>Profile Image</strong></label>
                                          <div>
                                              <input type="file" name="image" class="form-control" required
                                                  placeholder="Enter a image" />
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