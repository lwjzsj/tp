<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class ListController extends Controller{
    public function index($i)
    {
        
        $m=M("list");
        $num=$m->where("class='$i'")->count();
        $page=new Page($num,10);
        if($num>10)
        {
            $list=$m->where("class = '$i'")->LIMIT($page->firstRow,$page->listRows)->select();

        }
        else {
            $list=$m->where("class = '$class'")->select();
        }
        $show=$page->show();
        $this->assign("i",$i);
        $this->assign("page",$show);
        //var_dump($list);
        $this->assign("list",$list);        
        $this->display("list");
    }
   public function run($i,$r)
    {
        $r=intval($r);
        
        switch ($r){
            case 1:$ord="starttm";
            break;
            case 2:$ord="lasttm";
            break;
            case 3:$ord="renum";
            break;
        }
        $m=M("list");
        $num=$m->where("class='$i'")->count();
        $page=new Page($num,10);
        if($num>10)
        {
            $list=$m->where("class = '$i'")->order("$ord desc")->LIMIT($page->firstRow,$page->listRows)->select();

        }
        else {
            $list=$m->where("class = '$class'")->select();
        }
        $show=$page->show();
        $this->assign("i",$i);
        $this->assign("page",$show);
        //var_dump($list);
        $this->assign("list",$list);        
        $this->display("list");
    }
    public function repost()
    {
        if(!isset($_SESSION["login"]))
        {
            echo "<script type='text/javascript'>
               alert('请登录后在执行后续操作！')
            </script>
            ";
            R('User/login');
        }
        else {
            $this->display("repost");
        }
    }
}