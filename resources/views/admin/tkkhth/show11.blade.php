@extends('admin._layout')

@section('content')
    <section class="content-header">
      <h1>
        DOANH NGHIỆP VÀ THỊ TRƯỜNG KHOA HỌC VÀ CÔNG NGHỆ 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">DOANH NGHIỆP VÀ THỊ TRƯỜNG KHOA HỌC VÀ CÔNG NGHỆ 
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
    <td class="Table_Header" rowspan="1">Số lượng</td>
</tr>
<tr>
    <td class="KH_ThuTuCot_Mau01" colspan="1">A</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">B</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">1</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>A. TỔNG SỐ DOANH NGHIỆP KHOA HỌC VÀ CÔNG NGHỆ</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_1}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1. Chia theo loại hình kinh tế</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">1.1. Nhà nước</td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_2}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1">1.2. Ngoài nhà nước</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
    {{$bieu->field_3}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1">1.3. Có vốn đầu tư nước ngoài</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
    {{$bieu->field_4}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2. Chia theo ngành kinh tế</b></td>
    <td class="Table_Header" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>3. Chia theo hình thức thành lập</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">3.1. Thành lập mới</td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
    {{$bieu->field_5}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1">3.2. Chuyển đổi từ các tổ chức KH&CN công lập</td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
    {{$bieu->field_6}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1">3.3. Hình thành từ trường đại học</td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_7}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1">3.4. Hình thành từ viện nghiên cứu</td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_8}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>B. SỐ TỔ CHỨC TRUNG GIAN PHÁT TRIỂN THỊ TRƯỜNG KHOA HỌC VÀ CÔNG NGHỆ</b></td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_9}}</td>
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
