@extends('admin._layout')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Biểu cơ sở: Đơn vị {{$user->donviname}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Năm</th>
                  <th>Biểu 1</th>
                  <th>Biểu 2</th>
                  <th>Biểu 3</th>
                  <th>Biểu 4</th>
                  <th>Biểu 5</th>
                  <th>Biểu 6</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($lists as $l)
                <tr>
                  <th>{{$l}}</th>
                  <th><a href="/admin/thanhvien/{{$l}}/{{$user->id}}/bieu/1">Cập nhật</a></th>
                  <th><a href="/admin/thanhvien/{{$l}}/{{$user->id}}/bieu/2">Cập nhật</a></th>
                  <th><a href="/admin/thanhvien/{{$l}}/{{$user->id}}/bieu/3">Cập nhật</a></th>
                  <th><a href="/admin/thanhvien/{{$l}}/{{$user->id}}/bieu/4">Cập nhật</a></th>
                  <th><a href="/admin/thanhvien/{{$l}}/{{$user->id}}/bieu/5">Cập nhật</a></th>
                  <th><a href="/admin/thanhvien/{{$l}}/{{$user->id}}/bieu/6">Cập nhật</a></th>
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