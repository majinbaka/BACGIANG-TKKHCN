<td valign="top" style="width: 280px; padding: 10px 10px 10px 10px;">

<div class="statistic">
<div class="boxLeft">
    <div class="boxTopL">
        <div class="left">
            <div class="right">
                <div class="box_center_estoreL">
                    <div style="display: block; position: inherit; float: left; margin-top: 5px;">
                        <img src="/image/member.png" border="0px" height="24px" />
                    </div>
                    <div style="display: block; margin-left: 10px; padding: 2px 0px 0px 20px;">
                        &nbsp;Thành viên
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="boxContent">
        <div style="height: 5px; width: 100%;">
        </div>
        <br />
        <form role="form" method="POST" action="{{ url('/thanhvien/login') }}">
    {{ csrf_field() }}
        <table align="center" border="0" cellpadding="2" cellspacing="2" width="96%">
            <tr>
                <td align="left" width="100">
                    Tên đăng nhập
                </td>
                <td align="right" style="padding-right:10px;">
                    <input name="username" type="text" id="ctl00_Member_Login1_txtUser" value="" style="height:14px;width:100px;" />
                    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
                </td>
            </tr>
            <tr>
                <td align="left" width="100">
                    Mật khẩu
                </td>
                <td align="right" style="padding-right:10px;">
                    <input name="password" type="password" id="ctl00_Member_Login1_txtPass" value="" style="height:14px;width:100px;" />
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                </td>
            </tr>
            <tr>
                <td align="left" width="100">
                    <input id="ctl00_Member_Login1_chkSave" type="checkbox" name="ctl00$Member_Login1$chkSave" />
                    <label for="ctl00_Member_Login1_chkSave">Ghi nhớ?</label>
                </td>
                <td align="right" style="padding-right:10px;">
                    <a id="ctl00_Member_Login1_HyperLink_Reg" href="/reg">Đăng ký</a> &nbsp;&nbsp;&nbsp;
                    <input type="submit" name="ctl00$Member_Login1$btnLogin" value="Đăng nhập" />
                </td>
            </tr>
        </table>
    </form>
    </div>
    <div class="boxBottom">
        <div class="left">
            <div class="right">
            </div>
        </div>
    </div>
    <div style="padding: 5px;">&nbsp;&nbsp;</div>
    <div class="statistic">
        <div class="boxLeft">
            <div class="boxTopL">
                <div class="left">
                    <div class="right">
                        <div class="box_center_estoreL">
                            Website liên kết
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="boxContent">
        <div style="margin: 10px">
        </div>
        <center>
            <select name="dslk" onchange="window.open(this.options[this.selectedIndex].value,'_blank')" size="1" style="border:1px solid #6E7554; font-family: Tahoma; height:25;width:90%; font-size:12px; color:#000000">
                <option value="0"> ------- Liên kết website -------</option>
                @foreach ($links as $link)
                <option value="{{$link->url}}">{{$link->title}}</option>
                @endforeach
            </select>
        </center>
        <div style="margin: 10px">
        </div>
    </div>
    <div class="boxBottom">
        <div class="left">
            <div class="right">
            </div>
        </div>
    </div>
    <div style="padding: 5px;">
        &nbsp;&nbsp;</div>

    <center>

        <a href="http://elib.dostquangtri.gov.vn/ThongKeKHCN/index.aspx" title="">
            <img src="/image/BCTKKHCNCS_LOGIN.jpg" width="280px">
        </a>
        <div style="padding: 3px;">
        </div>

        <a href="http://www.vista.gov.vn/UserPages/CosodulieuQuocgia/tabid/180/language/vi-VN/language/vi-VN/Default.aspx" title="">
            <img src="/image/tracunv.gif" width="280px">
        </a>
        <div style="padding: 3px;">
        </div>

    </center>
</td>