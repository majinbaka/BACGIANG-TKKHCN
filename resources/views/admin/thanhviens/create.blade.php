@extends('admin._layout')

@section('content')
    <section class="content-header">
      <h1>
        Thành viên
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Thêm thành viên
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form role="form" method="POST" action="{{ url('/admin/thanhvien') }}">
                {{ csrf_field() }}
            <!-- /.box-header -->
            <!-- form start -->
                <div class="form-group">
                  <label>Tên</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tên đăng nhập</label>
                  <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tên đơn vị</label>
                  <input type="text" name="donviname" class="form-control">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label>Mật khẩu</label>
                  <input type="password" name="password" class="form-control">
                </div>
                    <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    
@endsection