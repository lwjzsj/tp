<?php
namespace Home\Controller;
use Think\Controller;
class ContentController extends Controller{
    public function index($id){
        echo $id;
        
        $this->display("index");
    }
}