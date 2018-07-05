<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Thống kê Khoa học công nghệ</title>
    <link href="/css/Default.css" rel="stylesheet" type="text/css" />
    <link href="/css/map.css" rel="stylesheet" type="text/css" />
    <link href="/css/tableframeimg.css" rel="stylesheet" type="text/css" />
    <link href="/css/StyleSheet.css" rel="stylesheet" type="text/css" />
    <script src="/js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <link href="/css/jqueryslidemenu.css" rel="stylesheet" type="text/css" />
    <script src="/js/jqueryslidemenu.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/date.js"></script>
    <!--Hightslide-->
    <script type="text/javascript" src="/js/highslide-with-html.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/highslide.css" />
    <!--End Hightslide-->
</head>
<body>
    <div align="center">
        <div align="center" class="KhungNgoai" style="margin-bottom:32px;">
            @include("layouts._header")
            @yield('content')
            @include("layouts._footer")
        </div>
    </div>
    @section('js')
@show
</body>
</html>