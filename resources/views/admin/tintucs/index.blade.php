@extends('admin._layout')

@section('content')
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tin tức
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tin tức</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tiêu đề</th>
                  <th>Mô tả</th>
                  <th>Ngày đăng</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{$post->title}}</td>
                      <td>{{$post->short_description}}</td>
                      <td>{{$post->created_at}}</td>
                      <td><a href="/admin/tintuc/{{$post->id}}/edit">Sửa</a></td>
                      <td>
                        <form role="form" method="POST" action="{{ url('/admin/tintuc/'.$post->id) }}">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <input onclick="return confirm('Bạn chắc chắn muốn xóa chứ ?');" type="submit" name="Delete" value="Xóa">
                        </form>
                      </td>
                    </tr>  
                  @endforeach
                
                </tbody>
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

@endsection