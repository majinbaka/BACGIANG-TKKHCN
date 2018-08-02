@extends('admin._layout')

@section('content')
    <section class="content-header">
      <h1>
        THANH TRA KHOA HỌC VÀ CÔNG NGHỆ 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">THANH TRA KHOA HỌC VÀ CÔNG NGHỆ 
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
    <td class="Table_Header" rowspan="2" style="width:200px;"></td>
    <td class="Table_Header" rowspan="2" style="width:50px;">Mã số</td>
    <td class="Table_Header" rowspan="2" style="width:50px;">Đơn vị tính</td>
    <td class="Table_Header" rowspan="2" style="width:50px;">Tổng số</td>
    <td class="Table_Header" colspan="6" rowspan="1">LĨNH VỰC THANH TRA CHUYÊN NGÀNH</td>
    <td class="Table_Header" colspan="1" rowspan="2">Thanh tra hành chính</td>
    <td class="Table_Header" colspan="1" rowspan="2">Khác</td>
</tr>
<tr>
    <td class="Table_Header" rowspan="1">Sở hữu công nghiệp</td>
    <td class="Table_Header" rowspan="1">Tiêu chuẩn đo lường chất lượng</td>
    <td class="Table_Header" rowspan="1">An toàn bức xạ, hạt nhân</td>
    <td class="Table_Header" rowspan="1">Nhiệm vụ KH&CH</td>
    <td class="Table_Header" rowspan="1">Tổ chức KH&CN</td>
    <td class="Table_Header" rowspan="1">Chuyển giao công nghệ</td>
</tr>
<tr>
    <td class="KH_ThuTuCot_Mau01" colspan="1">A</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">B</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">C</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">1</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">2</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">3</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">4</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">5</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">6</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">7</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">8</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">9</td>
</tr>
@php
$s = parse_str($bieu->field_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>1. TIẾP DÂN</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td class="TableCell_Center" colspan="1"><i>Lượt</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2. SỐ VỤ KHIẾU NẠI</b></td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">2.1. Đã tiếp nhận</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">2.2. Thuộc thẩm quyền giải quyết</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">2.3. Đã giải quyết</td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>3. SỐ VỤ TỐ CÁO, YÊU CẦU XỬ LÝ HÀNH VI VI PHẠM PHÁP LUẬT</b></td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_7, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.1. Đã tiếp nhận</td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_8, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.2. Thuộc thẩm quyền giải quyết</td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_9, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.3. Đã được giải quyết</td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_10, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.4. Hòa giải, rút đơn</td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_11, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.5. Chuyển cơ quan khác có thẩm quyền giải quyết</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_12, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>4. SỐ VỤ VI PHẠM PHÁP LUẬT</b></td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>5. HOẠT ĐỘNG THANH TRA</b></td>
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
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->field_13, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.1. Số cuộc thanh tra</td>
    <td class="TableCell_Center" colspan="1">13</td>
    <td class="TableCell_Center" colspan="1"><i>Cuộc</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_14, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.2. Số nhiệm vụ KH&CN được thanh tra</td>
    <td class="TableCell_Center" colspan="1">14</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_15, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.3. Số tổ chức/cá nhân được thanh tra</td>
    <td class="TableCell_Center" colspan="1">15</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_16, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.4. Số tổ chức/cá nhân vi phạm bị xử lý<i><br/> Trong đó:</i></td>
    <td class="TableCell_Center" colspan="1">16</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1">5.4.1. Chia theo hình thức xử lý</td>
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
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->field_17, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cảnh cáo</td>
    <td class="TableCell_Center" colspan="1">17</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_18, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Phạt tiền</td>
    <td class="TableCell_Center" colspan="1">18</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_19, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Thu hồi</td>
    <td class="TableCell_Center" colspan="1">19</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_20, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.4.2. Số tiền phạt/thu hồi của các tổ chức/cá nhân bị xử lý</td>
    <td class="TableCell_Center" colspan="1">20</td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
@php
$s = parse_str($bieu->field_21, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.5. Giá trị hàng hóa, tang vật vi phạm bị tịch thu, tiêu hủy</td>
    <td class="TableCell_Center" colspan="1">21</td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[7]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[8]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[9]}}</td>
</tr>
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
