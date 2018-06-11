@extends('thanhvien._layout')
@section('css')
    @parent
@endsection
@section('content')

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
              <form role="form" method="POST" action="{{ url('/thanhvien/bieumau1/'.$year) }}">
                {{ csrf_field() }}
                {{ method_field('PATCH')}}
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
                      <input type="radio" name="establish_lever" id="optionsRadios1" value="1">
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
                      <input type="radio" name="type_company" id="optionsRadios1" value="1">
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
                      <input type="radio" name="type_econom" id="optionsRadios1" value="1">
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
                  <label for="exampleInputEmail1">Lĩnh vực nghiên cứu chính:</label>
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
                      <input type="radio" name="report_info" id="optionsRadios1" value="1">
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
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
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