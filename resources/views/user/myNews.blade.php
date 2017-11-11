@extends('user.layouts.layout_user')

@section('title')
  Dashboard | News
@endsection

@section('link')
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
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
    .row-data{
      cursor: pointer;
    }
  </style>
@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <button id="modal-foto" type="button" class="btn btn-warning hide" data-toggle="modal" data-target="#modal-warning">
      Launch Warning Modal
    </button>
  <div class="modal fade" id="modal-warning">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 id="title-news" class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form action="imageNews" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            <div class="box-body" style="padding: inherit;">
              <div class="form-group">
                <label for="exampleInputFile">Unggah gambar</label>
                <input id="id-image" type="hidden" name="id" value="">
                <input type="file" name="imageNews" id="imageNews">
                <p class="help-block">Example block-level help text here.</p>
              </div>
            </div>
            <div class="form-group" style="margin-top: 15px;">
              <button id="submit-image" type="submit" class="btn btn-primary hide">Kirim</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left close-button" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-default pull-left">Lihat Berita</button>
          <button id="upload-image" type="button" class="btn btn-primary">Unggah</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        News
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Beritaku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th class="hide"></th>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Rubrik</th>
                  <th>Deskripsi</th>
                  <th>Waktu Dibuat</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $i=0;
                  @endphp
                @foreach ($news as $news)

                  <tr class="row-data" value="{{$i}}">
                    <td>{{ $i+1 }}</td>
                    <td class="row-id hide" value="{{ $news->id }}"></td>
                    <td class="row-title" value="{{ $news->title }}">{{ $news->title }}</td>
                    <td>
                      @if ($news->image == null)
                        {{ "Tidak ada gambar" }}
                        @else
                          {{ "Ada gambar" }}
                      @endif
                    </td>
                    <td>{{ $news->name }}</td>
                    <td>{{ $news->description }}</td>
                    <td>{{strftime("%d %b", strtotime($news->created_at))}}. {{strftime("%Y", strtotime($news->created_at))}}</td>
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
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal Success-->
    <div class="modal fade" id="modal-news" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="alert alert-success" role="alert">
          Berita berhasil ditambahkan. Klik <a href="dashboard" class="alert-link"> kembali</a>.
        </div>

      </div>
    </div>
    <div class="modal fade" id="modal-image">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 id="title-news" class="modal-title"></h4>
          </div>
          <div class="modal-body">
            <form action="imageNews" method="post">
              {{ csrf_field() }}
              <div class="box-body" style="padding: inherit;">
                <div class="form-group">
                  <label for="exampleInputFile">Unggah gambar</label>
                  <input id="id-image" type="hidden" name="id" value="" required>
                  <input type="file" name="imageNews" required>
                  <p class="help-block">Example block-level help text here.</p>
                </div>
              </div>
              <div class="form-group" style="margin-top: 15px;">
                <button id="submit-image" type="submit" class="btn btn-primary hide">Kirim</button>
              </div>
            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left close-button" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-default">Lihat Berita</button>
            <button id="upload-image" type="button" class="btn btn-primary">Unggah</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@endsection

@section('script')
  <!-- jQuery 3 -->
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- DataTables -->
  <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('dist/js/demo.js') }}"></script>
  <!-- page script -->
  <script src="{{ asset('js/ajax.js') }}"></script>
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>

  <script>
  var row = {{$i}};
  var currentURL = window.location.pathname.toString();
  if (currentURL = 'dashboard') {
    $('li#mynews').addClass('active')
  }
  </script>
@endsection
