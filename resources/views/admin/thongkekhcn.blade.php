@extends('admin._layout')

@section('content')
    <section class="content-header">
      <h1>
        Thông tin
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Sửa
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form role="form" method="POST" action="{{ url('/admin/thongke/'.$information->id) }}">
                {{ csrf_field() }}
                {{ method_field('PATCH')}}
            <!-- /.box-header -->
            <!-- form start -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Tiêu đề</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{$information->title}}">
                </div>
                <!-- /.box-body -->
                <div class="form-group">
                  <label for="exampleInputPassword1">Nội dung</label>
              
                    <textarea id="editor1" name="content" rows="10" cols="80">{!! $information->content !!}</textarea>
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
@section('js')
<script>
  $(function () {
    CKEDITOR.replace('editor1')
  })
</script>
@endsection