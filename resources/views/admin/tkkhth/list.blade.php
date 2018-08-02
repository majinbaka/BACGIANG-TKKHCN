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
                  <th>Năm báo cáo</th>
                  <th colspan="6"></th>
                </tr>
                <tr>
                  <th></th>
                  <th>Danh sách biểu</th>
                  <th colspan="4">Chức năng</th>
                  <th>Hiển thị trang chủ</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($lists as $l)
                <tr>
                  <th rowspan="5">{{$l}}</th>
                  <th>Biểu 7</th>
                  <th><a href="/admin/tkkhth/show/{{$l}}/bieu/7">Chi tiết</a></th>
                  <th><a href="/admin/tkkhth/{{$l}}/bieu/7">Sửa</a></th>
                  <th><a onclick="openInNewTab('/admin/generate/tonghopbieu7/{{$l}}');" href="#">In</a></th>
                  <th><a href="/generate/tonghop/bieu7/{{$l}}">Xuất sang excel</a></th>
                  <th><input type="checkbox" name="show" onclick='handleClick(this,7, {{$l}});' class="checkbox" @if(App\YearReport::yearShowType($l,7)) checked @endif></th>
                </tr>
                <tr>
                  <th>Biểu 8</th>
                  <th><a href="/admin/tkkhth/show/{{$l}}/bieu/8">Chi tiết</a></th>
                  <th><a href="/admin/tkkhth/{{$l}}/bieu/8">Sửa</a></th>
                  <th><a onclick="openInNewTab('/admin/generate/tonghopbieu8/{{$l}}');" href="#">In</a></th>
                  <th><a href="/generate/tonghop/bieu8/{{$l}}">Xuất sang excel</a></th>
                  <th><input type="checkbox" name="show" onclick='handleClick(this,8, {{$l}});' class="checkbox" @if(App\YearReport::yearShowType($l,8)) checked @endif></th>
                </tr>
                <tr>
                  <th>Biểu 9</th>
                  <th><a href="/admin/tkkhth/show/{{$l}}/bieu/9">Chi tiết</a></th>
                  <th><a href="/admin/tkkhth/{{$l}}/bieu/9">Sửa</a></th>
                  <th><a onclick="openInNewTab('/admin/generate/tonghopbieu9/{{$l}}');" href="#">In</a></th>
                  <th><a href="/generate/tonghop/bieu9/{{$l}}">Xuất sang excel</a></th>
                  <th><input type="checkbox" name="show" onclick='handleClick(this,9, {{$l}});' class="checkbox" @if(App\YearReport::yearShowType($l,9)) checked @endif></th>
                </tr>
                <tr>
                  <th>Biểu 10</th>
                  <th><a href="/admin/tkkhth/show/{{$l}}/bieu/10">Chi tiết</a></th>
                  <th><a href="/admin/tkkhth/{{$l}}/bieu/10">Sửa</a></th>
                  <th><a onclick="openInNewTab('/admin/generate/tonghopbieu10/{{$l}}');" href="#">In</a></th>
                  <th><a href="/generate/tonghop/bieu10/{{$l}}">Xuất sang excel</a></th>
                  <th><input type="checkbox" name="show" onclick='handleClick(this,10, {{$l}});' class="checkbox" @if(App\YearReport::yearShowType($l,10)) checked @endif></th>
                </tr>
                <tr>
                  <th>Biểu 11</th>
                  <th><a href="/admin/tkkhth/show/{{$l}}/bieu/11">Chi tiết</a></th>
                  <th><a href="/admin/tkkhth/{{$l}}/bieu/11">Sửa</a></th>
                  <th><a onclick="openInNewTab('/admin/generate/tonghopbieu11/{{$l}}');" href="#">In</a></th>
                  <th><a href="/generate/tonghop/bieu11/{{$l}}">Xuất sang excel</a></th>
                  <th><input type="checkbox" name="show" onclick='handleClick(this,11, {{$l}} );' class="checkbox" @if(App\YearReport::yearShowType($l,11)) checked @endif></th>
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
@section('js')
<script type="text/javascript">
  function handleClick(cb, type, year) {
    $.ajax({
       type:'POST',
       url:'/admin/tkkhth/'+year+'/'+type+'/bieushow/'+cb.checked,
       data:{_token: "{{csrf_token()}}" },
       success:function(data){
        console.log(data);
       }
    });
  }
  function openInNewTab(url) {
    var win = window.open(url, '_blank');
    win.focus();
  }
</script>
@endsection