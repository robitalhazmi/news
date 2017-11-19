@extends('admin.layouts.layout_admin')

@section('title')
  Pengguna | News
@endsection

@section('link')
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style media="screen">
    .checkbox{
      display: inline;
    }
  </style>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-xs-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Pengguna</th>
                  <th>Rubrik</th>
                  <th>Waktu Dibuat</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{$user->username}}</td>
                    <td>|
                      @foreach ($users_rubrics as $users_rubric)
                        @if ($user->id == $users_rubric->users_id)
                          {{$users_rubric->name}} |
                        @endif
                      @endforeach
                    </td>
                    <td>{{strftime("%d %b %Y", strtotime($user->created_at))}}</td>
                  </tr>
                  @php
                    $i++;
                  @endphp
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <div class="col-md-4">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" id="add-user" method="post">
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Pengguna</label>
                  <input type="text" name="username" class="form-control" placeholder="Masukkan ..." required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kata Sandi</label>
                  <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Ulangi Kata Sandi</label>
                  <input type="password" name="confirm_password" class="form-control" placeholder="Ulangi Kata Sandi" required>
                </div>

                <!-- checkbox -->
                <div class="form-group">
                  <label>Rubrik</label>
                  <div class="box-body">
                    @foreach ($rubrics as $rubric)
                      <div class="checkbox">
                      <label>
                        <input class="check" type="checkbox" name="{{ "rubric[]" }}" value="{{ $rubric->id }}">
                        {{ $rubric->name }}
                      </label>

                    </div>
                    @endforeach
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Modal Success-->
    <div class="modal fade" id="modal-success" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="alert alert-success" role="alert">
          Pengguna berhasil ditambahkan. Klik <a href="{{ route('admin.user') }}" class="alert-link"> kembali</a>.
        </div>

      </div>
    </div>
  <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="alert alert-danger" role="alert" id="alert"></div>

      </div>
    </div>
@endsection

@section('script')
  <!-- jQuery 3 -->
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- DataTables -->
  <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('dist/js/demo.js') }}"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>

  <script src="{{ asset('js/ajax.js') }}"></script>

  <script>
  var currentURL = window.location.pathname.toString();
  if (currentURL = 'admin') {
    $('#master').addClass('menu-open active');
    $('#master-ul').css({ 'display': 'block' });
    $('li#user').addClass('active');
  }
  </script>
@endsection
