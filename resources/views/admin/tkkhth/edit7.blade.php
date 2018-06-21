@extends('admin._layout')

@section('content')
    <section class="content-header">
      <h1>
        HOẠT ĐỘNG ĐÁNH GIÁ, THẨM ĐỊNH, GIÁM ĐỊNH, ỨNG DỤNG VÀ PHÁT TRIỂN CÔNG NGHỆ TẠI ĐỊA PHƯƠNG 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">HOẠT ĐỘNG ĐÁNH GIÁ, THẨM ĐỊNH, GIÁM ĐỊNH, ỨNG DỤNG VÀ PHÁT TRIỂN CÔNG NGHỆ TẠI ĐỊA PHƯƠNG 
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form role="form" method="POST" action="{{ url('/admin/tkkhth/'.$bieu->year.'/bieu/7') }}">
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
                        <input value="{{date('d/m/Y', strtotime($bieu->publish_day))}}" name="publish_day" id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                        {!! $errors->first('publish_day', '<p class="help-block">:message</p>') !!}
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-bordered">
                        <tbody>
                        <tr>
    <td class="Table_Header" rowspan="1" style="width:500px;"></td>
    <td class="Table_Header" rowspan="1" style="width:50px;">Mã số</td>
    <td class="Table_Header" rowspan="1" style="width:150px;">Đơn vị tính</td>
    <td class="Table_Header" rowspan="1">Tổng số </td>
</tr>
<tr>
    <td class="KH_ThuTuCot_Mau01" colspan="1">A</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">B</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">C</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">1</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1. SỐ DỰ ÁN ĐƯỢC THẨM ĐỊNH CƠ SỞ KHOA HỌC, THẨM ĐỊNH CÔNG NGHỆ</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_1}}" class="form-control" type="text" name="field_1">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1.1. Chia theo loại hình kinh tế</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Nhà nước</td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_2}}" class="form-control" type="text" name="field_2">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Ngoài nhà nước</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_3}}" class="form-control" type="text" name="field_3">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Có vốn đầu tư nước ngoài</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_4}}" class="form-control" type="text" name="field_4">
    </td>
