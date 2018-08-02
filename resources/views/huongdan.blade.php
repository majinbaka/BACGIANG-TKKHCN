@extends('layouts.main')

@section('content')            
            <div id="div_Body" style="z-index: 100; padding:10px 10px 10px 10px; margin-top: 30px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td valign="top" style="padding: 10px 10px 10px 10px;">
                   
<div class="liketab">
    <div class="itemHeader">
        <div class="active">
            <span>
                <img src="/image/kvr.gif" />
                Thống kê khoa học công nghệ
            </span>
        </div>
    </div>
    <div class="groupItem">
    <table id="ctl00_ContentPlaceHolder1_Article1_DataList2" cellspacing="0" border="0" style="width:100%;border-collapse:collapse;">
	<tr>
		<td class="khung01" align="left">
            <div style="height: 5px;">
            </div>
            <input name="ctl00$ContentPlaceHolder1$Article1$DataList2$ctl00$HiddenImageName2" type="hidden" id="ctl00_ContentPlaceHolder1_Article1_DataList2_ctl00_HiddenImageName2" />
@if(isset($info))
    @if($info->content != "")
        {!! $info->content !!}
    @else
        Đang cập nhật nội dung…
    @endif
@else
    Đang cập nhật nội dung…
@endif
            <div style="height: 15px;">
            </div>
            
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="left">
            <strong><span style="color: #800000; font-family: Verdana; font-size: 9pt; font-weight: bold;">
                Các bài viết khác
            </span></strong>
        </td>
        <td align="right" style="width: 70px">
            <img align="left" border="0" height="23" onclick="window.history.go(-1)" onmouseover="this.style.cursor='hand'"
                src="/image/back.gif" width="66" />
        </td>
    </tr>
</table>
<hr />
<div style="height: 15px">
</div>

<div style="height: 15px">
</div>
        </td>
	</tr>
</table>
    
    
    
    </div>
</div>

            </div>
    @include("mains._rightbar")
            </tr>
        </table>
    </div>
@endsection