@extends('admin._layout')

@section('content')
    <section class="content-header">
      <h1>
        Loại văn bản
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Thêm loại văn bản
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form role="form" method="POST" action="{{ url('/admin/category') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <!-- /.box-header -->
            <!-- form start -->
                <div class="form-group">
                  <label>Tên loại văn bản</label>
                  <input type="text" name="name" class="form-control" required>
                  {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="/admin/category" class="btn btn-danger">Hủy</a>
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