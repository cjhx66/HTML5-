<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>v7九间堂</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <link rel="icon" href="/webpage/chphone/cms/public/images/logoh.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="/webpage/chphone/cms/public/images/logoh.png" type="image/x-icon"/>
    <link rel="stylesheet" href="/webpage/chphone/cms/public/css/contact.css"/>
    <style>

        * {
            padding: 0;
            margin: 0;
        }
        body{
            width:100%;
            overflow-x: hidden;
        }
        .content{
            width: 640px;
            margin:0 auto;
            position: relative;
        }

        .main {
            position: relative;
        }
        .baoming {
            background: none;
            position: absolute;
            /*left: 50%;*/
            /*margin-left: -290px;*/
            /*left: 53px;*/
            margin-left: 30px;
            margin-top: -600px;
            overflow: hidden;
            width: 580px;
        }

        .bms {
            overflow: hidden;
            /*width: 535px;*/
        }

        .baoming .bms p {
            font-size: 28px;
            color: #f7b628;
            padding-bottom: 15px;
        }

        .form input {
            display: block;
            width: 580px;
            height: 78px;
            /*background: #a5dae5;*/
            /*border: 3px solid #316898;*/
            border: none;
            font-size: 28px;
            outline: none;
            border-radius: 10px;
            text-indent: 1em;
            /*padding-left: 10px;*/
        }

        .form input.btn {
            width: 580px;
            height: 78px;
            /*border: 3px solid #316898;*/
            border: none;
            display: block;
            margin-top: 45px;
            background: url("/webpage/chphone/cms/public/images/btn.png") no-repeat;
        }

        .main_1 {
            position: absolute;
            margin-top: -1100px;
        }

        .foot {
            text-align: center;
            height: 88px;
            /*background: url("/webpage/chphone/cms/public/images/db.png");*/
            /*background: url("/webpage/chphone/cms/public/images/tel_1.png") no-repeat;*/
            background: #e83636;
            color: #fff;
            /*width: 100%;*/
            width:640px;
            position: fixed;
            bottom: 0;
            /*left: 0;*/
        }

        .foot a {
            display: inline-block;
            color: #fff;
            font-size: 34px;
            width: 100%;
            height: 100%;
            text-decoration: none;
            padding-top: 18px;
        }

        .foot img {
            width: 50px;
            height: 50px;
            margin-right: 5px;
            vertical-align: middle;
        }

        .dialog {
            /*width: 100%;*/
            height: 100%;
            width: 640px;
            display: none;
            background: rgba(0, 0, 0, 0.7);
            position: fixed;
            margin: 0 auto;
            /*left: 0;*/
            top: 0;
            z-index: 998;
            /*background: rgb(0, 0, 0); !*The Fallback color,这里也可以使用一张图片来代替*!*/
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType=1,startColorstr=#70000000,endColorstr=#70000000)"; /*Filter for IE8 */
            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=1, startColorstr=#70000000, endColorstr=#70000000); /*Filter for older IEs */
        }

        .tol {
            /*display: none;*/
            width: 400px;
            height: 200px;
            color: #000;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -200px;
            /*transform: translateX(-45%);*/
            margin-left: -200px;
            z-index: 999;
            background-color: #fff;
            font-size: 28px;
            text-align: center;
            font-weight: bold;
            border-radius: 30px 30px;
        }

        .dialog .tol p:first-child {
            margin-top: 40px;
        }

        .dialog .tol p:last-child {
            font-size: 24px;
            background: orange;
            /*background: url("/webpage/chphone/cms/public/images/db.png");*/
            width: 70%;
            height: 45px;
            line-height: 45px;
            margin: 40px auto 0;
            border-radius: 10px;
            color: white;
            cursor: pointer;
        }

        .fancybox-lock-test {
            overflow-y: hidden !important;
        }

        .middle_box {
            position: fixed;
            /*margin-top: -235px;*/
            margin-left:560px;
            /*right: 0;*/
            bottom: 350px;
            width: 80px;
            height: 84px;
            z-index: 15;
        }

        .middle_box a {
            text-decoration: none;
        }

        .middle_box img {
            position: absolute;
            width: 80px;
            height: 84px;
            display: block;
            /*z-index: 5;*/
        }

        .middle_box .dong {
            position: absolute;
            top: 4.5px;
            right: 8.5px;
            font-size: 28px;
            color: white;
            /*z-index: 10;*/
            animation: dong 0.3s linear infinite;
            -webkit-animation: dong 0.3s linear infinite;
            -moz-animation: dong 0.3s linear infinite;
            -ms-animation: dong 0.3s linear infinite;
        }

        .info {
            display: none;
            width: 570px;
            height: 435px;
            /* background: rgba(255,255,255,0.9); */
            background: #efefef;
            position: fixed;
            /*position: absolute;*/
            /* bottom: 290px; */
            top: 50%;
            z-index: 99;
            margin-top: -217.5px;
            /*left: 35px;*/
            margin-left:35px;
            font-size: 30px;
            text-align: center;
            font-weight: bold;
            border-radius: 10px 10px;
        }

        .info .info_box {
            background: white;
            border-radius: 8px;
            margin: 38px auto 0;
            width: 528px;
            height: 160px;
            position: absolute;
            bottom: 218px;
            left: 21px;
        }

        .info_box .box {
            height: 50%;
            padding: 5px 15px 0 20px;
            font-size: 28px;
            box-sizing: border-box;
        }

        .box input {
            width: 80%;
            height: 95%;
            border: 0;
            outline: none;
            font-size: 26px;
            /*text-indent:10px;*/
            vertical-align: middle;
            margin-left: 25px;
            display: inline-block;
        }

        .box span {
            vertical-align: middle;
            /*font-weight: bold;*/
        }

        .info_box .box:first-child {
            border-bottom: 1px solid #ccc;
        }

        .info .btn {
            background: url(/webpage/chphone/cms/public/images/btn-1.png) no-repeat;
            width: 528px;
            height: 86px;
            border: none;
            /* display: none; */
            top: 277px;
            left: 20px;
            outline: none;
            position: absolute;
        }

        .info .btn_1 {
            background: url(/webpage/chphone/cms/public/images/btn-h5.png) no-repeat;
        }

        .guan img {
            width: 56px;
            height: 56px;
            position: absolute;
            z-index: 1000;
            top: -35px;
            right: -15px;
        }
    </style>
