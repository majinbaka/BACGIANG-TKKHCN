@extends('layouts.main') @section('content')

<div id="div_Body" style="z-index: 100; padding:20px 10px 10px 10px;  margin-top: 30px;">

    <style type="text/css">
        .CNNV_NoLeftBorder {
            border-style: solid;
            border-width: 1px 1px 1px 0px;
            border-color: #c0c0c0;
            font-family: Tahoma, Arial, Times New Roman;
            font-size: 11px;
            color: #333333;
            /* padding: 0px 5px 0px 0px; */
            /* text-align: right; */
            vertical-align: middle;
        }
        
        .CNNV_NoRightBorder {
            border-style: solid;
            border-width: 1px 0px 1px 1px;
            border-color: #c0c0c0;
            font-family: Tahoma, Arial, Times New Roman;
            font-size: 11px;
            color: #333333;
            padding: 5px;
            text-align: left;
            vertical-align: middle;
            font-weight: bold;
        }
        
        .CNNV_NoRightBorder a {
            color: #333333;
            text-decoration: none;
        }
    </style>
    <style type="text/css">
        .Initial {
            display: block;
            padding: 8px 20px 8px 8px;
            margin-bottom: 3px;
            float: left;
            background: url("/image/init_bg2.png") no-repeat right top;
            color: #ffffff;
            font-weight: bold;
        }
        
        .Initial:hover {
            color: White;
            background: url("/image/HoverButton.png") repeat-x right top;
            margin: 0px 0px 0px 0px;
            padding: 8px 20px 8px 8px;
            color: Black;
        }
        
        .Clicked {
            float: left;
            display: block;
            background: url("/image/SelectedButton.png") repeat-x right top;
            padding: 8px 20px 8px 8px;
            color: Black;
            font-weight: bold;
            color: White;
        }
        
        .style1 {
            width: 86px;
        }
    </style>
    <div style="height: 5px; width: 100%">
    </div>

    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tr>
            <td align="left" valign="top">
                <div align="left">
                    <form method="POST" action="">
                        {{csrf_field()}}
                        <input type="hidden" name="year" value="{{$bieu->reporter_year}}">
                        <input type="hidden" name="id" value="{{$bieu->user_id}}">
                        <input type="submit" name="1" value="Biểu 01" id="ctl00_ContentPlaceHolder1_ctl00_Tab1" title="Biểu 01: Thông tin chung về đơn vị báo cáo" class="Initial" style="border-style:None;" />
                        <input type="submit" name="2" value="Biểu 02" id="ctl00_ContentPlaceHolder1_ctl00_Tab2" title="Biểu 02: Nhân lực hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                        <input type="submit" name="3" value="Biểu 03" id="ctl00_ContentPlaceHolder1_ctl00_Tab3" title="Biểu 03: Chi cho khoa học và công nghệ" class="Initial" style="border-style:None;" />
                        <input type="submit" name="4" value="Biểu 04" id="ctl00_ContentPlaceHolder1_ctl00_Tab4" title="Biểu 04: Nhiệm vụ khoa học và công nghệ" class="Clicked" style="border-style:None;" />
                        <input type="submit" name="5" value="Biểu 05" id="ctl00_ContentPlaceHolder1_ctl00_Tab5" title="Biểu 05: Hợp tác quốc tế trong hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                        <input type="submit" name="6" value="Biểu 06" id="ctl00_ContentPlaceHolder1_ctl00_Tab6" title="Biểu 06: Giải thưởng khoa học và công nghệ" class="Initial" style="border-style:None;" />
                    </form>
                </div>
            </td>
        </tr>
    </table>
    <span id="ctl00_ContentPlaceHolder1_ctl00_lblBangDuLieu">
<style type="text/css">
    .style1
    {
        width: 105px;
    }
