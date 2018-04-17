<?php /*a:1:{s:71:"D:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\index\index.html";i:1523758012;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>绿色的网上订餐系统模板html源码</title>

    <link href="%E7%BB%BF%E8%89%B2%E7%9A%84%E7%BD%91%E4%B8%8A%E8%AE%A2%E9%A4%90%E7%B3%BB%E7%BB%9F%E6%A8%A1%E6%9D%BFhtml%E6%BA%90%E7%A0%81_files/demo.css" rel="stylesheet" media="all">

    <!--[if IE]>

    <style type="text/css">
        li.remove_frame a {
            padding-top: 5px;
            background-position: 0px -3px;
        }
    </style>

    <![endif]-->
    <!--<a href="/static/"></a>-->
    <base href="/static/">
    <script src="js/hm.js"></script><script type="text/javascript" src="%E7%BB%BF%E8%89%B2%E7%9A%84%E7%BD%91%E4%B8%8A%E8%AE%A2%E9%A4%90%E7%B3%BB%E7%BB%9F%E6%A8%A1%E6%9D%BFhtml%E6%BA%90%E7%A0%81_files/jquery_002.js"></script>
    <script type="text/javascript" src="%E7%BB%BF%E8%89%B2%E7%9A%84%E7%BD%91%E4%B8%8A%E8%AE%A2%E9%A4%90%E7%B3%BB%E7%BB%9F%E6%A8%A1%E6%9D%BFhtml%E6%BA%90%E7%A0%81_files/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            function fixHeight() {
                var headerHeight = $("#switcher").height();
                $("#iframe").attr("height", $(window).height()-54+ "px");
            }
            $(window).resize(function () {
                fixHeight();
            }).resize();

            $('.icon-monitor').addClass('active');

            $(".icon-mobile-3").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('mobile-width-3');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-mobile-2").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('mobile-width-2');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-mobile-1").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('mobile-width');
                $('.icon-tablet,.icon-mobile,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-tablet").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('tablet-width');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-monitor").click(function () {
                $("#by").css("overflow-y", "hidden");
                $('#iframe-wrap').removeClass().addClass('full-width');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });
        });
    </script>

    <script type="text/javascript">
        function Responsive($a) {
            if ($a == true) $("#Device").css("opacity", "100");
            if ($a == false) $("#Device").css("opacity", "0");
            $('#iframe-wrap').removeClass().addClass('full-width');
            $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
            $(this).addClass('active');
            return false;
        };
    </script>

</head>
<body id="by">

<div id="switcher">
    <div class="center">
        <ul>
            <div id="Device">
                <li class="device-monitor"><a href="javascript:"><div class="icon-monitor active"></div></a></li>
                <li class="device-mobile"><a href="javascript:"><div class="icon-tablet"></div></a></li>
                <li class="device-mobile"><a href="javascript:"><div class="icon-mobile-1"></div></a></li>
                <li class="device-mobile-2"><a href="javascript:"><div class="icon-mobile-2"></div></a></li>
                <li class="device-mobile-3"><a href="javascript:"><div class="icon-mobile-3"></div></a></li>
            </div>
            <li class="top2">
                <a href="#">手机二维码预览</a>
                <div class="vm">
                    <div id="output"><canvas width="150" height="150"></canvas></div>
                    <p style="color:#808080;margin:10px 0 0 0;">扫一扫，直接在手机上打开</p>
                </div>
            </li>
            <li class="logoTop">
                <a href="http://www.17sucai.com/pins/18337.html">绿色的网上订餐系统模板html源码</a>            <script type="text/javascript">
                jQuery('#output').qrcode({width:150,height: 150,text: window.location.href});
            </script>
            </li><li class="remove_frame"><a href="http://www.17sucai.com/preview/183822/2016-05-31/diancan/index.html" title="移除框架"></a></li>
        </ul>
    </div>
</div>

<div id="iframe-wrap">
    <iframe id="iframe" src="http://www.17sucai.com/preview/183822/2016-05-31/diancan/index.html" width="100%" height="668px" frameborder="0"></iframe>
</div>

<!--百度流量统计代码-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?382f81c966395258f239157654081890";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>



</body></html>