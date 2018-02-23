<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Flight Travel | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
   <!-- Morris chart -->
   <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">
   <!-- jvectormap -->
   <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
   <!-- Date Picker -->
   <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
   <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>Trav</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>AnyWhere</b>Travell</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            
            <!-- Notifications: style can be found in dropdown.less -->
            <!-- Tasks: style can be found in dropdown.less -->
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs" style="text-transform: capitalize;">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <p>
                    <span style="text-transform: capitalize;">
                      {{ Auth::user()->name }} <br>
                    </span>
                    {{ Auth::user()->email }}

                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right"> 
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Sign Out
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="text-transform: capitalize;">{{ Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li><a href="{{route('admin.rutetampil')}}"><i class="fa fa-book"></i> <span>RUTES</span></a></li>
        <li><a href="{{route('admin.costumer')}}"><i class="fa fa-book"></i> <span>CUSTOMER</span></a></li>
        <li><a href="{{route('admin.reservation')}}"><i class="fa fa-book"></i> <span>RESERVATION</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
      <h1 style="display: inline-block;">
        Customer 
        <small> {{$costumer->count('id')}} </small>
      </h1>
      <form action="{{ route('admin.costumer') }}" class="form-inline" style="display: inline-block;float: right; padding-right: 40px;" method="get" >                
        <div class="form-group">
          <input type="text" class="form-control" name="search" value="">
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit">
            <span class="fa fa-search"></span>
          </button>
        </div>
      </form>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <div class="col-md-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Action</th>
                  </tr>
                  <?php $no=1; ?>
                  @foreach($costumer as $costumers)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$costumers->name}}</td>
                    <td>{{$costumers->address}}</td>
                    <td>{{$costumers->phone}}</td>
                    <td>{{$costumers->gender}}</td>
                    <td>
                      <form action="{{route('costumer.destroy',$costumers)}}" method="post" style="
                      display: inline;">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger btn-xs">hapus</button>
                      </form>  
                      <a href="{{route('costumer.edit',$costumers)}}" style="
                      display: inline;">
                        <button type="submit" class="btn btn-primary btn-xs">edit</button>
                      </a>
                    </td>
                    <td>
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
              <div class="box-footer clearfix " style="border-top:0px;text-align: center;"> 
                  {{$costumer->links()}}
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>
