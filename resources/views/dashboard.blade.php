@extends('layouts.layout_user')

@section('title')
  Dashboard | News
@endsection

@section('link')
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Tulis Berita Baru
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form id="add-news" method="post">
                {{ csrf_field() }}
                <div class="box-body" style="padding: inherit;">
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Rubrik Berita</label>
                        <select class="form-control" name="rubric">
                          @foreach ($users_rubrics as $users_rubric)
                            <option value="{{$users_rubric->id}}">{{$users_rubric->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Judul Berita</label>
                        <input type="text" name="title" class="form-control" placeholder="Masukkan ..." required>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Deskripsi Berita</label>
                  <textarea type="text" name="description" class="form-control" rows="3" placeholder="Masukkan ..."></textarea>
                </div>
                <div class="form-group">
                  <label>Konten Berita</label>
                  <textarea id="editor1" rows="10" cols="80">
                  </textarea>
                  <textarea style="display: none;" id="content-hidden" name="content" type="hidden" rows="8" cols="80"></textarea>
                </div>
                <div class="form-group" style="margin-top: 15px;">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Beritaku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Rubrik</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Waktu Dibuat</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $i=0;
                  @endphp
                @foreach ($news as $news)
                  @php
                    $i++;
                  @endphp
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $news->name }}</td>
                    <td>{{ $news->title }}</td>
                    <td>{{ $news->description }}</td>
                    <td>{{strftime("%d %b", strtotime($news->created_at))}}. {{strftime("%Y", strtotime($news->created_at))}}</td>
                  </tr>
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
@endsection

@section('script')
  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- CK Editor -->
  <script src="bower_components/ckeditor/ckeditor.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- page script -->
  <script src="js/ajax.js"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5();
      // CKEDITOR.on("instanceCreated", function(event) {
      //   event.editor.on("change", function () {
      //     $("#trackingDiv").html(event.editor.getData());
      //   });
      // });
    })
  </script>
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

  <script>
  var currentURL = window.location.pathname.toString();
  if (currentURL = 'dashboard') {
    $('li#dashboard').addClass('active')
  }
  </script>
@endsection
