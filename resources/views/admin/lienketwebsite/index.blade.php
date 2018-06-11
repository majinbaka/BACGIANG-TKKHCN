@extends('admin._layout')

@section('content')
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách liên kết
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách liên kết</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tên</th>
                  <th>Đường dẫn</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($links as $link)
                <tr>
                  <td>{{$link->title}}</td>
                  <td>{{$link->url}}</td>
                  <td><a href="/admin/lienket/{{$link->id}}/edit">Sửa</a></td>
                  <td>
                    <form role="form" method="POST" action="{{ url('/admin/lienket/'.$link->id) }}">
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