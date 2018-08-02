@extends('thanhvien._layout')
@section('css')
    @parent
@endsection
@section('content')
    <section class="content-header">
      <h1>
        NHÂN LỰC HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ NĂM {{$bieumau->reporter_year}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">NHÂN LỰC HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ
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
                        <input disabled=""  value="{{date('d/m/Y', strtotime($bieumau->publish_day))}}" name="publish_day" id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
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
                          <th rowspan="2"></th>
                          <th rowspan="2">Mã số</th>
                          <th rowspan="2">Tổng số</th>
                          <th colspan="6">Chia theo trình độ chuyên môn</th>
                          <th colspan="2">Chức danh GS,PGS</th>
                        </tr>
                        <tr>
                          <td>Tiến sỹ</td>
                          <td>Thạc sỹ</td>
                          <td>Đại học</td>
                          <td>Cao đẳng</td>
                          <td>Trung cấp</td>
                          <td>Khác</td>
                          <td>Giáo sư</td>
                          <td>Phó Giáo sư</td>
                        </tr>
                        <tr>
                          <td>A</td>
                          <td>B</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                          <td>7</td>
                          <td>8</td>
                          <td>9</td>
                        </tr>
                        <tr>
                          <td>Tổng số</td>
                          <td>01</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total, $out);
                            @endphp
                          <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="total[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="total[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="total[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="total[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="total[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="total[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="total[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="total[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="total[9]"></td>
                        </tr>
                        <tr>
                          <td>Trong đó số nữ</td>
                          <td>02</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->female_total, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="female_total[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="female_total[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="female_total[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="female_total[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="female_total[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="female_total[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="female_total[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="female_total[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="female_total[9]"></td>
                        </tr>
                        <tr>
                          <td>1. Chia theo dân tộc</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>1.1. Người Việt Nam</td>
                          <td>03</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->nation_vn, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="nation_vn[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="nation_vn[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="nation_vn[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="nation_vn[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="nation_vn[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="nation_vn[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="nation_vn[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="nation_vn[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="nation_vn[9]"></td>
                        </tr>
                        <tr>
                          <td>- Dân tộc Kinh</td>
                          <td>04</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->nation_kinh, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="nation_kinh[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="nation_kinh[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="nation_kinh[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="nation_kinh[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="nation_kinh[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="nation_kinh[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="nation_kinh[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="nation_kinh[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="nation_kinh[9]"></td>
                        </tr>
                        <tr>
                          <td>- Dân tộc thiểu số</td>
                          <td>05</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->nation_other, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="nation_other[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="nation_other[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="nation_other[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="nation_other[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="nation_other[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="nation_other[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="nation_other[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="nation_other[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="nation_other[9]"></td>
                        </tr>
                        <tr>
                          <td>1.2. Người nước ngoài</td>
                          <td>06</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->nation_foregin, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="nation_foregin[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="nation_foregin[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="nation_foregin[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="nation_foregin[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="nation_foregin[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="nation_foregin[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="nation_foregin[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="nation_foregin[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="nation_foregin[9]"></td>
                        </tr>
                        <tr>
                          <td>2. Chia theo lĩnh vực đào tạo</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>2.1. Khoa học tự nhiên</td>
                          <td>07</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khtn, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="class_khtn[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="class_khtn[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="class_khtn[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="class_khtn[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="class_khtn[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="class_khtn[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="class_khtn[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="class_khtn[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="class_khtn[9]"></td>
                        </tr>
                        <tr>
                          <td>2.2. Khoa học kỹ thuật và công nghệ</td>
                          <td>08</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khkt, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="class_khkt[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="class_khkt[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="class_khkt[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="class_khkt[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="class_khkt[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="class_khkt[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="class_khkt[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="class_khkt[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="class_khkt[9]"></td>
                        </tr>
                        <tr>
                          <td>2.3. Khoa học y , dược</td>
                          <td>09</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khyd, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="class_khyd[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="class_khyd[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="class_khyd[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="class_khyd[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="class_khyd[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="class_khyd[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="class_khyd[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="class_khyd[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="class_khyd[9]"></td>
                        </tr>
                        <tr>
                          <td>2.4. Khoa học nông nghiệp</td>
                          <td>10</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khnn, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="class_khnn[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="class_khnn[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="class_khnn[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="class_khnn[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="class_khnn[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="class_khnn[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="class_khnn[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="class_khnn[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="class_khnn[9]"></td>
                        </tr>
                        <tr>
                          <td>2.5. Khoa học xã hội</td>
                          <td>11</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khxh, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="class_khxh[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="class_khxh[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="class_khxh[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="class_khxh[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="class_khxh[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="class_khxh[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="class_khxh[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="class_khxh[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="class_khxh[9]"></td>
                        </tr>
                        <tr>
                          <td>2.6. Khoa học nhân văn  </td>
                          <td>12</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khnv, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="class_khnv[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="class_khnv[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="class_khnv[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="class_khnv[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="class_khnv[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="class_khnv[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="class_khnv[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="class_khnv[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="class_khnv[9]"></td>
                        </tr>
                        <tr>
                          <td>2.7. Khác</td>
                          <td>13</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_other, $out);
                            @endphp
                            <input disabled=""  value="{{$out[1]}}" class="form-control" type="text" name="class_other[1]"></td>
                          <td><input disabled=""  value="{{$out[2]}}" class="form-control" type="text" name="class_other[2]"></td>
                          <td><input disabled=""  value="{{$out[3]}}" class="form-control" type="text" name="class_other[3]"></td>
                          <td><input disabled=""  value="{{$out[4]}}" class="form-control" type="text" name="class_other[4]"></td>
                          <td><input disabled=""  value="{{$out[5]}}" class="form-control" type="text" name="class_other[5]"></td>
                          <td><input disabled=""  value="{{$out[6]}}" class="form-control" type="text" name="class_other[6]"></td>
                          <td><input disabled=""  value="{{$out[7]}}" class="form-control" type="text" name="class_other[7]"></td>
                          <td><input disabled=""  value="{{$out[8]}}" class="form-control" type="text" name="class_other[8]"></td>
                          <td><input disabled=""  value="{{$out[9]}}" class="form-control" type="text" name="class_other[9]"></td>
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
