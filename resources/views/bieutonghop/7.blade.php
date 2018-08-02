@extends('layouts.main')

@section('content')
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
                    <div class="liketab">
                        <div class="itemHeader">
                            <div class="active">
                                <span>
                <img src="/image/kvr.gif" />
                BÁO CÁO THỐNG KÊ TỔNG HỢP
            </span>
                            </div>
                        </div>
                        <div class="groupItem">
                            <table style="width: 100%">

                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                <tr>
                                    <td align="left" valign="top">
                                        <div align="left">
                                            <form method="POST" action="/thongketonghop/{{$bieu->year}}">
                    {{csrf_field()}}
                <input type="hidden" name="year" value="{{$bieu->year}}">
                <input type="submit" name="1" value="Biểu 01" id="ctl00_ContentPlaceHolder1_ctl00_Tab1" title="Biểu 01/TKTH-KHCN-ĐP: Số tổ chức có hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="2" value="Biểu 02" id="ctl00_ContentPlaceHolder1_ctl00_Tab2" title="Biểu 02/TKTH-KHCN-ĐP: Nhân lực hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="3" value="Biểu 03" id="ctl00_ContentPlaceHolder1_ctl00_Tab3" title="Biểu 03/TKTH-KHCN-ĐP: Chi cho khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="4" value="Biểu 04" id="ctl00_ContentPlaceHolder1_ctl00_Tab4" title="Biểu 04/TKTH-KHCN-ĐP: Nhiệm vụ khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="5" value="Biểu 05" id="ctl00_ContentPlaceHolder1_ctl00_Tab5" title="Biểu 05/TKTH-KHCN-ĐP: Hợp tác quốc tế trong hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                <input type="submit" name="6" value="Biểu 06" id="ctl00_ContentPlaceHolder1_ctl00_Tab6" title="Biểu 06/TKTH-KHCN-ĐP: Giải thưởng khoa học và công nghệ" class="Initial" style="border-style:None;" />
                @if(in_array(7, $cans))
                <input type="submit" name="7" value="Biểu 07" id="ctl00_ContentPlaceHolder1_ctl00_Tab7" title="Biểu 07/TKTH-KHCN-ĐP: Hoạt động đánh giá, thẩm định, giám định, ứng dụng và phát triển công nghệ tại địa phương" class="Clicked" style="border-style:None;" />
                @endif
                @if(in_array(8, $cans))
                <input type="submit" name="8" value="Biểu 08" id="ctl00_ContentPlaceHolder1_ctl00_Tab8" title="Biểu 08/TKTH-KHCN-ĐP: Tiêu chuẩn đo lường chất lượng" class="Initial" style="border-style:None;" />
                @endif
                @if(in_array(9, $cans))
                <input type="submit" name="9" value="Biểu 09" id="ctl00_ContentPlaceHolder1_ctl00_Tab9" title="Biểu 09/TKTH-KHCN-ĐP: Năng lượng nguyên tử, an toàn bức xạ và hạt nhân" class="Initial" style="border-style:None;" />
                @endif
                @if(in_array(10, $cans))
                <input type="submit" name="10" value="Biểu 10" id="ctl00_ContentPlaceHolder1_ctl00_Tab10" title="Biểu 10/TKTH-KHCN-ĐP: Thanh tra khoa học và công nghệ" class="Initial" style="border-style:None;" />
                @endif
                @if(in_array(11, $cans))
                <input type="submit" name="11" value="Biểu 11" id="ctl00_ContentPlaceHolder1_ctl00_Tab11" title="Biểu 11/TKTH-KHCN-ĐP: Doanh nghiệp và thị trường khoa học và công nghệ" class="Initial" style="border-style:None;" />
                @endif
                </form>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <span id="ctl00_ContentPlaceHolder1_ctl00_lblBangDuLieu">
<style type="text/css">
    .style3
    {
        width: 215px;
    }
    .style4
    {
        width: 645px;
    }
</style>
<form role="form" method="POST" action="{{ url('/bieutonghop7/year') }}">
                {{ csrf_field() }}

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="padding: 0px 0px 10px 10px;" valign="top" align="left">
            <table style="width: 100%; border-spacing: 0px; border: 0px;">
                <tr>
                    <td style="width: 200px">
                        <b>Biểu 07/TKTH-KHCN-ĐP<br />
                        </b>26/2015/TT-BKHCN
                    </td>
                    <td align="left" class="style4">
                        <b>HOẠT ĐỘNG ĐÁNH GIÁ, THẨM ĐỊNH, GIÁM ĐỊNH, ỨNG DỤNG VÀ PHÁT TRIỂN CÔNG NGHỆ TẠI ĐỊA
                            PHƯƠNG</b>
                        <br />
                    </td>
                    <td align="right" style="width: 200px">
         <select name="year" onchange="this.form.submit();">
    @foreach($years as $y)
    <option @if($bieu->year == $y) selected="selected" @endif value="{{$y}}">{{$y}}</option>
    @endforeach
    </select>
                    </td>
                </tr>
            </table></form>
            <form role="form" method="POST" action="{{ url('/generate/tonghop/bieu/7/'.$bieu->id) }}">
                {{ csrf_field() }}
            <table>
                <tr>
                    <td align="left" style="padding-right: 5px;" class="style3">
                        <strong>Đơn vị báo cáo</strong>
                    </td>
                    <td style="vertical-align: top; text-align: left">
                        <select name="reporter" style="width:279px;">
    <option selected="selected" value="1">Sở KH&amp;CN Bắc Giang</option>

