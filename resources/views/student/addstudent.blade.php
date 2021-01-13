@extends('layout')
@section('title')
   Add Student Information 
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
                    <form class="" action="{{route('user.store')}}"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Full Name</strong></label>
                                        <div>
                                            <input type="text" name="name" class="form-control" required
                                                placeholder="Enter Student name" />
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Gender</strong></label>
                                        <select name="gender" class="form-control" required>
                                            <option value="">--select--</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>                                 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Blood Goup</strong></label>
                                        <select name="blood_group" class="form-control" required>
                                            <option value="">--select--</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            
                                        </select>
                                    </div>
                                </div>                                 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Religion</strong></label>
                                        <select name="religion" class="form-control" required>
                                            <option>--select--</option>
                                            <option value="Muslim">Mulim</option>
                                            <option value="Non Muslim">Non Muslim</option>
                                        </select>
                                    </div>
                                </div>                               
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>BirthDay </strong></label>
                                        <div>
                                            <input type="date" name="dob" class="form-control" required
                                                placeholder="Enter Date of Birth" />
                                        </div>
                                    </div>
                                </div>                               
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Phone </strong></label>
                                        <div>
                                            <input type="number" name="student_phone" class="form-control" required
                                                placeholder="Last Name" />
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Address </strong></label>
                                        <div>
                                            <input type="text" name="address" class="form-control" required
                                                placeholder="Enter Address" />
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>State </strong></label>
                                        <div>
                                            <input type="text" name="state" class="form-control" required
                                                placeholder="Enterb State" />
                                        </div>
                                    </div>
                                </div>                                

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class=""><strong>Teacher</strong></label>
                                        <select name="teacher_id" class="form-control" required>
                                            <option value="">--Select--</option>
                                            @foreach (App\Models\user::Teacher() as $user)
                                          <option value="{{$user->name}}">{{$user->name}}</option>     
                                            @endforeach
                                          </select>
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
                                        <label class=""><strong>Section</strong></label>
                                        <select name="section_id" class="form-control" required>
                                            <option value="">--Select--</option>
                                            @foreach (App\Models\Section::all() as $section)
                                          <option value="{{$section->name}}">{{$section->name}}</option>     
                                            @endforeach
                                          </select>
                                    </div>
                                </div>  
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>ID Card No</strong></label>
                                        <div>
                                            <input type="number" name="idcard" class="form-control" required
                                                placeholder="Enter a Id Card Number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Roll No</strong></label>
                                        <div>
                                            <input type="text" name="rollno" class="form-control" required
                                                placeholder="Enter a account name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Extra Curricular Activities</strong></label>
                                        <div>
                                            <input type="text" name="extra" class="form-control" required
                                                placeholder="Enter a Extra Curricular" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Remarks</strong></label>
                                        <div>
                                            <input type="text" name="remarks" class="form-control" required
                                                placeholder="Enter a account name" />
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div style="background-color: black;min-height:50px;width:100%">
                                  <h5 class="text-white text-center align-items-center justify-content-center"
                                    style="position: absolute;margin-left:10px">Parients Details</h5>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><br>
                                        <label><strong>Father Name</strong></label>
                                        <div>
                                            <input type="text" name="father_name" class="form-control" required
                                                placeholder="Enter a account name" />
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="col-lg-6">
                                    <div class="form-group"><br>
                                        <label><strong>Mother's Name</strong></label>
                                        <div>
                                            <input type="text" name="mother_name" class="form-control" required
                                                placeholder="Enter a Mother Name" />
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Father's Profession</strong></label>
                                        <div>
                                            <input type="text" name="father_profession" class="form-control" required
                                                placeholder="Enter a Father Profession" />
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><strong>Phone</strong></label>
                                        <div>
                                            <input type="text" name="father_phone" class="form-control" required
                                                placeholder="Enter a Father Phone" />
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
                                              <input type="text" name="email" class="form-control" required
                                                  placeholder="Enter Student Email" />
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-6">
                                      <div class="form-group"><br><br>
                                          <label><strong>Password</strong></label>
                                          <div>
                                            <input class="form-control" value="3" type="hidden" name="type"
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