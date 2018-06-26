@extends('admin._layout')

@section('content')
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thành viên
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách thành viên</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tên đăng nhập</th>
                  <th>Tên đơn vị</th>
                  <th>Email</th>
                  <th>Chi tiết</th>
                  <th>Phê duyệt</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                <tr>
                  <td>{{$user->username}}</td>
                  <td>{{$user->donviname}}</td>
                  <td>{{$user->email}}</td>
                  <td><a href="/admin/pheduyet/{{$user->id}}/show">Chi tiết</a></td>
                  <td><a href="/admin/pheduyet/{{$user->id}}/accept">Phê duyệt</a></td>
                  <td>
                    <form role="form" method="POST" action="{{ url('/admin/pheduyet/'.$user->id.'/delete') }}">
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