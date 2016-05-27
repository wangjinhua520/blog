<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $data=M('category')->select();
        p($data);
        echo json_encode($data);
        die();
    	$this->display();
    }
}