<?php
namespace Home\Controller;
Use Think\Controller;
class UserController extends Controller{
    public function login()
    {
        $user="login";
        $this->assign("user",$user);
        $this->display("User/login");
    }
    public function reg()
    {
        $user="reg";
        $this->assign("user",$user);
        $this->display("User/login");
    }
    public function logincheck()
    {
        $name=$_POST["name"];
        $pwd=md5($_POST["pwd"]);
        $m=M("user");
        $result=$m->where("name='$name'")->find();
        
        if($result["pwd"]==$pwd){
            $_SESSION["login"]="true";
            $_SESSION["name"]="$name";
            $this->success("登陆成功",U('Home/Index/index'));
        }
        else {
            $this->error("用户名或密码不正确");
        }
    }
    public function regcheck()
    {
        $date["name"]=$_POST["name"];
        $date["pwd"]=md5($_POST["pwd"]);
        $date["tm"]=date('Y-m-d H:i:s');
        $m=M("user");
        $result=$m->where("name='$name'")->find();
        if(!empty($result))
        {
            $this->error("用户已存在");
        }
        else {
            $m->add($date);
            $_SESSION["login"]="true";
            $_SESSION["name"]="$name";            
            $this->success("注册成功",__APP__/Home/Index/index);
        }
    }
    public function loginout()
    {
        session_destroy();
        $this->success("注销成功",__APP__/Home/Index/index);
    }
}