</select>
                    </td>
                </tr>
                <tr>
                    <td align="left" style="padding-right: 5px" class="style3">
                        <strong>Đơn vị nhận báo cáo</strong>
                    </td>
                    <td style="height: 24px; text-align: left">
                        <select name="receiver" style="width:279px;">
    <option value="1">Cục Th&#244;ng tin KH&amp;CN Quốc gia</option>
    <option value="2">Sở KH&amp;CN tỉnh,tp.trực thuộc TƯ</option>
    <option value="3">Bộ/ng&#224;nh chủ quản</option>

</select>
                    </td>
                </tr>
            </table>
            
            
                <br />
                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_Label1"><table id="ctl00_ContentPlaceHolder1_ctl00_ctl00_tblin" cellspacing="0" cellpadding="0" border="0" style="background-color:White;width:100%;border-collapse:collapse;">
	<tr>
		<td class="Table_Header" rowspan="1" style="width:500px;"></td><td class="Table_Header" rowspan="1" style="width:50px;">Mã số</td><td class="Table_Header" rowspan="1" style="width:150px;">Đơn vị tính</td><td class="Table_Header" rowspan="1">Tổng số </td>
	</tr><tr>
		<td class="KH_ThuTuCot_Mau01" colspan="1">A</td><td class="KH_ThuTuCot_Mau01" colspan="1">B</td><td class="KH_ThuTuCot_Mau01" colspan="1">C</td><td class="KH_ThuTuCot_Mau01" colspan="1">1</td>
	</tr><tr>
    <td class="TableCell" colspan="1"><b>1. SỐ DỰ ÁN ĐƯỢC THẨM ĐỊNH CƠ SỞ KHOA HỌC, THẨM ĐỊNH CÔNG NGHỆ</b></td>
    <td class="TableCell_Center" colspan="1">01</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_1}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1.1. Chia theo loại hình kinh tế</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Nhà nước</td>
    <td class="TableCell_Center" colspan="1">02</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_2}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Ngoài nhà nước</td>
    <td class="TableCell_Center" colspan="1">03</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_3}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Có vốn đầu tư nước ngoài</td>
    <td class="TableCell_Center" colspan="1">04</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_4}}
    </td>
</tr>
@php
$s = parse_str($bieu->field_5, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>1.2. Chia theo ngành kinh tế</b></td>
    <td class="TableCell_Center" colspan="1">05</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="Table_Header" colspan="1">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"> - A. Nông nghiệp, lâm nghiệp và thủy sản</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[1]}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"> - B. Khai khoáng</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[2]}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"> - C. Công nghiệp chế biến, chế tạo</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[3]}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"> - E. Cung cấp nước; hoạt động quản lý và xử lý rác thải, nước thải</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[4]}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"> - F. Xây dựng</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" rowspan="1" style="width:50px;"><i>Dự án</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:30px;">
      {{$out[5]}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>1.3. Chia theo nước đầu tư</b></td>
    <td class="TableCell_Center" colspan="1">06</td>
    <td class="TableCell_Center" colspan="1"><i>Dự án</i></td>
    <td class="Table_Header" colspan="1">
      {{$bieu->field_6}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2. SỐ HỢP ĐỒNG CHUYỂN GIAO CÔNG NGHỆ ĐƯỢC ĐĂNG KÝ VÀ CẤP PHÉP</b></td>
    <td class="TableCell_Center" colspan="1">07</td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1">
      {{$bieu->field_7}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.1. Chia theo loại hình kinh tế</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Nhà nước</td>
    <td class="TableCell_Center" colspan="1">08</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_8}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Ngoài nhà nước</td>
    <td class="TableCell_Center" colspan="1">09</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_9}}   </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Có vốn đầu tư nước ngoài</td>
    <td class="TableCell_Center" colspan="1">10</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_10}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.2. Chia theo hình thức chuyển giao</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Hợp đồng chuyển giao công nghệ độc lập</td>
    <td class="TableCell_Center" colspan="1">11</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_11}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Phần chuyển giao công nghệ trong dự án hoặc hợp đồng</td>
    <td class="TableCell_Center" colspan="1">12</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_12}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Hình thức khác</td>
    <td class="TableCell_Center" colspan="1">13</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_13}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.3. Chia theo đối tác chuyển giao</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Chuyển giao công nghệ từ nước ngoài vào Việt Nam</td>
    <td class="TableCell_Center" colspan="1">14</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_14}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Chuyển giao công nghệ giữa các doanh nghiệp trong nước </td>
    <td class="TableCell_Center" colspan="1">15</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_15}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Chuyển giao công nghệ giữa viện nghiên cứu, các trường đại học và doanh nghiệp</td>
    <td class="TableCell_Center" colspan="1">16</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_16}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.4. Chia theo phương thức chuyển giao</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Chuyển giao tài liệu về công nghệ</td>
    <td class="TableCell_Center" colspan="1">17</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_17}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Đào tạo cho bên nhận công nghệ nắm vững và làm chủ công nghệ theo thời hạn quy định trong hợp đồng chuyển giao công nghệ</td>
    <td class="TableCell_Center" colspan="1">18</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_18}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Cử chuyên gia tư vấn kỹ thuật cho bên nhận công nghệ đưa công nghệ vào sản xuất</td>
    <td class="TableCell_Center" colspan="1">19</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_19}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Phương thức chuyển giao khác</td>
    <td class="TableCell_Center" colspan="1">20</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_20}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.5. Chia theo Ngành/lĩnh vực, sản phẩm sản xuất do sử dụng công nghệ được chuyển giao (Chia theo ngành kinh tế)</b></td>
    <td class="Table_Header" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>2.6. Chia theo nước đầu tư</b></td>
    <td class="TableCell" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
    <td class="Table_Header" colspan="1"></td>
