@extends('admin._layout')
@section('css')
    @parent
@endsection
@section('content')
    <section class="content-header">
      <h1>
        NHIỆM VỤ KHOA HỌC VÀ CÔNG NGHỆ NĂM {{$bieumau->reporter_year}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">NHIỆM VỤ KHOA HỌC VÀ CÔNG NGHỆ
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
                          <th rowspan="3">Trong đó: Số nhiệm vụ KH&CN chủ nhiệm là nữ</th>
                          <th colspan="4">Tình trạng tiến hành</th>
                        </tr>
                        <tr>
                          <td colspan="2">Số đang tiến hành</td>
                          <td rowspan="2">Số được nghiệm thu</td>
                          <td rowspan="2">Số đã đưa vào ứng dụng</td>
                        </tr>
                        <tr>
                          <td>Số phê duyệt mới trong năm</td>
                          <td>Số chuyển tiếp từ năm trước</td>
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
                        </tr>
                        <tr>
                          <td>1. Tổng số đề tài/đề án KH&CN</td>
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
                        </tr>
                        <tr>
                          <td>1.1. Chia theo cấp đề tài/đề án</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Cấp quốc gia</td>
                          <td>02</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lv1, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Cấp bộ</td>
                          <td>03</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lv2, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Cấp tỉnh</td>
                          <td>04</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lv3, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Cấp cơ sở</td>
                          <td>05</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lv4, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Cấp khác</td>
                          <td>06</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lv5, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>1.2. Chia theo lĩnh vực nghiên cứu</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Khoa học tự nhiên</td>
                          <td>07</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lab_1, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Khoa học kỹ thuật và công nghệ</td>
                          <td>08</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lab_2, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Khoa học y dược</td>
                          <td>09</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lab_3, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Khoa học nông nghiệp</td>
                          <td>10</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lab_4, $out);
                            @endphp{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Khoa học xã hội</td>
                          <td>11</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lab_5, $out);
                            @endphp{{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Khoa học nhân văn</td>
                          <td>12</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_lab_6, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>1.3. Chia theo nguồn cấp kinh phí</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Ngân sách nhà nước<br>Trong đó:</td>
                          <td>13</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_money_1, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>   + Trung ương</td>
                          <td>14</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_money_2, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>   + Địa phương</td>
                          <td>15</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_money_3, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Doanh nghiệp</td>
                          <td>16</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_money_4, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Trường đại học</td>
                          <td>17</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_money_5, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Nước ngoài</td>
                          <td>18</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_money_6, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Nguồn khác</td>
                          <td>19</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->subject_money_7, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>2. Tổng số dự án</td>
                          <td>20</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_job, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>2.1. Chia theo cấp dự án</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Cấp quốc gia</td>
                          <td>21</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_job_1, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Cấp bộ</td>
                          <td>22</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_job_2, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Cấp tỉnh</td>
                          <td>23</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_job_3, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Cấp cơ sở</td>
                          <td>24</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_job_4, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Cấp khác</td>
                          <td>25</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_job_5, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>2.2. Chia theo lĩnh vực nghiên cứu</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Khoa học tự nhiên</td>
                          <td>26</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_lab_1, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Khoa học kỹ thuật và công nghệ</td>
                          <td>27</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_lab_2, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Khoa học y dược</td>
                          <td>28</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_lab_3, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Khoa học nông nghiệp</td>
                          <td>29</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_lab_4, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Khoa học xã hội</td>
                          <td>30</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_lab_5, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Khoa học nhân văn</td>
                          <td>31</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_lab_6, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>{{$out[2]}}</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>2.3. Chia theo nguồn cấp kinh phí</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>- Ngân sách nhà nước<br>Trong đó:</td>
                          <td>32</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_money_1, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>   + Trung ương</td>
                          <td>33</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_money_2, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>   + Địa phương</td>
                          <td>34</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_money_3, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Doanh nghiệp</td>
                          <td>35</td>
                          <td>@php
                            $s = parse_str($bieumau->total_money_4, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Trường đại học</td>
                          <td>36</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_money_5, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Nước ngoài</td>
                          <td>37</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_money_6, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
                        </tr>
                        <tr>
                          <td>- Nguồn khác</td>
                          <td>38</td>
                          <td>
                            @php
                            $s = parse_str($bieumau->total_money_7, $out);
                            @endphp
                            {{$out[1]}}</td>
                          <td>X</td>
                          <td>{{$out[3]}}</td>
                          <td>{{$out[4]}}</td>
                          <td>{{$out[5]}}</td>
                          <td>{{$out[6]}}</td>
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
