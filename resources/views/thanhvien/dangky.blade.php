@extends('thanhvien.prelayout')
@section('css')
    @parent
@endsection
@section('content')
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Thông tin đăng ký</a></li>
    <li><a data-toggle="tab" href="#menu1">Biểu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Biểu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Biểu 3</a></li>
    <li><a data-toggle="tab" href="#menu4">Biểu 4</a></li>
    <li><a data-toggle="tab" href="#menu5">Biểu 5</a></li>
    <li><a data-toggle="tab" href="#menu6">Biểu 6</a></li>
</ul>
	<form role="form" method="POST" action="{{ url('/dangky/') }}">
		{{ csrf_field() }}
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <section class="content-header">
      <h1>
        Thông tin đăng ký
      </h1>
      <h4>
      Vui lòng điền đầy đủ thông tin vào tất cả các biểu để hoàn tất đăng ký
      </h4>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Thông tin đăng ký
              </h3>
            </div>
            <div class="box-body pad">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Tên đăng nhập</label>
                      <div class="input-group">
                        <input name="username" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Email</label>
                      <div class="input-group">
                        <input name="useremail" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Mật khẩu</label>
                      <div class="input-group">
                        <input name="password" type="password" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <a href="#menu1" data-toggle="tab" class="btn btn-primary">Tiếp</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    </div>
    <div id="menu1" class="tab-pane fade">
      <section class="content-header">
      <h1>
        THÔNG TIN CHUNG VỀ ĐƠN VỊ BÁO CÁO 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">THÔNG TIN CHUNG VỀ ĐƠN VỊ BÁO CÁO 
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            <!-- /.box-header -->
            <!-- form start -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Ngày gửi báo cáo</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input value="{{date('d/m/Y')}}" name="publish_day"  type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                        {!! $errors->first('publish_day', '<p class="help-block">:message</p>') !!}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Đơn vị nhận báo cáo:</label>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="receiver[]" value="1">
                        Cục Thông tin KH&CN Quốc gia
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="receiver[]"  value="2" >
                          Sở KH&CN tỉnh, tp.trực thuộc TƯ
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="reporter_element_name">Tên đơn vị báo cáo</label>
                  <input type="text" name="reporter_element_name" class="form-control" id="reporter_element_name">
                </div>
                <div class="form-group">
                  <label for="reporter_transfer_name">Tên giao dịch viết tắt (nếu có):</label>
                  <input type="text" name="reporter_transfer_name" class="form-control" id="reporter_transfer_name">
                </div>
                <div class="form-group">
                  <label for="reporter_eng_name">Tên tiếng Anh (nếu có):</label>
                  <input type="text" name="reporter_eng_name" class="form-control" id="reporter_eng_name">
                </div>
                <div class="form-group">
                  <label for="address">Địa chỉ</label>
                  <input type="text" name="address" class="form-control" id="address">
                </div>
                <div class="form-group">
                  <label for="city">Tỉnh / TP</label>
                  <input type="text" name="city" class="form-control" id="city">
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="phone">Điện thoại:</label>
                      <input type="text" name="phone" class="form-control" id="phone">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="fax">FAX:</label>
                      <input type="text" name="fax" class="form-control" id="fax">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="website">Website:</label>
                      <input type="text" name="website" class="form-control" id="website">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="establish_code">Số quyết định thành lập:</label>
                      <input type="text" name="establish_code" class="form-control" id="establish_code">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="establish_day">Ngày thành lập:</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input name="establish_day" type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                      {!! $errors->first('publish_day', '<p class="help-block">:message</p>') !!}
                    </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="establish_lever">Cấp quyết định thành lập:</label>
                  <div class="radio">
                    <label>
                      <input checked type="radio" name="establish_lever" id="optionsRadios1" value="1">
                      8.1. Quốc hội, Uỷ ban thường vụ Quốc hội  
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios2" value="2">
                      8.2. Chính phủ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios3" value="3">
                      8.3. Toà án nhân dân tối cao
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios2" value="4">
                      8.4. Viện kiểm sát nhân dân tối cao
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios3" value="5">
                      8.5. Thủ tướng Chỉnh phủ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios2" value="6">
                      8.6. Bộ trưởng, Thủ trưởng cơ quan ngang Bộ, cơ quan thuộc Chính phủ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios3" value="7">
                      8.7. Uỷ ban nhân dân tỉnh, thành phố trực thuộc Trung ương
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios3" value="8">
                      8.8. Tổ chức chính trị, tổ chức chính trị - xã hội, tổ chức xã hội, tổ chức xã hội - nghề nghiệp
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios3" value="9">
                      8.9. Doanh nghiệp, tổ chức khác, cá nhân
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tax_number">Mã số thuế:</label>
                  <input type="text" name="tax_number" class="form-control" id="tax_number">
                </div>
                <div class="form-group">
                  <label for="certificate_number">
                  Giấy chứng nhận đăng ký hoạt động KHCN :
                  </label>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="certificate_number">Số:</label>
                        <input type="text" name="certificate_number" class="form-control" id="certificate_number">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="certificate_date">Ngày cấp:</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input name="certificate_date" type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                          {!! $errors->first('certificate_date', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="certificate_grant">Nơi cấp:</label>
                        <input type="text" name="certificate_grant" class="form-control" id="certificate_grant">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="manager">Cơ quan quản lý trực tiếp:</label>
                  <input type="text" name="manager" class="form-control" id="manager">
                </div>
                <div class="form-group">
                  <label for="manager_city">Bộ/ngành,tỉnh/tp trực thuộc TƯ chủ quản :</label>
                  <input type="text" name="manager_city" class="form-control" id="manager_city">
                </div>
                <div class="form-group">
                  <label for="type_company">Loại hình của đơn vị/tổ chức :</label>
                  <div class="radio">
                    <label>
                      <input checked type="radio" name="type_company" id="optionsRadios1" value="1">
                      13.1.Cơ quan quản lý nhà nước
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="2">
                        13.2.Tổ chức nghiên cứu khoa học và phát triển công nghệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="3">
                        13.3.Cơ sở giáo dục đại học
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="4">
                        -----Đại học
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="5">
                        -----Học viện
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="6">
                        -----Cao đẳng
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="7">
                        13.4.Tổ chức dịch vụ KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="8">
                        -----DV thông tin, thư viện
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="9">
                        -----DV bảo tàng cho KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="10">
                        -----DV dịch thuật, biên tập, xuất bản cho KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="11">
                        -----DV điều tra cơ bản định kỳ, thường xuyên
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="12">
                        -----DV thống kê, điều tra xã hội
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="13">
                        -----DV tiêu chuẩn đo lường chất lượng
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="14">
                        -----DV tư vấn về KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="15">
                        -----DV sở hữu trí tuệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="16">
                        -----DV chuyển giao công nghệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="17">
                        -----DV KH&CN khác
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="18">
                        13.5.Đơn vị sự nghiệp khác
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="19">
                        13.6.Doanh nghiệp KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="20">
                      13.7.Doanh nghiệp
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Loại hình kinh tế :</label>
                  <div class="radio">
                    <label>
                      <input checked type="radio" name="type_econom" id="optionsRadios1" value="1">
                      14.1. Nhà nước
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_econom" id="optionsRadios2" value="2">
                      14.2. Ngoài nhà nước
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_econom" id="optionsRadios3" value="3">
                      14.3. Có vốn đầu tư nước ngoài
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="money">Giá trị tài sản cố định(triệu đồng):</label>
                  <input type="text" name="money" class="form-control" id="money">
                </div>
                <div class="form-group">
                  <label for="lab_range"> Số phòng thí nghiệm chuyên ngành về KH&CN:</label>
                  <input type="text" name="lab_range" class="form-control" id="lab_range">
                </div>
                <div class="form-group">
                  <label>Trang thiết bị nghiên cứu có giá trị lớn(từ 1 tỷ đồng trở lên theo nguyên giá): </label>
                  <button type="button" onclick="addTechFields();" class="btn btn-primary">Thêm</button>
                  <div class='row'>
                    <div class='col-md-3'>Tên trang thiết bị</div>
                    <div class='col-md-2'>Mã/Model trang thiết bị</div>
                    <div class='col-md-2'>Nước sản xuất </div>
                    <div class='col-md-1'>Năm sản xuất</div>
                    <div class='col-md-1'>Năm đưa vào sử dụng</div>
                    <div class='col-md-2'>Nguyên giá(Tỷ đồng)</div>
                    <div class='col-md-1'></div>
                  </div>
                  <div class='row' id="technologytab">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Lĩnh vực nghiên cứu chính theo chức năng nhiệm vụ :</label>
                  <div class="radio">
                    <label>
                      <input checked type="radio" name="lab_number_sub" id="optionsRadios1" value="1">
                      1. Khoa học tự nhiên
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios2" value="2">
                        2. Khoa học kỹ thuật và công nghệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios3" value="3">
                        3. Khoa học y dược
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios3" value="4">
                          4. Khoa học nông nghiệp
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios3" value="5">
                        5. Khoa học xã hội
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios3" value="6">
                        6. Khoa học nhân văn
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Lĩnh vực nghiên cứu khác:</label>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]" value="1">
                        1. Khoa học tự nhiên
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]"  value="2" >
                          2. Khoa học kỹ thuật và công nghệ
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]"  value="3">
                          3. Khoa học y dược
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]"  value="4">
                          4. Khoa học nông nghiệp
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]"  value="5">
                        5. Khoa học xã hội
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]" value="6">
                        6. Khoa học nhân văn
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="lab_description">Mô tả chi tiết</label>
                  <textarea name="lab_description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="report_info">Thông tin về số liệu trong các biểu mẫu báo cáo</label>
                  <div class="radio">
                    <label>
                      <input checked type="radio" name="report_info" id="optionsRadios1" value="1">
                      Bao gồm số liệu của toàn bộ đơn vị/tổ chức, kể cả các đơn vị trực thuộc có tư cách pháp nhân;
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="report_info" id="optionsRadios2" value="2">
                      Chỉ bao gồm số liệu của các đơn vị trực thuộc không có tư cách pháp nhân. Không có bao gồm số liệu của các đơn vị trực thuộc có tư cách pháp nhân, có tài khoản và con dấu riêng (Những đơn vị này có báo cáo riêng)
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nếu có các đơn vị trực thuộc có tư cách pháp nhân, có tài khoản và con dấu riêng, đề nghị lập danh sách các đơn vị đó</label>
                  <button type="button" onclick="addElementFields();" class="btn btn-primary">Thêm</button>
                  <div class='row' id="elementtab"><div class='col-md-4'>Tên đơn vị trực thuộc có tư cách pháp nhân</div><div class='col-md-3'>Họ và tên thủ trưởng</div><div class='col-md-4'>Địa chỉ, Điện thoại, Fax, Email</div><div class="col-md-1"></div></div>
                </div>
                <!-- /.box-body -->
              <a href="#menu2" data-toggle="tab" class="btn btn-primary">Tiếp</a>
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      <!-- ./row -->
    </section>
    </div>
    <div id="menu2" class="tab-pane fade">
      <section class="content-header">
      <h1>
        NHÂN LỰC HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">NHÂN LỰC HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            <!-- /.box-header -->
                
                <div class="form-group">
                  <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th rowspan="2"></th>
                          <th rowspan="2">Mã số</th>
                          <th rowspan="2">Tổng số</th>
                          <th colspan="6">Chia theo trình độ chuyên môn</th>
                          <th colspan="2">Chức danh GS,PGS</th>
                        </tr>
                        <tr>
                          <td>Tiến sỹ</td>
                          <td>Thạc sỹ</td>
                          <td>Đại học</td>
                          <td>Cao đẳng</td>
                          <td>Trung cấp</td>
                          <td>Khác</td>
                          <td>Giáo sư</td>
                          <td>Phó Giáo sư</td>
                        </tr>
                        <tr>
                          <td>A</td>
                          <td>B</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                          <td>7</td>
                          <td>8</td>
                          <td>9</td>
                        </tr>
                        <tr>
                          <td>Tổng số</td>
                          <td>01</td>
                          <td><input class="form-control" type="text" name="total_2[1]"></td>
                          <td><input class="form-control" type="text" name="total_2[2]"></td>
                          <td><input class="form-control" type="text" name="total_2[3]"></td>
                          <td><input class="form-control" type="text" name="total_2[4]"></td>
                          <td><input class="form-control" type="text" name="total_2[5]"></td>
                          <td><input class="form-control" type="text" name="total_2[6]"></td>
                          <td><input class="form-control" type="text" name="total_2[7]"></td>
                          <td><input class="form-control" type="text" name="total_2[8]"></td>
                          <td><input class="form-control" type="text" name="total_2[9]"></td>
                        </tr>
                        <tr>
                          <td>Trong đó số nữ</td>
                          <td>02</td>
                          <td><input class="form-control" type="text" name="female_total[1]"></td>
                          <td><input class="form-control" type="text" name="female_total[2]"></td>
                          <td><input class="form-control" type="text" name="female_total[3]"></td>
                          <td><input class="form-control" type="text" name="female_total[4]"></td>
                          <td><input class="form-control" type="text" name="female_total[5]"></td>
                          <td><input class="form-control" type="text" name="female_total[6]"></td>
                          <td><input class="form-control" type="text" name="female_total[7]"></td>
                          <td><input class="form-control" type="text" name="female_total[8]"></td>
                          <td><input class="form-control" type="text" name="female_total[9]"></td>
                        </tr>
                        <tr>
                          <td>1. Chia theo dân tộc</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>1.1. Người Việt Nam</td>
                          <td>03</td>
                          <td><input class="form-control" type="text" name="nation_vn[1]"></td>
                          <td><input class="form-control" type="text" name="nation_vn[2]"></td>
                          <td><input class="form-control" type="text" name="nation_vn[3]"></td>
                          <td><input class="form-control" type="text" name="nation_vn[4]"></td>
                          <td><input class="form-control" type="text" name="nation_vn[5]"></td>
                          <td><input class="form-control" type="text" name="nation_vn[6]"></td>
                          <td><input class="form-control" type="text" name="nation_vn[7]"></td>
                          <td><input class="form-control" type="text" name="nation_vn[8]"></td>
                          <td><input class="form-control" type="text" name="nation_vn[9]"></td>
                        </tr>
                        <tr>
                          <td>- Dân tộc Kinh</td>
                          <td>04</td>
                          <td><input class="form-control" type="text" name="nation_kinh[1]"></td>
                          <td><input class="form-control" type="text" name="nation_kinh[2]"></td>
                          <td><input class="form-control" type="text" name="nation_kinh[3]"></td>
                          <td><input class="form-control" type="text" name="nation_kinh[4]"></td>
                          <td><input class="form-control" type="text" name="nation_kinh[5]"></td>
                          <td><input class="form-control" type="text" name="nation_kinh[6]"></td>
                          <td><input class="form-control" type="text" name="nation_kinh[7]"></td>
                          <td><input class="form-control" type="text" name="nation_kinh[8]"></td>
                          <td><input class="form-control" type="text" name="nation_kinh[9]"></td>
                        </tr>
                        <tr>
                          <td>- Dân tộc thiểu số</td>
                          <td>05</td>
                          <td><input class="form-control" type="text" name="nation_other[1]"></td>
                          <td><input class="form-control" type="text" name="nation_other[2]"></td>
                          <td><input class="form-control" type="text" name="nation_other[3]"></td>
                          <td><input class="form-control" type="text" name="nation_other[4]"></td>
                          <td><input class="form-control" type="text" name="nation_other[5]"></td>
                          <td><input class="form-control" type="text" name="nation_other[6]"></td>
                          <td><input class="form-control" type="text" name="nation_other[7]"></td>
                          <td><input class="form-control" type="text" name="nation_other[8]"></td>
                          <td><input class="form-control" type="text" name="nation_other[9]"></td>
                        </tr>
                        <tr>
                          <td>1.2. Người nước ngoài</td>
                          <td>06</td>
                          <td><input class="form-control" type="text" name="nation_foregin[1]"></td>
                          <td><input class="form-control" type="text" name="nation_foregin[2]"></td>
                          <td><input class="form-control" type="text" name="nation_foregin[3]"></td>
                          <td><input class="form-control" type="text" name="nation_foregin[4]"></td>
                          <td><input class="form-control" type="text" name="nation_foregin[5]"></td>
                          <td><input class="form-control" type="text" name="nation_foregin[6]"></td>
                          <td><input class="form-control" type="text" name="nation_foregin[7]"></td>
                          <td><input class="form-control" type="text" name="nation_foregin[8]"></td>
                          <td><input class="form-control" type="text" name="nation_foregin[9]"></td>
                        </tr>
                        <tr>
                          <td>2. Chia theo lĩnh vực đào tạo</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>2.1. Khoa học tự nhiên</td>
                          <td>07</td>
                          <td><input class="form-control" type="text" name="class_khtn[1]"></td>
                          <td><input class="form-control" type="text" name="class_khtn[2]"></td>
                          <td><input class="form-control" type="text" name="class_khtn[3]"></td>
                          <td><input class="form-control" type="text" name="class_khtn[4]"></td>
                          <td><input class="form-control" type="text" name="class_khtn[5]"></td>
                          <td><input class="form-control" type="text" name="class_khtn[6]"></td>
                          <td><input class="form-control" type="text" name="class_khtn[7]"></td>
                          <td><input class="form-control" type="text" name="class_khtn[8]"></td>
                          <td><input class="form-control" type="text" name="class_khtn[9]"></td>
                        </tr>
                        <tr>
                          <td>2.2. Khoa học kỹ thuật và công nghệ</td>
                          <td>08</td>
                          <td><input class="form-control" type="text" name="class_khkt[1]"></td>
                          <td><input class="form-control" type="text" name="class_khkt[2]"></td>
                          <td><input class="form-control" type="text" name="class_khkt[3]"></td>
                          <td><input class="form-control" type="text" name="class_khkt[4]"></td>
                          <td><input class="form-control" type="text" name="class_khkt[5]"></td>
                          <td><input class="form-control" type="text" name="class_khkt[6]"></td>
                          <td><input class="form-control" type="text" name="class_khkt[7]"></td>
                          <td><input class="form-control" type="text" name="class_khkt[8]"></td>
                          <td><input class="form-control" type="text" name="class_khkt[9]"></td>
                        </tr>
                        <tr>
                          <td>2.3. Khoa học y , dược</td>
                          <td>09</td>
                          <td><input class="form-control" type="text" name="class_khyd[1]"></td>
                          <td><input class="form-control" type="text" name="class_khyd[2]"></td>
                          <td><input class="form-control" type="text" name="class_khyd[3]"></td>
                          <td><input class="form-control" type="text" name="class_khyd[4]"></td>
                          <td><input class="form-control" type="text" name="class_khyd[5]"></td>
                          <td><input class="form-control" type="text" name="class_khyd[6]"></td>
                          <td><input class="form-control" type="text" name="class_khyd[7]"></td>
                          <td><input class="form-control" type="text" name="class_khyd[8]"></td>
                          <td><input class="form-control" type="text" name="class_khyd[9]"></td>
                        </tr>
                        <tr>
                          <td>2.4. Khoa học nông nghiệp</td>
                          <td>10</td>
                          <td><input class="form-control" type="text" name="class_khnn[1]"></td>
                          <td><input class="form-control" type="text" name="class_khnn[2]"></td>
                          <td><input class="form-control" type="text" name="class_khnn[3]"></td>
                          <td><input class="form-control" type="text" name="class_khnn[4]"></td>
                          <td><input class="form-control" type="text" name="class_khnn[5]"></td>
                          <td><input class="form-control" type="text" name="class_khnn[6]"></td>
                          <td><input class="form-control" type="text" name="class_khnn[7]"></td>
                          <td><input class="form-control" type="text" name="class_khnn[8]"></td>
                          <td><input class="form-control" type="text" name="class_khnn[9]"></td>
                        </tr>
                        <tr>
                          <td>2.5. Khoa học xã hội</td>
                          <td>11</td>
                          <td><input class="form-control" type="text" name="class_khxh[1]"></td>
                          <td><input class="form-control" type="text" name="class_khxh[2]"></td>
                          <td><input class="form-control" type="text" name="class_khxh[3]"></td>
                          <td><input class="form-control" type="text" name="class_khxh[4]"></td>
                          <td><input class="form-control" type="text" name="class_khxh[5]"></td>
                          <td><input class="form-control" type="text" name="class_khxh[6]"></td>
                          <td><input class="form-control" type="text" name="class_khxh[7]"></td>
                          <td><input class="form-control" type="text" name="class_khxh[8]"></td>
                          <td><input class="form-control" type="text" name="class_khxh[9]"></td>
                        </tr>
                        <tr>
                          <td>2.6. Khoa học nhân văn  </td>
                          <td>12</td>
                          <td><input class="form-control" type="text" name="class_khnv[1]"></td>
                          <td><input class="form-control" type="text" name="class_khnv[2]"></td>
                          <td><input class="form-control" type="text" name="class_khnv[3]"></td>
                          <td><input class="form-control" type="text" name="class_khnv[4]"></td>
                          <td><input class="form-control" type="text" name="class_khnv[5]"></td>
                          <td><input class="form-control" type="text" name="class_khnv[6]"></td>
                          <td><input class="form-control" type="text" name="class_khnv[7]"></td>
                          <td><input class="form-control" type="text" name="class_khnv[8]"></td>
                          <td><input class="form-control" type="text" name="class_khnv[9]"></td>
                        </tr>
                        <tr>
                          <td>2.7. Khác</td>
                          <td>13</td>
                          <td><input class="form-control" type="text" name="class_other[1]"></td>
                          <td><input class="form-control" type="text" name="class_other[2]"></td>
                          <td><input class="form-control" type="text" name="class_other[3]"></td>
                          <td><input class="form-control" type="text" name="class_other[4]"></td>
                          <td><input class="form-control" type="text" name="class_other[5]"></td>
                          <td><input class="form-control" type="text" name="class_other[6]"></td>
                          <td><input class="form-control" type="text" name="class_other[7]"></td>
                          <td><input class="form-control" type="text" name="class_other[8]"></td>
                          <td><input class="form-control" type="text" name="class_other[9]"></td>
                        </tr>
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <a href="#menu3" data-toggle="tab" class="btn btn-primary">Tiếp</a>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    </div>
    <div id="menu3" class="tab-pane fade">
      <section class="content-header">
      <h1>
        CHI CHO KHOA HỌC VÀ CÔNG NGHỆ 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CHI CHO KHOA HỌC VÀ CÔNG NGHỆ
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            <!-- /.box-header -->
                <div class="form-group">
                  <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th rowspan="3"></th>
                          <th rowspan="3">Mã số</th>
                          <th rowspan="3">Tổng số</th>
                          <th colspan="4">Chia theo nguồn cấp kinh phí</th>
                        </tr>
                        <tr>
                          <td colspan="2">Ngân sách nhà nước</td>
                          <td rowspan="2">Ngoài NSNN</td>
                          <td rowspan="2">Nước ngoài</td>
                        </tr>
                        <tr>
                          <td>NS Trung ương</td>
                          <td>NS Địa phương</td>
                        </tr>
                        <tr>
                          <td>A</td>
                          <td>B</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td>TỔNG CHI<br>Chia theo:</td>
                          <td>01</td>
                          <td><input class="form-control" type="text" name="total_3[1]"></td>
                          <td><input class="form-control" type="text" name="total_3[2]"></td>
                          <td><input class="form-control" type="text" name="total_3[3]"></td>
                          <td><input class="form-control" type="text" name="total_3[4]"></td>
                          <td><input class="form-control" type="text" name="total_3[5]"></td>
                        </tr>
                        <tr>
                          <td>1. CHI ĐẦU TƯ PHÁT TRIỂN KHOA HỌC VÀ CÔNG NGHỆ</td>
                          <td>02</td>
                          <td><input class="form-control" type="text" name="pay_improve_khcn[1]"></td>
                          <td><input class="form-control" type="text" name="pay_improve_khcn[2]"></td>
                          <td><input class="form-control" type="text" name="pay_improve_khcn[3]"></td>
                          <td><input class="form-control" type="text" name="pay_improve_khcn[4]"></td>
                          <td><input class="form-control" type="text" name="pay_improve_khcn[5]"></td>
                        </tr>
                        <tr>
                          <td>2. CHI SỰ NGHIỆP KHOA HỌC VÀ CÔNG NGHỆ<br>Chia theo:</td>
                          <td>03</td>
                          <td><input class="form-control" type="text" name="pay_khcn[1]"></td>
                          <td><input class="form-control" type="text" name="pay_khcn[2]"></td>
                          <td><input class="form-control" type="text" name="pay_khcn[3]"></td>
                          <td><input class="form-control" type="text" name="pay_khcn[4]"></td>
                          <td><input class="form-control" type="text" name="pay_khcn[5]"></td>
                        </tr>
                        <tr>
                          <td>2.1. Chi quỹ lương và hoạt động bộ máy<br>trong đó:</td>
                          <td>04</td>
                          <td><input class="form-control" type="text" name="pay_salary_total[1]"></td>
                          <td><input class="form-control" type="text" name="pay_salary_total[2]"></td>
                          <td><input class="form-control" type="text" name="pay_salary_total[3]"></td>
                          <td><input class="form-control" type="text" name="pay_salary_total[4]"></td>
                          <td><input class="form-control" type="text" name="pay_salary_total[5]"></td>
                        </tr>
                        <tr>
                          <td>- Chi tiền lương và phụ cấp, tiền công, các khoản đóng góp theo lương</td>
                          <td>05</td>
                          <td><input class="form-control" type="text" name="pay_salary[1]"></td>
                          <td><input class="form-control" type="text" name="pay_salary[2]"></td>
                          <td><input class="form-control" type="text" name="pay_salary[3]"></td>
                          <td><input class="form-control" type="text" name="pay_salary[4]"></td>
                          <td><input class="form-control" type="text" name="pay_salary[5]"></td>
                        </tr>
                        <tr>
                          <td>- Chi hoạt động bộ máy</td>
                          <td>06</td>
                          <td><input class="form-control" type="text" name="pay_machine[1]"></td>
                          <td><input class="form-control" type="text" name="pay_machine[2]"></td>
                          <td><input class="form-control" type="text" name="pay_machine[3]"></td>
                          <td><input class="form-control" type="text" name="pay_machine[4]"></td>
                          <td><input class="form-control" type="text" name="pay_machine[5]"></td>
                        </tr>
                        <tr>
                          <td>2.2. Chi hoạt động thường xuyên theo chức năng</td>
                          <td>07</td>
                          <td><input class="form-control" type="text" name="pay_normal[1]"></td>
                          <td><input class="form-control" type="text" name="pay_normal[2]"></td>
                          <td><input class="form-control" type="text" name="pay_normal[3]"></td>
                          <td><input class="form-control" type="text" name="pay_normal[4]"></td>
                          <td><input class="form-control" type="text" name="pay_normal[5]"></td>
                        </tr>
                        <tr>
                          <td>2.3. Chi thực hiện nhiệm vụ KH&CN<br>trong đó:</td>
                          <td>08</td>
                          <td><input class="form-control" type="text" name="pay_mission[1]"></td>
                          <td><input class="form-control" type="text" name="pay_mission[2]"></td>
                          <td><input class="form-control" type="text" name="pay_mission[3]"></td>
                          <td><input class="form-control" type="text" name="pay_mission[4]"></td>
                          <td><input class="form-control" type="text" name="pay_mission[5]"></td>
                        </tr>
                        <tr>
                          <td>- Nhiệm vụ KH&CN cấp quốc gia</td>
                          <td>09</td>
                          <td><input class="form-control" type="text" name="mission_lv1[1]"></td>
                          <td><input class="form-control" type="text" name="mission_lv1[2]"></td>
                          <td><input class="form-control" type="text" name="mission_lv1[3]"></td>
                          <td><input class="form-control" type="text" name="mission_lv1[4]"></td>
                          <td><input class="form-control" type="text" name="mission_lv1[5]"></td>
                        </tr>
                        <tr>
                          <td>- Nhiệm vụ KH&CN cấp bộ</td>
                          <td>10</td>
                          <td><input class="form-control" type="text" name="mission_lv2[1]"></td>
                          <td><input class="form-control" type="text" name="mission_lv2[2]"></td>
                          <td><input class="form-control" type="text" name="mission_lv2[3]"></td>
                          <td><input class="form-control" type="text" name="mission_lv2[4]"></td>
                          <td><input class="form-control" type="text" name="mission_lv2[5]"></td>
                        </tr>
                        <tr>
                          <td>- Nhiệm vụ KH&CN tỉnh</td>
                          <td>11</td>
                          <td><input class="form-control" type="text" name="mission_lv3[1]"></td>
                          <td><input class="form-control" type="text" name="mission_lv3[2]"></td>
                          <td><input class="form-control" type="text" name="mission_lv3[3]"></td>
                          <td><input class="form-control" type="text" name="mission_lv3[4]"></td>
                          <td><input class="form-control" type="text" name="mission_lv3[5]"></td>
                        </tr>
                        <tr>
                          <td>- Nhiệm vụ KH&CN cơ sở</td>
                          <td>12</td>
                          <td><input class="form-control" type="text" name="mission_lv4[1]"></td>
                          <td><input class="form-control" type="text" name="mission_lv4[2]"></td>
                          <td><input class="form-control" type="text" name="mission_lv4[3]"></td>
                          <td><input class="form-control" type="text" name="mission_lv4[4]"></td>
                          <td><input class="form-control" type="text" name="mission_lv4[5]"></td>
                        </tr>
                        <tr>
                          <td>- Nhiệm vụ KH&CN khác</td>
                          <td>13</td>
                          <td><input class="form-control" type="text" name="mission_lv5[1]"></td>
                          <td><input class="form-control" type="text" name="mission_lv5[2]"></td>
                          <td><input class="form-control" type="text" name="mission_lv5[3]"></td>
                          <td><input class="form-control" type="text" name="mission_lv5[4]"></td>
                          <td><input class="form-control" type="text" name="mission_lv5[5]"></td>
                        </tr>
                        <tr>
                          <td>2.4. Chi tăng cường năng lực nghiên cứu</td>
                          <td>14</td>
                          <td><input class="form-control" type="text" name="pay_lab[1]"></td>
                          <td><input class="form-control" type="text" name="pay_lab[2]"></td>
                          <td><input class="form-control" type="text" name="pay_lab[3]"></td>
                          <td><input class="form-control" type="text" name="pay_lab[4]"></td>
                          <td><input class="form-control" type="text" name="pay_lab[5]"></td>
                        </tr>
                        <tr>
                          <td>2.5. Chi sửa chữa chống xuống cấp</td>
                          <td>15</td>
                          <td><input class="form-control" type="text" name="pay_maintain[1]"></td>
                          <td><input class="form-control" type="text" name="pay_maintain[2]"></td>
                          <td><input class="form-control" type="text" name="pay_maintain[3]"></td>
                          <td><input class="form-control" type="text" name="pay_maintain[4]"></td>
                          <td><input class="form-control" type="text" name="pay_maintain[5]"></td>
                        </tr>
                        <tr>
                          <td>2.6. Chi hợp tác quốc tế</td>
                          <td>16</td>
                          <td><input class="form-control" type="text" name="pay_univer[1]"></td>
                          <td><input class="form-control" type="text" name="pay_univer[2]"></td>
                          <td><input class="form-control" type="text" name="pay_univer[3]"></td>
                          <td><input class="form-control" type="text" name="pay_univer[4]"></td>
                          <td><input class="form-control" type="text" name="pay_univer[5]"></td>
                        </tr>
                        <tr>
                          <td>2.7. Chi sự nghiệp khoa học và công nghệ khác</td>
                          <td>17</td>
                          <td><input class="form-control" type="text" name="pay_improve_other[1]"></td>
                          <td><input class="form-control" type="text" name="pay_improve_other[2]"></td>
                          <td><input class="form-control" type="text" name="pay_improve_other[3]"></td>
                          <td><input class="form-control" type="text" name="pay_improve_other[4]"></td>
                          <td><input class="form-control" type="text" name="pay_improve_other[5]"></td>
                        </tr>
                        <tr>
                          <td>3. CHI KHÁC CHO KH&CN</td>
                          <td>18</td>
                          <td><input class="form-control" type="text" name="pay_other[1]"></td>
                          <td><input class="form-control" type="text" name="pay_other[2]"></td>
                          <td><input class="form-control" type="text" name="pay_other[3]"></td>
                          <td><input class="form-control" type="text" name="pay_other[4]"></td>
                          <td><input class="form-control" type="text" name="pay_other[5]"></td>
                        </tr>
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <a href="#menu4" data-toggle="tab" class="btn btn-primary">Tiếp</a>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    </div>
    <div id="menu4" class="tab-pane fade">
      <section class="content-header">
      <h1>
        NHIỆM VỤ KHOA HỌC VÀ CÔNG NGHỆ
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">NHIỆM VỤ KHOA HỌC VÀ CÔNG NGHỆ
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            <!-- /.box-header -->
            <!-- form start -->
                <div class="form-group">
                  <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th rowspan="3"></th>
                          <th rowspan="3">Mã số</th>
                          <th rowspan="3">Tổng số</th>
                          <th rowspan="3">Trong đó: Số nhiệm vụ KH&CN chủ nhiệm là nữ</th>
                          <th colspan="4">Tình trạng tiến hành</th>
                        </tr>
                        <tr>
                          <td colspan="2">Số đang tiến hành</td>
                          <td rowspan="2">Số được nghiệm thu</td>
                          <td rowspan="2">Số đã đưa vào ứng dụng</td>
                        </tr>
                        <tr>
                          <td>Số phê duyệt mới trong năm</td>
                          <td>Số chuyển tiếp từ năm trước</td>
                        </tr>
                        <tr>
                          <td>A</td>
                          <td>B</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                        </tr>
                        <tr>
                          <td>1. Tổng số đề tài/đề án KH&CN</td>
                          <td>01</td>
                          <td><input class="form-control" type="text" name="total_4[1]"></td>
                          <td><input class="form-control" type="text" name="total_4[2]"></td>
                          <td><input class="form-control" type="text" name="total_4[3]"></td>
                          <td><input class="form-control" type="text" name="total_4[4]"></td>
                          <td><input class="form-control" type="text" name="total_4[5]"></td>
                          <td><input class="form-control" type="text" name="total_4[6]"></td>
                        </tr>
                        <tr>
                          <td>1.1. Chia theo cấp đề tài/đề án</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Cấp quốc gia</td>
                          <td>02</td>
                          <td><input class="form-control" type="text" name="subject_lv1[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lv1[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lv1[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lv1[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lv1[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lv1[6]"></td>
                        </tr>
                        <tr>
                          <td>- Cấp bộ</td>
                          <td>03</td>
                          <td><input class="form-control" type="text" name="subject_lv2[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lv2[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lv2[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lv2[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lv2[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lv2[6]"></td>
                        </tr>
                        <tr>
                          <td>- Cấp tỉnh</td>
                          <td>04</td>
                          <td><input class="form-control" type="text" name="subject_lv3[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lv3[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lv3[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lv3[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lv3[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lv3[6]"></td>
                        </tr>
                        <tr>
                          <td>- Cấp cơ sở</td>
                          <td>05</td>
                          <td><input class="form-control" type="text" name="subject_lv4[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lv4[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lv4[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lv4[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lv4[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lv4[6]"></td>
                        </tr>
                        <tr>
                          <td>- Cấp khác</td>
                          <td>06</td>
                          <td><input class="form-control" type="text" name="subject_lv5[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lv5[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lv5[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lv5[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lv5[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lv5[6]"></td>
                        </tr>
                        <tr>
                          <td>1.2. Chia theo lĩnh vực nghiên cứu</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Khoa học tự nhiên</td>
                          <td>07</td>
                          <td><input class="form-control" type="text" name="subject_lab_1[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_1[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_1[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_1[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_1[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_1[6]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học kỹ thuật và công nghệ</td>
                          <td>08</td>
                          <td><input class="form-control" type="text" name="subject_lab_2[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_2[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_2[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_2[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_2[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_2[6]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học y dược</td>
                          <td>09</td>
                          <td><input class="form-control" type="text" name="subject_lab_3[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_3[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_3[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_3[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_3[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_3[6]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học nông nghiệp</td>
                          <td>10</td>
                          <td><input class="form-control" type="text" name="subject_lab_4[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_4[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_4[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_4[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_4[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_4[6]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học xã hội</td>
                          <td>11</td>
                          <td><input class="form-control" type="text" name="subject_lab_5[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_5[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_5[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_5[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_5[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_5[6]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học nhân văn</td>
                          <td>12</td>
                          <td><input class="form-control" type="text" name="subject_lab_6[1]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_6[2]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_6[3]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_6[4]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_6[5]"></td>
                          <td><input class="form-control" type="text" name="subject_lab_6[6]"></td>
                        </tr>
                        <tr>
                          <td>1.3. Chia theo nguồn cấp kinh phí</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Ngân sách nhà nước<br>Trong đó:</td>
                          <td>13</td>
                          <td><input class="form-control" type="text" name="subject_money_1[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="subject_money_1[3]"></td>
                          <td><input class="form-control" type="text" name="subject_money_1[4]"></td>
                          <td><input class="form-control" type="text" name="subject_money_1[5]"></td>
                          <td><input class="form-control" type="text" name="subject_money_1[6]"></td>
                        </tr>
                        <tr>
                          <td>   + Trung ương</td>
                          <td>14</td>
                          <td><input class="form-control" type="text" name="subject_money_2[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="subject_money_2[3]"></td>
                          <td><input class="form-control" type="text" name="subject_money_2[4]"></td>
                          <td><input class="form-control" type="text" name="subject_money_2[5]"></td>
                          <td><input class="form-control" type="text" name="subject_money_2[6]"></td>
                        </tr>
                        <tr>
                          <td>   + Địa phương</td>
                          <td>15</td>
                          <td><input class="form-control" type="text" name="subject_money_3[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="subject_money_3[3]"></td>
                          <td><input class="form-control" type="text" name="subject_money_3[4]"></td>
                          <td><input class="form-control" type="text" name="subject_money_3[5]"></td>
                          <td><input class="form-control" type="text" name="subject_money_3[6]"></td>
                        </tr>
                        <tr>
                          <td>- Doanh nghiệp</td>
                          <td>16</td>
                          <td><input class="form-control" type="text" name="subject_money_4[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="subject_money_4[3]"></td>
                          <td><input class="form-control" type="text" name="subject_money_4[4]"></td>
                          <td><input class="form-control" type="text" name="subject_money_4[5]"></td>
                          <td><input class="form-control" type="text" name="subject_money_4[6]"></td>
                        </tr>
                        <tr>
                          <td>- Trường đại học</td>
                          <td>17</td>
                          <td><input class="form-control" type="text" name="subject_money_5[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="subject_money_5[3]"></td>
                          <td><input class="form-control" type="text" name="subject_money_5[4]"></td>
                          <td><input class="form-control" type="text" name="subject_money_5[5]"></td>
                          <td><input class="form-control" type="text" name="subject_money_5[6]"></td>
                        </tr>
                        <tr>
                          <td>- Nước ngoài</td>
                          <td>18</td>
                          <td><input class="form-control" type="text" name="subject_money_6[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="subject_money_6[3]"></td>
                          <td><input class="form-control" type="text" name="subject_money_6[4]"></td>
                          <td><input class="form-control" type="text" name="subject_money_6[5]"></td>
                          <td><input class="form-control" type="text" name="subject_money_6[6]"></td>
                        </tr>
                        <tr>
                          <td>- Nguồn khác</td>
                          <td>19</td>
                          <td><input class="form-control" type="text" name="subject_money_7[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="subject_money_7[3]"></td>
                          <td><input class="form-control" type="text" name="subject_money_7[4]"></td>
                          <td><input class="form-control" type="text" name="subject_money_7[5]"></td>
                          <td><input class="form-control" type="text" name="subject_money_7[6]"></td>
                        </tr>
                        <tr>
                          <td>2. Tổng số dự án</td>
                          <td>20</td>
                          <td><input class="form-control" type="text" name="total_job[1]"></td>
                          <td><input class="form-control" type="text" name="total_job[2]"></td>
                          <td><input class="form-control" type="text" name="total_job[3]"></td>
                          <td><input class="form-control" type="text" name="total_job[4]"></td>
                          <td><input class="form-control" type="text" name="total_job[5]"></td>
                          <td><input class="form-control" type="text" name="total_job[6]"></td>
                        </tr>
                        <tr>
                          <td>2.1. Chia theo cấp dự án</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Cấp quốc gia</td>
                          <td>21</td>
                          <td><input class="form-control" type="text" name="total_job_1[1]"></td>
                          <td><input class="form-control" type="text" name="total_job_1[2]"></td>
                          <td><input class="form-control" type="text" name="total_job_1[3]"></td>
                          <td><input class="form-control" type="text" name="total_job_1[4]"></td>
                          <td><input class="form-control" type="text" name="total_job_1[5]"></td>
                          <td><input class="form-control" type="text" name="total_job_1[6]"></td>
                        </tr>
                        <tr>
                          <td>- Cấp bộ</td>
                          <td>22</td>
                          <td><input class="form-control" type="text" name="total_job_2[1]"></td>
                          <td><input class="form-control" type="text" name="total_job_2[2]"></td>
                          <td><input class="form-control" type="text" name="total_job_2[3]"></td>
                          <td><input class="form-control" type="text" name="total_job_2[4]"></td>
                          <td><input class="form-control" type="text" name="total_job_2[5]"></td>
                          <td><input class="form-control" type="text" name="total_job_2[6]"></td>
                        </tr>
                        <tr>
                          <td>- Cấp tỉnh</td>
                          <td>23</td>
                          <td><input class="form-control" type="text" name="total_job_3[1]"></td>
                          <td><input class="form-control" type="text" name="total_job_3[2]"></td>
                          <td><input class="form-control" type="text" name="total_job_3[3]"></td>
                          <td><input class="form-control" type="text" name="total_job_3[4]"></td>
                          <td><input class="form-control" type="text" name="total_job_3[5]"></td>
                          <td><input class="form-control" type="text" name="total_job_3[6]"></td>
                        </tr>
                        <tr>
                          <td>- Cấp cơ sở</td>
                          <td>24</td>
                          <td><input class="form-control" type="text" name="total_job_4[1]"></td>
                          <td><input class="form-control" type="text" name="total_job_4[2]"></td>
                          <td><input class="form-control" type="text" name="total_job_4[3]"></td>
                          <td><input class="form-control" type="text" name="total_job_4[4]"></td>
                          <td><input class="form-control" type="text" name="total_job_4[5]"></td>
                          <td><input class="form-control" type="text" name="total_job_4[6]"></td>
                        </tr>
                        <tr>
                          <td>- Cấp khác</td>
                          <td>25</td>
                          <td><input class="form-control" type="text" name="total_job_5[1]"></td>
                          <td><input class="form-control" type="text" name="total_job_5[2]"></td>
                          <td><input class="form-control" type="text" name="total_job_5[3]"></td>
                          <td><input class="form-control" type="text" name="total_job_5[4]"></td>
                          <td><input class="form-control" type="text" name="total_job_5[5]"></td>
                          <td><input class="form-control" type="text" name="total_job_5[6]"></td>
                        </tr>
                        <tr>
                          <td>2.2. Chia theo lĩnh vực nghiên cứu</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Khoa học tự nhiên</td>
                          <td>26</td>
                          <td><input class="form-control" type="text" name="total_lab_1[1]"></td>
                          <td><input class="form-control" type="text" name="total_lab_1[2]"></td>
                          <td><input class="form-control" type="text" name="total_lab_1[3]"></td>
                          <td><input class="form-control" type="text" name="total_lab_1[4]"></td>
                          <td><input class="form-control" type="text" name="total_lab_1[5]"></td>
                          <td><input class="form-control" type="text" name="total_lab_1[6]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học kỹ thuật và công nghệ</td>
                          <td>27</td>
                          <td><input class="form-control" type="text" name="total_lab_2[1]"></td>
                          <td><input class="form-control" type="text" name="total_lab_2[2]"></td>
                          <td><input class="form-control" type="text" name="total_lab_2[3]"></td>
                          <td><input class="form-control" type="text" name="total_lab_2[4]"></td>
                          <td><input class="form-control" type="text" name="total_lab_2[5]"></td>
                          <td><input class="form-control" type="text" name="total_lab_2[6]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học y dược</td>
                          <td>28</td>
                          <td><input class="form-control" type="text" name="total_lab_3[1]"></td>
                          <td><input class="form-control" type="text" name="total_lab_3[2]"></td>
                          <td><input class="form-control" type="text" name="total_lab_3[3]"></td>
                          <td><input class="form-control" type="text" name="total_lab_3[4]"></td>
                          <td><input class="form-control" type="text" name="total_lab_3[5]"></td>
                          <td><input class="form-control" type="text" name="total_lab_3[6]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học nông nghiệp</td>
                          <td>29</td>
                          <td><input class="form-control" type="text" name="total_lab_4[1]"></td>
                          <td><input class="form-control" type="text" name="total_lab_4[2]"></td>
                          <td><input class="form-control" type="text" name="total_lab_4[3]"></td>
                          <td><input class="form-control" type="text" name="total_lab_4[4]"></td>
                          <td><input class="form-control" type="text" name="total_lab_4[5]"></td>
                          <td><input class="form-control" type="text" name="total_lab_4[6]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học xã hội</td>
                          <td>30</td>
                          <td><input class="form-control" type="text" name="total_lab_5[1]"></td>
                          <td><input class="form-control" type="text" name="total_lab_5[2]"></td>
                          <td><input class="form-control" type="text" name="total_lab_5[3]"></td>
                          <td><input class="form-control" type="text" name="total_lab_5[4]"></td>
                          <td><input class="form-control" type="text" name="total_lab_5[5]"></td>
                          <td><input class="form-control" type="text" name="total_lab_5[6]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học nhân văn</td>
                          <td>31</td>
                          <td><input class="form-control" type="text" name="total_lab_6[1]"></td>
                          <td><input class="form-control" type="text" name="total_lab_6[2]"></td>
                          <td><input class="form-control" type="text" name="total_lab_6[3]"></td>
                          <td><input class="form-control" type="text" name="total_lab_6[4]"></td>
                          <td><input class="form-control" type="text" name="total_lab_6[5]"></td>
                          <td><input class="form-control" type="text" name="total_lab_6[6]"></td>
                        </tr>
                        <tr>
                          <td>2.3. Chia theo nguồn cấp kinh phí</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Ngân sách nhà nước<br>Trong đó:</td>
                          <td>32</td>
                          <td><input class="form-control" type="text" name="total_money_1[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="total_money_1[3]"></td>
                          <td><input class="form-control" type="text" name="total_money_1[4]"></td>
                          <td><input class="form-control" type="text" name="total_money_1[5]"></td>
                          <td><input class="form-control" type="text" name="total_money_1[6]"></td>
                        </tr>
                        <tr>
                          <td>   + Trung ương</td>
                          <td>33</td>
                          <td><input class="form-control" type="text" name="total_money_2[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="total_money_2[3]"></td>
                          <td><input class="form-control" type="text" name="total_money_2[4]"></td>
                          <td><input class="form-control" type="text" name="total_money_2[5]"></td>
                          <td><input class="form-control" type="text" name="total_money_2[6]"></td>
                        </tr>
                        <tr>
                          <td>   + Địa phương</td>
                          <td>34</td>
                          <td><input class="form-control" type="text" name="total_money_3[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="total_money_3[3]"></td>
                          <td><input class="form-control" type="text" name="total_money_3[4]"></td>
                          <td><input class="form-control" type="text" name="total_money_3[5]"></td>
                          <td><input class="form-control" type="text" name="total_money_3[6]"></td>
                        </tr>
                        <tr>
                          <td>- Doanh nghiệp</td>
                          <td>35</td>
                          <td><input class="form-control" type="text" name="total_money_4[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="total_money_4[3]"></td>
                          <td><input class="form-control" type="text" name="total_money_4[4]"></td>
                          <td><input class="form-control" type="text" name="total_money_4[5]"></td>
                          <td><input class="form-control" type="text" name="total_money_4[6]"></td>
                        </tr>
                        <tr>
                          <td>- Trường đại học</td>
                          <td>36</td>
                          <td><input class="form-control" type="text" name="total_money_5[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="total_money_5[3]"></td>
                          <td><input class="form-control" type="text" name="total_money_5[4]"></td>
                          <td><input class="form-control" type="text" name="total_money_5[5]"></td>
                          <td><input class="form-control" type="text" name="total_money_5[6]"></td>
                        </tr>
                        <tr>
                          <td>- Nước ngoài</td>
                          <td>37</td>
                          <td><input class="form-control" type="text" name="total_money_6[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="total_money_6[3]"></td>
                          <td><input class="form-control" type="text" name="total_money_6[4]"></td>
                          <td><input class="form-control" type="text" name="total_money_6[5]"></td>
                          <td><input class="form-control" type="text" name="total_money_6[6]"></td>
                        </tr>
                        <tr>
                          <td>- Nguồn khác</td>
                          <td>38</td>
                          <td><input class="form-control" type="text" name="total_money_7[1]"></td>
                          <td>X</td>
                          <td><input class="form-control" type="text" name="total_money_7[3]"></td>
                          <td><input class="form-control" type="text" name="total_money_7[4]"></td>
                          <td><input class="form-control" type="text" name="total_money_7[5]"></td>
                          <td><input class="form-control" type="text" name="total_money_7[6]"></td>
                        </tr>
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <a href="#menu5" data-toggle="tab" class="btn btn-primary">Tiếp</a>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    </div>
    <div id="menu5" class="tab-pane fade">
      <section class="content-header">
      <h1>
        HỢP TÁC QUỐC TẾ TRONG HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">HỢP TÁC QUỐC TẾ TRONG HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            <!-- /.box-header -->
            <!-- form start -->
                <div class="form-group">
                  <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th ></th>
                          <th >Mã số</th>
                          <th >Đơn vị tính </th>
                          <th >Tổng số</th>
                          <th >Tổng kinh phí<br>(triệu đồng)</th>
                        </tr>
                        <tr>
                          <td>A</td>
                          <td>B</td>
                          <td>C</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>1. SỐ NHIỆM VỤ VÀ KINH PHÍ HTQT VỀ KH&CN MÀ ĐƠN VỊ CHỦ TRÌ</td>
                          <td>01</td>
                          <td>Nhiệm vụ</td>
                          <td><input class="form-control" type="text" name="total_5[1]"></td>
                          <td><input class="form-control" type="text" name="total_5[2]"></td>
                        </tr>
                        <tr>
                          <td>1.1. Chia theo lĩnh vực nghiên cứu</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Khoa học tự nhiên</td>
                          <td>02</td>
                          <td>Nhiệm vụ</td>
                          <td><input class="form-control" type="text" name="mission_lab_1[1]"></td>
                          <td><input class="form-control" type="text" name="mission_lab_1[2]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học kỹ thuật và công nghệ</td>
                          <td>03</td>
                          <td>Nhiệm vụ</td>
                          <td><input class="form-control" type="text" name="mission_lab_2[1]"></td>
                          <td><input class="form-control" type="text" name="mission_lab_2[2]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học y, dược</td>
                          <td>04</td>
                          <td>Nhiệm vụ</td>
                          <td><input class="form-control" type="text" name="mission_lab_3[1]"></td>
                          <td><input class="form-control" type="text" name="mission_lab_3[2]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học nông nghiệp</td>
                          <td>05</td>
                          <td>Nhiệm vụ</td>
                          <td><input class="form-control" type="text" name="mission_lab_4[1]"></td>
                          <td><input class="form-control" type="text" name="mission_lab_4[2]"></td>
                        </tr>
                        <tr>
                            <td>- Khoa học xã hội</td>
                            <td>06</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td><input class="form-control" type="text" name="mission_lab_5[1]"></td>
                            <td><input class="form-control" type="text" name="mission_lab_5[2]"></td>
                        </tr>
                        <tr>
                            <td>- Khoa học nhân văn</td>
                            <td>07</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td><input class="form-control" type="text" name="mission_lab_6[1]"></td>
                            <td><input class="form-control" type="text" name="mission_lab_6[2]"></td>
                        </tr>
                        <tr>
                            <td>1.2. Chia theo hình thức hợp tác</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>- Đa phương</td>
                            <td>08</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td><input class="form-control" type="text" name="collaborate_1[1]"></td>
                            <td><input class="form-control" type="text" name="collaborate_1[2]"></td>
                        </tr>
                        <tr>
                            <td>- Song phương</td>
                            <td>09</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td><input class="form-control" type="text" name="collaborate_2[1]"></td>
                            <td><input class="form-control" type="text" name="collaborate_2[2]"></td>
                        </tr>
                        <tr>
                            <td>- Nghị định thư</td>
                            <td>10</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td><input class="form-control" type="text" name="collaborate_3[1]"></td>
                            <td><input class="form-control" type="text" name="collaborate_3[2]"></td>
                        </tr>
                        <tr>
                            <td>- Khác</td>
                            <td>11</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td><input class="form-control" type="text" name="collaborate_4[1]"></td>
                            <td><input class="form-control" type="text" name="collaborate_4[2]"></td>
                        </tr>
                        <tr>
                            <td>1.3 Chia theo đối tác quốc tế/nước ngoài</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>1.4. Chia theo nguồn cấp kinh phí</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>- Ngân sách nhà nước<i><br>Trong đó:</i></td>
                            <td>12</td>
                            <td><i>Triệu đồng</i></td>
                            <td>X</td>
                            <td><input class="form-control" type="text" name="money_1[1]"></td>
                        </tr>
                        <tr>
                            <td><i>    + NS trung ương</i></td>
                            <td>13</td>
                            <td><i>Triệu đồng</i></td>
                            <td>X</td>
                            <td><input class="form-control" type="text" name="money_2[1]"></td>
                        </tr>
                        <tr>
                            <td><i>    + NS địa phương</i></td>
                            <td>14</td>
                            <td><i>Triệu đồng</i></td>
                            <td>X</td>
                            <td><input class="form-control" type="text" name="money_3[1]"></td>
                        </tr>
                        <tr>
                            <td>- Ngoài NSNN</td>
                            <td>15</td>
                            <td><i>Triệu đồng</i></td>
                            <td>X</td>
                            <td><input class="form-control" type="text" name="money_4[1]"></td>
                        </tr>
                        <tr>
                            <td>- Nước ngoài</td>
                            <td>16</td>
                            <td><i>Triệu đồng</i></td>
                            <td>X</td>
                            <td><input class="form-control" type="text" name="money_5[1]"></td>
                        </tr>
                        <tr>
                            <td><b>2. ĐOÀN RA</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2.1. Số đoàn của đơn vị ra nước ngoài nghiên cứu, khảo sát về KH&CN</td>
                            <td>17</td>
                            <td><i>Đoàn</i></td>
                            <td><input class="form-control" type="text" name="team_out[1]"></td>
                            <td><input class="form-control" type="text" name="team_out[2]"></td>
                        </tr>
                        <tr>
                            <td>2.2. Số người của đơn vị ra nước ngoài nghiên cứu, khảo sát về KH&CN</td>
                            <td>18</td>
                            <td><i>Người</i></td>
                            <td><input class="form-control" type="text" name="human_out[1]"></td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td><b>3. ĐOÀN VÀO</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3.1. Số đoàn của nước ngoài/tổ chức quốc tế do đơn vị chủ trì mời vào nghiên cứu, khảo sát về KH&CN tại Việt Nam</td>
                            <td>19</td>
                            <td><i>Đoàn</i></td>
                            <td><input class="form-control" type="text" name="team_in[1]"></td>
                            <td><input class="form-control" type="text" name="team_in[2]"></td>
                        </tr>
                        <tr>
                            <td>3.2. Số người nước ngoài do đơn vị chủ trì mời vào nghiên cứu, khảo sát về KH&CN tại Việt Nam</td>
                            <td>20</td>
                            <td><i>Người</i></td>
                            <td><input class="form-control" type="text" name="human_in[1]"></td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td><b>4. SỐ NGƯỜI CỦA ĐƠN VỊ THAM GIA HỘI NGHỊ/HỘI THÀO QUỐC TẾ (tổ chức cả trong và ngoài nước)</b></td>
                            <td>21</td>
                            <td><i>Người</i></td>
                            <td><input class="form-control" type="text" name="total_h1[1]"></td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td><b>5. SỐ NGƯỜI CỦA ĐƠN VỊ ĐƯỢC LÀM VIỆC TẠI CÁC TỔ CHỨC QUỐC TẾ LIÊN QUAN ĐẾN KH&CN</b></td>
                            <td>22</td>
                            <td><i>Người</i></td>
                            <td><input class="form-control" type="text" name="total_h2[1]"></td>
                            <td>X</td>
                        </tr>
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <a href="#menu6" data-toggle="tab" class="btn btn-primary">Tiếp</a>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    </div>
    <div id="menu6" class="tab-pane fade">
      <section class="content-header">
      <h1>
        GIẢI THƯỞNG KHOA HỌC VÀ CÔNG NGHỆ
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">GIẢI THƯỞNG KHOA HỌC VÀ CÔNG NGHỆ
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            <!-- /.box-header -->
            <!-- form start -->
                <div class="form-group">
                  <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th rowspan="2"></th>
                          <th rowspan="2">Mã số</th>
                          <th rowspan="2">Tổng số</th>
                          <th colspan="6">Chia theo lĩnh vực nghiên cứu khoa học và công nghệ</th>
                        </tr>
                        <tr>
                          <td>Khoa học tự nhiên</td>
                          <td>Khoa học kỹ thuật và công nghệ</td>
                          <td>Khoa học y dược</td>
                          <td>Khoa học nông nghiệp</td>
                          <td>Khoa học xã hội</td>
                          <td>Khoa học nhân văn</td>
                        </tr>
                        <tr>
                          <td>A</td>
                          <td>B</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td><b>Tổng số</b></td>
                          <td>01</td>
                          <td><input class="form-control" type="text" name="total_6[1]"></td>
                          <td><input class="form-control" type="text" name="total_6[2]"></td>
                          <td><input class="form-control" type="text" name="total_6[3]"></td>
                          <td><input class="form-control" type="text" name="total_6[4]"></td>
                          <td><input class="form-control" type="text" name="total_6[5]"></td>
                          <td><input class="form-control" type="text" name="total_6[6]"></td>
                          <td><input class="form-control" type="text" name="total_6[7]"></td>
                      </tr>
                      <tr>
                          <td><b>1. Chia theo loại giải thưởng</b></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><b><i>1.1. Giải thưởng trong nước</i></b></td>
                          <td>02</td>
                          <td><input class="form-control" type="text" name="total_award_vn[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn[7]"></td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng Hồ Chí Minh</td>
                          <td>03</td>
                          <td><input class="form-control" type="text" name="total_award_vn1[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn1[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn1[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn1[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn1[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn1[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn1[7]"></td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng Nhà nước</td>
                          <td>04</td>
                          <td><input class="form-control" type="text" name="total_award_vn2[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn2[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn2[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn2[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn2[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn2[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn2[7]"></td>
                      </tr>
                      <tr>
                          <td>- Giải thướng cấp bộ</td>
                          <td>05</td>
                          <td><input class="form-control" type="text" name="total_award_vn3[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn3[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn3[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn3[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn3[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn3[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn3[7]"></td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng cấp tỉnh</td>
                          <td>06</td>
                          <td><input class="form-control" type="text" name="total_award_vn4[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn4[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn4[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn4[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn4[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn4[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn4[7]"></td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng khác</td>
                          <td>07</td>
                          <td><input class="form-control" type="text" name="total_award_vn5[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn5[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn5[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn5[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn5[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn5[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_vn5[7]"></td>
                      </tr>
                      <tr>
                          <td><b><i>1.2. Giải thưởng quốc tế</i></b></td>
                          <td>08</td>
                          <td><input class="form-control" type="text" name="total_award_other[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_other[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_other[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_other[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_other[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_other[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_other[7]"></td>
                      </tr>
                      <tr>
                          <td><b>2. Chia theo cá nhân/tập thể</b></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><b><i>2.1. Tập thể</i></b></td>
                          <td>09</td>
                          <td><input class="form-control" type="text" name="total_award_team[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_team[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_team[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_team[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_team[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_team[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_team[7]"></td>
                      </tr>
                      <tr>
                          <td><b><i>2.2. Cá nhân</i></b></td>
                          <td>10</td>
                          <td><input class="form-control" type="text" name="total_award_fm[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_fm[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_fm[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_fm[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_fm[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_fm[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_fm[7]"></td>
                      </tr>
                      <tr>
                          <td>- Nam</td>
                          <td>11</td>
                          <td><input class="form-control" type="text" name="total_award_male[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_male[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_male[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_male[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_male[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_male[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_male[7]"></td>
                      </tr>
                      <tr>
                          <td>- Nữ</td>
                          <td>12</td>
                          <td><input class="form-control" type="text" name="total_award_female[1]"></td>
                          <td><input class="form-control" type="text" name="total_award_female[2]"></td>
                          <td><input class="form-control" type="text" name="total_award_female[3]"></td>
                          <td><input class="form-control" type="text" name="total_award_female[4]"></td>
                          <td><input class="form-control" type="text" name="total_award_female[5]"></td>
                          <td><input class="form-control" type="text" name="total_award_female[6]"></td>
                          <td><input class="form-control" type="text" name="total_award_female[7]"></td>
                      </tr>

                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    </div>
