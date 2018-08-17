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
              <form role="form" method="POST" action="{{ url('/admin/tkkhth/'.$bieu->year.'/bieu/9') }}">
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
    <input value="{{$out[1]}}" class="form-control" type="text" name="field_1[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
    <input value="{{$out[2]}}" class="form-control" type="text" name="field_1[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
    <input value="{{$out[3]}}" class="form-control" type="text" name="field_1[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
    <input value="{{$out[4]}}" class="form-control" type="text" name="field_1[4]"></td>
</tr>
@php
$s = parse_str($bieu->field_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2. Số người được đào tạo về năng lượng nguyên tử trong năm</b></td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_2[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_2[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_2[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_2[4]"></td>
</tr>
@php
$s = parse_str($bieu->field_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>3. Số tổ chức tiến hành công việc bức xạ</b></td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" colspan="1"><i>Tổ chức</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_3[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_3[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_3[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_3[4]"></td>
</tr>
@php
$s = parse_str($bieu->field_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>4. Số cá nhân tiến hành công việc bức xạ</b></td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_4[1]">
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_4[2]">
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_4[3]">
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_4[4]">
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
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_5[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_5[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_5[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_5[4]"></td>
</tr>
@php
$s = parse_str($bieu->field_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>trong đó số Nữ</i></td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" colspan="1"><i>Người</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_6[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_6[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_6[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_6[4]"></td>
</tr>
@php
$s = parse_str($bieu->field_7, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>6. Số thiết bị bức xạ trên địa bàn</b></td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" colspan="1"><i>Thiết bị</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_7[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_7[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_7[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_7[4]"></td>
</tr>
@php
$s = parse_str($bieu->field_8, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>trong đó số thiết bị bức xạ di động trên địa bàn</i></td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" colspan="1"><i>Thiết bị</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_8[1]">
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_8[2]">
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_8[3]">
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_8[4]">
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
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_9[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_9[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_9[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_9[4]"></td>
</tr>
@php
$s = parse_str($bieu->field_10, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>trong đó số nguồn phóng xạ di động trên địa bàn</i></td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td class="TableCell_Center" colspan="1"><i>Nguồn</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_10[1]">
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_10[2]">
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_10[3]">
    </td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_10[4]">
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
      <input value="{{$out[1]}}" class="form-control" type="text" name="field_11[1]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[2]}}" class="form-control" type="text" name="field_11[2]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[3]}}" class="form-control" type="text" name="field_11[3]"></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      <input value="{{$out[4]}}" class="form-control" type="text" name="field_11[4]"></td>
</tr>
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
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