</style>
<table style="width: 100%;">
    <tr>
        <td class="style1">
        </td>
        <td align="right">
            <strong>Biểu 04/CS-KHCN</strong><br />
            25/2015/TT-BKHCN</td>
    </tr>
    <tr>
        <td class="style1">
        </td>
        <td align="center">
            <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_Label2" style="font-weight: 700;
                color: BLACK">NHIỆM VỤ KHOA HỌC VÀ CÔNG NGHỆ </span>
    </td>
    </tr>
    <tr>
        <td class="style1">
            <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lbl1">Đơn vị báo cáo:</span>
        </td>
        <td align="left">
            <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblTenDonVi" style="font-weight: 700;
                color: #FF0000">{{$bieu->user->donviname}}</span>

        </td>
        <td align="right" style="width: 70px">
            <a href="?cate=tkcs">
                <img onmouseover="this.style.cursor='hand'" src="/image/back.gif" align="left" border="0" width="66" height="23" /></a>
        </td>
    </tr>
    <tr>

        <td style="vertical-align: top; text-align: left" class="style1">
            Ngày gửi báo cáo
        </td>
        <td style="vertical-align: top; text-align: left">
            <table id="tbl_control" cellSpacing="0" cellPadding="0" border="0" style="border-style:none; border-width:0px;">
                <tr>
                    <td align="middle" style="border-style:none; border-width:0px; height: 20px;">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input name="publish_day" value="{{date('d/m/Y', strtotime($bieu->publish_day))}}" type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask=""> {!! $errors->first('publish_day', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </table>
    <table style="width: 100%; border-spacing: 0px; border: 0px;">
        <tr>
            <td style="width: 200px">
            </td>
            <td align="left">
            </td>
            <td align="right" style="width: 200px">
                <i>Đơn vị tính: Nhiệm vụ</i>
            </td>
        </tr>
    </table>
    <div style="height: 5px; width: 100%">
    </div>

    <br />
    <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_Label1"><table id="ctl00_ContentPlaceHolder1_ctl00_ctl00_tbl2" cellspacing="0" cellpadding="0" border="0" style="background-color:White;width:100%;border-collapse:collapse;">
  <tr>
    <td class="Table_Header" rowspan="3" style="width:250px;"></td>
    <td class="Table_Header" rowspan="3" style="width:50px;">Mã số</td>
    <td class="Table_Header" rowspan="3" style="width:50px;">Tổng số</td>
    <td class="Table_Header" rowspan="3" style="width:100px;">Trong đó: Số nhiệm vụ KH&CN chủ nhiệm là nữ</td>
    <td class="Table_Header" colspan="4" rowspan="1">Tình trạng tiến hành</td>
</tr>
<tr>
    <td class="Table_Header" colspan="2" rowspan="1">Số đang tiến hành</td>
    <td class="Table_Header" colspan="1" rowspan="2">Số được nghiệm thu</td>
    <td class="Table_Header" colspan="1" rowspan="2">Số đã đưa vào ứng dụng</td>
</tr>
<tr>
    <td class="Table_Header" rowspan="1">Số phê duyệt mới trong năm</td>
    <td class="Table_Header" rowspan="1">Số chuyển tiếp từ năm trước</td>
</tr>
<tr>
    <td class="KH_ThuTuCot_Mau01" colspan="1">A</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">B</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">1</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">2</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">3</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">4</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">5</td>
    <td class="KH_ThuTuCot_Mau01" colspan="1">6</td>
</tr>
@php
$s = parse_str($bieu->total, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>1. Tổng số đề tài/đề án KH&CN</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1.1. Chia theo cấp đề tài/đề án</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->subject_lv1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp quốc gia</td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_lv2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp bộ</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_lv3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp tỉnh</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_lv4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp cơ sở</td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_lv5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp khác</td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1.2. Chia theo lĩnh vực nghiên cứu</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->subject_lab_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học tự nhiên</td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_lab_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học kỹ thuật và công nghệ</td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_lab_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học y dược</td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_lab_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học nông nghiệp</td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_lab_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học xã hội</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_lab_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học nhân văn</td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1.3. Chia theo nguồn cấp kinh phí</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->subject_money_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>- Ngân sách nhà nước</b><i><br>Trong đó:</i></td>
    <td class="TableCell_Center" colspan="1">13</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_money_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>&nbsp;&nbsp;       + Trung ương</i></td>
    <td class="TableCell_Center" colspan="1">14</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_money_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>&nbsp;&nbsp;       + Địa phương</i></td>
    <td class="TableCell_Center" colspan="1">15</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_money_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Doanh nghiệp</td>
    <td class="TableCell_Center" colspan="1">16</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_money_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Trường đại học</td>
    <td class="TableCell_Center" colspan="1">17</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_money_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nước ngoài</td>
    <td class="TableCell_Center" colspan="1">18</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->subject_money_7, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nguồn khác</td>
    <td class="TableCell_Center" colspan="1">19</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>

@php
$s = parse_str($bieu->total_job, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2. Tổng số dự án</b></td>
    <td class="TableCell_Center" colspan="1">20</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.1. Chia theo cấp dự án</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->total_job_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp quốc gia</td>
    <td class="TableCell_Center" colspan="1">21</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_job_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp bộ</td>
    <td class="TableCell_Center" colspan="1">22</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_job_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp tỉnh</td>
    <td class="TableCell_Center" colspan="1">23</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_job_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp cơ sở</td>
    <td class="TableCell_Center" colspan="1">24</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_job_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Cấp khác</td>
    <td class="TableCell_Center" colspan="1">25</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.2. Chia theo lĩnh vực nghiên cứu</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->total_lab_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học tự nhiên</td>
    <td class="TableCell_Center" colspan="1">26</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_lab_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học kỹ thuật và công nghệ</td>
    <td class="TableCell_Center" colspan="1">27</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_lab_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học y dược</td>
    <td class="TableCell_Center" colspan="1">28</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_lab_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học nông nghiệp</td>
    <td class="TableCell_Center" colspan="1">29</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_lab_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học xã hội</td>
    <td class="TableCell_Center" colspan="1">30</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_lab_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Khoa học nhân văn</td>
    <td class="TableCell_Center" colspan="1">31</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[2]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.3. Chia theo nguồn cấp kinh phí</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->total_money_1, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>- Ngân sách nhà nước</b><i><br>Trong đó:</i></td>
    <td class="TableCell_Center" colspan="1">32</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_money_2, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>&nbsp;&nbsp;        + Trung ương</i></td>
    <td class="TableCell_Center" colspan="1">33</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_money_3, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><i>&nbsp;&nbsp;        + Địa phương</i></td>
    <td class="TableCell_Center" colspan="1">34</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_money_4, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Doanh nghiệp</td>
    <td class="TableCell_Center" colspan="1">35</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_money_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Trường đại học</td>
    <td class="TableCell_Center" colspan="1">36</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_money_6, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nước ngoài</td>
    <td class="TableCell_Center" colspan="1">37</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
@php
$s = parse_str($bieu->total_money_7, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1">- Nguồn khác</td>
    <td class="TableCell_Center" colspan="1">38</td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;">{{$out[1]}}</td>
    <td class="TableCell_Center" colspan="1">X</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[3]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[4]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[5]}}</td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">{{$out[6]}}</td>
</tr>
</table></span>
    <br />
    <div style="height: 40px; text-align: center; width: 100%">

        <a href="/generate/donvi/bieu4/{{$bieu->id}}" name="ctl00$ContentPlaceHolder1$ctl00$ctl00$Button1" value="Xuất in" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_Button1" class="button">Xuất in</a>
    </div>

    </span>

</div>
@endsection @section('js')
<script src="/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script type="text/javascript">
    $(function() {
        //Initialize Select2 Elements
        $('.datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Money Euro
    });
</script>

@endsection