</div>
</form>
  @endsection
@section('js')
<script type="text/javascript">
$(function () {
    //Initialize Select2 Elements
    $('.datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
});
var length = 0;
function addTechFields(){
  length = length + 1;
    $( "#technologytab" ).append( "<div class='row tab"+length+"'><div class='col-md-3'><input class='form-control' type='text' name='nametech"+length+"' /></div><div class='col-md-2'><input class='form-control' type='text' name='codetech"+length+"' /></div><div class='col-md-2'><input class='form-control' type='text' name='countrytech"+length+"' /></div><div class='col-md-1'><input type='text' class='form-control' name='yeartech"+length+"' /></div><div class='col-md-1'><input type='text' class='form-control' name='usedtech"+length+"' /></div><div class='col-md-2'><input type='text' class='form-control' name='moneytech"+length+"' /></div><div class='col-md-1'><input type='button' class='btn btn-primary' value='Xóa' onclick='$('.tab"+length+"').remove();' /></div></div>");
}
var donvi = 0
function addElementFields(){
  donvi = donvi + 1;
    $( "#elementtab" ).append( "<div class='row element_"+donvi+"''><div class='col-md-4'><input type='text' class='form-control' name='nameelement"+donvi+"' /></div><div class='col-md-3'><input type='text' class='form-control' name='bosselement"+donvi+"' /></div><div class='col-md-4'><input class='form-control' type='text' name='contactelement"+donvi+"' /></div><div class='col-md-1'><input type='button' class='btn btn-primary' value='Xóa' onclick='$('.element_"+donvi+"').remove();' /></div></div>");
}
</script>
@endsection