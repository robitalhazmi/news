@extends('admin.layouts.layout_admin')

@section('title')
  Banner | News
@endsection

@section('link')
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

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
    .row-news{
      cursor: pointer;
    }
  </style>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Berita</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Berita</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th class="hide">Id</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Tanggal dibuat</th>
                  <th>Rubrik</th>
                  <th>Penulis</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $i=0;
                  @endphp
                @foreach ($news as $news)
                  <tr class="row-news" value="{{$i}}">
                    <td>{{$i+1}}</td>
                    <td class="row-id hide" value="{{ $news->id }}"></td>
                    <td class="row-title" value="{{ $news->title }}">{{$news->title}}</td>
                    <td>{{$news->description}}</td>
                    <td>{{strftime("%d %b %Y", strtotime($news->created_at))}}</td>
                    <td>{{$news->name}}</td>
                    <td>{{$news->username}}</td>
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
        <!-- /.col -->
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Banner</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Tanggal dibuat</th>
                  <th>Rubrik</th>
                  <th>Penulis</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $j = 1;
                  @endphp
                  @foreach ($banners as $banner)
                    <tr>
                      <td>{{$j}}</td>
                      <td>{{ $banner->title }}</td>
                      <td>{{ $banner->description }}</td>
                      <td>{{ $banner->created_at }}</td>
                      <td>{{ $banner->name }}</td>
                      <td>{{ $banner->username }}</td>
                    </tr>
                    @php
                      $j++;
                    @endphp
                  @endforeach
                </tfoot>
              </table>
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
  <button id="button-news" type="button" class="btn btn-warning hide" data-toggle="modal" data-target="#modal-news">
    Launch Warning Modal
  </button>
<div class="modal fade" id="modal-news">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 id="title-news" class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <p>Anda yakin menjadikan berita ini sebagai banner?</p>
      </div>
      <div class="modal-footer">
        <button id="button-close" type="button" class="btn btn-default pull-left close-button" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-default pull-left">Lihat Berita</button>
        <button id="submit-banner" type="button" class="btn btn-primary">Ya</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Modal Success-->
  <div class="modal fade" id="modal-success" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="alert alert-success" role="alert">
        Banner berhasil ditambahkan. Klik <a href="{{ route('admin.banner') }}" class="alert-link"> kembali</a>.
      </div>

    </div>
  </div>
@endsection

@section('script')
  <!-- jQuery 3 -->
  <script src="/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/dist/js/demo.js"></script>
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

  <script src="/js/ajax.js"></script>

  <script>
  var currentURL = window.location.pathname.toString();
  if (currentURL = 'admin') {
    $('#master').addClass('menu-open active');
    $('#master-ul').css({ 'display': 'block' });
    $('li#banner').addClass('active')
  }
  </script>

  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>
@endsection
