<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function Index(){
        $class=M("class");
        $this->list=$class->select();
        $this->display();
    }
}