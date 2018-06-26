@extends('admin._layout')
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
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
          <section class="content-header">
      <h1>
        Thông tin đăng ký
      </h1>
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
                        {{$user->username}}
                      </div>
                    </div>
                  </div>
                </div>
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
                        <input value="{{date('d/m/Y', strtotime($bieu1->publish_day))}}" name="publish_day"  type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Đơn vị nhận báo cáo:</label>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" @if($bieu1->receiverHAS(1)) checked="checked" @endif name="receiver[]" value="1">
                        Cục Thông tin KH&CN Quốc gia
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="receiver[]"  value="2" @if($bieu1->receiverHAS(2)) checked="checked" @endif>
                          Sở KH&CN tỉnh, tp.trực thuộc TƯ
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="reporter_element_name">Tên đơn vị báo cáo</label>
                  <input type="text" value="{{$bieu1->reporter_element_name}}" name="reporter_element_name" class="form-control" id="reporter_element_name">
                </div>
                <div class="form-group">
                  <label for="reporter_transfer_name">Tên giao dịch viết tắt (nếu có):</label>
                  <input type="text" value="{{$bieu1->reporter_transfer_name}}" name="reporter_transfer_name" class="form-control" id="reporter_transfer_name">
                </div>
                <div class="form-group">
                  <label for="reporter_eng_name">Tên tiếng Anh (nếu có):</label>
                  <input type="text" value="{{$bieu1->reporter_eng_name}}" name="reporter_eng_name" class="form-control" id="reporter_eng_name">
                </div>
                <div class="form-group">
                  <label for="address">Địa chỉ</label>
                  <input type="text" value="{{$bieu1->address}}" name="address" class="form-control" id="address">
                </div>
                <div class="form-group">
                  <label for="city">Tỉnh / TP</label>
                  <input type="text" value="{{$bieu1->city}}" name="city" class="form-control" id="city">
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="phone">Điện thoại:</label>
                      <input type="text" value="{{$bieu1->phone}}" name="phone" class="form-control" id="phone">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="fax">FAX:</label>
                      <input type="text" value="{{$bieu1->fax}}" name="fax" class="form-control" id="fax">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" value="{{$bieu1->email}}" name="email" class="form-control" id="email">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="website">Website:</label>
                      <input type="text" value="{{$bieu1->website}}" name="website" class="form-control" id="website">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="establish_code">Số quyết định thành lập:</label>
                      <input type="text" value="{{$bieu1->establish_code}}" name="establish_code" class="form-control" id="establish_code">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="establish_day">Ngày thành lập:</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input value="{{date('d/m/Y', strtotime($bieu1->establish_day))}}" name="establish_day" type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="establish_lever">Cấp quyết định thành lập:</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios1" value="1" @if ($bieu1->establish_lever == 1) checked="checked" @endif/>
                      8.1. Quốc hội, Uỷ ban thường vụ Quốc hội  
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios2" value="2" @if ($bieu1->establish_lever == 2) checked="checked" @endif/>
                      8.2. Chính phủ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios3" value="3" @if ($bieu1->establish_lever == 3) checked="checked" @endif/>
                      8.3. Toà án nhân dân tối cao
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios2" value="4" @if ($bieu1->establish_lever == 4) checked="checked" @endif/>
                      8.4. Viện kiểm sát nhân dân tối cao
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios3" value="5" @if ($bieu1->establish_lever == 5) checked="checked" @endif/>
                      8.5. Thủ tướng Chỉnh phủ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios2" value="6" @if ($bieu1->establish_lever == 6) checked="checked" @endif/>
                      8.6. Bộ trưởng, Thủ trưởng cơ quan ngang Bộ, cơ quan thuộc Chính phủ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios3" value="7" @if ($bieu1->establish_lever == 7) checked="checked" @endif/>
                      8.7. Uỷ ban nhân dân tỉnh, thành phố trực thuộc Trung ương
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios3" value="8" @if ($bieu1->establish_lever == 8) checked="checked" @endif/>
                      8.8. Tổ chức chính trị, tổ chức chính trị - xã hội, tổ chức xã hội, tổ chức xã hội - nghề nghiệp
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="establish_lever" id="optionsRadios3" value="9" @if ($bieu1->establish_lever == 9) checked="checked" @endif/>
                      8.9. Doanh nghiệp, tổ chức khác, cá nhân
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tax_number">Mã số thuế:</label>
                  <input type="text" value="{{$bieu1->tax_number}}" name="tax_number" class="form-control" id="tax_number">
                </div>
                <div class="form-group">
                  <label for="certificate_number">
                  Giấy chứng nhận đăng ký hoạt động KHCN :
                  </label>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="certificate_number">Số:</label>
                        <input value="{{$bieu1->certificate_number}}" type="text" name="certificate_number" class="form-control" id="certificate_number">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="certificate_date">Ngày cấp:</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input value="{{date('d/m/Y', strtotime($bieu1->certificate_date))}}" name="certificate_date" type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="certificate_grant">Nơi cấp:</label>
                        <input value="{{$bieu1->certificate_grant}}" type="text" name="certificate_grant" class="form-control" id="certificate_grant">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="manager">Cơ quan quản lý trực tiếp:</label>
                  <input value="{{$bieu1->manager}}" type="text" name="manager" class="form-control" id="manager">
                </div>
                <div class="form-group">
                  <label for="manager_city">Bộ/ngành,tỉnh/tp trực thuộc TƯ chủ quản :</label>
                  <input value="{{$bieu1->manager_city}}" type="text" name="manager_city" class="form-control" id="manager_city">
                </div>
                <div class="form-group">
                  <label for="type_company">Loại hình của đơn vị/tổ chức :</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios1" value="1"@if ($bieu1->type_company == 1) checked="checked" @endif/>
                      13.1.Cơ quan quản lý nhà nước
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="2"@if ($bieu1->type_company == 2) checked="checked" @endif/>
                        13.2.Tổ chức nghiên cứu khoa học và phát triển công nghệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="3"@if ($bieu1->type_company == 3) checked="checked" @endif/>
                        13.3.Cơ sở giáo dục đại học
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="4"@if ($bieu1->type_company == 4) checked="checked" @endif/>
                        -----Đại học
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="5"@if ($bieu1->type_company == 5) checked="checked" @endif/>
                        -----Học viện
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="6"@if ($bieu1->type_company == 6) checked="checked" @endif/>
                        -----Cao đẳng
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="7"@if ($bieu1->type_company == 7) checked="checked" @endif/>
                        13.4.Tổ chức dịch vụ KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="8"@if ($bieu1->type_company == 8) checked="checked" @endif/>
                        -----DV thông tin, thư viện
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="9"@if ($bieu1->type_company == 9) checked="checked" @endif/>
                        -----DV bảo tàng cho KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="10"@if ($bieu1->type_company == 10) checked="checked" @endif/>
                        -----DV dịch thuật, biên tập, xuất bản cho KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="11"@if ($bieu1->type_company == 11) checked="checked" @endif/>
                        -----DV điều tra cơ bản định kỳ, thường xuyên
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="12"@if ($bieu1->type_company == 12) checked="checked" @endif/>
                        -----DV thống kê, điều tra xã hội
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="13"@if ($bieu1->type_company == 13) checked="checked" @endif/>
                        -----DV tiêu chuẩn đo lường chất lượng
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios2" value="14"@if ($bieu1->type_company == 14) checked="checked" @endif/>
                        -----DV tư vấn về KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="15"@if ($bieu1->type_company == 15) checked="checked" @endif/>
                        -----DV sở hữu trí tuệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="16"@if ($bieu1->type_company == 16) checked="checked" @endif/>
                        -----DV chuyển giao công nghệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="17"@if ($bieu1->type_company == 17) checked="checked" @endif/>
                        -----DV KH&CN khác
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="18"@if ($bieu1->type_company == 18) checked="checked" @endif/>
                        13.5.Đơn vị sự nghiệp khác
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="19"@if ($bieu1->type_company == 19) checked="checked" @endif/>
                        13.6.Doanh nghiệp KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_company" id="optionsRadios3" value="20"@if ($bieu1->type_company == 20) checked="checked" @endif/>
                      13.7.Doanh nghiệp
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Loại hình kinh tế :</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_econom" id="optionsRadios1" value="1"@if ($bieu1->type_econom == 1) checked="checked" @endif/>
                      14.1. Nhà nước
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_econom" id="optionsRadios2" value="2"@if ($bieu1->type_econom == 2) checked="checked" @endif/>
                      14.2. Ngoài nhà nước
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type_econom" id="optionsRadios3" value="3"@if ($bieu1->type_econom == 3) checked="checked" @endif/>
                      14.3. Có vốn đầu tư nước ngoài
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="money">Giá trị tài sản cố định(triệu đồng):</label>
                  <input value="{{$bieu1->money}}" type="text" name="money" class="form-control" id="money">
                </div>
                <div class="form-group">
                  <label for="lab_range"> Số phòng thí nghiệm chuyên ngành về KH&CN:</label>
                  <input value="{{$bieu1->lab_range}}" type="text" name="lab_range" class="form-control" id="lab_range">
                </div>
                <div class="form-group">
                  <label>Trang thiết bị nghiên cứu có giá trị lớn(từ 1 tỷ đồng trở lên theo nguyên giá): </label>
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
                    @foreach ($bieu1->technologies as $t )
                    <tr>
                        <td>{{$t->name}}</td>
                        <td>{{$t->code}}</td>
                        <td>{{$t->country}}</td>
                        <td>{{$t->year}}</td>
                        <td>{{$t->use_year}}</td>
                        <td>{{$t->money}}</td>
                    </tr>
                    @endforeach
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Lĩnh vực nghiên cứu chính theo chức năng nhiệm vụ :</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios1" value="1" @if($bieu1->lab_number_sub == 1) checked="checked" @endif />
                      1. Khoa học tự nhiên
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios2" value="2" @if($bieu1->lab_number_sub == 2) checked="checked" @endif />
                        2. Khoa học kỹ thuật và công nghệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios3" value="3" @if($bieu1->lab_number_sub == 3) checked="checked" @endif />
                        3. Khoa học y dược
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios3" value="4" @if($bieu1->lab_number_sub == 4) checked="checked" @endif />
                          4. Khoa học nông nghiệp
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios3" value="5" @if($bieu1->lab_number_sub == 5) checked="checked" @endif />
                        5. Khoa học xã hội
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="lab_number_sub" id="optionsRadios3" value="6" @if($bieu1->lab_number_sub == 6) checked="checked" @endif />
                        6. Khoa học nhân văn
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Lĩnh vực nghiên cứu khác:</label>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]" value="1" @if($bieu1->labNumber(1)) checked="checked" @endif />
                        1. Khoa học tự nhiên
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]"  value="2"  @if($bieu1->labNumber(2)) checked="checked" @endif />
                          2. Khoa học kỹ thuật và công nghệ
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]"  value="3" @if($bieu1->labNumber(3)) checked="checked" @endif />
                          3. Khoa học y dược
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]"  value="4" @if($bieu1->labNumber(4)) checked="checked" @endif />
                          4. Khoa học nông nghiệp
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]"  value="5" @if($bieu1->labNumber(5)) checked="checked" @endif />
                        5. Khoa học xã hội
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="lab_number[]" value="6" @if($bieu1->labNumber(6)) checked="checked" @endif />
                        6. Khoa học nhân văn
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="lab_description">Mô tả chi tiết</label>
                  <textarea name="lab_description" class="form-control">{{$bieu1->lab_description}}</textarea>
                </div>
                <div class="form-group">
                  <label for="report_info">Thông tin về số liệu trong các biểu mẫu báo cáo</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="report_info" id="optionsRadios1" value="1"@if ($bieu1->report_info == 1) checked="checked" @endif/>
                      Bao gồm số liệu của toàn bộ đơn vị/tổ chức, kể cả các đơn vị trực thuộc có tư cách pháp nhân;
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="report_info" id="optionsRadios2" value="2"@if ($bieu1->report_info == 2) checked="checked" @endif/>
                      Chỉ bao gồm số liệu của các đơn vị trực thuộc không có tư cách pháp nhân. Không có bao gồm số liệu của các đơn vị trực thuộc có tư cách pháp nhân, có tài khoản và con dấu riêng (Những đơn vị này có báo cáo riêng)
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nếu có các đơn vị trực thuộc có tư cách pháp nhân, có tài khoản và con dấu riêng, đề nghị lập danh sách các đơn vị đó</label>
                  <div class='row' id="elementtab"><div class='col-md-4'>Tên đơn vị trực thuộc có tư cách pháp nhân</div><div class='col-md-3'>Họ và tên thủ trưởng</div><div class='col-md-4'>Địa chỉ, Điện thoại, Fax, Email</div><div class="col-md-1"></div>
                  @php 
                    $i =0;
                    @endphp
                    @foreach ($bieu1->elements as $e )
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$e->name}}</td>
                        <td>{{$e->leader}}</td>
                        <td>{{$e->address}}</td>
                    </tr>
                    @endforeach
                </div>
                </div>
                <!-- /.box-body -->
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
@php
$s = parse_str($bieu2->total, $out);
@endphp
<tr>
    <td><b>TỔNG SỐ</b></td>
    <td class="TableCell_Center" colspan="1">01 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu2->female_total, $out);
