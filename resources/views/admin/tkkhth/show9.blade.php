@extends('admin._layout')

@section('content')
    <section class="content-header">
      <h1>
        NĂNG LƯỢNG NGUYÊN TỬ, AN TOÀN BỨC XẠ VÀ HẠT NHÂN 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">NĂNG LƯỢNG NGUYÊN TỬ, AN TOÀN BỨC XẠ VÀ HẠT NHÂN 
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
    <td class="Table_Header" rowspan="2" style="width:200px;"></td><td class="Table_Header" rowspan="2" style="width:50px;">Mã số</td><td class="Table_Header" rowspan="2" style="width:50px;">Đơn vị tính</td><td class="Table_Header" rowspan="2" style="width:50px;">Tổng cộng</td><td class="Table_Header" colspan="3" rowspan="1">Chia theo loại hình kinh tế</td>
  </tr><tr>
    <td class="Table_Header" rowspan="1">Nhà nước</td><td class="Table_Header" rowspan="1">Ngoài nhà nước</td><td class="Table_Header" rowspan="1">Có vốn đầu tư nước ngoài</td>
  </tr>
                          <tr>
    <td class="KH_ThuTuCot_Mau01" colspan="1">A</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">B</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">C</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">1</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">2</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">3</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">4</td>
</tr>
@php
$s = parse_str($bieu->field_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>1. Số người hoạt động trong lĩnh vực năng lượng nguyên tử</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
    {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
    {{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
    {{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
    {{$out[4]}}</td>
</tr>
@php
$s = parse_str($bieu->field_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2. Số người được đào tạo về năng lượng nguyên tử trong năm</b></td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[4]}}</td>
</tr>
@php
$s = parse_str($bieu->field_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>3. Số tổ chức tiến hành công việc bức xạ</b></td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" colspan="1"><i>Tổ chức</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[4]}}</td>
</tr>
@php
$s = parse_str($bieu->field_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>4. Số cá nhân tiến hành công việc bức xạ</b></td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[2]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[3]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[4]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>5. Số nhân viên bức xạ</b></td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[4]}}</td>
</tr>
@php
$s = parse_str($bieu->field_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>trong đó số Nữ</i></td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[4]}}</td>
</tr>
@php
$s = parse_str($bieu->field_7, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>6. Số thiết bị bức xạ trên địa bàn</b></td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" colspan="1"><i>Thiết bị</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[4]}}</td>
</tr>
@php
$s = parse_str($bieu->field_8, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>trong đó số thiết bị bức xạ di động trên địa bàn</i></td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" colspan="1"><i>Thiết bị</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
    {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
    {{$out[2]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
    {{$out[3]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
    {{$out[4]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_9, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>7. Số nguồn phóng xạ trên địa bàn</b></td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td class="TableCell_Center" colspan="1"><i>Nguồn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[4]}}</td>
</tr>
@php
$s = parse_str($bieu->field_10, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>trong đó số nguồn phóng xạ di động trên địa bàn</i></td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td class="TableCell_Center" colspan="1"><i>Nguồn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[2]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[3]}}
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[4]}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_11, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>8. Số giấy phép tiến hành công việc bức xạ được cấp</b></td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td class="TableCell_Center" colspan="1"><i>Giấy phép</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[4]}}</td>
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
