<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>@yield('title')</title>
  <meta content="Admin Dashboard" name="description" />
  <meta content="ThemeDesign" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
  <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet" />
  @yield('style')
</head>

<body class="fixed-left">

  <!-- Loader -->
  <div id="preloader">
    <div id="status">
      <div class="spinner"></div>
    </div>
  </div>

  <!-- Begin page -->
  <div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
      <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
      </button>

      <!-- LOGO -->
      <div class="topbar-left">
        <div class="text-center">
          <!--<a href="index.html" class="logo">Admiry</a>-->
          {{-- <a href="{{route('dashboard')}}" class="logo"><img src="{{asset('images/logo.jpg')}}" height="112"
            alt="logo"></a> --}}
        </div>
      </div>

      <div class="sidebar-inner slimscrollleft">

        <div class="user-details">
          <div class="text-center">
            <img src="{{asset('images/b.jpg')}}" alt="" class="rounded-circle">
          </div>
          <div class="user-info">
            <h4 class="font-16">{{Auth::user()->name}}</h4>
            <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i>
              @if (Auth::user()->type=='superadmin')
             Super ADMIN PANEL
              @elseif(Auth::user()->type=='admin')
              Admin PANEL
              @elseif(Auth::user()->type=='teacher')
              Teacher PANEL
              @else
              Student PANEL
              @endif

            </span>
          </div>
        </div>

        <div id="sidebar-menu">
          <ul>
            <li>
              <a href="{{('/')}}" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span> Dashboard <span class="badge badge-primary pull-right">8</span></span>
              </a>
            </li>
            @if (Auth::user()->type=='admin')
            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> Students </span>
              </a>
              <ul class="list-unstyled">
                <li><a href="{{route('student.index')}}">Students</a></li>
                <li><a href="{{route('promote.index')}}">Promote student</a></li>
              </ul>
            </li>
            <li>
              <a href="{{route('student.index')}}" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span> Parients <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>
            <li>
              <a href="{{route('teacher.index')}}" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span> Teachers <span class="badge badge-primary pull-right"></span></span>
              </a>
            </li>
            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cube-outline"></i> <span> Academic
                </span> </a>
              <ul class="list-unstyled">
                <li><a href="{{route('grade.index')}}">Class</a></li>
                <li><a href="{{route('section.index')}}">Section</a></li>
                <li><a href="{{route('subject.index')}}">Subject</a></li>
                <li><a href="{{('assign_subject')}}">Assign Subjects</a></li>
                <li><a href="{{('syllabus')}}">Syllabus</a></li>
                <li><a href="{{('assignment')}}">Assignments</a></li>
                {{-- <li><a href="{{('grade_routne')}}">Class Routine</a>
            </li> --}}

          </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Attendance </span>
            </a>
            <ul class="list-unstyled">
              <li><a href="{{('studentattendance')}}">Student Attendance</a></li>
              <li><a href="{{('staffattendance')}}">Staff Attendance</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Bank / Cash Account
              </span> </a>
            <ul class="list-unstyled">
              <li><a href="{{('bankdetails')}}">Accounts DEtails</a></li>

            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span>
                Transcation </span></a>
            <ul class="list-unstyled">
              <li><a href="{{('income')}}">Incom</a></li>
              <li><a href="{{('expense')}}">Expense</a></li>
              <li><a href="{{('chartaccount')}}">Chart Of Accounts</a></li>
              <li><a href="{{('paymentmethod')}}">Payment Method</a></li>
              <li><a href="{{('pay&payer')}}">Payee & Payer</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Student
                Fees </span></a>
            <ul class="list-unstyled">
              <li><a href="{{('feetype')}}">Fee Type</a></li>
              <li><a href="{{('createinovice')}}">Generate Invoice</a></li>
              <li><a href="{{('allinvoice')}}">Student Invoices</a></li>
              <li><a href="{{('paymenthistory')}}">Payment Histor</a></li>

            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-line"></i><span> Library
              </span></a>
            <ul class="list-unstyled">
              <li><a href="{{('member')}}">Memeber</a></li>
              <li><a href="{{('book')}}">Books</a></li>
              <li><a href="{{('bookcategory')}}">Book Category</a></li>
              <li><a href="{{('librarycreate')}}">Add Issues</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span>
                Transport </span></a>
            <ul class="list-unstyled">
              <li><a href="{{('vehicel')}}">Vehicles</a></li>
              <li><a href="{{('transport')}}">Transport</a></li>
              <li><a href="{{('trasportmember')}}">Memebers</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-maps"></i><span> Hostel
              </span></a>
            <ul class="list-unstyled">
              <li><a href="{{('hostelcreate')}}"> Hostel</a></li>
              <li><a href="{{('hostelcategory')}}"> Categories</a></li>
              <li><a href="{{('member')}}"> Members</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Examination
              </span></a>
            <ul class="list-unstyled">
              <li><a href="{{('examlist')}}">Exam List</a></li>
              <li><a href="{{('examattendence')}}">Exam Schedule</a></li>
              <li><a href="{{('examschedule')}}">Exam Attendance</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Marks
              </span></a>
            <ul class="list-unstyled">
              <li><a href="pages-timeline.html">Marks</a></li>
              <li><a href="pages-timeline.html">Student Rank</a></li>
              <li><a href="pages-timeline.html">Mark Register</a></li>
              <li><a href="pages-timeline.html">Grade Setup</a></li>
              <li><a href="pages-timeline.html">Mark Distribution</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Message
              </span></a>
            <ul class="list-unstyled">
              <li><a href="pages-timeline.html">New Message</a></li>
              <li><a href="pages-timeline.html">Inbox Items</a></li>
              <li><a href="pages-timeline.html">Send Items</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Emails
              </span></a>
            <ul class="list-unstyled">
              <li><a href="pages-timeline.html">Send Email</a></li>
              <li><a href="pages-timeline.html"> Email Log</a></li>
              <li><a href="pages-timeline.html">Send SMS</a></li>
              <li><a href="pages-timeline.html"> SMS Log</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Notice
              </span></a>
            <ul class="list-unstyled">
              <li><a href="pages-timeline.html">All Notice</a></li>
              <li><a href="pages-timeline.html">New Notice </a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Events
              </span></a>
            <ul class="list-unstyled">
              <li><a href="pages-timeline.html">All Events</a></li>
              <li><a href="pages-timeline.html">Add New Events</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Reports
              </span></a>
            <ul class="list-unstyled">
              <li><a href="pages-timeline.html">Student Attendance</a></li>
              <li><a href="pages-timeline.html">Staff Attendance</a></li>
              <li><a href="pages-timeline.html">Student ID Card</a></li>
              <li><a href="pages-timeline.html">Exam Report</a></li>
              <li><a href="pages-timeline.html">Progrss Card</a></li>
              <li><a href="pages-timeline.html">Class Routine</a></li>
              <li><a href="pages-timeline.html">Exam Routine</a></li>
              <li><a href="pages-timeline.html">Expense Reports</a></li>
              <li><a href="pages-timeline.html">Financial Account Balance</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Administration
              </span></a>
            <ul class="list-unstyled">
              <li><a href="pages-timeline.html">System Settings</a></li>
              <li><a href="pages-timeline.html">Adademic Session</a></li>
              <li><a href="pages-timeline.html">Student Group</a></li>
              <li><a href="pages-timeline.html">Picklist Editor</a></li>
              <li><a href="pages-timeline.html">User Role</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> User
                Management </span></a>
          </li>
          @elseif(Auth::user()->type=='teacher')
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> User
                Management </span></a>
          </li>
          @elseif(Auth::user()->type=='student')
          <li class="has_sub">
            <a href="" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> User Management </span></a>
          </li>
          @elseif(Auth::user()->type=='superadmin')
          <li>
            <a href="{{route('school.create')}}" class="waves-effect">
              <i class="mdi mdi-buffer"></i>
              <span> Create Schools <span class="badge badge-primary pull-right"></span></span>
            </a>
          </li>
          <li>
            <a href="{{route('package.create')}}" class="waves-effect">
              <i class="mdi mdi-album"></i>
              <span> School Packages <span class="badge badge-primary pull-right"></span></span>
            </a>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Manage
                Schools </span></a>
            <ul class="list-unstyled">
              <li><a href="{{route('school.index')}}">Current School List</a></li>
              <li><a href="{{('classlist')}}">Class List Per School </a></li>
              <li><a href="{{('studentlist')}}">Student List Per School</a></li>
              <li><a href="{{('status')}}"> School Status</a></li>
              <li><a href="{{route('package.index')}}"> Packages</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="" class="waves-effect"><i class="mdi mdi-buffer"></i><span>Manag School payment</span></a>
            <ul class="list-unstyled">
              <li><a href="{{('takepayment')}}">Take Payment</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span>Manage
                Payment</span></a>
            <ul class="list-unstyled">
              <li><a href="">Total Monthly Income</a></li>
              <li><a href="">Total Monthly Expense</a></li>
            </ul>
          </li>
          <li>
            <a href="{{route('user.index')}}" class="waves-effect">
              <i class="mdi mdi-buffer"></i>
              <span> Profile Management <span class="badge badge-primary pull-right"></span></span>
            </a>
          </li>
          @else
          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span>Packages
              </span></a>
          </li>
          @endif
          </ul>
        </div>
        <div class="clearfix"></div>
      </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
      <!-- Start content -->
      <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">

          <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">


              <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                  role="button" aria-haspopup="false" aria-expanded="false">
                  <img src="{{asset('images/b.jpg')}}" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                  <a class="dropdown-item" href="{{route('user.logout')}}"><i
                      class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                </div>
              </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
              <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                  <i class="ion-navicon"></i>
                </button>
              </li>
              <li class="hide-phone list-inline-item app-search">
                <h3 class="page-title">@yield('title')</h3>
              </li>
            </ul>

            <div class="clearfix"></div>

          </nav>

        </div>
        <!-- Top Bar End -->



        @yield('content')
        <!-- Page content Wrapper -->

      </div> <!-- content -->

      <footer class="footer">
        © 2020 School Management- By Al-HAQ
      </footer>

    </div>
  </div>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/tether.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
  <script src="{{asset('assets/js/detect.js')}}"></script>
  <script src="{{asset('assets/js/fastclick.js')}}"></script>
  <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
  <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
  <script src="{{asset('assets/js/waves.js')}}"></script>
  <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
  <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

  <!--Morris Chart-->
  <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
  <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
  <script src="{{asset('assets/pages/dashborad.js')}}"></script>
  <!--Data tabel-->
  <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <!-- Buttons examples -->
  <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
  <!-- Responsive examples -->
  <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

  <!-- Datatable init js -->
  <script src="{{asset('assets/pages/datatables.init.js')}}"></script>
  <!-- App js -->
  <script src="{{asset('assets/js/app.js')}}"></script>

  <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
  <script src="{{asset('assets/plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
  <script src="{{asset('assets/pages/calendar-init.js')}}"></script>

  <script src="{{asset('toastr/toastr.min.js')}}"></script>
  @toastr_render
  @yield('scripts')
</body>


</html>