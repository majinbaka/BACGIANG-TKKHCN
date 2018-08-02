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
              <form role="form" method="POST" action="{{ url('/admin/tkkhth/'.$bieu->year.'/bieu/10') }}">
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
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_1[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_1[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_1[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_1[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_1[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_1[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_1[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_1[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_1[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2. SỐ VỤ KHIẾU NẠI</b></td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_2[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_2[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_2[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_2[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_2[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_2[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_2[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_2[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_2[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">2.1. Đã tiếp nhận</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_3[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_3[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_3[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_3[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_3[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_3[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_3[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_3[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_3[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">2.2. Thuộc thẩm quyền giải quyết</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_4[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_4[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_4[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_4[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_4[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_4[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_4[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_4[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_4[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">2.3. Đã giải quyết</td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_5[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_5[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_5[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_5[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_5[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_5[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_5[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_5[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_5[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>3. SỐ VỤ TỐ CÁO, YÊU CẦU XỬ LÝ HÀNH VI VI PHẠM PHÁP LUẬT</b></td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_6[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_6[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_6[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_6[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_6[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_6[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_6[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_6[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_6[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_7, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.1. Đã tiếp nhận</td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_7[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_7[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_7[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_7[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_7[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_7[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_7[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_7[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_7[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_8, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.2. Thuộc thẩm quyền giải quyết</td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_8[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_8[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_8[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_8[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_8[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_8[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_8[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_8[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_8[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_9, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.3. Đã được giải quyết</td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_9[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_9[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_9[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_9[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_9[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_9[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_9[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_9[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_9[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_10, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.4. Hòa giải, rút đơn</td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_10[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_10[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_10[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_10[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_10[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_10[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_10[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_10[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_10[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_11, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">3.5. Chuyển cơ quan khác có thẩm quyền giải quyết</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_11[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_11[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_11[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_11[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_11[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_11[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_11[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_11[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_11[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_12, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>4. SỐ VỤ VI PHẠM PHÁP LUẬT</b></td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td class="TableCell_Center" colspan="1"><i>Vụ</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_12[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_12[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_12[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_12[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_12[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_12[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_12[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_12[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_12[9]"></td>
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
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_13[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_13[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_13[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_13[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_13[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_13[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_13[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_13[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_13[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_14, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.2. Số nhiệm vụ KH&CN được thanh tra</td>
    <td class="TableCell_Center" colspan="1">14</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_14[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_14[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_14[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_14[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_14[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_14[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_14[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_14[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_14[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_15, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.3. Số tổ chức/cá nhân được thanh tra</td>
    <td class="TableCell_Center" colspan="1">15</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_15[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_15[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_15[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_15[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_15[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_15[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_15[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_15[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_15[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_16, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.4. Số tổ chức/cá nhân vi phạm bị xử lý<i><br/> Trong đó:</i></td>
    <td class="TableCell_Center" colspan="1">16</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_16[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_16[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_16[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_16[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_16[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_16[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_16[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_16[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_16[9]"></td>
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
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_17[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_17[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_17[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_17[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_17[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_17[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_17[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_17[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_17[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_18, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Phạt tiền</td>
    <td class="TableCell_Center" colspan="1">18</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_18[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_18[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_18[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_18[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_18[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_18[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_18[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_18[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_18[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_19, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Thu hồi</td>
    <td class="TableCell_Center" colspan="1">19</td>
    <td class="TableCell_Center" colspan="1"><i>Trường hợp</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_19[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_19[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_19[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_19[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_19[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_19[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_19[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_19[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_19[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_20, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.4.2. Số tiền phạt/thu hồi của các tổ chức/cá nhân bị xử lý</td>
    <td class="TableCell_Center" colspan="1">20</td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_20[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_20[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_20[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_20[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_20[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_20[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_20[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_20[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_20[9]"></td>
</tr>
@php
$s = parse_str($bieu->field_21, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">5.5. Giá trị hàng hóa, tang vật vi phạm bị tịch thu, tiêu hủy</td>
    <td class="TableCell_Center" colspan="1">21</td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;"><input value="{{$out[1]}}" class="form-control" type="text" name="field_21[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[2]}}" class="form-control" type="text" name="field_21[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[3]}}" class="form-control" type="text" name="field_21[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[4]}}" class="form-control" type="text" name="field_21[4]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[5]}}" class="form-control" type="text" name="field_21[5]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[6]}}" class="form-control" type="text" name="field_21[6]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[7]}}" class="form-control" type="text" name="field_21[7]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[8]}}" class="form-control" type="text" name="field_21[8]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;"><input value="{{$out[9]}}" class="form-control" type="text" name="field_21[9]"></td>
</tr>
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