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
    
    <table cellpadding="0" cellspacing="0" style="width: 260px; ">
        <tr>
            <td class="DangNhap_Text">
                <input name="login_home1$txtUser" type="text" id="login_home1_txtUser" class="textbox" style="height:20px;width:216px;" />
            </td>
        </tr>
        <tr>
            <td class="DangNhap_Text" style="padding-top: 34px;">
                <input name="login_home1$txtPass" type="password" id="login_home1_txtPass" class="textbox" style="height:20px;width:216px;" />
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
    
    homelink
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
            
                <li>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsBorder">
                        <tbody>
                            <tr>
                                <td valign="top" align="left" width="100%" colspan="2" class="newsTitle">
                                    <a href="/thongkekhcn/News.aspx?opt=detail&id=21">
                                        Trên 500 đại biểu trong nước và quốc tế sẽ tham dự “Những ngày Khoa học, Công nghệ và Đổi mới sáng tạo ASEAN-EU 2016”</a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" width="120px" style="padding: 0px;">
                                    <div>
                                        <div class="newsShort">
                                            Theo thống kê của Ban Tổ chức, sự kiện “Những ngày Khoa học, Công nghệ và Đổi mới sáng tạo ASEAN-EU 2016” sẽ có trên 500 đại biểu trong nước và quốc tế tham dự, trong đó có hơn 300 đại biểu quốc tế đến từ gần 40 quốc gia trên thế giới.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            
                <li>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsBorder">
                        <tbody>
                            <tr>
                                <td valign="top" align="left" width="100%" colspan="2" class="newsTitle">
                                    <a href="/thongkekhcn/News.aspx?opt=detail&id=20">
                                        Một số điểm mới của Luật Thống kê năm 2015</a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" width="120px" style="padding: 0px;">
                                    <div>
                                        <div class="newsShort">
                                            Ngày 23/11/2015, Luật thống kê số 89/2015/QH13 đã được Quốc hội nước Cộng hòa xã hội chủ nghĩa Việt Nam thông qua (thay thế Luật thống kê 2003). Luật thống kê năm 2015 gồm 9 chương, 72 điều và 1 phụ lục Danh mục chỉ tiêu thống kê quốc gia (tăng 1 chương, 30 điều so với Luật năm 2003 gồm 8 chương, 42 điều). Luật quy định rõ Danh mục chỉ tiêu về khoa học và công nghệ trong Danh mục Hệ thống chỉ tiêu quốc gia.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            
                <li>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsBorder">
                        <tbody>
                            <tr>
                                <td valign="top" align="left" width="100%" colspan="2" class="newsTitle">
                                    <a href="/thongkekhcn/News.aspx?opt=detail&id=15">
                                        LỄ TRAO KỶ NIỆM CHƯƠNG “VÌ SỰ NGHIỆP THỐNG KÊ VIỆT NAM” CHO ÔNG ARTHUR ERKEN, TRƯỞNG ĐẠI DIỆN QUỸ DÂN SỐ LIÊN HỢP QUỐC TẠI VIỆT NAM</a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" width="120px" style="padding: 0px;">
                                    <div>
                                        <div class="newsShort">
                                            Tại buổi Lễ, ông Nguyễn Bích Lâm, Tổng cục trưởng TCTK, đã chúc mừng và đánh giá cao những đóng góp quan trọng của ông Arthur Erken trong việc củng cố và tăng cường mối quan hệ giữa Quỹ dân số LHQ với Chính phủ Việt Nam, đồng thời cảm ơn những hỗ trợ của ông dành cho ngành Thống kê Việt Nam trong thời gian qua và hy vọng ông Arthur Erken sẽ tiếp tục đóng góp cho sự phát triển của mối quan hệ hợp tác giữa UNFPA và Việt Nam.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            
                <li>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsBorder">
                        <tbody>
                            <tr>
                                <td valign="top" align="left" width="100%" colspan="2" class="newsTitle">
                                    <a href="/thongkekhcn/News.aspx?opt=detail&id=16">
                                        HỌP BÁO CÔNG BỐ SỐ LIỆU THỐNG KÊ KINH TẾ - XÃ HỘI 6 THÁNG ĐẦU NĂM 2015</a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" width="120px" style="padding: 0px;">
                                    <div>
                                        <div class="newsShort">
                                            Tham dự buổi Họp báo có các Lãnh đạo TCTK; đại diện lãnh đạo các đơn vị thuộc cơ quan TCTK; đại diện một số bộ, ngành và đại diện các cơ quan báo chí, truyền hình, thông tấn trung ương và địa phương tới đưa tin.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            
                <li>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsBorder">
                        <tbody>
                            <tr>
                                <td valign="top" align="left" width="100%" colspan="2" class="newsTitle">
                                    <a href="/thongkekhcn/News.aspx?opt=detail&id=17">
                                        HỘI NGHỊ TẬP HUẤN NGHIỆP VỤ THỐNG KÊ GIÁ 2015</a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" width="120px" style="padding: 0px;">
                                    <div>
                                        <div class="newsShort">
                                            Hội nghị tập trung vào các nội dung chính liên quan tới nghiệp vụ điều tra giá gồm: (1) Điều tra và báo cáo thống kê giá tiêu dùng thời kỳ 2014-2019; (2) Kỹ năng điều tra giá tiêu dùng và xử lý các trường hợp đặc biệt; (3) Điều tra giá nguyên, nhiên, vật liệu (NNVL) thời kỳ 2014-2019, những điểm cải tiến so thời kỳ trước; (4) Hướng dẫn thực hành Phương án Điều tra giá NNVL; (5) Hướng dẫn sử dụng phần mềm Giá tiêu dùng thời kỳ 2014-2019; (6) Hướng dẫn sử dụng phần mềm Giá NNVL thời kỳ 2014-2019; (7) Khảo sát các danh mục thời kỳ 2015- 2020.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            
                <li>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsBorder">
                        <tbody>
                            <tr>
                                <td valign="top" align="left" width="100%" colspan="2" class="newsTitle">
                                    <a href="/thongkekhcn/News.aspx?opt=detail&id=18">
                                        HỘI THẢO ĐIỀU TRA VỐN ĐẦU TƯ PHÁT TRIỂN KHỐI BỘ, NGÀNH NĂM 2015</a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" width="120px" style="padding: 0px;">
                                    <div>
                                        <div class="newsShort">
                                            Mục đích của Điều tra vốn đầu tư phát triển năm 2015 nhằm thu thập thông tin về tình hình thực hiện vốn đầu tư phát triển năm 2014, năng lực mới tăng của dự án/công trình hoàn thành trong năm 2014 và năng lực sản xuất chủ yếu hiện có của các thành phần kinh tế trên phạm vi cả nước, phục vụ việc đánh giá toàn diện thực trạng đầu tư phát triển toàn xã hội, cung cấp số liệu quan trọng để các cơ quan Đảng, Nhà nước, các ngành, các cấp xây dựng kế hoạch huy động vốn và định hướng chính sách đầu tư, lập quy hoạch tổng thể phát triển kinh tế - xã hội trung hạn và hàng năm trên phạm vi cả nước, vùng lãnh thổ và từng tỉnh , thành phố trực thuộc Trung ương.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            
                <li>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="newsBorder">
                        <tbody>
                            <tr>
                                <td valign="top" align="left" width="100%" colspan="2" class="newsTitle">
                                    <a href="/thongkekhcn/News.aspx?opt=detail&id=19">
                                        HỘI NGHỊ TRIỂN KHAI KẾ HOẠCH CÔNG TÁC NĂM 2015 CỦA TỔNG CỤC THỐNG KÊ</a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" align="left" width="120px" style="padding: 0px;">
                                    <div>
                                        <div class="newsShort">
                                            Khai mạc Hội nghị, ông Nguyễn Bích Lâm, Tổng cục trưởng TCTK trình bày Báo cáo tổng kết công tác năm 2014 và phương hướng nhiệm vụ công tác năm 2015. Công tác thống kê trong năm 2014 được thực hiện trong bối cảnh đất nước có nhiều thuận lợi và khó khăn đan xen, ngành Thống kê triển khai kế hoạch công tác với nhiều nhiệm vụ lớn, một mặt phải bảo đảm tốt nhất thông tin thống kê phục vụ kịp thời sự lãnh đạo, chỉ đạo, điều hành, đánh giá, dự báo tình hình và xây dựng kế hoạch, chính sách phát triển kinh tế - xã hội của các cơ quan Đảng và Nhà nước ở Trung ương và địa phương; mặt khác triển khai các công việc có tính chất quan trọng, lâu dài như: hoàn thiện môi trường pháp lý cho hoạt động thống kê, cải tiến phương pháp chế độ thống kê, công tác tổ chức, cán bộ…
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            
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