</tr>
@php
$s = parse_str($bieu->field_21, $out);
@endphp
<tr>
    <td class="TableCell" colspan="1"><b>2.7. Chi phí thanh toán cho chuyển giao công nghệ</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell_Center" colspan="1"><i>Triệu đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$out[1]}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>3. SỐ HỢP ĐỒNG TƯ VẪN CHUYỂN GIAO CÔNG NGHỆ</b></td>
    <td class="TableCell_Center" colspan="1">21</td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1">
      {{$out[2]}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>3.1. Chia theo loại hình kinh tế</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1">
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Nhà nước</td>
    <td class="TableCell_Center" colspan="1">22</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_22}}
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Ngoài nhà nước</td>
    <td class="TableCell_Center" colspan="1">23</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_23}}
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Có vốn đầu tư nước ngoài</td>
    <td class="TableCell_Center" colspan="1">24</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_24}}
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>3.2. Chia theo đối tác tư vấn</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Đơn vị tư vấn trong nước</td>
    <td class="TableCell_Center" colspan="1">25</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_25}}
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Đơn vị tư vấn nước ngoài</td>
    <td class="TableCell_Center" colspan="1">26</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_26}}
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>3.3. Chia theo nguồn gốc kinh phí</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Kinh phí nhà nước</td>
    <td class="TableCell_Center" colspan="1">27</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_27}}
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Kinh phí tư nhân</td>
    <td class="TableCell_Center" colspan="1">28</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_28}}
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Kinh phí có nguồn gốc nước ngoài</td>
    <td class="TableCell_Center" colspan="1">29</td>
    <td class="TableCell_Center" colspan="1"><i>Hợp đồng</i></td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_29}}
      
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1"><b>4. SỐ TỔ CHỨC TƯ VẤN CHUYỂN GIAO CÔNG NGHỆ</b></td>
    <td class="TableCell_Center" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
    <td class="TableCell" colspan="1"></td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Viện, trung tâm nghiên cứu</td>
    <td class="TableCell_Center" colspan="1">30</td>
    <td class="TableCell_Center" colspan="1">Tổ chức</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_30}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Cơ sở giáo dục đại học</td>
    <td class="TableCell_Center" colspan="1">31</td>
    <td class="TableCell_Center" colspan="1">Tổ chức</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_31}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Tổ chức dịch vụ khoa học và công nghệ</td>
    <td class="TableCell_Center" colspan="1">32</td>
    <td class="TableCell_Center" colspan="1">Tổ chức</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_32}}
    </td>
</tr>
<tr>
    <td class="TableCell" colspan="1">- Doanh nghiệp</td>
    <td class="TableCell_Center" colspan="1">33</td>
    <td class="TableCell_Center" colspan="1">Tổ chức</td>
    <td class="TableCell_Center" rowspan="1" style="width:40px;">
      {{$bieu->field_33}}
    </td>
</tr>
</table></span>
                            <br />
                            <div style="height: 5px;
                width: 100%">
                            </div>

                            <div style="height: 25px; text-align:center; width: 100%">
                <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$ctl00$btnIn" value="Xuất in" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_btnIn" class="button">
                            </div>
                            </td>
                            </tr>
                            </table>
                            </span>
                        </div>
                    </div>

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