@extends('thanhvien._layout')
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
              <form role="form" method="POST" action="{{ url('/thanhvien/bieumau6/'.$bieumau->reporter_year) }}">
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
                        <input name="publish_day" id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" value="{{date('d/m/Y', strtotime($bieumau->publish_day))}}" data-mask="">
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
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total[7]"></td>
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
                          
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_vn[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_vn[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_vn[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_vn[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_vn[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_vn[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_vn[7]"></td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng Hồ Chí Minh</td>
                          <td>03</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn1, $out);
                          @endphp
                          
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_vn1[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_vn1[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_vn1[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_vn1[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_vn1[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_vn1[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_vn1[7]"></td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng Nhà nước</td>
                          <td>04</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn2, $out);
                          @endphp
                          
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_vn2[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_vn2[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_vn2[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_vn2[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_vn2[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_vn2[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_vn2[7]"></td>
                      </tr>
                      <tr>
                          <td>- Giải thướng cấp bộ</td>
                          <td>05</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn3, $out);
                          @endphp
                          
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_vn3[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_vn3[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_vn3[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_vn3[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_vn3[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_vn3[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_vn3[7]"></td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng cấp tỉnh</td>
                          <td>06</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn4, $out);
                          @endphp
                          
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_vn4[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_vn4[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_vn4[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_vn4[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_vn4[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_vn4[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_vn4[7]"></td>
                      </tr>
                      <tr>
                          <td>- Giải thưởng khác</td>
                          <td>07</td>
                          @php
                            $s = parse_str($bieumau->total_award_vn5, $out);
                          @endphp
                          
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_vn5[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_vn5[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_vn5[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_vn5[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_vn5[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_vn5[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_vn5[7]"></td>
                      </tr>
                      <tr>
                          <td><b><i>1.2. Giải thưởng quốc tế</i></b></td>
                          <td>08</td>
                          @php
                            $s = parse_str($bieumau->total_award_other, $out);
                          @endphp
                          
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_other[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_other[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_other[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_other[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_other[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_other[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_other[7]"></td>
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
                          
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_team[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_team[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_team[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_team[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_team[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_team[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_team[7]"></td>
                      </tr>
                      <tr>
                          <td><b><i>2.2. Cá nhân</i></b></td>
                          <td>10</td>
                          @php
                            $s = parse_str($bieumau->total_award_fm, $out);
                          @endphp
                          
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_fm[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_fm[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_fm[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_fm[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_fm[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_fm[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_fm[7]"></td>
                      </tr>
                      <tr>
                          <td>- Nam</td>
                          <td>11</td>
                          @php
                            $s = parse_str($bieumau->total_award_male, $out);
                          @endphp
                          
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_male[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_male[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_male[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_male[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_male[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_male[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_male[7]"></td>
                      </tr>
                      <tr>
                          <td>- Nữ</td>
                          <td>12</td>
                          @php
                            $s = parse_str($bieumau->total_award_female, $out);
                          @endphp
                          <td><input value="{{$out[1]}}" class="form-control" type="text" name="total_award_female[1]"></td>
                          <td><input value="{{$out[2]}}" class="form-control" type="text" name="total_award_female[2]"></td>
                          <td><input value="{{$out[3]}}" class="form-control" type="text" name="total_award_female[3]"></td>
                          <td><input value="{{$out[4]}}" class="form-control" type="text" name="total_award_female[4]"></td>
                          <td><input value="{{$out[5]}}" class="form-control" type="text" name="total_award_female[5]"></td>
                          <td><input value="{{$out[6]}}" class="form-control" type="text" name="total_award_female[6]"></td>
                          <td><input value="{{$out[7]}}" class="form-control" type="text" name="total_award_female[7]"></td>
                      </tr>

                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a class="btn btn-default" href="{{url()->previous()}}">Quay lại</a>
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