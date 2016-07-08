<?php if (!defined('THINK_PATH')) exit();?><html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <style>
        body{
            background-color:#E8E8E8;
        }
        #bg {
            height: 500px;
            width: 960px;
            font-family: Microsoft YaHei;
            font-size: 30px;
            line-height: 40px;
            text-align: center;
            margin: 80px auto;
            background-color:#fff;
        }
    </style>
    <title>发表新话题</title>
</head>

<body>
    <div style="font-family:Microsoft YaHei;height:100px;width:960px;margin:10px auto;">
            <div style="height:100px;width:500px;float:left;font-size:60px;line-height:100px;">MIUI首页</div>
        <?php if(isset($_SESSION['login'])): ?><div style="height:100px;width:450px;float:right;font-size:16px;line-height:100px;text-align:right;"><?php echo ($_SESSION['name']); ?>&nbsp;|&nbsp;<a href="/tp/index.php/Home/User/loginout">注销</a></div>
            <?php else: ?>
            <div style="height:100px;width:450px;float:right;font-size:16px;line-height:100px;text-align:right;"><a href="/tp/index.php/Home/User/login">登陆</a></div><?php endif; ?>
    </div>
    <div style="font-size:14px;font-family:Microsoft YaHei;height:20px;width:960px;margin:0px auto;">
            <a href=/tp/index.php/Home>首页</a> > <a href=/tp/index.php/Home/List/index/i/<?php echo ($i); ?>><?php echo ($i); ?></a> > 发表新帖
            <br>
            <br>
            发表帖子
        </div>
    <div id="bg">
        
    </div>
</body>

</html>