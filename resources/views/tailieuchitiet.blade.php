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
                Văn bản </span>
        </div>
    </div>
    <!--  -->
    <div class="groupItem">
        
                <table border="0" cellpadding="3" cellspacing="3" width="100%" >
                    <tr>
                        <td style="vertical-align: top; width: 121px; text-align: left">
                            Cơ quan ban hành
                        </td>
                        <td style="vertical-align: top; text-align: left">
                            <span id="ctl00_ContentPlaceHolder1_ctl00_repeater2_ctl00_lblTenCQ" title="3">
                            {{$document->publisher}}
                        </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; width: 121px; text-align: left">
                            Loại văn bản
                        </td>
                        <td style="vertical-align: top; text-align: left">
                            <span id="ctl00_ContentPlaceHolder1_ctl00_repeater2_ctl00_lblTenLoai" title="1">
                            {{$document->category}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; width: 121px; text-align: left">
                            Số hiệu
                        </td>
                        <td style="vertical-align: top; text-align: left">
                            {{$document->code}}
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; width: 121px; text-align: left">
                            Ngày ban hành
                        </td>
                        <td style="vertical-align: top; text-align: left">
                            {{$document->publish_day}}
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; width: 121px; text-align: left">
                            Người ký
                        </td>
                        <td style="vertical-align: top; text-align: left">
                            {{$document->signer}}
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; width: 121px; text-align: left" valign="top">
                            Trích dẫn ngắn
                        </td>
                        <td style="vertical-align: top; text-align: left" valign="top">
                            {{$document->desciption}}
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; width: 121px; text-align: left">
                            File đính kèm
                        </td>
                        <td style="vertical-align: top; text-align: left">
                            @php
                                $files = $document->url;
                                $files = explode(";",$files);
                            @endphp
                            @foreach($files as $file)
                                <a href='/uploads/{{$file}}' >Tải về {{$file}} </a> <br />
                            @endforeach
                        </td>
                    </tr>
                </table>
                <p></p>
                <br />
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="left">
            <strong><span style="color: #800000; font-family: Verdana; font-size: 9pt; font-weight: bold;">
                Văn bản khác
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
        </ul>
    </div>
</div>
    @include("mains._rightbar")
    		</tr>
    	</table>
    </div>
@endsection