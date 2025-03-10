<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CCS Attendance</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Stylesheets -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="{{asset('solmusic/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('solmusic/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('solmusic/css/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('solmusic/css/slicknav.min.css')}}" />

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="{{asset('solmusic/css/style.css')}}" />


  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="{{asset('/AdminLTE-master/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
  <link rel="stylesheet" href="{{asset('/AdminLTE-master/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <link rel="stylesheet" href="{{asset('/AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
  <link rel="stylesheet" href="{{asset('/AdminLTE-master/plugins/jqvmap/jqvmap.min.css')}}">

  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
  <link rel="stylesheet" href="{{asset('/AdminLTE-master/dist/css/adminlte.min.css')}}">

  <!-- overlayScrollbars -->
  <!-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
  <link rel="stylesheet" href="{{asset('/AdminLTE-master/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> -->
  <link rel="stylesheet" href="{{asset('/AdminLTE-master/plugins/daterangepicker/daterangepicker.css')}}">

  <!-- summernote -->
  <!-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css"> -->
  <link rel="stylesheet" href="{{asset('/AdminLTE-master/plugins/summernote/summernote-bs4.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

</head>
<script type="text/javascript">
  function zoom() {
      document.body.style.zoom = "100%" 
  }
</script>
<body onload="zoom()" class="hold-transition sidebar-mini layout-fixed">
  <!-- Page Preloder -->
 <div id="preloder">
    <div class="loader"></div>
  </div>
<div class="wrapper">
<div class="wrapper">

  <!-- Navbar -->
  @include("navbar")
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/dashboard')}}" class="brand-link">
      <img src="/AdminLTE-master/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CCS Attendance</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="/AdminLTE-master/dist/img/asma.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <span class="text-white">Welcome! {{ ucfirst(Auth()->user()->name) }}</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active text-white">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></!-->
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/record')}}" class="nav-link text-white">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/professor')}}" class="nav-link text-white">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Professor Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/subject')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subject Management</p>
                </a>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    @if (Session::has('message'))
      <div class="alert alert-danger">
        {{Session::get('message')}}
      </div>
      @endif

      @if (Session::has('success'))
      <div class="alert alert-success">
        {{Session::get('success')}}
      </div>
      @endif
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subject Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Subject Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if($layout == 'subjectIndex')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-12">
                    @include("subjectslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'subjectCreate')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("subjectslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <div class="card-body">
                        <blockquote class="card-title">Enter the information of the new subject</blockquote>
                        <br>
                        <form action="{{ url('/subjectStore') }}" method="post">
                            @csrf
                            <br>
                            <br>
                            <div class="form-group">
                            <label>Assign Semester</label>
                                <div class="form-group col-12">
                                    <label for="sem">Select Semester</label>
                                    <select name="sem" class="btn btn-sm btn-outline-dark " required>
                                        <option value="1">1st Semester</option>
                                        <option value="2">2nd Semester</option>
                                        <option value="3">Summer</option>
                                    </select><br>
                                </div>
                                
                                <div class="form-group col-6">
                                    <label for="from">From Year</label>
                                        <input type="text" id="date-from" name="from" class="btn btn-sm btn-outline-dark d-inline" value="2020" required>
                                </div>

                                <div class="form-group col-6">
                                    <label for="to">To Year</label><br>
                                        <input type="text" id="date-to" name="to" class="btn btn-sm btn-outline-dark d-inline" value="2020" required><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Subject Title</label>
                                <input name="Subj_title" type="text" class="form-control"  placeholder="Enter Subject Title" required>
                            </div>
                            <div class="form-group">
                                <label>Subject Day</label>
                                <div class="form-group clearfix">
                                  <blockquote>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Mon"  name="Subj_dayM" value="1">
                                    <label for="Mon">
                                      Mon
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Tue" name="Subj_dayT" value="1">
                                    <label for="Tue">
                                      Tue
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Wed" name="Subj_dayW" value="1">
                                    <label for="Wed">
                                      Wed
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Thu" name="Subj_dayTH" value="1">
                                    <label for="Thu">
                                      Thu
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Fri" name="Subj_dayF" value="1">
                                    <label for="Fri">
                                      Fri
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Sat" name="Subj_dayS" value="1">
                                    <label for="Sat">
                                    Sat
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Sun" name="Subj_daySu" value="1">
                                    <label for="Sun">
                                    Sun
                                    </label>
                                  </div>
                                  </blockquote>
                                </div>
                                
                                <!-- <input name="Subj_day" type="text" class="form-control"  placeholder="Enter Subject Day"> -->
                            </div>

                            
                            <div class="form-group">
                                <label>Subject Time</label><br>
                                <blockquote class="d-inline"> From</blockquote>
                                <input type="time" class="d-inline" name="Subj_timein" required>
                                <blockquote class="d-inline">to</blockquote><input type="time" class="d-inline" name="Subj_timeout" required>
                                <!-- <input name="Subj_time" type="text" class="form-control"  placeholder="Enter Subject Time"> -->
                            </div>
                            
                            <div class="form-group">
                                <label>Subject Description</label>
                                <input name="Subj_desc" type="text" class="form-control"  placeholder="Subject Description" required>
                            </div>

                            <div class="form-group">
                                <label>Subject Units</label>
                                <input name="Subj_units" type="number" class="form-control"  placeholder="Subject Units" required>
                            </div>

                            <div class="form-group">
                                <label>Subject Room</label>
                                <input name="Subj_room" type="text" class="form-control"  placeholder="Subject Room" required>
                            </div>

                            <div class="form-group">
                                <label>Subject Year & Section</label>
                                <input name="Subj_yr_sec" type="text" class="form-control"  placeholder="Subject Year & Section" required>
                            </div>

                            <div class="form-group">
                                <label>Professor Code</label>
                                <select id="code" name="Prof_code" class="form-control" >
                                <!-- <input name="Prof_code" type="text" class="form-control"  placeholder="Professor Code"> -->
                                @foreach($professors as $professor)
                                  <option value="{{$professor->Prof_code}}">{{$professor->Prof_code}}</option>
                                @endforeach
                                </select>
                            </div>

                            <input type="submit" class="btn btn-info" value="Save">
                            <!-- <input type="reset" class="btn btn-warning" value="Reset"> -->
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'subjectShow')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("subjectslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'subjectEdit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("subjectslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of subject</h5>
                        <form action="{{ url('/subjectUpdate/'.$subject->id) }}" method="post">
                            @csrf
                            <br>
                            <div class="form-group">
                                <label>Subject Title</label>
                                <input value="{{ $subject->Subj_title }}" name="Subj_title" type="text" class="form-control"  placeholder="Enter First Name" required>
                            </div>
                            <div class="form-group">
                                <label>Subject Day</label>
                                <div class="form-group clearfix">
                                  <blockquote>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Mon"  name="Subj_dayM" value="1" @if($subject->Subj_dayM == 1 ) checked @endif>
                                    <label for="Mon">
                                      Mon
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Tue" name="Subj_dayT" value="1" @if($subject->Subj_dayT == 1 ) checked @endif>
                                    <label for="Tue">
                                      Tue
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Wed" name="Subj_dayW" value="1" @if($subject->Subj_dayW == 1 ) checked @endif>
                                    <label for="Wed">
                                      Wed
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Thu" name="Subj_dayTH" value="1" @if($subject->Subj_dayTH == 1 ) checked @endif>
                                    <label for="Thu">
                                      Thu
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Fri" name="Subj_dayF" value="1" @if($subject->Subj_dayF == 1 ) checked @endif>
                                    <label for="Fri">
                                      Fri
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Sat" name="Subj_dayS" value="1" @if($subject->Subj_dayS == 1 ) checked @endif>
                                    <label for="Sat">
                                    Sat
                                    </label>
                                  </div>
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="Sun" name="Subj_daySu" value="1" @if($subject->Subj_daySu == 1 ) checked @endif>
                                    <label for="Sun">
                                    Sun
                                    </label>
                                  </div>
                                  </blockquote>
                                </div>
                                <!-- <input  name="Subj_day" type="text" class="form-control"  placeholder="Enter Last Name"> -->
                            </div>

                            
                            <div class="form-group">
                                <label>Subject Time</label><br>
                                <blockquote class="d-inline"> From</blockquote>
                                <input type="time" class="d-inline" value="{{ $subject->Subj_timein }}" name="Subj_timein" required>
                                <blockquote class="d-inline">to</blockquote><input type="time" class="d-inline" value="{{ $subject->Subj_timeout }}" name="Subj_timeout" required>
                                <!-- <input name="Subj_time" type="text" class="form-control"  placeholder="Enter Middle Name"> -->
                            </div>
                            
                            <div class="form-group">
                                <label>Subject Description</label>
                                <input value="{{ $subject->Subj_desc }}" name="Subj_desc" type="text" class="form-control"  placeholder="Subject Description" required>
                            </div>

                            <div class="form-group">
                                <label>Subject Units</label>
                                <input value="{{ $subject->Subj_units }}" name="Subj_units" type="number" class="form-control"  placeholder="Subject Units" required>
                            </div>

                            <div class="form-group">
                                <label>Subject Room</label>
                                <input value="{{ $subject->Subj_room }}" name="Subj_room" type="text" class="form-control"  placeholder="Subject Room" required>
                            </div>

                            <div class="form-group">
                                <label>Subject Year & Section</label>
                                <input value="{{ $subject->Subj_yr_sec }}" name="Subj_yr_sec" type="text" class="form-control"  placeholder="Subject Year & Section" required>
                            </div>

                            <div class="form-group">
                                <label>Professor Code</label>
                                <select id="code" class="form-control" name="Prof_code">
                                  <option value="{{ $subject->Prof_code }}">{{ $subject->Prof_code }}</option>
                                  @foreach($professors as $professor)
                                    <option value="{{$professor->Prof_code}}">{{$professor->Prof_code}}</option>
                                  @endforeach
                                </select>
                                <!-- <input  name="Prof_code" type="text" class="form-control"  placeholder="Professor Code"> -->
                            </div>

                            <input type="submit" class="btn btn-info" value="Update">
                            <!-- <input type="submit" onclick="return confirm('Are you sure?')"  class="btn btn-danger" formaction="{{ url('/subjectDelete/'.$subject->id) }}" value="Delete"> -->

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif
        <!-- @include("subjectslist") -->
        <!-- <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div> -->
        <!-- /.card-footer -->
        </section>
    </div>
    </div>

  <!-- /.content-wrapper -->
  @include("footer")
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/jquery/jquery.min.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
<!-- <script src="plugins/jquery-ui/jquery-ui.min.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- ChartJS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/chart.js/Chart.min.js')}}"></script>

<!-- Sparkline -->
<!-- <script src="plugins/sparklines/sparkline.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/sparklines/sparkline.js')}}"></script>

<!-- JQVMap -->
<!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/jqvmap/jquery.vmap.min.js')}}"></script>

<!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<!-- jQuery Knob Chart -->
<!-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- daterangepicker -->
<!-- <script src="plugins/moment/moment.min.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/moment/moment.min.js')}}"></script>

<!-- <script src="plugins/daterangepicker/daterangepicker.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Summernote -->
<!-- <script src="plugins/summernote/summernote-bs4.min.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- overlayScrollbars -->
<!-- <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<script src="{{asset('/AdminLTE-master/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.js"></script> -->
<script src="{{asset('/AdminLTE-master/dist/js/adminlte.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<script src="{{asset('/AdminLTE-master/dist/js/pages/dashboard.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<script src="{{asset('/AdminLTE-master/dist/js/demo.js')}}"></script>

<!--====== Javascripts & Jquery ======-->
<script src="{{asset('/solmusic/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('/solmusic/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/solmusic/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('/solmusic/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/solmusic/js/mixitup.min.js')}}"></script>
<script src="{{asset('/solmusic/js/main.js')}}"></script>
</body>
</html>
