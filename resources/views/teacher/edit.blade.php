@extends('layout')
@section('title')
Teacher Add
@endsection
@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-200">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Enter Contact Information </h4>
                        <p class="text-muted m-b-30 font-14"></p>
                        <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Full Name</strong></label>
                                        <div>
                                        <input type="text" name="name" value="{{$user->name}}" class="form-control" required
                                                placeholder="Enter a teacher name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Designation</strong></label>
                                        <select name="designation"  class="form-control" required>
                                        <option value="{{$user->designation}}">{{$user->designation}}</option>
                                            <option value="">--select--</option>
                                        <option value="Senior Teacher">Senior Teacher</option>
                                        <option value="Junior Teacher">Junior Teacher</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Gender</strong></label>
                                        <select name="gender" class="form-control" required>
                                           <option value="{{$user->gender}}">{{$user->gender}}</option>
                                           <option value="">--select--</option>
                                            <option value="male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Religion</strong></label>
                                        <select name="religion" class="form-control" required>
                                        <option value="{{$user->religion}}">{{$user->religion}}</option>
                                            <option value="">--select--</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Non Muslim">Non Muslim</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>BirthDay </strong></label>
                                        <div>
                                            <input type="date" name="dob" value="{{$user->dob}}" class="form-control" required
                                                placeholder=" Date Of Birth" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Phone </strong></label>
                                        <div>
                                            <input type="number" name="phone" value="{{$user->phone}}" class="form-control" required
                                                placeholder="Phone number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Address </strong></label>
                                        <div>
                                            <input type="text" name="address" value="{{$user->address}}" class="form-control" required
                                                placeholder="Enter Address" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Joining Date </strong></label>
                                        <div>
                                            <input type="date" name="join_date" value="{{$user->join_date}}" class="form-control" required
                                                placeholder="Join Date" />
                                        </div>
                                    </div>
                                </div>
                                <div style="background-color: black;min-height:50px;width:100%">
                                    <h5 class="text-white text-center align-items-center justify-content-center"
                                        style="position: absolute;margin-left:10px">Login Details</h5>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><br><br>
                                        <label><strong>Email</strong></label>
                                        <div>
                                            <input type="email" name="email" value="{{$user->email}}" class="form-control" required
                                                placeholder="Enter  Email " />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><br><br>
                                        <label><strong>Password</strong></label>
                                        <div>
                                            <input class="form-control" value="2" type="hidden" name="type"
                                                placeholder="Email">
                                            <input type="password" name="password" value="{{$user->password}}" class="form-control" required
                                                placeholder="Enter Password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Profile Image</strong></label>
                                        <div>
                                            <input type="file" name="image" value="{{$user->image}}" class="form-control" required
                                                placeholder="Enter a Image" />
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