@endphp
<tr>
    <td><i>Trong đó số Nữ</i></td>
    <td class="TableCell_Center" colspan="1">02 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
<tr>
    <td><b>1. Chia theo dân tộc</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu2->nation_vn, $out);
@endphp
<tr>
    <td>1.1. Người Việt Nam</td>
    <td class="TableCell_Center" colspan="1">03 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu2->nation_kinh, $out);
@endphp
<tr>
    <td><i> - Dân tộc Kinh</i></td>
    <td class="TableCell_Center" colspan="1">04 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu2->nation_other, $out);
@endphp
<tr>
    <td><i> - Dân tộc thiểu số</i></td>
    <td class="TableCell_Center" colspan="1">05 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu2->nation_foregin, $out);
@endphp
<tr>
    <td>1.2. Người nước ngoài</td>
    <td class="TableCell_Center" colspan="1">06 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
<tr>
    <td><b>2. Chia theo lĩnh vực đào tạo</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu2->class_khtn, $out);
@endphp
<tr>
    <td>2.1. Khoa học tự nhiên</td>
    <td class="TableCell_Center" colspan="1">07 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu2->class_khkt, $out);
@endphp
<tr>
    <td>2.2. Khoa học kỹ thuật và công nghệ</td>
    <td class="TableCell_Center" colspan="1">08 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu2->class_khyd, $out);
