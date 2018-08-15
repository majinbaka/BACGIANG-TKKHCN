@extends('admin._layout')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thống kê cơ sở năm {{$year}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách đơn vị gửi báo cáo năm {{$year}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tên đơn vị</th>
                  <th>Địa chỉ</th>
                  <th>Điện thoại</th>
                  <th>Danh sách biểu</th>
                  <th>Trạng thái</th>
                  <th>Hiển thị trang chủ</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                <tr>
                  <td>{{$user->donviname}}</td>
                  <td>{{$user->getAddressU($year)}}</td>
                  <td>{{$user->getPhone($year)}}</td>
                  <td>
                    Biểu 1: 
                    @if($user->getBieumauYear(1, $year) != false)
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/1/show">Chi tiết</a>;
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/1">Sửa</a>; 
                    <a href="/generate/donvi/bieu1/{{$user->getBieumauYear(1, $year)->id}}">xuất sang word</a><br>
                    @endif
                    Biểu 2:
                    @if($user->getBieumauYear(2, $year) != false)
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/2/show">Chi tiết</a>;
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/2">Sửa</a>; 
                    <a href="/generate/donvi/bieu2/{{$user->getBieumauYear(2, $year)->id}}">xuất sang word</a><br>
                    @endif
                    Biểu 3: 
                    @if($user->getBieumauYear(3, $year) != false)
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/3/show">Chi tiết</a>;
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/3">Sửa</a>; 
                    <a href="/generate/donvi/bieu3/{{$user->getBieumauYear(3, $year)->id}}">xuất sang word</a><br>
                    @endif
                    Biểu 4: 
                    @if($user->getBieumauYear(4, $year) != false)
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/4/show">Chi tiết</a>;
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/4">Sửa</a>; 
                    <a href="/generate/donvi/bieu4/{{$user->getBieumauYear(4, $year)->id}}">xuất sang word</a><br>
                    @endif
                    Biểu 5: 
                    @if($user->getBieumauYear(5, $year) != false)
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/5/show">Chi tiết</a>;
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/5">Sửa</a>; 
                    <a href="/generate/donvi/bieu5/{{$user->getBieumauYear(5, $year)->id}}">xuất sang word</a><br>
                    @endif
                    Biểu 6: 
                    @if($user->getBieumauYear(6, $year) != false)
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/6/show">Chi tiết</a>;
                    <a href="/admin/thanhvien/{{$year}}/{{$user->id}}/bieu/6">Sửa</a>; 
                    <a href="/generate/donvi/bieu6/{{$user->getBieumauYear(6, $year)->id}}">xuất sang word</a><br>
                    @endif
                  </td>
                  <td>
                    @if($user->bieuStatusCheck($year) != "Đã Phê Duyệt" )
                      <a href="/admin/tkcs/duyet/{{$user->id}}/{{$year}}">Phê duyệt</a>
                    @else
                      Đã phê duyệt |
                      <a href="/admin/tkcs/boduyet/{{$user->id}}/{{$year}}">Bỏ Phê duyệt</a>
                    @endif
                  </td>
                  <td><input type="checkbox" name="show" onclick='handleClick(this, {{$user->id}});' class="checkbox" @if($user->yearShow($year)) checked @endif></td>
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
  function handleClick(cb, id) {
    $.ajax({
       type:'POST',
       url:'/admin/thanhviencheck/{{$year}}/'+id+'/bieushow/'+cb.checked,
       data:{_token: "{{csrf_token()}}" },
       success:function(data){
        console.log(data);
       }
    });
  }
</script>
@endsection