@extends('admin._layout')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">
                Thống kê cơ sở
              </h3>
            </div>
            <div class="box-body pad">
              <h3 class="box-title">
                Năm báo cáo
              </h3>
                @foreach($lists as $list)
                    <a href="/admin/tkcs/{{$list}}" class="btn btn-primary btn-lg" style="margin-top: 5px;">{{$list}}</a>
                @endforeach
              </div>
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