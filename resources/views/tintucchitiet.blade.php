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
                TIN TỨC - SỰ KIỆN </span>
        </div>
    </div>
    <!--  -->
<div class="groupItem">
 
            <table id="ctl00_ContentPlaceHolder1_ctl00_dlSanPhamMoi" cellspacing="0" border="0" style="width:100%;border-collapse:collapse;">
    <tr>
        <td align="left" valign="top" style="width:100%;">
        <div style="color:blue; font-size:11pt; font-weight:normal; margin:0px 5px 20px 5px;">
        Trang chủ&nbsp;<img src='/image/noicon2.gif' />
Tin tức&nbsp;<img src='/image/noicon2.gif' />
Tin thống kê KHCN
        
        </div>
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsBorder">
                <tbody>
                    <tr>
                        <td valign="top" align="left" width="100%" colspan="2">
                           <strong>{{$post->title}}</strong>
                           <br />
                           <div style="color:#666; font-size:11px; font-weight:normal; margin:10px 0px 20px 0px;">
                                <span> Đăng ngày: ({{$post->created_at}}); 295 lần đọc</span>
                           </div>
                           
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" align="center" width="100%" class="newsContent">
                            <input name="ctl00$ContentPlaceHolder1$ctl00$dlSanPhamMoi$ctl00$HiddenImageName" type="hidden" id="ctl00_ContentPlaceHolder1_ctl00_dlSanPhamMoi_ctl00_HiddenImageName" />
                            <center>
                                
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" align="left" width="100%" colspan="2" class="newsContent" >
                            {!!$post->content!!}
                    </td>
                    </tr>
                </tbody>
                </table>
                
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="left">
            <strong><span style="color: #800000; font-family: Verdana; font-size: 9pt; font-weight: bold;">
                Tin khác
            </span></strong>
        </td>
        <td align="right" style="width: 70px">
            <img align="left" border="0" height="23" onclick="window.history.go(-1)" onmouseover="this.style.cursor='hand'"
                src="/image/back.gif" width="66" />
        </td>
    </tr>
</table>
<div class="Dot_line">
</div>

        <ul class="newslist">
    @foreach($lasts as $post)
        <li><a href="/tintuc/{{$post->id}}">
            {{$post->title}}
            <span style="color: #999;">({{date_format($post->created_at,'d-m-Y')}})</span></a></li>
    @endforeach
        </ul>
    

        </td>
    </tr>
</table>
        </div>
</div>
    @include("mains._rightbar")
    		</tr>
    	</table>
    </div>
@endsection