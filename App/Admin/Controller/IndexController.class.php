<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }

    public function left(){
    	$this->display();
    }

    public function right(){
    	$this->display();
    }
    public function top(){
        $cate=M('category')->count();
        $this->assign('cate',$cate);
    	$this->display();
    }
    public function main(){
        $this->display();
    }
    
    public function imgtable(){
        $this->display();
        
    }
}