</head>
<body>
<div class="content">
    <!--主题图片-->
    <div class="main">
        <img src="/webpage/chphone/cms/public/images/main.jpg" alt="" style="display: block">
    </div>
    <!--弹框报名-->
    <div class="middle_box">
        <img src="/webpage/chphone/cms/public/images/tel.png">
        <p class="dong">报名<br>看房</p>
    </div>
    <div class="info">
        <div class="guan"><img src="/webpage/chphone/cms/public/images/guan-1.png" class="close" id="guan"></div>
        <div class="info_box">
            <div class="box">
                <span>姓名</span>
                <input type="text" id="uname" placeholder="请输入您的姓名"
                       onfocus="if(placeholder=='请输入您的姓名'){placeholder=''}"
                       onblur="if(placeholder==''){placeholder='请输入您的姓名'}">
            </div>
            <div class="box">
                <span>电话</span>
                <input type="text" id="tel" placeholder="请输入您的电话"
                       onfocus="if(placeholder=='请输入您的电话'){placeholder=''}"
                       onblur="if(placeholder==''){placeholder='请输入您的电话'}">
            </div>
        </div>
        <input type="button" class="btn" id="btn">
    </div>
    <!--输入框组-->
    <div class="baoming">
        <form action="" class="form">
            <input type="hidden" id="source" name="source" value="<?php echo ($source); ?>"/>

            <div class="bms">
                <p class="p1">姓名:
                <p>
                    <input type="text" id="name">
            </div>
            <div class="bms">
                <p class="p2">电话:
                <p>
                    <input type="text" id="phone">
            </div>
            <input type="button" class="btn" id="submit">
        </form>
    </div>
    <!--电话-->
    <div class="foot">
        <a href="tel:4008198181,610559" class="yjbo" style="display:block">
            <img src="/webpage/chphone/cms/public/images/tel_2.png" alt="">
            <span>一键抢购</span></a>
    </div>
    <div class="dialog">
        <div class="tol">
            <p class="ts"></p>
            <p class="close">我知道了</p>
        </div>
    </div>