@endphp
<tr>
    <td>2.3. Khoa học y , dược</td>
    <td class="TableCell_Center" colspan="1">09 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu2->class_khnn, $out);
@endphp
<tr>
    <td>2.4. Khoa học nông nghiệp</td>
    <td class="TableCell_Center" colspan="1">10 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu2->class_khxh, $out);
@endphp
<tr>
    <td>2.5. Khoa học xã hội</td>
    <td class="TableCell_Center" colspan="1">11 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu2->class_khnv, $out);
@endphp
<tr>
    <td>2.6. Khoa học nhân văn</td>
    <td class="TableCell_Center" colspan="1">12 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu2->class_other, $out);
@endphp
<tr>
    <td>2.7. Khác</td>
    <td class="TableCell_Center" colspan="1">13 </td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
    <td>{{$out[8]}}</td>
    <td>{{$out[9]}}</td>
</tr>
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
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
                        @php
$s = parse_str($bieu3->total, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>TỔNG CHI </b><i><br>Chia theo:</i></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_improve_khcn, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>1. CHI ĐẦU TƯ PHÁT TRIỂN KHOA HỌC VÀ CÔNG NGHỆ</b></td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_khcn, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2. CHI SỰ NGHIỆP KHOA HỌC VÀ CÔNG NGHỆ</b><i><br>Chia theo:</i></td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_salary_total, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2.1. Chi quỹ lương và hoạt động bộ máy</b><i><br>trong đó:</i></td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_salary, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Chi tiền lương và phụ cấp, tiền công, các khoản đóng góp theo lương</td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_machine, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Chi hoạt động bộ máy</td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_normal, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2.2. Chi hoạt động thường xuyên theo chức năng</b></td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_mission, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2.3. Chi thực hiện nhiệm vụ KH&CN</b><i><br>trong đó:</i></td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->mission_lv1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nhiệm vụ KH&CN cấp quốc gia</td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->mission_lv2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nhiệm vụ KH&CN cấp bộ</td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->mission_lv3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nhiệm vụ KH&CN tỉnh</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->mission_lv4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nhiệm vụ KH&CN cơ sở</td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->mission_lv5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nhiệm vụ KH&CN khác</td>
    <td class="TableCell_Center" colspan="1">13</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_lab, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2.4. Chi tăng cường năng lực nghiên cứu</b></td>
    <td class="TableCell_Center" colspan="1">14</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_maintain, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2.5. Chi sửa chữa chống xuống cấp</b></td>
    <td class="TableCell_Center" colspan="1">15</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_univer, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2.6. Chi hợp tác quốc tế</b></td>
    <td class="TableCell_Center" colspan="1">16</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_improve_other, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2.7. Chi sự nghiệp khoa học và công nghệ khác</b></td>
    <td class="TableCell_Center" colspan="1">17</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>
@php
$s = parse_str($bieu3->pay_other, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>3. CHI  KHÁC CHO KH&CN </b></td>
    <td class="TableCell_Center" colspan="1">18</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
</tr>

                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
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
                        @php
$s = parse_str($bieu4->total, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>1. Tổng số đề tài/đề án KH&CN</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1.1. Chia theo cấp đề tài/đề án</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu4->subject_lv1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp quốc gia</td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_lv2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp bộ</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_lv3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp tỉnh</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_lv4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp cơ sở</td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_lv5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp khác</td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1.2. Chia theo lĩnh vực nghiên cứu</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu4->subject_lab_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học tự nhiên</td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_lab_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học kỹ thuật và công nghệ</td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_lab_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học y dược</td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_lab_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học nông nghiệp</td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_lab_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học xã hội</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_lab_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học nhân văn</td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1.3. Chia theo nguồn cấp kinh phí</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu4->subject_money_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>- Ngân sách nhà nước</b><i><br>Trong đó:</i></td>
    <td class="TableCell_Center" colspan="1">13</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_money_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>&nbsp;&nbsp;       + Trung ương</i></td>
    <td class="TableCell_Center" colspan="1">14</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_money_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>&nbsp;&nbsp;       + Địa phương</i></td>
    <td class="TableCell_Center" colspan="1">15</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_money_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Doanh nghiệp</td>
    <td class="TableCell_Center" colspan="1">16</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_money_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Trường đại học</td>
    <td class="TableCell_Center" colspan="1">17</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_money_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nước ngoài</td>
    <td class="TableCell_Center" colspan="1">18</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->subject_money_7, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nguồn khác</td>
    <td class="TableCell_Center" colspan="1">19</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>

@php
$s = parse_str($bieu4->total_job, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2. Tổng số dự án</b></td>
    <td class="TableCell_Center" colspan="1">20</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.1. Chia theo cấp dự án</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu4->total_job_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp quốc gia</td>
    <td class="TableCell_Center" colspan="1">21</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_job_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp bộ</td>
    <td class="TableCell_Center" colspan="1">22</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_job_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp tỉnh</td>
    <td class="TableCell_Center" colspan="1">23</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_job_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp cơ sở</td>
    <td class="TableCell_Center" colspan="1">24</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_job_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp khác</td>
    <td class="TableCell_Center" colspan="1">25</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.2. Chia theo lĩnh vực nghiên cứu</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu4->total_lab_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học tự nhiên</td>
    <td class="TableCell_Center" colspan="1">26</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_lab_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học kỹ thuật và công nghệ</td>
    <td class="TableCell_Center" colspan="1">27</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_lab_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học y dược</td>
    <td class="TableCell_Center" colspan="1">28</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_lab_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học nông nghiệp</td>
    <td class="TableCell_Center" colspan="1">29</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_lab_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học xã hội</td>
    <td class="TableCell_Center" colspan="1">30</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_lab_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học nhân văn</td>
    <td class="TableCell_Center" colspan="1">31</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.3. Chia theo nguồn cấp kinh phí</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu4->total_money_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>- Ngân sách nhà nước</b><i><br>Trong đó:</i></td>
    <td class="TableCell_Center" colspan="1">32</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_money_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>&nbsp;&nbsp;        + Trung ương</i></td>
    <td class="TableCell_Center" colspan="1">33</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_money_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>&nbsp;&nbsp;        + Địa phương</i></td>
    <td class="TableCell_Center" colspan="1">34</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_money_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Doanh nghiệp</td>
    <td class="TableCell_Center" colspan="1">35</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_money_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Trường đại học</td>
    <td class="TableCell_Center" colspan="1">36</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_money_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nước ngoài</td>
    <td class="TableCell_Center" colspan="1">37</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu4->total_money_7, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nguồn khác</td>
    <td class="TableCell_Center" colspan="1">38</td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
</tr>

                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
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
                        @php
$s = parse_str($bieu5->total, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>1. SỐ NHIỆM VỤ VÀ KINH PHÍ HTQT VỀ KH&CN MÀ ĐƠN VỊ CHỦ TRÌ</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1">1.1. Chia theo lĩnh vực nghiên cứu</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu5->mission_lab_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học tự nhiên</td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu5->mission_lab_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học kỹ thuật và công nghệ</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu5->mission_lab_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học y, dược</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu5->mission_lab_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học nông nghiệp</td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu5->mission_lab_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học xã hội</td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu5->mission_lab_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học nhân văn</td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1">1.2. Chia theo hình thức hợp tác</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu5->collaborate_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Đa phương</td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu5->collaborate_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Song phương</td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu5->collaborate_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nghị định thư</td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu5->collaborate_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khác</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td class="TableCell_Center" colspan="1"><i>Nhiệm vụ</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1">1.3 Chia theo đối tác quốc tế/nước ngoài</td>
    <td class="Table_Header" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
</tr>
<tr>

</tr>
<tr>
    <td class="TableCell" colspan="1">1.4. Chia theo nguồn cấp kinh phí</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu5->money_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Ngân sách nhà nước<i><br>Trong đó:</i></td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[1]}}</td>
</tr>
@php
$s = parse_str($bieu5->money_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>    + NS trung ương</i></td>
    <td class="TableCell_Center" colspan="1">13</td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[1]}}</td>
</tr>
@php
$s = parse_str($bieu5->money_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>    + NS địa phương</i></td>
    <td class="TableCell_Center" colspan="1">14</td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[1]}}</td>
</tr>
@php
$s = parse_str($bieu5->money_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Ngoài NSNN</td>
    <td class="TableCell_Center" colspan="1">15</td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[1]}}</td>
