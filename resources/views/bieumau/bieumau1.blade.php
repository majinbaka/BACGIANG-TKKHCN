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
                    <input type="submit" name="1" value="Biểu 01" id="ctl00_ContentPlaceHolder1_ctl00_Tab1" title="Biểu 01: Thông tin chung về đơn vị báo cáo" class="Clicked" style="border-style:None;" />
                    <input type="submit" name="2" value="Biểu 02" id="ctl00_ContentPlaceHolder1_ctl00_Tab2" title="Biểu 02: Nhân lực hoạt động khoa học và công nghệ" class="Initial" style="border-style:None;" />
                    <input type="submit" name="3" value="Biểu 03" id="ctl00_ContentPlaceHolder1_ctl00_Tab3" title="Biểu 03: Chi cho khoa học và công nghệ" class="Initial" style="border-style:None;" />
                    <input type="submit" name="4" value="Biểu 04" id="ctl00_ContentPlaceHolder1_ctl00_Tab4" title="Biểu 04: Nhiệm vụ khoa học và công nghệ" class="Initial" style="border-style:None;" />
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
        width: 250px;
        padding: 4px;
    }
    .style3
    {
        width: 163px;
        padding: 4px;
    }
    .style4
    {
        width: 79px;
    }
    .style5
    {
        width: 100%;
        padding: 4px;
    }
</style>

<div align="center">
    <div style="width: 95%; border: 1px solid #A0B4BD; background-color: #FFFFFF; padding: 10px;">
        <div style="display: block; position: inherit; float: right; padding: 10px 0px; height: 10px;">
            Biểu 01 CS-KHCN
        </div>
        <div style="font-family: Arial; font-size: 12pt;">
            <b>THÔNG TIN CHUNG VỀ ĐƠN VỊ BÁO CÁO</b>
            <br />
        </div>
        <table>
            <tr>
                <td style="vertical-align: top; text-align: left" class="style3">
                    Ngày gửi báo cáo
                </td>
                <td style="vertical-align: top; text-align: left">

<table id="tbl_control" cellSpacing="0" cellPadding="0" border="0" style="border-style:none; border-width:0px;">
  <tr>
    <td align="middle" style="border-style:none; border-width:0px; height: 20px;"><div class="input-group">
    <div class="input-group-addon">
      <i class="fa fa-calendar"></i>
    </div>
    <input name="publish_day" value="{{date('d/m/Y', strtotime($bieu->publish_day))}}"  type="text" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
    {!! $errors->first('publish_day', '<p class="help-block">:message</p>') !!}
  </div></td>
  </tr>
