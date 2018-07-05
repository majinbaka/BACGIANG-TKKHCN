@extends('admin._layout')

@section('content')
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách văn bản
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách văn bản</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Số hiệu</th>
                  <th>Cơ quan ban hành</th>
                  <th>Loại văn bản</th>
                  <th>Ngày ban hành</th>
                  <th>Người ký</th>
                  <th>Trích dẫn ngắn</th>
                  <th>Tải về</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($vanbans as $link)
                <tr>
                  <td>{{$link->code}}</td>
                  <td>{{$link->publisher}}</td>
                  <td>{{$link->category}}</td>
                  <td>{{$link->publish_day}}</td>
                  <td>{{$link->signer}}</td>
                  <td>{{$link->description}}</td>
                  <td><a href="/uploads/{{$link->id}}">tải về</a></td>
                  <td><a href="/admin/vanban/{{$link->id}}/edit">Sửa</a></td>
                  <td>
                    <form role="form" method="POST" action="{{ url('/admin/vanban/'.$link->id) }}">
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