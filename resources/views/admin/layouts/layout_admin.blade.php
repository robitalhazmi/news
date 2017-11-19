<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @yield('link')

</head>
<body class="hold-transition skin-blue sidebar-mini" id="modal-open">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('landing') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>N</b>WS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>N</b>EWS</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('dist/img/logo-unair-color.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('dist/img/logo-unair-color.png') }}" class="img-circle" alt="User Image">

                <p>
                  Admin
                  {{-- <small>Member since Nov. 2012</small> --}}
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Keluar</a>
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
          <img src="{{ asset('dist/img/logo-unair-color.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li id="master" class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul id="master-ul" class="treeview-menu" style="display: none;">
            <li id="category">
              <a href="{{ route('admin.category') }}"><i class="fa fa-circle-o"></i> Rubrik</a>
            </li>
            <li id="news">
              <a href="{{ route('admin.news') }}">
                <i class="fa fa-dashboard"></i> <span>Berita</span>
              </a>
            </li>
            <li id="user">
              <a href="{{ route('admin.user') }}">
                <i class="fa fa-dashboard"></i> <span>Pengguna</span>
              </a>
            </li>
            <li id="breaking">
              <a href="{{ route('admin.breaking') }}">
                <i class="fa fa-dashboard"></i> <span>Breaking News</span>
              </a>
            </li>
            <li id="banner">
              <a href="{{ route('admin.banner') }}">
                <i class="fa fa-dashboard"></i> <span>Banner</span>
              </a>
            </li>
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

@yield('script')

</body>
</html>
