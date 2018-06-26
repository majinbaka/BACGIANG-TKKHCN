@extends('thanhvien._layout')
@section('css')
    @parent
@endsection
@section('content')

    <section class="content-header">
      <h1>
        Biểu cơ sở: Đơn vị {{Auth::user()->donviname}}
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Báo cáo Khoa học công nghệ 
              </h3>
            </div>
            <div class="box-body pad">
              <form role="form" method="POST" action="{{ url('/thanhvien/bieumau/baocao/') }}">
                {{ csrf_field() }}
                {{ method_field('PATCH')}}
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Năm báo cáo</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input name="year" type="text" class="form-control datemask">
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Danh sách </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Năm</th>
                  <th>Cập nhập Biểu 1</th>
                  <th>Cập nhập Biểu 2</th>
                  <th>Cập nhập Biểu 3</th>
                  <th>Cập nhập Biểu 4</th>
                  <th>Cập nhập Biểu 5</th>
                  <th>Cập nhập Biểu 6</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($lists as $l)
                <tr>
                  <th>{{$l}}</th>
                  <th><a href="/thanhvien/{{$l}}/bieumau/1/edit">Cập nhập</a></th>
                  <th><a href="/thanhvien/{{$l}}/bieumau/2/edit">Cập nhập</a></th>
                  <th><a href="/thanhvien/{{$l}}/bieumau/3/edit">Cập nhập</a></th>
                  <th><a href="/thanhvien/{{$l}}/bieumau/4/edit">Cập nhập</a></th>
                  <th><a href="/thanhvien/{{$l}}/bieumau/5/edit">Cập nhập</a></th>
                  <th><a href="/thanhvien/{{$l}}/bieumau/6/edit">Cập nhập</a></th>
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
    </section>
@endsection
@section('js')
@endsection