</table>
                </td>
            </tr>
            <tr>
                <td align="left" style="padding-right: 5px;" class="style3">
                    <strong>Đơn vị báo cáo</strong>
                </td>
                <td style="vertical-align: top; text-align: left">

                        <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblTenDonVi">{{$bieu->name}}</span>
    </td>
    </tr>
    <tr>
        <td align="left" style="padding-right: 5px" class="style3">
            <strong>Đơn vị nhận báo cáo</strong>
        </td>
        <td style="height: 24px; text-align: left">

            <ContentTemplate>
                <span class="check_dokhan" style="display:inline-block;width:550px;">
                    <input type="checkbox" @if($bieu->receiverHAS(1)) checked="checked" @endif/><label for="ctl00_ContentPlaceHolder1_ctl00_ctl00_chkDonViNhanBC_CucThongTin">[Cục Thông tin KH&CN Quốc gia]</label></span>
                <span class="check_dokhan" style="display:inline-block;width:550px;">
                    <input type="checkbox" @if($bieu->receiverHAS(2)) checked="checked" @endif/><label for="ctl00_ContentPlaceHolder1_ctl00_ctl00_chkDonViNhanBC_SoKHCN">[Sở KH&CN tỉnh, tp.trực thuộc TƯ]</label></span>

            </ContentTemplate>

        </td>
    </tr>
    </table>
    <hr />
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                Năm báo cáo: <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblNamBC">{{$bieu->year}}</span></td>

        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                1. Tên đơn vị báo cáo : <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblTenDonViBC">{{$bieu->reporter_element_name}}</span></td>

        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                2. Tên giao dịch viết tắt (nếu có):

                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblTenGiaoDich">{{$bieu->reporter_transfer_name}}</span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" valign="top" class="style5">
                3. Tên tiếng Anh (nếu có):

                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblTenTiengAnh">{{$bieu->reporter_eng_name}}</span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                4. Địa chỉ:

                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblDiaChi">{{$bieu->address}}</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tỉnh/TP:
                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblTinh">{{$bieu->city}}</span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                5. Thông tin liên lạc:

                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                        <td align="left" style="padding-right: 5px; " class="style4">
                            Điện thoại:
                        </td>
                        <td style="vertical-align: top; text-align: left; padding: 4px">
                            <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblDienThoai">{{$bieu->phone}}</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fax:
                            <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblFax">{{$bieu->fax}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="padding-right: 5px; " class="style4">
                            Email :
                        </td>
                        <td style="vertical-align: top; text-align: left">
                            <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblEmail">{{$bieu->email}}</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website :
                            <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblWebsite">{{$bieu->ưebsite}}</span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                6. Số quyết định thành lập :

                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblSoQDTL">{{$bieu->establish_code}}</span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                7.Ngày thành lập :

                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblNgayTL">{{date('d/m/Y', strtotime($bieu->establish_day))}}</span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                8. Cấp quyết định thành lập :

                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                        <td align="left" style="padding-right: 5px; width: 100px">
                            <table id="ctl00_ContentPlaceHolder1_ctl00_ctl00_rdolist_CapQuyetDinh" border="0">
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->establish_lever == 1) checked="checked" @endif/>
                                        <label>8.1. Quốc hội, Uỷ ban thường vụ Quốc hội</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->establish_lever == 2) checked="checked" @endif/>
                                        <label>8.2. Chính phủ</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->establish_lever == 3) checked="checked" @endif/>
                                        <label >8.3. Toà án nhân dân tối cao</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->establish_lever == 4) checked="checked" @endif/>
                                        <label>8.4. Viện kiểm sát nhân dân tối cao</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->establish_lever == 5) checked="checked" @endif/>
                                        <label>8.5. Thủ tướng Chỉnh phủ</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->establish_lever == 6) checked="checked" @endif/>
                                        <label>8.6. Bộ trưởng, Thủ trưởng cơ quan ngang Bộ, cơ quan thuộc Chính phủ</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->establish_lever == 7) checked="checked" @endif/>
                                        <label>8.7. Uỷ ban nhân dân tỉnh, thành phố trực thuộc Trung ương</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->establish_lever == 8) checked="checked" @endif/>
                                        <label>8.8. Tổ chức chính trị, tổ chức chính trị - xã hội, tổ chức xã hội, tổ chức xã hội - nghề nghiệp</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->establish_lever == 9) checked="checked" @endif/>
                                        <label>8.9. Doanh nghiệp, tổ chức khác, cá nhân</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                9. Mã số thuế :
                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblMaSoThue">{{$bieu->tax_number}}</span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                10. Giấy chứng nhận đăng ký hoạt động KHCN : &nbsp;&nbsp;Số {{$bieu->certificate_number}}
                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblSoGCN"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ngày cấp : {{date('d/m/Y', strtotime($bieu->certificate_date))}}
                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblNgayCap"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nơi cấp : {{$bieu->certificate_grant}}
                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblNoiCap"></span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                11. Cơ quan quản lý trực tiếp :

                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblCoQuanQuanLy">{{$bieu->manager}}</span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                12.Bộ/ngành,tỉnh/tp trực thuộc TƯ chủ quản :

                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblCoQuanChuQuan">{{$bieu->manager_city}}</span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                13. Loại hình của đơn vị/tổ chức :

                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                        <td align="left" style="padding-right: 5px; width: 100px">
                            <table id="" border="0">
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 1) checked="checked" @endif/>
                                        <label>13.1.Cơ quan quản lý nhà nước</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 2) checked="checked" @endif/>
                                        <label>13.2.Tổ chức nghiên cứu khoa học và phát triển công nghệ</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 3) checked="checked" @endif />
                                        <label>13.3.Cơ sở giáo dục đại học</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 4) checked="checked" @endif />
                                        <label>-----Đại học</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 5) checked="checked" @endif />
                                        <label>-----Học viện</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 6) checked="checked" @endif />
                                        <label>-----Cao đẳng</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 7) checked="checked" @endif />
                                        <label>13.4.Tổ chức dịch vụ KH&CN</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 8) checked="checked" @endif />
                                        <label>-----DV thông tin, thư viện</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 9) checked="checked" @endif />
                                        <label>-----DV bảo tàng cho KH&CN</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 10) checked="checked" @endif />
                                        <label>-----DV dịch thuật, biên tập, xuất bản cho KH&CN</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 11) checked="checked" @endif />
                                        <label>-----DV điều tra cơ bản định kỳ, thường xuyên</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 12) checked="checked" @endif />
                                        <label>-----DV thống kê, điều tra xã hội</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 13) checked="checked" @endif />
                                        <label>-----DV tiêu chuẩn đo lường chất lượng</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 14) checked="checked" @endif />
                                        <label>-----DV tư vấn về KH&CN</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 15) checked="checked" @endif />
                                        <label>-----DV sở hữu trí tuệ</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 16) checked="checked" @endif />
                                        <label>-----DV chuyển giao công nghệ</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 17) checked="checked" @endif />
                                        <label>-----DV KH&CN khác</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 18) checked="checked" @endif />
                                        <label>13.5.Đơn vị sự nghiệp khác</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 19) checked="checked" @endif />
                                        <label>13.6.Doanh nghiệp KH&CN</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_company == 20) checked="checked" @endif />
                                        <label >13.7.Doanh nghiệp</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                14. Loại hình kinh tế :

                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                        <td align="left" style="padding-right: 5px; width: 100px">
                            <table id="ctl00_ContentPlaceHolder1_ctl00_ctl00_rdolist_ThanhPhanKinhTe" border="0">
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_econom == 1) checked="checked" @endif/>
                                        <label for="ctl00_ContentPlaceHolder1_ctl00_ctl00_rdolist_ThanhPhanKinhTe_0">14.1. Nhà nước</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_econom == 2) checked="checked" @endif/>
                                        <label for="ctl00_ContentPlaceHolder1_ctl00_ctl00_rdolist_ThanhPhanKinhTe_1">14.2. Ngoài nhà nước</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->type_econom == 3) checked="checked" @endif/>
                                        <label for="ctl00_ContentPlaceHolder1_ctl00_ctl00_rdolist_ThanhPhanKinhTe_2">14.3. Có vốn đầu tư nước ngoài</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                15. Giá trị tài sản cố định(triệu đồng):

                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblGiaTriTaiSan">{{$bieu->money}}</span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left" class="style5">
                16. Số phòng thí nghiệm chuyên ngành về KH&CN:

                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblSoPhongTN">{{$bieu->lab_range}}</span>
            </td>
        </tr>
    </table>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="vertical-align: top; text-align: left">
                17. Trang thiết bị nghiên cứu có giá trị lớn(từ 1 tỷ đồng trở lên theo nguyên giá):
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left">
                <table cellspacing="0" cellpadding="3" rules="all" border="1" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_dgThietBi" style="font-family:Tahoma;font-size:10pt;width:96%;border-collapse:collapse;">
                    <tr style="background-color:White;font-weight:bold;font-style:normal;text-decoration:none;">
                        <td>Tên trang thiết bị</td>
                        <td>Mã/Model trang thiết bị</td>
                        <td>Nước sản xuất</td>
                        <td>Năm sản xuất</td>
                        <td>Năm đưa vào sử dụng</td>
                        <td>Nguyên giá(Tỷ đồng)</td>
                    </tr>
                    @foreach ($bieu->technologies as $t )
                    <tr>
                        <td>{{$t->name}}</td>
                        <td>{{$t->code}}</td>
                        <td>{{$t->country}}</td>
                        <td>{{$t->year}}</td>
                        <td>{{$t->use_year}}</td>
                        <td>{{$t->money}}</td>
                    </tr>
                    @endforeach
                </table>
                <br />
            </td>
        </tr>
    </table>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="vertical-align: top; width: 250px; text-align: left" class="style1">
                18. Lĩnh vực nghiên cứu chính
            </td>
            <td style="vertical-align: top; text-align: left">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                        <td align="left" style="padding-right: 5px; width: 100px">

                            <table id="ctl00_ContentPlaceHolder1_ctl00_ctl00_rdolist_LinhVuc" border="0">
                                <tr>
                                    <td>
                                        <input type="checkbox" @if($bieu->labNumber(1)) checked="checked" @endif />
                                        <label>1. Khoa học tự nhiên</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" @if($bieu->labNumber(2)) checked="checked" @endif />
                                        <label>2. Khoa học kỹ thuật và công nghệ</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" @if($bieu->labNumber(3)) checked="checked" @endif/>
                                        <label >3. Khoa học y dược</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" @if($bieu->labNumber(4)) checked="checked" @endif/>
                                        <label >4. Khoa học nông nghiệp</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" @if($bieu->labNumber(5)) checked="checked" @endif/>
                                        <label>5. Khoa học xã hội</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" @if($bieu->labNumber(6)) checked="checked" @endif/>
                                        <label >6. Khoa học nhân văn</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 250px; text-align: left" class="style1">
                Mô tả chi tiết
            </td>
            <td style="vertical-align: top; text-align: left">

                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblds"></span>
                <div id="dschon">
                    {{$bieu->lab_description}}
                </div>
                <span id="ctl00_ContentPlaceHolder1_ctl00_ctl00_lblChon"></span>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; width: 250px; text-align: left" class="style1">
                19. Thông tin về số liệu trong các biểu mẫu báo cáo
            </td>
            <td style="vertical-align: top; text-align: left">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                        <td align="left" style="padding-right: 5px; width: 100px">
                            <table id="ctl00_ContentPlaceHolder1_ctl00_ctl00_rdolist_ThongTin" border="0">
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->report_info == 1) checked="checked" @endif/>
                                        <label>Bao gồm số liệu của toàn bộ đơn vị/tổ chức, kể cả các đơn vị trực thuộc có tư cách pháp nhân;</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" @if ($bieu->report_info == 2) checked="checked" @endif/>
                                        <label>Chỉ bao gồm số liệu của các đơn vị trực thuộc không có tư cách pháp nhân. Không có bao gồm số liệu của các đơn vị trực thuộc có tư cách pháp nhân, có tài khoản và con dấu riêng (Những đơn vị này có báo cáo riêng)</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="vertical-align: top; text-align: left">
                20.Nếu có các đơn vị trực thuộc có tư cách pháp nhân, có tài khoản và con dấu riêng, đề nghị lập danh sách các đơn vị đó

            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left">
                <table cellspacing="0" cellpadding="3" rules="all" border="1" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_dgChild" style="font-family:Tahoma;font-size:10pt;width:96%;border-collapse:collapse;">
                    <tr style="background-color:White;font-weight:bold;font-style:normal;text-decoration:none;">
                        <td>STT</td>
                        <td>Tên đơn vị trực thuộc có tư cách pháp nhân</td>
                        <td>Họ và tên thủ trưởng</td>
                        <td>Địa chỉ, Điện thoại, Fax, Email</td>
                    </tr>
                    @php 
                    $i =0;
                    @endphp
                    @foreach ($bieu->elements as $e )
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$e->name}}</td>
                        <td>{{$e->leader}}</td>
                        <td>{{$e->address}}</td>
                    </tr>
                    @endforeach
                </table>
                <br />
            </td>
        </tr>
        <tr>
            <td align="center" style="vertical-align: top; text-align: left">
                <a href="/generate/donvi/bieu1/{{$bieu->id}}" name="ctl00$ContentPlaceHolder1$ctl00$ctl00$btnIn" value="Xuất in" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_btnIn" class="button">Xuất in</a>
            </td>
            <td style="vertical-align: top; text-align: left">

            </td>
        </tr>

        <br />

        <br />
    </table>
</div>
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