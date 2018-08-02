@extends('admin._layout')
@section('css')
    @parent
@endsection
@section('content')

    <section class="content-header">
      <h1>
        THÔNG TIN CHUNG VỀ ĐƠN VỊ BÁO CÁO NĂM {{$bieumau->reporter_year}}
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
                        <input disabled="" value="{{date('d/m/Y', strtotime($bieumau->publish_day))}}" name="publish_day"  type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
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
                        <input disabled="" type="checkbox" name="receiver[]" value="1" 
                        @if ($bieumau->receiverHAS(1) ) checked="" @endif
                        >
                        Cục Thông tin KH&CN Quốc gia
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled="" type="checkbox" name="receiver[]"  value="2"
                        @if ($bieumau->receiverHAS(2) ) checked="" @endif
                        >
                          Sở KH&CN tỉnh, tp.trực thuộc TƯ
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="reporter_element_name">Tên đơn vị báo cáo</label>
                  <input disabled="" type="text" value="{{$bieumau->reporter_element_name}}" name="reporter_element_name" class="form-control" id="reporter_element_name">
                </div>
                <div class="form-group">
                  <label for="reporter_transfer_name">Tên giao dịch viết tắt (nếu có):</label>
                  <input disabled="" type="text" value="{{$bieumau->reporter_transfer_name}}" name="reporter_transfer_name" class="form-control" id="reporter_transfer_name">
                </div>
                <div class="form-group">
                  <label for="reporter_eng_name">Tên tiếng Anh (nếu có):</label>
                  <input disabled="" type="text" value="{{$bieumau->reporter_eng_name}}" name="reporter_eng_name" class="form-control" id="reporter_eng_name">
                </div>
                <div class="form-group">
                  <label for="address">Địa chỉ</label>
                  <input disabled="" type="text" value="{{$bieumau->address}}" name="address" class="form-control" id="address">
                </div>
                <div class="form-group">
                  <label for="city">Tỉnh / TP</label>
                  <input disabled="" type="text" value="{{$bieumau->city}}" name="city" class="form-control" id="city">
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="phone">Điện thoại:</label>
                      <input disabled="" type="text"  value="{{$bieumau->phone}}" name="phone" class="form-control" id="phone">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="fax">FAX:</label>
                      <input disabled="" type="text" name="fax"  value="{{$bieumau->fax}}" class="form-control" id="fax">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input disabled="" type="email"  value="{{$bieumau->email}}" name="email" class="form-control" id="email">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="website">Website:</label>
                      <input disabled="" type="text" value="{{$bieumau->website}}" name="website" class="form-control" id="website">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="establish_code">Số quyết định thành lập:</label>
                      <input disabled="" type="text"  value="{{$bieumau->establish_code}}" name="establish_code" class="form-control" id="establish_code">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="establish_day">Ngày thành lập:</label>
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input disabled="" value="{{date('d/m/Y', strtotime($bieumau->establish_day))}}" name="establish_day" type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="establish_lever">Cấp quyết định thành lập:</label>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="establish_lever" id="optionsRadios1" value="1"
                      @if ($bieumau->establish_lever == 1) checked="" @endif
                      >
                      8.1. Quốc hội, Uỷ ban thường vụ Quốc hội  
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="establish_lever" id="optionsRadios2" value="2"
                      @if ($bieumau->establish_lever == 2) checked="" @endif
                      >
                      8.2. Chính phủ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="establish_lever" id="optionsRadios3" value="3"
                      @if ($bieumau->establish_lever == 3) checked="" @endif
                      >
                      8.3. Toà án nhân dân tối cao
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="establish_lever" id="optionsRadios2" value="4"
                      @if ($bieumau->establish_lever == 4) checked="" @endif
                      >
                      8.4. Viện kiểm sát nhân dân tối cao
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="establish_lever" id="optionsRadios3" value="5"
                      @if ($bieumau->establish_lever == 5) checked="" @endif
                      >
                      8.5. Thủ tướng Chỉnh phủ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="establish_lever" id="optionsRadios2" value="6"
                      @if ($bieumau->establish_lever == 6) checked="" @endif
                      >
                      8.6. Bộ trưởng, Thủ trưởng cơ quan ngang Bộ, cơ quan thuộc Chính phủ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="establish_lever" id="optionsRadios3" value="7"
                      @if ($bieumau->establish_lever == 7) checked="" @endif
                      >
                      8.7. Uỷ ban nhân dân tỉnh, thành phố trực thuộc Trung ương
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="establish_lever" id="optionsRadios3" value="8"
                      @if ($bieumau->establish_lever == 8) checked="" @endif
                      >
                      8.8. Tổ chức chính trị, tổ chức chính trị - xã hội, tổ chức xã hội, tổ chức xã hội - nghề nghiệp
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="establish_lever" id="optionsRadios3" value="9"
                      @if ($bieumau->establish_lever == 9) checked="" @endif
                      >
                      8.9. Doanh nghiệp, tổ chức khác, cá nhân
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tax_number">Mã số thuế:</label>
                  <input disabled="" type="text" value="{{$bieumau->tax_number}}" name="tax_number" class="form-control" id="tax_number">
                </div>
                <div class="form-group">
                  <label for="certificate_number">
                  Giấy chứng nhận đăng ký hoạt động KHCN :
                  </label>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="certificate_number">Số:</label>
                        <input disabled="" value="{{$bieumau->certificate_number}}" type="text" name="certificate_number" class="form-control" id="certificate_number">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="certificate_date">Ngày cấp:</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input disabled="" value="{{date('d/m/Y', strtotime($bieumau->certificate_date))}}" name="certificate_date" type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                          {!! $errors->first('certificate_date', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="certificate_grant">Nơi cấp:</label>
                        <input disabled="" type="text" value="{{$bieumau->certificate_grant}}" name="certificate_grant" class="form-control" id="certificate_grant">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="manager">Cơ quan quản lý trực tiếp:</label>
                  <input disabled="" type="text" value="{{$bieumau->manager}}" name="manager" class="form-control" id="manager">
                </div>
                <div class="form-group">
                  <label for="manager_city">Bộ/ngành,tỉnh/tp trực thuộc TƯ chủ quản :</label>
                  <input disabled="" type="text" value="{{$bieumau->manager_city}}" name="manager_city" class="form-control" id="manager_city">
                </div>
                <div class="form-group">
                  <label for="type_company">Loại hình của đơn vị/tổ chức :</label>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios1" value="1"
                      @if ($bieumau->type_company == 1) checked="" @endif
                      >
                      13.1.Cơ quan quản lý nhà nước
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios2" value="2"
                      @if ($bieumau->type_company == 2) checked="" @endif
                      >
                        13.2.Tổ chức nghiên cứu khoa học và phát triển công nghệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="3"
                      @if ($bieumau->type_company == 3) checked="" @endif
                      >
                        13.3.Cơ sở giáo dục đại học
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios2" value="4"
                      @if ($bieumau->type_company == 4) checked="" @endif
                      >
                        -----Đại học
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="5"
                      @if ($bieumau->type_company == 5) checked="" @endif
                      >
                        -----Học viện
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios2" value="6"
                      @if ($bieumau->type_company == 6) checked="" @endif
                      >
                        -----Cao đẳng
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="7"
                      @if ($bieumau->type_company == 7) checked="" @endif
                      >
                        13.4.Tổ chức dịch vụ KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="8"
                      @if ($bieumau->type_company == 8) checked="" @endif
                      >
                        -----DV thông tin, thư viện
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="9"
                      @if ($bieumau->type_company == 9) checked="" @endif
                      >
                        -----DV bảo tàng cho KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios2" value="10"
                      @if ($bieumau->type_company == 10) checked="" @endif
                      >
                        -----DV dịch thuật, biên tập, xuất bản cho KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="11"
                      @if ($bieumau->type_company == 11) checked="" @endif
                      >
                        -----DV điều tra cơ bản định kỳ, thường xuyên
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios2" value="12"
                      @if ($bieumau->type_company == 12) checked="" @endif
                      >
                        -----DV thống kê, điều tra xã hội
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="13"
                      @if ($bieumau->type_company == 13) checked="" @endif
                      >
                        -----DV tiêu chuẩn đo lường chất lượng
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios2" value="14"
                      @if ($bieumau->type_company == 14) checked="" @endif
                      >
                        -----DV tư vấn về KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="15"
                      @if ($bieumau->type_company == 15) checked="" @endif
                      >
                        -----DV sở hữu trí tuệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="16"
                      @if ($bieumau->type_company == 16) checked="" @endif
                      >
                        -----DV chuyển giao công nghệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="17"
                      @if ($bieumau->type_company == 17) checked="" @endif
                      >
                        -----DV KH&CN khác
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="18"
                      @if ($bieumau->type_company == 18) checked="" @endif
                      >
                        13.5.Đơn vị sự nghiệp khác
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="19"
                      @if ($bieumau->type_company == 19) checked="" @endif
                      >
                        13.6.Doanh nghiệp KH&CN
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_company" id="optionsRadios3" value="20"
                      @if ($bieumau->type_company == 20) checked="" @endif
                      >
                      13.7.Doanh nghiệp
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Loại hình kinh tế :</label>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_econom" id="optionsRadios1" value="1"
                      @if ($bieumau->type_econom == 1) checked="" @endif
                      >
                      14.1. Nhà nước
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_econom" id="optionsRadios2" value="2"
                      @if ($bieumau->type_econom == 2) checked="" @endif
                      >
                      14.2. Ngoài nhà nước
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="type_econom" id="optionsRadios3" value="3"
                      @if ($bieumau->type_econom == 3) checked="" @endif
                      >
                      14.3. Có vốn đầu tư nước ngoài
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="money">Giá trị tài sản cố định(triệu đồng):</label>
                  <input disabled="" type="text" value="{{$bieumau->money}}" name="money" class="form-control" id="money">
                </div>
                <div class="form-group">
                  <label for="lab_range"> Số phòng thí nghiệm chuyên ngành về KH&CN:</label>
                  <input disabled="" type="text" value="{{$bieumau->lab_range}}" name="lab_range" class="form-control" id="lab_range">
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
                    @php $i = 1; @endphp
                    @foreach ($bieumau->technologies as $tech)
                    <div class='row tab{{$i}}'>
                      <div class='col-md-3'>
                        <input disabled="" class='form-control' value="{{$tech->name}}" type='text' name='nametech{{$i}}' />
                      </div>
                      <div class='col-md-2'>
                        <input disabled="" class='form-control' value="{{$tech->code}}" type='text' name='codetech{{$i}}' />
                      </div>
                      <div class='col-md-2'>
                        <input disabled="" class='form-control' value="{{$tech->country}}" type='text' name='countrytech{{$i}}' />
                      </div>
                      <div class='col-md-1'>
                        <input disabled="" type='text' value="{{$tech->year}}" class='form-control' name='yeartech{{$i}}' />
                      </div>
                      <div class='col-md-1'>
                        <input disabled="" type='text' value="{{$tech->use_year}}" class='form-control' name='usedtech{{$i}}' />
                      </div>
                      <div class='col-md-2'>
                        <input disabled="" type='text' value="{{$tech->money}}" class='form-control' name='moneytech{{$i}}' />
                      </div>
                    </div>
                    @php $i++; @endphp
                    @endforeach
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Lĩnh vực nghiên cứu chính theo chức năng nhiệm vụ :</label>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="lab_number_sub" id="optionsRadios1" value="1"
                      @if ($bieumau->lab_number_sub == 1) checked="" @endif
                      >
                      1. Khoa học tự nhiên
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="lab_number_sub" id="optionsRadios2" value="2"
                      @if ($bieumau->lab_number_sub == 2) checked="" @endif
                      >
                        2. Khoa học kỹ thuật và công nghệ
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="lab_number_sub" id="optionsRadios3" value="3"
                      @if ($bieumau->lab_number_sub == 3) checked="" @endif
                      >
                        3. Khoa học y dược
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="lab_number_sub" id="optionsRadios3" value="4"
                      @if ($bieumau->lab_number_sub == 4) checked="" @endif
                      >
                          4. Khoa học nông nghiệp
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="lab_number_sub" id="optionsRadios3" value="5"
                      @if ($bieumau->lab_number_sub == 5) checked="" @endif
                      >
                        5. Khoa học xã hội
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="lab_number_sub" id="optionsRadios3" value="6"
                      @if ($bieumau->lab_number_sub == 6) checked="" @endif
                      >
                        6. Khoa học nhân văn
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Lĩnh vực nghiên cứu khác:</label>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input disabled="" type="checkbox" name="lab_number[]" value="1"
                        @if ($bieumau->labNumber(1) ) checked="" @endif
                        >
                        1. Khoa học tự nhiên
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled="" type="checkbox" name="lab_number[]"  value="2"
                        @if ($bieumau->labNumber(2) ) checked="" @endif
                        >
                          2. Khoa học kỹ thuật và công nghệ
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled="" type="checkbox" name="lab_number[]"  value="3"
                        @if ($bieumau->labNumber(3) ) checked="" @endif
                        >
                          3. Khoa học y dược
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled="" type="checkbox" name="lab_number[]"  value="4"
                        @if ($bieumau->labNumber(4) ) checked="" @endif
                        >
                          4. Khoa học nông nghiệp
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled="" type="checkbox" name="lab_number[]"  value="5"
                        @if ($bieumau->labNumber(5) ) checked="" @endif
                        >
                        5. Khoa học xã hội
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input disabled="" type="checkbox" name="lab_number[]" value="6"
                        @if ($bieumau->labNumber(6) ) checked="" @endif
                        >
                        6. Khoa học nhân văn
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="lab_description">Mô tả chi tiết</label>
                  <textarea disabled="" name="lab_description" class="form-control">{{$bieumau->lab_description}}</textarea>
                </div>
                <div class="form-group">
                  <label for="report_info">Thông tin về số liệu trong các biểu mẫu báo cáo</label>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="report_info" id="optionsRadios1" value="1"
                      @if ($bieumau->report_info == 1) checked="" @endif
                      >
                      Bao gồm số liệu của toàn bộ đơn vị/tổ chức, kể cả các đơn vị trực thuộc có tư cách pháp nhân;
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input disabled="" type="radio" name="report_info" id="optionsRadios2" value="2"
                      @if ($bieumau->report_info == 2) checked="" @endif
                      >
                      Chỉ bao gồm số liệu của các đơn vị trực thuộc không có tư cách pháp nhân. Không có bao gồm số liệu của các đơn vị trực thuộc có tư cách pháp nhân, có tài khoản và con dấu riêng (Những đơn vị này có báo cáo riêng)
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nếu có các đơn vị trực thuộc có tư cách pháp nhân, có tài khoản và con dấu riêng, đề nghị lập danh sách các đơn vị đó</label>
                  <div class='row' id="elementtab"><div class='col-md-4'>Tên đơn vị trực thuộc có tư cách pháp nhân</div><div class='col-md-4'>Họ và tên thủ trưởng</div><div class='col-md-4'>Địa chỉ, Điện thoại, Fax, Email</div>
                  @php $i = 1; @endphp
                  @foreach ($bieumau->elements as $e)
                  <div class='row element_{{$i}}' >
                    <div class='col-md-4'>
                      <input disabled="" type='text' value="{{$e->name}}" class='form-control' name='nameelement{{$i}}' />
                    </div>
                    <div class='col-md-3'>
                      <input disabled="" type='text' value="{{$e->leader}}" class='form-control' name='bosselement{{$i}}' />
                    </div>
                    <div class='col-md-4'>
                      <input disabled="" class='form-control' value="{{$e->address}}" type='text' name='contactelement{{$i}}' />
                    </div>
                  </div>
                  @php $i++; @endphp
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
      </div>
      <!-- ./row -->
    </section>
@endsection
