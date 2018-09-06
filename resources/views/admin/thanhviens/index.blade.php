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
                    <h3 class="box-title">Danh sách tài khoản</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Tìm kiếm nâng cao
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <br>
                            <form role="form" method="POST" action="{{ url('/admin/search') }}">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <div class="col-md-6">
                  <label for="manager">Cơ quan quản lý trực tiếp:</label>
                  <input type="text" name="manager" class="form-control" id="manager">
                  <label for="manager_city">Bộ/ngành,tỉnh/tp trực thuộc TƯ chủ quản :</label>
                  <input type="text" name="manager_city" class="form-control" id="manager_city">
                </div></div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control" name="establish_lever">
                                                <option value="0">Cấp quyết định thành lập:</option>
                                                <option value="1">Quốc hội, Uỷ ban thường vụ Quốc hội</option>
                                                <option value="2">Chính phủ</option>
                                                <option value="3">Toà án nhân dân tối cao</option>
                                                <option value="4">Viện kiểm sát nhân dân tối cao</option>
                                                <option value="5">Thủ tướng Chỉnh phủ</option>
                                                <option value="6">Bộ trưởng, Thủ trưởng cơ quan ngang Bộ, cơ quan thuộc Chính phủ</option>
                                                <option value="7">Uỷ ban nhân dân tỉnh, thành phố trực thuộc Trung ương</option>
                                                <option value="8">Tổ chức chính trị, tổ chức chính trị - xã hội, tổ chức xã hội, tổ chức xã hội - nghề nghiệp</option>
                                                <option value="9">Doanh nghiệp, tổ chức khác, cá nhân</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control" name="type_company">
                                                <option value="0">Loại hình của đơn vị/tổ chức :</option>
                                                <option value="1">Cơ quan quản lý nhà nước</option>
                                                <option value="2">Tổ chức nghiên cứu khoa học và phát triển công nghệ</option>
                                                <option value="3">Cơ sở giáo dục đại học</option>
                                                <option value="4">-----Đại học</option>
                                                <option value="5">-----Học viện</option>
                                                <option value="6">-----Cao đẳng</option>
                                                <option value="7">Tổ chức dịch vụ KH&CN</option>
                                                <option value="8">-----DV thông tin, thư viện</option>
                                                <option value="9">-----DV bảo tàng cho KH&CN</option>
                                                <option value="10">-----DV dịch thuật, biên tập, xuất bản cho KH&CN</option>
                                                <option value="11">-----DV điều tra cơ bản định kỳ, thường xuyên</option>
                                                <option value="12">-----DV thống kê, điều tra xã hội</option>
                                                <option value="13">-----DV tiêu chuẩn đo lường chất lượng</option>
                                                <option value="14">-----DV tư vấn về KH&CN</option>
                                                <option value="15">-----DV sở hữu trí tuệ</option>
                                                <option value="16">-----DV chuyển giao công nghệ</option>
                                                <option value="17">-----DV KH&CN khác</option>
                                                <option value="18">Đơn vị sự nghiệp khác</option>
                                                <option value="19">Doanh nghiệp KH&CN</option>
                                                <option value="20">Doanh nghiệp</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" name="type_econom">
                                                <option value="0">Loại hình kinh tế :</option>
                                                <option value="1"> Nhà nước</option>
                                                <option value="2">Ngoài nhà nước</option>
                                                <option value="3">Có vốn đầu tư nước ngoài</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select name="lab_number_sub" class="form-control">
                                                <option value="0">Lĩnh vực nghiên cứu chính theo chức năng nhiệm vụ :</option>
                                                <option value="1">1. Khoa học tự nhiên</option>
                                                <option value="2">2. Khoa học kỹ thuật và công nghệ</option>
                                                <option value="3">3. Khoa học y dược</option>
                                                <option value="4">4. Khoa học nông nghiệp</option>
                                                <option value="5">5. Khoa học xã hội</option>
                                                <option value="6">6. Khoa học nhân văn</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary right">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tên đăng nhập</th>
                                <th>Tên đơn vị</th>
                                <th>Email</th>
                                <th>Chi tiết</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->username}}</td>
                                <td>{{$user->donviname}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="/admin/thanhvien/{{$user->id}}/show">Chi tiết</a></td>
                                <td><a href="/admin/thanhvien/{{$user->id}}/edit">Sửa</a></td>
                                <td>
                                    <form role="form" method="POST" action="{{ url('/admin/thanhvien/'.$user->id) }}">
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