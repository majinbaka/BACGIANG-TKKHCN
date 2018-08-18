<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title></title>
<body style="background-color:#4f8faf">
    
    <div class="bangchinhAdmin" height="100%">
    
    <div class="bangchinhAdmin" style="height:20px;"></div>
    <div class="bangchinhAdmin" height="100%">
        <center>
            <div id="Panel1" style="width:480px;">
	
                
<style type="text/css">
    .style2
    {
        text-align: left;
    }
    .style3
    {
        text-align: left;
        height: 36px;
    }
    .style4
    {
        text-align: right;
        height: 36px;
        width: 200px;
    }
    .style5
    {
        text-align: right;
    }
    .style6
    {
        text-align: right;
        width: 200px;
    }
</style>
<form role="form" method="POST" action="{{ url('/admin/login') }}">
    {{ csrf_field() }}
<table border="0" cellpadding="0" cellspacing="0" id="table1">
    <tr>
        <td style="border: 1px solid #FFFFFF; height: 340px; width: 480px;"
            align="center">
            <table border="0" cellpadding="2" cellspacing="0" width="100%" style="padding-left: 10px;
                padding-right: 10px;">
                <tr>
                    <td class="style4">
                    </td>
                    <td class="style3">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td class="style6">
                        Tên đăng nhập:
                    </td>
                    <td class="style2">
                        <input id="username" type="text" class="textbox" name="username" value="{{ old('username') }}" style="width:132px;">
                    </td>
                </tr>
                <tr>
                    <td class="style6">
                        Mật khẩu:
                    </td>
                    <td class="style2">
                        <input name="password" type="password" id="password" class="textbox" style="width:132px;" />
                    </td>
                </tr>
                <tr>
                    <td class="style6">
                        &nbsp;
                    </td>
                    <td class="style2">
                        <input id="Login1_chkSave" type="checkbox" name="Login1$chkSave" /><label for="Login1_chkSave">Lưu cho lần sau</label>
                    </td>
                </tr>
                <tr>
                    <td class="style6">
                        &nbsp;
                    </td>
                    <td class="style2">
                        <input type="submit" value="Đồng ý đăng nhập" id="Login1_btnSignIn" class="button" />
                    </td>
                </tr>
                <tr>
                    <td class="style5" colspan="2">
                        &nbsp;</td>
                </tr>
            </table>
            <div>
                        <span id="Login1_lblError" style="color:#000;">
                            @if ($errors->has('username'))
                                <strong>{{ $errors->first('username') }}</strong>
                            @endif
                            <br>
                            @if ($errors->has('password'))
                                <strong>{{ $errors->first('password') }}</strong>
                            @endif
                        </span>
                    </div>
        </td>
    </tr>
    
</table>
</form>
            
</div>
        </center>
    </div>
</body>
</html>
