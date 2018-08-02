@extends('admin._layout')
@section('css')
    @parent
@endsection
@section('content')
    <section class="content-header">
      <h1>
        GIẢI THƯỞNG KHOA HỌC VÀ CÔNG NGHỆ NĂM {{$bieumau->reporter_year}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">GIẢI THƯỞNG KHOA HỌC VÀ CÔNG NGHỆ
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
                        <input disabled="" name="publish_day" id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" value="{{date('d/m/Y', strtotime($bieumau->publish_day))}}" data-mask="">
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
                          <th colspan="6">Chia theo lĩnh vực nghiên cứu khoa học và công nghệ</th>
                        </tr>
                        <tr>
                          <td>Khoa học tự nhiên</td>
                          <td>Khoa học kỹ thuật và công nghệ</td>
                          <td>Khoa học y dược</td>
                          <td>Khoa học nông nghiệp</td>
                          <td>Khoa học xã hội</td>
                          <td>Khoa học nhân văn</td>
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
                        </tr>
                        <tr>
                          <td><b>Tổng số</b></td>
                          <td>01</td>
                          @php
                            $s = parse_str($bieumau->total, $out);
                          @endphp
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td><b>1. Chia theo loại giải thưởng</b></td>
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
                          <td><b><i>1.1. Giải thưởng trong nước</i></b></td>
                          <td>02</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn, $out);
                          @endphp
                          
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng Hồ Chí Minh</td>
                          <td>03</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn1, $out);
                          @endphp
                          
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng Nhà nước</td>
                          <td>04</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn2, $out);
                          @endphp
                          
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td>- Giải thướng cấp bộ</td>
                          <td>05</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn3, $out);
                          @endphp
                          
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng cấp tỉnh</td>
                          <td>06</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn4, $out);
                          @endphp
                          
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng khác</td>
                          <td>07</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn5, $out);
                          @endphp
                          
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td><b><i>1.2. Giải thưởng quốc tế</i></b></td>
                          <td>08</td>
                          @php
                            $s = parse_str($bieumau->total_award_other, $out);
                          @endphp
                          
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td><b>2. Chia theo cá nhân/tập thể</b></td>
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
                          <td><b><i>2.1. Tập thể</i></b></td>
                          <td>09</td>
                          @php
                            $s = parse_str($bieumau->total_award_team, $out);
                          @endphp
                          
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td><b><i>2.2. Cá nhân</i></b></td>
                          <td>10</td>
                          @php
                            $s = parse_str($bieumau->total_award_fm, $out);
                          @endphp
                          
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td>- Nam</td>
                          <td>11</td>
                          @php
                            $s = parse_str($bieumau->total_award_male, $out);
                          @endphp
                          
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
                      </tr>
                      <tr>
                          <td>- Nữ</td>
                          <td>12</td>
                          @php
                            $s = parse_str($bieumau->total_award_female, $out);
                          @endphp
                          <td>{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                          <td>{{$out[7]}}</td>
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
