@extends('admin._layout')
@section('css')
    @parent
@endsection
@section('content')
    <section class="content-header">
      <h1>
        CHI CHO KHOA HỌC VÀ CÔNG NGHỆ  NĂM {{$bieumau->reporter_year}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CHI CHO KHOA HỌC VÀ CÔNG NGHỆ
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
                        <input disabled="" value="{{date('d/m/Y', strtotime($bieumau->publish_day))}}" name="publish_day" id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
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
                        <tbody><tr>
                          <th rowspan="3"></th>
                          <th rowspan="3">Mã số</th>
                          <th rowspan="3">Tổng số</th>
                          <th colspan="4">Chia theo nguồn cấp kinh phí</th>
                        </tr>
                        <tr>
                          <td colspan="2">Ngân sách nhà nước</td>
                          <td rowspan="2">Ngoài NSNN</td>
                          <td rowspan="2">Nước ngoài</td>
                        </tr>
                        <tr>
                          <td>NS Trung ương</td>
                          <td>NS Địa phương</td>
                        </tr>
                        <tr>
                          <td>A</td>
                          <td>B</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td>TỔNG CHI<br>Chia theo:</td>
                          <td>01</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>1. CHI ĐẦU TƯ PHÁT TRIỂN KHOA HỌC VÀ CÔNG NGHỆ</td>
                          <td>02</td>
                          <td>@php
                            $s = parse_str($bieumau->pay_improve_khcn, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>2. CHI SỰ NGHIỆP KHOA HỌC VÀ CÔNG NGHỆ<br>Chia theo:</td>
                          <td>03</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_khcn, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>2.1. Chi quỹ lương và hoạt động bộ máy<br>trong đó:</td>
                          <td>04</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_salary_total, $out);
                            @endphp
                          {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>- Chi tiền lương và phụ cấp, tiền công, các khoản đóng góp theo lương</td>
                          <td>05</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_salary, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>- Chi hoạt động bộ máy</td>
                          <td>06</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_machine, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>2.2. Chi hoạt động thường xuyên theo chức năng</td>
                          <td>07</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_normal, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>2.3. Chi thực hiện nhiệm vụ KH&CN<br>trong đó:</td>
                          <td>08</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_mission, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>- Nhiệm vụ KH&CN cấp quốc gia</td>
                          <td>09</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->mission_lv1, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>- Nhiệm vụ KH&CN cấp bộ</td>
                          <td>10</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->mission_lv2, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>- Nhiệm vụ KH&CN tỉnh</td>
                          <td>11</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->mission_lv3, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>- Nhiệm vụ KH&CN cơ sở</td>
                          <td>12</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->mission_lv4, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>- Nhiệm vụ KH&CN khác</td>
                          <td>13</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->mission_lv5, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>2.4. Chi tăng cường năng lực nghiên cứu</td>
                          <td>14</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_lab, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>2.5. Chi sửa chữa chống xuống cấp</td>
                          <td>15</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_maintain, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>2.6. Chi hợp tác quốc tế</td>
                          <td>16</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_univer, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>2.7. Chi sự nghiệp khoa học và công nghệ khác</td>
                          <td>17</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_improve_other, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                        </tr>
                        <tr>
                          <td>3. CHI KHÁC CHO KH&CN</td>
                          <td>18</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->pay_other, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
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
