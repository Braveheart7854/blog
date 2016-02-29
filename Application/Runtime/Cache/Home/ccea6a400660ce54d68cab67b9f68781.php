<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>login </title>
    <style>
        body {
            background: #036cb4;
            font-size: 14px;
        }

        .main {

            margin: 100px auto;
            background: #c4e3f3;
            width: 40%;
            height: 400px;
            border: 1px solid #faa;
            /*display: inline-block;*/
            text-align: center;
        }

        .main p {
            display: inline-block;
            width: 90%;
            line-height: 32px;
            padding: 5px;
            border-radius: 5px;
            font-size: 24px;
        }

        .main p label {
            width: 50px;
            line-height: 20px;
            font-size: 14px;
        }

        .main p input {
            margin-left: 20px;
            width: 200px;
            line-height: 20px;
        }

        .btn {
            height: 32px;
            width: 100px;
            border: 1px solid #fff;
            border-radius: 15px;
            background: #4cae4c;
        }
        .main p .verify{
            width: 80px;
        }
    </style>
</head>
<body>
<div class="main">
    <form method="post" action="/index.php/Home/index/checklogin">
        <p><label>username</label><input type="text" name="username" placeholder="username"/></p>

        <p><label>password</label><input type="password" name="password" placeholder="******"/></p>
        <p><input type="text" name="verify" class="verify" placeholder="验证码">
            <span><img height="24" vertical-align="middle" class="verify-img" src="/index.php/Home/index/verify"></span></p>

        <p>
            <button class="btn" type="submit">登录</button>
        </p>
    </form>


</div>
<script src="/Public/js/jquery.min.js"></script>
<script>
    $(".verify-img").click(function(){
        var src = $(this).attr('src');
        var random = Math.random();
        src = src + '/' +random;
        $(this).attr('src', src);
    });
</script>


</body>
</html>