</div>
</body>
<script src="/webpage/chphone/cms/public/js/jquery-1.11.3.min.js"></script>
<script src="/webpage/chphone/cms/public/js/resetpage.js"></script>
<!--opacity-->
<script>
    $(function () {
        $(window).scroll(function () {
//            console.log($(document).scrollTop());
            if ($(document).scrollTop() >= 2400) {
//                $(".middle_box").fadeOut();
                $(".middle_box").slideUp();
            } else {
//                $(".middle_box").fadeIn();
                $(".middle_box").slideDown();
            }
        });
    })
</script>
<!--点击显示报名-->
<script type="text/javascript">
    $(function () {
        $(".middle_box").click(function () {
            $(".info").show();
            $("#guan").click(function () {
                $(".info").hide();
            });
            $(".box>input").focus(function () {
                $(".btn").addClass("btn_1");
            }).blur(function () {
                if ($("#uname").val() == "" && $("#tel").val() == "") {
                    $(".btn").removeClass("btn_1");
                }
            })

        })
    })
</script>
<!--报名1-->
<script language="javascript" type="text/javascript">
    function tisi(ele) {
        $(".dialog").fadeIn();
        $("body").height($(window).height()).css({
            "overflow-y": "hidden",
            "position": "fixed"
        });
        $(".close").click(function () {
            $(".dialog").fadeOut();
            $("body").height($(window).height()).css({
                "overflow-y": "visible",
                "position": "relative"
            });
            if (ele !== '') {
                $(ele).focus();
            }
        });
    }
    function post(msg) {
        if (msg == "ok") {
            $(".ts").html("报名成功！");
            $(".dialog").fadeIn();
            $("body").height($(window).height()).css({
                "overflow-y": "hidden",
                "position": "fixed"
            });
            $(".close").click(function () {
                $(".dialog").fadeOut();
                $("body").height($(window).height()).css({
                    "overflow-y": "visible",
                    "position": "relative"
                });
                var source = $("#source").val();
                var random = Math.floor(Math.random() * 10);
                var lastNum = location.href.substr(location.href.length - 1, 1);
                if (lastNum == random) {
                    random = random + 1;
                }
                window.location.href = "/index.php/Ch/Cms/YichenJun/index/source/" + source + "/" + random;
            });
        }
        if (msg == "chongfu") {
            $(".ts").html("请勿重复提交");
            tisi();
        }
        if (msg == "error") {
            $(".ts").html("提交失败，请重新提交");
            tisi()
        }
    }
    $("#btn").click(function () {
        var name = $("#uname").val();
        if (!name) {
            $(".ts").html("请输入姓名");
            tisi("#uname");
            return false;
        }
        var phone = $("#tel").val();
        if (!phone) {
            $(".ts").html("请输入电话");
            tisi("#tel");
            return false;
        }
        var source = $("#source").val();
        var p = /^1[3|4|5|7|8]\d{9}$/;
        if (!p.exec(phone)) {
            $(".ts").html("请输入正确的电话");
            tisi("#tel");
            return false;
        }
        $.post('/index.php/Ch/Mcenter/YichenJunbm/baomingadd', {phone: phone, name: name, source: source},
            function (msg) {
                post(msg);
            })
    })
</script>
<!--报名2-->
<script language="javascript" type="text/javascript">
    $(".main").css("width", $(window).width());
    $("#submit").click(function () {
        var name = $("#name").val();
        if (!name) {
            $(".ts").html("请输入姓名");
            tisi("#name");
            return false;
        }
        var phone = $("#phone").val();
        if (!phone) {
            $(".ts").html("请输入电话");
            tisi("#phone");
            return false;
        }
        var source = $("#source").val();
        // var p=/1[0-9]{10}/;
        var p = /^1[3|4|5|7|8]\d{9}$/;
        if (!p.exec(phone)) {
            $(".ts").html("请输入正确的电话");
            tisi("#phone");
            return false;
        }
        $.post('/index.php/Ch/Mcenter/YichenJunbm/baomingadd', {phone: phone, name: name, source: source},
            function (msg) {
                post(msg)
            })
    })
</script>
<!--百度流量监测-->
<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?47eff2f56b301c2727826dfc1ec1e364";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!--判断安卓和ios,进行拨号-->
<script type="text/javascript">
    $(function () {
        var u = navigator.userAgent;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        if (isAndroid == true) {
            $(".yjbo").attr("href", "tel:4008198181");
        } else if (isiOS == true) {
            $(".yjbo").attr("href", "tel:4008198181,610559")
        }
    })
</script>
</html>