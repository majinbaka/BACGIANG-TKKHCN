@extends('layouts.main')

@section('content')
                        
            <div id="div_Body" style="z-index: 100; padding:20px 10px 10px 10px;  margin-top: 30px;">
           

<style type="text/css">
    .style1
    {
        width: 52px;
    }
    .cssKhongChon .TableCell, .cssKhongChon .TableCell_Center, .cssKhongChon .TableCell a:link 
    {
        color:#6b6b6b;
        
    }
    .cssKhongChon .TableCell a:active 
    {
        color:#ff0000;
        
    }
    .cssKhongChon,  .cssKhongChon .TableCell a:visited  
    {
        background-color:#fbfbfb;
        font-style:italic;
    }
    
</style>
<div class="liketab">
    <div class="itemHeader">
        <div class="active">
            <span>
                <img src="/image/kvr.gif" />
                BÁO CÁO THỐNG KÊ CƠ SỞ
            </span>
        </div>
    </div>
    <div class="groupItem">

        <fieldset title="Tìm phương tiện đo" style="margin-bottom: 10px;">
            <legend><strong class="ThemMoi_CapNhat">Tìm kiếm</strong></legend>
            <div id="ctl00_ContentPlaceHolder1_ctl00_panSearch"  style="width:100%;">
                <form role="form" method="POST" action="{{ url('/search') }}">
                {{ csrf_field() }}
                <table style="width: 100%">
                    <tr>
                        <td class="style1">
                            Năm:
                        </td>
                        <td>
                            <select name="year" onchange="this.form.submit()" id="ctl00_ContentPlaceHolder1_ctl00_ddlNam">
                            @foreach($years as $year)
								<option value="{{$year}}" @if($y == $year) selected @endif>{{$year}}</option>
							@endforeach
							</select>
                        </td>
                        <td style="width: 60px;">
                            Từ khóa:
                        </td>
                        <td style="width: 255px;">
                            <input name="s" type="text" id="ctl00_ContentPlaceHolder1_ctl00_txtKey" class="NomalTextBox" style="width:220px;" />                            
                        </td>
                        <td>
                            <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$btnSearch" value="Tìm kiếm" id="ctl00_ContentPlaceHolder1_ctl00_btnSearch" />
                            <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$btnReset" value="Bỏ lọc" id="ctl00_ContentPlaceHolder1_ctl00_btnReset" />
                        </td>
                    </tr>
                </table>
            </form>
</div>
        </fieldset>
        
        
        <table style="width: 100%;">
            <tr>
                <td align="left">
                    
                </td>
                <td align="right" style="width: 200px">
                </td>
            </tr>
        </table>
        <span id="ctl00_ContentPlaceHolder1_ctl00_lblBangDuLieu"><table id="ctl00_ContentPlaceHolder1_ctl00_tbl" cellspacing="0" cellpadding="0" border="0" style="background-color:White;width:100%;border-collapse:collapse;">
	<tr>
		<td class="Table_Header" rowspan="1" style="width:20px;">TT</td><td class="Table_Header" rowspan="1">Tên đơn vị</td><td class="Table_Header" rowspan="1">Địa chỉ</td><td class="Table_Header" rowspan="1" style="width:120px;">Ngày báo cáo</td>
	</tr>
	@php
	$i = 1;
	@endphp
	@foreach($users as $user)
	<tr class="cssKhongChon">
		<td class="TableCell_Center" colspan="1">{{$i++}}</td><td class="TableCell" colspan="1"><a href="/thongkecoso/donvi/{{$y}}/{{$user->id}}/1">{{$user->getEName($y)}}</a></td><td class="TableCell" colspan="1">{{$user->getAddressU($y)}}</td><td class="TableCell" colspan="1">{{$user->userLastReportedYear($y)}}</td>
	</tr>
	@endforeach
</table></span><div style="height: 15px;
            width: 100%">
        </div>
        <table style="width: 100%;">
            <tr>
                <td align="left">
                    
                </td>
                <td align="right" style="width: 200px">
                    &nbsp;Tổng số:
                    <span id="ctl00_ContentPlaceHolder1_ctl00_lblTong" style="font-weight: 700; color: #FF0000">{{$total}}</span>
                </td>
            </tr>
        </table>
    </div>
</div>
            </div>
         </div></div>   
@endsection