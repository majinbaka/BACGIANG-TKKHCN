@extends('thanhvien._layout')
@section('css')
    @parent
@endsection
@section('content')
    <section class="content-header">
      <h1>
        HỢP TÁC QUỐC TẾ TRONG HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ NĂM {{$bieumau->reporter_year}}
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
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Ngày gửi báo cáo</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input disabled=""   value="{{date('d/m/Y', strtotime($bieumau->publish_day))}}" name="publish_day" id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                      </div>
                    </div>
                  </div>
                </div>
                
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
                        <tr>
                          <td>1. SỐ NHIỆM VỤ VÀ KINH PHÍ HTQT VỀ KH&CN MÀ ĐƠN VỊ CHỦ TRÌ</td>
                          <td>01</td>
                          <td>Nhiệm vụ</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="total[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="total[2]"></td>
                        </tr>
                        <tr>
                          <td>1.1. Chia theo lĩnh vực nghiên cứu</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Khoa học tự nhiên</td>
                          <td>02</td>
                          <td>Nhiệm vụ</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->mission_lab_1, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="mission_lab_1[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="mission_lab_1[2]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học kỹ thuật và công nghệ</td>
                          <td>03</td>
                          <td>Nhiệm vụ</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->mission_lab_2, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="mission_lab_2[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="mission_lab_2[2]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học y, dược</td>
                          <td>04</td>
                          <td>Nhiệm vụ</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->mission_lab_3, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="mission_lab_3[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="mission_lab_3[2]"></td>
                        </tr>
                        <tr>
                          <td>- Khoa học nông nghiệp</td>
                          <td>05</td>
                          <td>Nhiệm vụ</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->mission_lab_4, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="mission_lab_4[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="mission_lab_4[2]"></td>
                        </tr>
                        <tr>
                            <td>- Khoa học xã hội</td>
                            <td>06</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->mission_lab_5, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="mission_lab_5[1]"></td>
                            <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="mission_lab_5[2]"></td>
                        </tr>
                        <tr>
                            <td>- Khoa học nhân văn</td>
                            <td>07</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->mission_lab_6, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="mission_lab_6[1]"></td>
                            <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="mission_lab_6[2]"></td>
                        </tr>
                        <tr>
                            <td>1.2. Chia theo hình thức hợp tác</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>- Đa phương</td>
                            <td>08</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->collaborate_1, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="collaborate_1[1]"></td>
                            <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="collaborate_1[2]"></td>
                        </tr>
                        <tr>
                            <td>- Song phương</td>
                            <td>09</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->collaborate_2, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="collaborate_2[1]"></td>
                            <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="collaborate_2[2]"></td>
                        </tr>
                        <tr>
                            <td>- Nghị định thư</td>
                            <td>10</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->collaborate_3, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="collaborate_3[1]"></td>
                            <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="collaborate_3[2]"></td>
                        </tr>
                        <tr>
                            <td>- Khác</td>
                            <td>11</td>
                            <td><i>Nhiệm vụ</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->collaborate_4, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="collaborate_4[1]"></td>
                            <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="collaborate_4[2]"></td>
                        </tr>
                        <tr>
                            <td>1.3 Chia theo đối tác quốc tế/nước ngoài</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>1.4. Chia theo nguồn cấp kinh phí</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>- Ngân sách nhà nước<i><br>Trong đó:</i></td>
                            <td>12</td>
                            <td><i>Triệu đồng</i></td>
                            <td>X</td>
                            <td>
                            @php
                            $s = parse_str($bieumau->money_1, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="money_1[1]"></td>
                        </tr>
                        <tr>
                            <td><i>    + NS trung ương</i></td>
                            <td>13</td>
                            <td><i>Triệu đồng</i></td>
                            <td>X</td>
                            <td>
                            @php
                            $s = parse_str($bieumau->money_2, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="money_2[1]"></td>
                        </tr>
                        <tr>
                            <td><i>    + NS địa phương</i></td>
                            <td>14</td>
                            <td><i>Triệu đồng</i></td>
                            <td>X</td>
                            <td>
                            @php
                            $s = parse_str($bieumau->money_3, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="money_3[1]"></td>
                        </tr>
                        <tr>
                            <td>- Ngoài NSNN</td>
                            <td>15</td>
                            <td><i>Triệu đồng</i></td>
                            <td>X</td>
                            <td>
                            @php
                            $s = parse_str($bieumau->money_4, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="money_4[1]"></td>
                        </tr>
                        <tr>
                            <td>- Nước ngoài</td>
                            <td>16</td>
                            <td><i>Triệu đồng</i></td>
                            <td>X</td>
                            <td>
                            @php
                            $s = parse_str($bieumau->money_5, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="money_5[1]"></td>
                        </tr>
                        <tr>
                            <td><b>2. ĐOÀN RA</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2.1. Số đoàn của đơn vị ra nước ngoài nghiên cứu, khảo sát về KH&CN</td>
                            <td>17</td>
                            <td><i>Đoàn</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->team_out, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="team_out[1]"></td>
                            <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="team_out[2]"></td>
                        </tr>
                        <tr>
                            <td>2.2. Số người của đơn vị ra nước ngoài nghiên cứu, khảo sát về KH&CN</td>
                            <td>18</td>
                            <td><i>Người</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->human_out, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="human_out[1]"></td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td><b>3. ĐOÀN VÀO</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3.1. Số đoàn của nước ngoài/tổ chức quốc tế do đơn vị chủ trì mời vào nghiên cứu, khảo sát về KH&CN tại Việt Nam</td>
                            <td>19</td>
                            <td><i>Đoàn</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->team_in, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="team_in[1]"></td>
                            <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="team_in[2]"></td>
                        </tr>
                        <tr>
                            <td>3.2. Số người nước ngoài do đơn vị chủ trì mời vào nghiên cứu, khảo sát về KH&CN tại Việt Nam</td>
                            <td>20</td>
                            <td><i>Người</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->human_in, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="human_in[1]"></td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td><b>4. SỐ NGƯỜI CỦA ĐƠN VỊ THAM GIA HỘI NGHỊ/HỘI THÀO QUỐC TẾ (tổ chức cả trong và ngoài nước)</b></td>
                            <td>21</td>
                            <td><i>Người</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->total_h1, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="total_h1[1]"></td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td><b>5. SỐ NGƯỜI CỦA ĐƠN VỊ ĐƯỢC LÀM VIỆC TẠI CÁC TỔ CHỨC QUỐC TẾ LIÊN QUAN ĐẾN KH&CN</b></td>
                            <td>22</td>
                            <td><i>Người</i></td>
                            <td>
                            @php
                            $s = parse_str($bieumau->total_h2, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="total_h2[1]"></td>
                            <td>X</td>
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
