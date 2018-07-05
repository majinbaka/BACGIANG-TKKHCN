@extends('admin._layout')

@section('content')
    <section class="content-header">
      <h1>
        Liên kết website
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Thêm liên kết website
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form role="form" method="POST" action="{{ url('/admin/lienket') }}">
                {{ csrf_field() }}
            <!-- /.box-header -->
            <!-- form start -->
                <div class="form-group">
                  <label>Tên</label>
                  <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                  <label>Đường dẫn</label>
                  <input type="text" name="url" class="form-control">
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