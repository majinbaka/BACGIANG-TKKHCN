<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thống kê khoa học công nghệ tỉnh Bắc Giang | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/adminlte/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/adminlte/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class=" user user-menu">
            <a href="/admin/logout">
              <span class="hidden-xs">Đăng xuất</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Tin tức</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/tintuc"><i class="fa fa-circle-o"></i>Danh sách</a></li>
            <li><a href="/admin/tintuc/create"><i class="fa fa-circle-o"></i>Tạo mới</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Quản lý tài khoản</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/thanhvien"><i class="fa fa-circle-o"></i>Danh sách</a></li>
            <li><a href="/admin/thanhvien/create"><i class="fa fa-circle-o"></i>Tạo mới</a></li>
            <li><a href="/admin/thanhvien/nhom-quyen"><i class="fa fa-circle-o"></i>Nhóm quyền</a></li>
          </ul>
        </li>
        <li><a href="/admin/tkcs"><i class="fa fa-book"></i> <span>Thống kê cơ sở</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Thống kê tổng hợp</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/tkkhth"><i class="fa fa-circle-o"></i>Danh sách</a></li>
            <li><a href="/admin/tkkhth/create"><i class="fa fa-circle-o"></i>Tạo mới</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Nghiệp vụ thống kê</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/thongke/1/edit"><i class="fa fa-circle-o"></i>Hệ thống chỉ tiêu thống kê</a></li>
            <li><a href="/admin/thongke/2/edit"><i class="fa fa-circle-o"></i>Bảng phân loại & danh mục <br> chuẩn</a></li>
            <li><a href="/admin/thongke/3/edit"><i class="fa fa-circle-o"></i>Chế độ báo cáo thống kê</a></li>
            <li><a href="/admin/thongke/4/edit"><i class="fa fa-circle-o"></i>Các cuộc điều tra báo cáo <br>thống kê KH&CN</a></li>
            <li><a href="/admin/thongke/5/edit"><i class="fa fa-circle-o"></i>Số liệu thống kê</a></li>
            <li><a href="/admin/thongke/6/edit"><i class="fa fa-circle-o"></i>Nghiệp vụ thống kê</a></li>
            <li><a href="/admin/thongke/7/edit"><i class="fa fa-circle-o"></i>Biểu mẫu thống kê</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#">
            <i class="fa fa-files-o"></i>
            <span>Loại văn bản</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/category"><i class="fa fa-circle-o"></i>Danh sách</a></li>
            <li><a href="/admin/category/create"><i class="fa fa-circle-o"></i>Thêm</a></li>
          </ul></li>
        <li class="treeview"><a href="#">
            <i class="fa fa-files-o"></i>
            <span>Văn bản</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/vanban"><i class="fa fa-circle-o"></i>Danh sách</a></li>
            <li><a href="/admin/vanban/create"><i class="fa fa-circle-o"></i>Thêm</a></li>
          </ul></li>
        <li><a href="/admin/thongke/8/edit"><i class="fa fa-book"></i> <span>Hướng dẫn</span></a></li>
        <li><a href="/admin/pheduyet"><i class="fa fa-book"></i> <span>Phê duyệt thành viên mới</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Liên kết website</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/lienket"><i class="fa fa-circle-o"></i>Danh sách</a></li>
            <li><a href="/admin/lienket/create"><i class="fa fa-circle-o"></i>Tạo mới</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Banners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/banner"><i class="fa fa-circle-o"></i>Danh sách</a></li>
            <li><a href="/admin/banner/create"><i class="fa fa-circle-o"></i>Tạo mới</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">
@if(Session::has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
                    {{ Session::get('message') }}
                </div>
            @endif
            @if(isset($errors))
@php 
$messages = $errors; 
foreach ($messages->all() as $message)
echo '
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
    '.$message.'</div>';
@endphp
@endif
@yield('content')
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/adminlte/bower_components/raphael/raphael.min.js"></script>
<script src="/adminlte/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="/adminlte/bower_components/moment/min/moment.min.js"></script>
<script src="/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Slimscroll -->
<script src="/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<script src="/adminlte/bower_components/ckeditor/ckeditor.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
@section('js')
@show
<script>
  $(function () {
    //Initialize Select2 Elements
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
});
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "language": {
        "search": "Tìm kiếm:"
      },
    });

    $('#search-form').on('submit', function(e) {
        oTable.draw();
        e.preventDefault();
    });
  })
</script>
</body>
</html>