</tr>
@php
$s = parse_str($bieu5->money_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nước ngoài</td>
    <td class="TableCell_Center" colspan="1">16</td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td>{{$out[1]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2. ĐOÀN RA</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu5->team_out, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">2.1. Số đoàn của đơn vị ra nước ngoài nghiên cứu, khảo sát về KH&CN</td>
    <td class="TableCell_Center" colspan="1">17</td>
    <td class="TableCell_Center" colspan="1"><i>Đoàn</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu5->human_out, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">2.2. Số người của đơn vị ra nước ngoài nghiên cứu, khảo sát về KH&CN</td>
    <td class="TableCell_Center" colspan="1">18</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>3. ĐOÀN VÀO</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu5->team_in, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.1. Số đoàn của nước ngoài/tổ chức quốc tế do đơn vị chủ trì mời vào nghiên cứu, khảo sát về KH&CN tại Việt Nam</td>
    <td class="TableCell_Center" colspan="1">19</td>
    <td class="TableCell_Center" colspan="1"><i>Đoàn</i></td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu5->human_in, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.2. Số người nước ngoài do đơn vị chủ trì mời vào nghiên cứu, khảo sát về KH&CN tại Việt Nam</td>
    <td class="TableCell_Center" colspan="1">20</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
</tr>
@php
$s = parse_str($bieu5->total_h1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>4. SỐ NGƯỜI CỦA ĐƠN VỊ THAM GIA HỘI NGHỊ/HỘI THÀO QUỐC TẾ (tổ chức cả trong và ngoài nước)</b></td>
    <td class="TableCell_Center" colspan="1">21</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
</tr>
@php
$s = parse_str($bieu5->total_h2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>5. SỐ NGƯỜI CỦA ĐƠN VỊ ĐƯỢC LÀM VIỆC TẠI CÁC TỔ CHỨC QUỐC TẾ LIÊN QUAN ĐẾN KH&CN</b></td>
    <td class="TableCell_Center" colspan="1">22</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td>{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
</tr>

                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
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
                        @php
$s = parse_str($bieu6->total, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>Tổng số</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1. Chia theo loại giải thưởng</b></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu6->total_award_vn, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b><i>1.1. Giải thưởng trong nước</i></b></td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
@php
$s = parse_str($bieu6->total_award_vn1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Giải thưởng Hồ Chí Minh</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
@php
$s = parse_str($bieu6->total_award_vn2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Giải thưởng Nhà nước</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
@php
$s = parse_str($bieu6->total_award_vn3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Giải thướng cấp bộ</td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
@php
$s = parse_str($bieu6->total_award_vn4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Giải thưởng cấp tỉnh</td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
@php
$s = parse_str($bieu6->total_award_vn5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Giải thưởng khác</td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
@php
$s = parse_str($bieu6->total_award_other, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b><i>1.2. Giải thưởng quốc tế</i></b></td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2. Chia theo cá nhân/tập thể</b></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu6->total_award_team, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b><i>2.1. Tập thể</i></b></td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
@php
$s = parse_str($bieu6->total_award_fm, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b><i>2.2. Cá nhân</i></b></td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
@php
$s = parse_str($bieu6->total_award_male, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nam</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>
@php
$s = parse_str($bieu6->total_award_female, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nữ</td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td>{{$out[1]}}</td>
    <td>{{$out[2]}}</td>
    <td>{{$out[3]}}</td>
    <td>{{$out[4]}}</td>
    <td>{{$out[5]}}</td>
    <td>{{$out[6]}}</td>
    <td>{{$out[7]}}</td>
</tr>

                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
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
  @endsection
@section('js')

@endsection