</tr>
@php
$s = parse_str($bieu->field_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>1.2. Chia theo ngành kinh tế</b></td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="Table_Header" colspan="1">
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_5[1]">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"> - A. Nông nghiệp, lâm nghiệp và thủy sản</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_5[2]">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"> - B. Khai khoáng</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_5[3]">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"> - C. Công nghiệp chế biến, chế tạo</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_5[4]">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"> - E. Cung cấp nước; hoạt động quản lý và xử lý rác thải, nước thải</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[5]}}" class="form-control" type="text" name="field_5[5]">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"> - F. Xây dựng</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[6]}}" class="form-control" type="text" name="field_5[6]">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1.3. Chia theo nước đầu tư</b></td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="Table_Header" colspan="1">
      <input value="{{$bieu->field_6}}" class="form-control" type="text" name="field_6">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2. SỐ HỢP ĐỒNG CHUYỂN GIAO CÔNG NGHỆ ĐƯỢC ĐĂNG KÝ VÀ CẤP PHÉP</b></td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1">
      <input value="{{$bieu->field_7}}" class="form-control" type="text" name="field_7">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.1. Chia theo loại hình kinh tế</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Nhà nước</td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_8}}" class="form-control" type="text" name="field_8">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Ngoài nhà nước</td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_9}}" class="form-control" type="text" name="field_9">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Có vốn đầu tư nước ngoài</td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_10}}" class="form-control" type="text" name="field_10">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.2. Chia theo hình thức chuyển giao</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Hợp đồng chuyển giao công nghệ độc lập</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_11}}" class="form-control" type="text" name="field_11">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Phần chuyển giao công nghệ trong dự án hoặc hợp đồng</td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_12}}" class="form-control" type="text" name="field_12">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Hình thức khác</td>
    <td class="TableCell_Center" colspan="1">13</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_13}}" class="form-control" type="text" name="field_13">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.3. Chia theo đối tác chuyển giao</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Chuyển giao công nghệ từ nước ngoài vào Việt Nam</td>
    <td class="TableCell_Center" colspan="1">14</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_14}}" class="form-control" type="text" name="field_14">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Chuyển giao công nghệ giữa các doanh nghiệp trong nước </td>
    <td class="TableCell_Center" colspan="1">15</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_15}}" class="form-control" type="text" name="field_15">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Chuyển giao công nghệ giữa viện nghiên cứu, các trường đại học và doanh nghiệp</td>
    <td class="TableCell_Center" colspan="1">16</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_16}}" class="form-control" type="text" name="field_16">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.4. Chia theo phương thức chuyển giao</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Chuyển giao tài liệu về công nghệ</td>
    <td class="TableCell_Center" colspan="1">17</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_17}}" class="form-control" type="text" name="field_17">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Đào tạo cho bên nhận công nghệ nắm vững và làm chủ công nghệ theo thời hạn quy định trong hợp đồng chuyển giao công nghệ</td>
    <td class="TableCell_Center" colspan="1">18</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_18}}" class="form-control" type="text" name="field_18">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Cử chuyên gia tư vấn kỹ thuật cho bên nhận công nghệ đưa công nghệ vào sản xuất</td>
    <td class="TableCell_Center" colspan="1">19</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_19}}" class="form-control" type="text" name="field_19">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Phương thức chuyển giao khác</td>
    <td class="TableCell_Center" colspan="1">20</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_20}}" class="form-control" type="text" name="field_20">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.5. Chia theo Ngành/lĩnh vực, sản phẩm sản xuất do sử dụng công nghệ được chuyển giao (Chia theo ngành kinh tế)</b></td>
    <td class="Table_Header" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.6. Chia theo nước đầu tư</b></td>
    <td class="TableCell" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->field_21, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2.7. Chi phí thanh toán cho chuyển giao công nghệ</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_21[1]">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>3. SỐ HỢP ĐỒNG TƯ VẪN CHUYỂN GIAO CÔNG NGHỆ</b></td>
    <td class="TableCell_Center" colspan="1">21</td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_21[2]">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>3.1. Chia theo loại hình kinh tế</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Nhà nước</td>
    <td class="TableCell_Center" colspan="1">22</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_22}}" class="form-control" type="text" name="field_22">
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Ngoài nhà nước</td>
    <td class="TableCell_Center" colspan="1">23</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_23}}" class="form-control" type="text" name="field_23">
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Có vốn đầu tư nước ngoài</td>
    <td class="TableCell_Center" colspan="1">24</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_24}}" class="form-control" type="text" name="field_24">
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>3.2. Chia theo đối tác tư vấn</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Đơn vị tư vấn trong nước</td>
    <td class="TableCell_Center" colspan="1">25</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_25}}" class="form-control" type="text" name="field_25">
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Đơn vị tư vấn nước ngoài</td>
    <td class="TableCell_Center" colspan="1">26</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_26}}" class="form-control" type="text" name="field_26">
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>3.3. Chia theo nguồn gốc kinh phí</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Kinh phí nhà nước</td>
    <td class="TableCell_Center" colspan="1">27</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_27}}" class="form-control" type="text" name="field_27">
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Kinh phí tư nhân</td>
    <td class="TableCell_Center" colspan="1">28</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_28}}" class="form-control" type="text" name="field_28">
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Kinh phí có nguồn gốc nước ngoài</td>
    <td class="TableCell_Center" colspan="1">29</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_29}}" class="form-control" type="text" name="field_29">
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>4. SỐ TỔ CHỨC TƯ VẤN CHUYỂN GIAO CÔNG NGHỆ</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Viện, trung tâm nghiên cứu</td>
    <td class="TableCell_Center" colspan="1">30</td>
    <td class="TableCell_Center" colspan="1">Tổ chức</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_30}}" class="form-control" type="text" name="field_30">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Cơ sở giáo dục đại học</td>
    <td class="TableCell_Center" colspan="1">31</td>
    <td class="TableCell_Center" colspan="1">Tổ chức</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_31}}" class="form-control" type="text" name="field_31">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Tổ chức dịch vụ khoa học và công nghệ</td>
    <td class="TableCell_Center" colspan="1">32</td>
    <td class="TableCell_Center" colspan="1">Tổ chức</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_32}}" class="form-control" type="text" name="field_32">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Doanh nghiệp</td>
    <td class="TableCell_Center" colspan="1">33</td>
    <td class="TableCell_Center" colspan="1">Tổ chức</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$bieu->field_33}}" class="form-control" type="text" name="field_33">
    </td>
</tr>
</table>
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
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
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
});
</script>
@endsection