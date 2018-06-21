@extends('admin._layout')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Biểu tổng hợp
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
                  <th>Cập nhập Biểu 7</th>
                  <th>Cập nhập Biểu 8</th>
                  <th>Cập nhập Biểu 9</th>
                  <th>Cập nhập Biểu 10</th>
                  <th>Cập nhập Biểu 11</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($lists as $l)
                <tr>
                  <th>{{$l}}</th>
                  <th><a href="/admin/tkkhth/{{$l}}/bieu/7">Cập nhập</a></th>
                  <th><a href="/admin/tkkhth/{{$l}}/bieu/8">Cập nhập</a></th>
                  <th><a href="/admin/tkkhth/{{$l}}/bieu/9">Cập nhập</a></th>
                  <th><a href="/admin/tkkhth/{{$l}}/bieu/10">Cập nhập</a></th>
                  <th><a href="/admin/tkkhth/{{$l}}/bieu/11">Cập nhập</a></th>
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