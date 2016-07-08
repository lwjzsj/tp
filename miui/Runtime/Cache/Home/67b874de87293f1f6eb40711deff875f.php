<?php if (!defined('THINK_PATH')) exit();?><html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset:utf-8;">
    <title><?php echo ($i); ?></title>
    <style>
        a {
            text-decoration: none;
            color: #000;
        }
        
        body {
            background-color: #E8E8E8;
        }
        
        #bg {
            border-radius: 5px;
            width: 800px;
            height: 1000px;
            text-align: center;
            margin: 10px auto;
            border: 1px solid #D9D9D9;
            background-color: #FAFAFA;
        }
        
        .list {
            margin: -1px auto;
            text-align: left;
            border: 1px solid #D9D9D9;
            height: 60px;
            width: 720px;
        }
        
        #cla {
            height: 40px;
            width: 720px;
            margin: 20px auto;
            background-color: #E8E8E8;
            border-radius: 5px;
            border: 1px solid #D9D9D9;
            line-height: 40px;
            text-align: left;
        }
        
        #cla0 {
            float: left;
            margin-left: 15px;
            font-family: Microsoft YaHei;
        }
        
        .cla1 {
            font-family: Microsoft YaHei;
            font-size: 14px;
            width: 80px;
            height: 25px;
            float: left;
            margin-top: 7px;
            margin-left: 50px;
            line-height: 25px;
            border: 1px solid #D9D9D9;
            border-radius: 2px;
            background-color: #FAFAFA;
            text-align: center;
        }
        #class{
            font-size:40px;
            line-height:60px;
            font-family:Microsoft YaHei;
            width:250px;
            float:left;
        }
        #newpost
        {
            width:100px;
            height:40px;
            background-color:#FD7012;
            float:right;
            font-family:Microsoft YaHei;
            font-size:18px;
            line-height:40px;
            text-align:center;
            border-radius:3px;
            margin-top:5px;
            margin-right:20px;
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
    <div style="width:800px;height:76px;margin:0px auto;">
        <div style="font-size:14px;font-family:Microsoft YaHei;">
            <a href=/tp/index.php/Home>首页</a> > <a href=/tp/index.php/Home/List/index/i/<?php echo ($i); ?>><?php echo ($i); ?></a>
        </div>
        <div id="class"><?php echo ($i); ?></div>
        <div id="newpost">
            <a href="/tp/index.php/Home/List/repost">发表新话题</a>
        </div>
    </div>
    <div id="bg">
        <div id="cla">
            <div id="cla0"><b>排序</b></div>
            <a href=/tp/index.php/Home/List/run/i/<?php echo ($i); ?>/r/2>
                <div class="cla1">回复时间</div>
            </a>
            <a href=/tp/index.php/Home/List/run/i/<?php echo ($i); ?>/r/1>
                <div class="cla1">发帖时间</div>
            </a>
            <a href=/tp/index.php/Home/List/run/i/<?php echo ($i); ?>/r/3>
                <div class="cla1">回复数量</div>
            </a>

        </div>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="list">
                <div style="font-size:18px;height:40px;line-height:40px;font-family:Microsoft YaHei;"><a href=/tp/index.php/Home/Content/index/id/<?php echo ($vo["id"]); ?>><?php echo ($vo["title"]); ?></a></div>
                <div style="font-size:13px;font-family:Microsoft YaHei;"><?php echo ($vo["name"]); ?> | 回复：<?php echo ($vo["renum"]); ?> | <?php echo ($vo["starttm"]); ?></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div style="width:800px;height:20px;text-align:right;margin:10px auto;">
        <?php echo ($page); ?>
    </div>
</body>

</html>