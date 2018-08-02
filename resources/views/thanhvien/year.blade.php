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
                    <button type="submit" class="btn btn-primary">Thêm năm mới báo cáo / Thêm năm mới báo cáo giống năm cũ</button>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Năm cũ</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input name="oldyear" type="text" class="form-control datemask">
                      </div>
                    </div>
                  </div>
                </div>
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
                  <th>Tình trạng</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  @foreach($lists as $l)
                <tr>
                  <th>{{$l}}</th>
                  <th>
                    <a href="/thanhvien/{{$l}}/bieumau/1/show">Chi tiết</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/1/edit">Sửa</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/1/word">Xuất bản word</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/1/print">In</a></th>
                  <th>
                    <a href="/thanhvien/{{$l}}/bieumau/2/show">Chi tiết</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/2/edit">Sửa</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/2/word">Xuất bản word</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/2/print">In</a></th>
                  <th>
                    <a href="/thanhvien/{{$l}}/bieumau/3/show">Chi tiết</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/3/edit">Sửa</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/3/word">Xuất bản word</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/3/print">In</a></th>
                  <th>
                    <a href="/thanhvien/{{$l}}/bieumau/4/show">Chi tiết</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/4/edit">Sửa</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/4/word">Xuất bản word</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/4/print">In</a></th>
                  <th>
                    <a href="/thanhvien/{{$l}}/bieumau/5/show">Chi tiết</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/5/edit">Sửa</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/5/word">Xuất bản word</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/5/print">In</a></th>
                  <th>
                    <a href="/thanhvien/{{$l}}/bieumau/6/show">Chi tiết</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/6/edit">Sửa</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/6/word">Xuất bản word</a> |
                    <a href="/thanhvien/{{$l}}/bieumau/6/print">In</a></th>
                  <th>{{$user->bieuStatusCheck($l)}}</th>
                  <th>@if($user->bieuStatusCheck($l) == "Đang cập nhật")<a href="/thanhvien/{{$l}}/bieumau/send">Gửi báo cáo</a>
                  @endif</th>
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