<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script src="/js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            resizeFull();
        });
        var resizeHandle;
        function resizeFull(event, obj) {
            var oWinSize = getWinSize();
            if (resizeHandle != 0) { clearTimeout(resizeHandle); }

            var div = document.getElementById("divlog");
            div.style.position = "absolute";
            div.style.marginTop = "164px";
            div.style.marginLeft = (oWinSize.width / 2 - 500) + "px";

            var divtb = document.getElementById("divtb");
            divtb.style.position = "absolute";
            divtb.style.marginTop = "94px";
            divtb.style.marginLeft = (oWinSize.width / 2 - 140) + "px";

        }
        function getWinSize() {
            var iWidth = 0, iHeight = 0;
            if (document.documentElement && document.documentElement.clientHeight) {
                iWidth = parseInt(document.documentElement.clientWidth);
                iHeight = parseInt(document.documentElement.clientHeight);

            } else if (document.body) {
                iWidth = parseInt(document.body.offsetWidth);
                iHeight = parseInt(document.body.offsetHeight);
            }
            return { width: iWidth, height: iHeight };
        }
    </script>
    <link rel="stylesheet" type="text/css" href="/css/sagscroller.css" />
    <script src="/js/sagscroller.js" type="text/javascript"></script>
    <style type="text/css">
    div#mysagscroller{
    padding:5px;
    }
    div#mysagscroller ul li img{
    border-width:0;
    display:block; /*this causes each image to be flush against each other*/
    }
    </style>
</head>
<body onresize="resizeFull();"   style="background-color:#ADDEFF; background-image:url('../image/bg_thongke_loginhome.jpg'); background-repeat:repeat-x; background-position:center -15px; margin:0px auto;">


    <div id ="divlog">
        
<style type="text/css">
    .textbox
    {
        border: 0px solid #0099CC;
        color: #336699;        
        padding: 2px 5px 2px 5px;
        background-color: #D0EEFD;
    }
</style>
<div style="width:300px; height: 324px; padding:91px 0px 0px 75px; background-image:url('../image/bg_login.png'); background-repeat:no-repeat; background-position:center 0; margin:0px auto;">
<form role="form" method="POST" action="{{ url('/thanhvien/login') }}">
    {{ csrf_field() }}    
    <table cellpadding="0" cellspacing="0" style="width: 260px; ">
        <tr>
            <td class="DangNhap_Text">
                <input name="username" type="text" id="login_home1_txtUser" class="textbox" style="height:20px;width:216px;" />
                    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
            </td>
        </tr>
        <tr>
            <td class="DangNhap_Text" style="padding-top: 34px;">
                <input name="password" type="password" id="login_home1_txtPass" class="textbox" style="height:20px;width:216px;" />
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
            </td>
        </tr>
        <tr>
            <td class="DangNhap_NutDangNhap">
            </td>
        </tr>
        <tr>
            <td align="left" style="padding-top: 14px;">
                <input type="image" name="login_home1$btnDangNhap" id="login_home1_btnDangNhap" src="/image/btnLogin.png" style="width:226px;border-width:0px;" />
            </td>
        </tr>

        <tr>
            <td align="left" style="padding-top: 54px;">
            
            </td>
        </tr>
    </table>
    </form>
</div>

        
    </div>
    <div id ="divtb">
        
<script language="javascript" type="text/javascript">
    var sagscroller2 = new sagscroller({
        id: 'mysagscroller',
        mode: 'auto',
        pause: 6000,
        animatespeed: 750, //<--no comma following last option

        navpanel: { show: false, cancelauto: true, background: '#2592DF' },
        loadingimg: { src: 'ajaxloading.gif', dimensions: [100, 15] }

    })
</script>
<style type="text/css">
    newsTitle
    {
        text-decoration: none;
        text-align: justify;
    }
    .newsTitle a
    {
        color: #FAFFBD;
        font-size: 10pt !important;
        font-weight: bold;
        font-family: Arial;
        text-decoration: none;
        text-align: justify;
        margin-bottom: 5px;
    }
    .newsTitle a:hover
    {
        color: #F7B620 !important;
        font-size: 10pt !important;
        font-family: Arial;
        text-decoration: none;
    }
    .newsTitleHome a
    {
        color: #003399;
        font-size: 10pt !important;
        font-family: Arial;
        text-align: justify;
        padding: 1px;
    }
    .newsTitleHome a:hover
    {
        color: #FA5F1D !important;
        font-size: 10pt !important;
        font-family: Arial;
        text-align: justify;
    }
    .newsShort
    {
        color: #F5F5F5;
        font-family: Arial;
        font-size: 10pt;
        text-align: justify;
    }
    
    .homelink
    {
        text-decoration: none;
        text-align: justify;
        text-transform: uppercase;
    }
    .homelink a
    {
        color: #FAFFBD;
        font-size: 10pt !important;
        font-weight: bold;
        font-family: Arial;
        text-decoration: none;
        text-align: justify;
        text-transform: uppercase;
    }
    .homelink a:hover
    {
        color: #F7B620 !important;
        font-size: 10pt !important;
        font-family: Arial;
        text-decoration: none;
        text-transform: uppercase;
    }
    .titleheader
    {
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        width: 600px;
        color: #FAFFBD;
        font-size: 14pt !important;
        font-family: Arial;
        display:block;
        position:absolute;
        padding-top: 10px;
    }
</style>
<div class="titleheader">
    TIN TỨC - SỰ KIỆN
</div>
<div style="width: 600px; height: 380px; padding: 50px 0px 0px 25px; background-image: url('../image/bg_thongbao_login.png');
    background-repeat: no-repeat; background-position: center 0; margin: 0px auto;">
    <div id="mysagscroller" class="sagscroller">
                <ul class="newslist">
                @foreach($info as $p)
                <li>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsBorder">
                        <tbody>
                            <tr>
                                <td valign="top" align="left" width="100%" colspan="2" class="newsTitle">
                                    <a href="/tintuc/{{$p->id}}">
                                        {{$p->title}}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" width="120px" style="padding: 0px;">
                                    <div>
                                        <div class="newsShort">
                                            {{$p->short_description}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>
                @endforeach
                </ul>
            
    </div>
</div>
<div class="homelink" style="margin-top: -30px; margin-left: 30px;">
    <a href='/thongkekhcn/default.aspx'>
        <img src='/image/home.gif' />&nbsp;&nbsp; <span class="TrangChu_text">
            Trang chủ</span></a>
</div>
        </div>
</body>
</html>
