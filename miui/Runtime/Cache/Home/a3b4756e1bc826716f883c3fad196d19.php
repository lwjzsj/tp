<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <title>注册登陆</title>
    <style>
        body{
            background-color: #E8E8E8;
        }
        #user{
            height:500px;
            width:720px;
            background-color:#fff;
            margin:100px auto;
        }
        .div0
        {
            height:40px;
            width:300px;
            font-family: Microsoft YaHei;
            font-size:30px;
            line-height:40px;
            text-align: center;
            margin:80px auto;
        }
        .div1
        {
            border:1px solid #D9D9D9;
            height:40px;
            width:300px;
            font-family: Microsoft YaHei;
            font-size:14px;
            line-height:40px;
            text-align: center;
            margin:20px auto;
        }
         .div3
        {
            border:0px solid #D9D9D9;
            height:40px;
            width:300px;
            font-family: Microsoft YaHei;
            font-size:14px;
            line-height:40px;
            text-align: right;
            margin:20px auto;
        }
        .sub
        {
            border:1px solid #D9D9D9;
            height:40px;
            width:300px;
            line-height:40px;
            text-align: center;
            margin:40px auto;
            
        }
         .sub1
        {
            background-color:#FD702E;
            border:0px solid #D9D9D9;
            height:40px;
            width:300px;
            font-family: Microsoft YaHei;
            font-size:14px;
            line-height:40px;
        }
        .input
        {
            border:0px solid #D9D9D9;
            height:40px;
            width:300px;
            font-family: Microsoft YaHei;
            font-size:14px;
            line-height:40px;
            text-align: left;
            margin:0px auto;
        }
       
    </style>
    <script type="text/javascript">
        function check(form)
        {
            if(form.name.value=="")
            {
                alert("用户名不能为空");
                return false;
            }
            if(form.pwd.value=="")
            {
                alert("密码不能为空");
                return false;
            }
            return true;
        }
        function regcheck(form)
        {
            if(form.name.value=="")
            {
                alert("用户名不能为空");
                return false;
            }
            if(form.pwd.value=="")
            {
                alert("密码不能为空");
                return false;
            }
            if(form.pwd.value!=form.repwd.value)
            {
                alert("密码不一致");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div id="user">
        <?php if(($user == 'login')): ?><div style="height:1px"></div>
            <div class="div0">帐号登陆</div>
            <form action="/tp/index.php/Home/User/logincheck" method="POST" onsubmit="return check(this)">
                <div class="div1">
                    <input type="text" name="name" placeholder=" 帐号" class="input">
                </div>
                <div class="div1">
                    <input type="password" name="pwd" placeholder=" 密码" class="input">
                </div>
                <div class="sub">
                    <input type="submit" value="立即登录" class="sub1">
                </div>
                </form>
                <a href=/tp/index.php/Home/User/reg><div class="div3">
                   立即注册
                </div></a>
            
            <?php elseif(($user == 'reg')): ?>
                <div style="height:1px"></div>
            <div class="div0">帐号注册</div>
            <form action="/tp/index.php/Home/User/regcheck" method="POST" onsubmit="return regcheck(this)">
                <div class="div1">
                    <input type="text" name="name" placeholder=" 帐号" class="input">
                </div>
                <div class="div1">
                    <input type="password" name="pwd" placeholder=" 密码" class="input">
                </div>
                <div class="div1">
                    <input type="password" name="repwd" placeholder=" 密码" class="input">
                </div>
                <div class="sub">
                    <input type="submit" value="注册" class="sub1">
                </div>
            </form><?php endif; ?>
    </div>
</body>
</html>