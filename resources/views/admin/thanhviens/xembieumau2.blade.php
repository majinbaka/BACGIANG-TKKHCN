@extends('admin._layout')
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
                        <input disabled="" value="{{date('d/m/Y', strtotime($bieumau->publish_day))}}" name="publish_day" id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
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
                          {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
                        </tr>
                        <tr>
                          <td>Trong đó số nữ</td>
                          <td>02</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->female_total, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
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
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
                        </tr>
                        <tr>
                          <td>- Dân tộc Kinh</td>
                          <td>04</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->nation_kinh, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
                        </tr>
                        <tr>
                          <td>- Dân tộc thiểu số</td>
                          <td>05</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->nation_other, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
                        </tr>
                        <tr>
                          <td>1.2. Người nước ngoài</td>
                          <td>06</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->nation_foregin, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
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
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
                        </tr>
                        <tr>
                          <td>2.2. Khoa học kỹ thuật và công nghệ</td>
                          <td>08</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khkt, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
                        </tr>
                        <tr>
                          <td>2.3. Khoa học y , dược</td>
                          <td>09</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khyd, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
                        </tr>
                        <tr>
                          <td>2.4. Khoa học nông nghiệp</td>
                          <td>10</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khnn, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
                        </tr>
                        <tr>
                          <td>2.5. Khoa học xã hội</td>
                          <td>11</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khxh, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
                        </tr>
                        <tr>
                          <td>2.6. Khoa học nhân văn  </td>
                          <td>12</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_khnv, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
                        </tr>
                        <tr>
                          <td>2.7. Khác</td>
                          <td>13</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->class_other, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                          <td>{{$out[8]}}</td>
                          <td>{{$out[9]}}</td>
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
