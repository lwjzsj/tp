<?php if (!defined('THINK_PATH')) exit();?><html>

<head>
    <title>首页</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <style>
        body {
            background-color: #E8E8E8;
        }
        
        a {
            text-decoration: none;
            color: #000;
        }
    </style>
</head>

<body>
    <div style="font-family:Microsoft YaHei;height:100px;width:960px;margin:10px auto;">
            <div style="height:100px;width:500px;float:left;font-size:60px;line-height:100px;">MIUI首页</div>
        <?php if(isset($_SESSION['login'])): ?><div style="height:100px;width:450px;float:right;font-size:16px;line-height:100px;text-align:right;"><?php echo ($_SESSION['name']); ?>&nbsp;|&nbsp;<a href="/tp/index.php/Home/User/loginout">注销</a></div>
            <?php else: ?>
            <div style="height:100px;width:450px;float:right;font-size:16px;line-height:100px;text-align:right;"><a href="/tp/index.php/Home/User/login">登陆</a></div><?php endif; ?>
    </div>
    <div style="background-color:#FAFAFA;width:960px;border-radius:5px;margin:10px auto;text-align:center;min-height:230px;border:1px solid #C9C9C9;">
        <div style="width:960px;height:40px;border-bottom:1px solid #C9C9C9;text-align:left;line-height:40px;">
            <b> 机型列表</b>
        </div>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="height:180px;width:180px;float:left;text-align:center;border-bottom:1px solid #C9C9C9;border-right:1px solid #C9C9C9;margin-right:-1px;margin-top:-1px;">
                <a href=/tp/index.php/Home/List/index/i/<?php echo ($vo["name"]); ?>><img style="height:100px;width:60px;margin-top:30px;" src="/tp/Public/img/<?php echo ($vo["img"]); ?>"></a>
                <div style="font-size:16px;height:20px;"><?php echo ($vo["name"]); ?></div>
                <div style="font-size:14px;">今日贴数：<?php echo ($vo["num"]); ?></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</body>



</html>