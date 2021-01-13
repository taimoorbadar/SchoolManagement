@extends('layout')
@section('title')
CREATE ADMIN
@endsection
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">
        @if (Auth::user()->type=='superadmin')
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-cart-outline"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">{{$scount}}</span>
                        Total Schools
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">956</span>
                        New Orders
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">5210</span>
                        New Users
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-currency-btc"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">20544</span>
                        Unique Visitors
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 m-b-15 header-title">Recent Candidates</h4>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th> Name</th>
                                        <th> Email</th>
                                        <th> Type</th>
                                        <th> Password</th> 
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\User::showUsers() as $key => $user)
                                    <tr>
                                        
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->type}}</td>
                                        <td>{{$user->password}}</td>
                                        
                                <td>
                                    <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{route('user.edit',$user->id)}}"  class="btn btn-danger btn-xs btn-detail">Edit</a>
                                </td>
                                </tr>
                                @endforeach
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @elseif (Auth::user()->type=='teacher')
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-cart-outline"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">15852</span>
                        Total Sales
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">956</span>
                        New Orders
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">5210</span>
                        New Users
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-currency-btc"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">20544</span>
                        Unique Visitors
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4">

                                <h4 class="m-t-5 m-b-15 font-16">Created Events</h4>
                                <form method="post" id="add_event_form" class="m-t-5 m-b-20">
                                    <input type="text" class="form-control new-event-form"
                                        placeholder="Add new event..." />
                                </form>

                                <div id='external-events'>
                                    <h4 class="m-b-15 font-16">Draggable Events</h4>
                                    <div class='fc-event'>My Event 1</div>
                                    <div class='fc-event'>My Event 2</div>
                                    <div class='fc-event'>My Event 3</div>
                                    <div class='fc-event'>My Event 4</div>
                                    <div class='fc-event'>My Event 5</div>
                                </div>

                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="drop-remove">
                                    <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                </div>

                            </div>

                            <div id='calendar' class="col-xl-10 col-lg-9 col-md-8"></div>

                        </div>
                        <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        @elseif (Auth::user()->type=='admin')
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-cart-outline"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">15852</span>
                        Total Sales
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">956</span>
                        New Orders
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">5210</span>
                        New Users
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-primary">
                    <span class="mini-stat-icon"><i class="mdi mdi-currency-btc"></i></span>
                    <div class="mini-stat-info text-right text-white">
                        <span class="counter">20544</span>
                        Unique Visitors
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4">

                                <h4 class="m-t-5 m-b-15 font-16">Created Events</h4>
                                <form method="post" id="add_event_form" class="m-t-5 m-b-20">
                                    <input type="text" class="form-control new-event-form"
                                        placeholder="Add new event..." />
                                </form>

                                <div id='external-events'>
                                    <h4 class="m-b-15 font-16">Draggable Events</h4>
                                    <div class='fc-event'>My Event 1</div>
                                    <div class='fc-event'>My Event 2</div>
                                    <div class='fc-event'>My Event 3</div>
                                    <div class='fc-event'>My Event 4</div>
                                    <div class='fc-event'>My Event 5</div>
                                </div>

                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="drop-remove">
                                    <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                </div>

                            </div>

                            <div id='calendar' class="col-xl-10 col-lg-9 col-md-8"></div>

                        </div>
                        <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        @elseif (Auth::user()->type=='student')
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <div class="row">
                            {{-- <div class="col-xl-2 col-lg-3 col-md-4">
    
                                <h4 class="m-t-5 m-b-15 font-16">Created Events</h4>
                                <form method="post" id="add_event_form" class="m-t-5 m-b-20">
                                    <input type="text" class="form-control new-event-form" placeholder="Add new event..." />
                                </form>
    
                                <div id='external-events'>
                                    <h4 class="m-b-15 font-16">Draggable Events</h4>
                                    <div class='fc-event'>My Event 1</div>
                                    <div class='fc-event'>My Event 2</div>
                                    <div class='fc-event'>My Event 3</div>
                                    <div class='fc-event'>My Event 4</div>
                                    <div class='fc-event'>My Event 5</div>
                                </div>
    
                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="drop-remove">
                                    <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                </div>
    
                            </div> --}}

                            <div id='calendar' class="col-xl-12 col-lg-9 col-md-8"></div>

                        </div>
                        <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        @else
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4">

                                <h4 class="m-t-5 m-b-15 font-16">Created Events</h4>
                                <form method="post" id="add_event_form" class="m-t-5 m-b-20">
                                    <input type="text" class="form-control new-event-form"
                                        placeholder="Add new event..." />
                                </form>

                                <div id='external-events'>
                                    <h4 class="m-b-15 font-16">Draggable Events</h4>
                                    <div class='fc-event'>My Event 1</div>
                                    <div class='fc-event'>My Event 2</div>
                                    <div class='fc-event'>My Event 3</div>
                                    <div class='fc-event'>My Event 4</div>
                                    <div class='fc-event'>My Event 5</div>
                                </div>

                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="drop-remove">
                                    <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                </div>

                            </div>

                            <div id='calendar' class="col-xl-10 col-lg-9 col-md-8"></div>

                        </div>
                        <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        @endif
    </div>


</div>

@endsection