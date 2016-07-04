<?php
namespace Admin\Controller;
use Think\Controller;
class JpushController extends Controller {
    public function index(){
    	$this->display();
    }

    //推送消息
    function sendJpush(){
    	// import('Lib.Jpush_send',APP_PATH); 
    	import("Admin.Lib.Jpush_send");
		$fetion = new \Jpush_send(); 
        $receive = 'all';//全部 
        //$receive = array('alias'=>array('2'),'alias'=>array('1'));//别名 
        $content = I('content'); 
        $m_type = 'tb'; 
        $m_txt = '891'; 
        $m_time = '600'; //离线保留时间 
        $res=$fetion->send_pub($receive, $content ,$m_type, $m_txt ,$m_time); 
        }

}

