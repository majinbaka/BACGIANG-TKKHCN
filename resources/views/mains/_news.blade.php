<div class="liketab">
    <div class="itemHeader">
        <div class="active">
            <span>
                <img src="/image/kvr.gif" />
                TIN TỨC - SỰ KIỆN
            </span>
        </div>
    </div>
    <div class="groupItem">
        <table id="ctl00_ContentPlaceHolder1_Tinnoibat1_dlSanPhamMoi" cellspacing="10" cellpadding="10" border="0" style="width:100%;">
            @foreach($info as $v)
            <tr>
                <td align="left" valign="top" style="width:50%;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsBorder">
                        <tbody>
                            <tr>
                                <td valign="top" align="left" width="100%" colspan="2" class="newsTitle">
                                    <a href="/tintuc/{{$v->id}}">
                                        {{$v->title}}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" width="120px" style="padding:0px;">

                                    <input name="ctl00$ContentPlaceHolder1$Tinnoibat1$dlSanPhamMoi$ctl00$HiddenImageName" type="hidden" id="ctl00_ContentPlaceHolder1_Tinnoibat1_dlSanPhamMoi_ctl00_HiddenImageName" />

                                    <div>
                                        <div class="newsShort">
                                            {{$v->short_description}}
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td valign="top" align="left" width="100%" colspan="2">

                                    <div style="text-align: right;">
                                        <a href="/tintuc/{{$v->id}}">
                                            <img alt="" src="/image/chitiet.gif" />
                                        </a>
                                    </div>
                                    <div style="height: 10px;">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            @endforeach
        </table>
        <table style="width: 100%;">
            <tr>

                <td align="left">
                    <span id="ctl00_ContentPlaceHolder1_Tinnoibat1_lblPhanTrang"><table border="0">
                                <tr>
@include('pagination.default', ['paginator' => $info])
                                </tr>
                            </table>

                        </span>
                </td>
                <td align="right" style="width: 200px">
                    &nbsp;
                </td>
            </tr>
        </table>
    </div>
</div>