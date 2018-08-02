@extends('admin._layout')

@section('content')
    <section class="content-header">
      <h1>
        TIÊU CHUẨN, ĐO LƯỜNG, CHẤT LƯỢNG 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">TIÊU CHUẨN, ĐO LƯỜNG, CHẤT LƯỢNG 
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
                        <input disabled="" value="{{date('d/m/Y', strtotime($bieu->publish_day))}}" name="publish_day" id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
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
    <td class="Table_Header" rowspan="1" style="width:200px;"></td>
    <td class="Table_Header" rowspan="1" style="width:50px;">Mã số</td>
    <td class="Table_Header" rowspan="1" style="width:50px;">Đơn vị tính</td>
    <td class="Table_Header" rowspan="1" style="width:50px;">Tổng cộng</td>
    <td class="Table_Header" rowspan="1">Trong kỳ báo cáo</td>
</tr>
<tr>
    <td class="KH_ThuTuCot_Mau01" colspan="1">A</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">B</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">C</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">1</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">2</td>
</tr>
@php
$s = parse_str($bieu->field_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>1. SỐ QUY CHUẨN KỸ THUẬT ĐỊA PHƯƠNG ĐƯỢC BAN HÀNH</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>Chia theo loại quy chuẩn</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->field_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Quy chuẩn kỹ thuật chung</td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Quy chuẩn kỹ thuật an toàn</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Quy chuẩn kỹ thuật môi trường</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Quy chuẩn kỹ thuật quá trình</td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Quy chuẩn kỹ thuật dịch vụ</td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" colspan="1"><i>Quy chuẩn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
@php
$s = parse_str($bieu->field_7, $out);
@endphp
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2. SỐ TỔ CHỨC KIỂM ĐỊNH PHƯƠNG TIỆN ĐO </b></td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" colspan="1"><i>Tổ chức</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_8, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>3. SỐ PHƯƠNG TIỆN ĐO ĐƯỢC KIỂM ĐỊNH</b></td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>Chia theo loại phương tiện đo</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->field_9, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Độ dài</td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_10, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khối lượng</td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_11, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Dung tích - Lưu lượng</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_12, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Áp suất</td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_13, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nhiệt độ</td>
    <td class="TableCell_Center" colspan="1">13</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_14, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Hoá lý</td>
    <td class="TableCell_Center" colspan="1">14</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_15, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Điện - Điện tử</td>
    <td class="TableCell_Center" colspan="1">15</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_16, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Thời gian - Tần số - Âm thanh</td>
    <td class="TableCell_Center" colspan="1">16</td>
    <td class="TableCell_Center" colspan="1"><i>Phương tiện</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}</td>
</tr>
@php
$s = parse_str($bieu->field_17, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>4. SỐ GIẤY CHỨNG NHẬN VỀ HỆ THỐNG QUẢN LÝ CẤP CHO TỔ CHỨC, DOANH NGHIỆP</b></td>
    <td class="TableCell_Center" colspan="1">17</td>
    <td class="TableCell_Center" colspan="1"><i>Giấy chứng nhận</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_18, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cơ quan quản lý nhà nước</td>
    <td class="TableCell_Center" colspan="1">18</td>
    <td class="TableCell_Center" colspan="1"><i>Giấy chứng nhận</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_19, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Các cơ quan, doanh nghiệp và tổ chức khác</td>
    <td class="TableCell_Center" colspan="1">19</td>
    <td class="TableCell_Center" colspan="1"><i>Giấy chứng nhận</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_20, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>5. SỐ PHÒNG THỬ NGHIỆM, HIỆU CHUẨN ĐƯỢC CÔNG NHẬN</b></td>
    <td class="TableCell_Center" colspan="1">20</td>
    <td class="TableCell_Center" colspan="1"><i>Phòng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
     {{$out[2]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_21, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>6. SỐ TỔ CHỨC ĐÁNH GIÁ SỰ PHÙ HỢP ĐĂNG KÝ HOẠT ĐỘNG</b></td>
    <td class="TableCell_Center" colspan="1">21</td>
    <td class="TableCell_Center" colspan="1"><i>Tổ chức</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">
      {{$out[2]}}
    </td>
</tr>
</table>
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
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
    
@endsection
