<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/AdminLTE.min.css')}}">
  <!-- Sidebar css -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/skin-blue.min.css')}}">
  <!-- Custom css-->
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="admin.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                          <img src="{{asset('bower_components/bootstrap/img/personel.jpg')}}" class="img-circle" alt="User Image">
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <!-- The message -->
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="{{asset('bower_components/bootstrap/img/personel.jpg')}}" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Somto Promise</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="{{asset('bower_components/bootstrap/img/personel.jpg')}}" class="img-circle" alt="User Image">

                  <p>
                    Somto Promise - Web Developer
                    <small>Member since Nov. 2012</small>
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
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                    Sign Out
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
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
          <img src="{{asset('bower_components/bootstrap/img/personel.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> Hello, Somto</p>
        </div>
      </div>

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="/"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li><a href="/HumanAtm"><i class="fa fa-link"></i> <span>Others/HumanATM</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Info boxes -->
      <div class="row">

        <a href="/admin/total">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
              <div class="info-box-content">
                <span class="info-box-number">120</span>
                <span class="info-box-text">Total Request</span>
              </div>
            </div>
          </div>
        </a>

        <a href="/admin/pending">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
              <div class="info-box-content">
                <span class="info-box-number">80</span>
                <span class="info-box-text">Pending Request</span>
              </div>
            </div>
          </div>
        </a>

        <!-- For small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <a href="/admin/completed">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
              <div class="info-box-content">
                <span class="info-box-number">40</span>
                <span class="info-box-text">Completed Request	</span>              
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- Setting a table -->
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Amount</th>
            <th>Location</th>          
          </tr>
        </thead>

        <tbody>        
          <tr>
            <td>Somto Promise</td>
            <td>N 20,000</td>
            <td>Anambra State</td>
            
          </tr>
          <tr>
            <td>Somto Promise</td>
            <td>N 20,000</td>
            <td>Anambra State</td>
          </tr>
          <tr>
            <td>Somto Promise</td>
            <td>N 20,000</td>
            <td>Anambra State</td>
          </tr>
          <tr>
            <td>Somto Promise</td>
            <td>N 20,000</td>
            <td>Anambra State</td>
          </tr>
          <tr>
            <td>Somto Promise</td>
            <td>N 20,000</td>
            <td>Anambra State</td>
          </tr>
          <tr>
            <td>Somto Promise</td>
            <td>N 20,000</td>
            <td>Anambra State</td>
          </tr>
        </tbody>
      </table>
      <!-- Table ends here -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer"
  <strong>Copyright &copy; 2017 <a href="#">HumanATM</a>.</strong> All rights reserved.
</footer>


<!-- jQuery 3 -->
<script src="{{asset('bower_components/bootstrap/dist/js/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('bower_components/bootstrap/dist/js/adminlte.min.js')}}"></script>

</body>
</html>