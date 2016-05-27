<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends Controller {
private function _deleteDir($R){
$handle = opendir($R);
 while(($item = readdir($handle)) !== false){
 if($item != '.' and $item != '..'){
 if(is_dir($R.'/'.$item)){
$this->_deleteDir($R.'/'.$item);
 }else{
 if(!unlink($R.'/'.$item))
 die('error!');
 }
 }
 }
closedir( $handle );
 return rmdir($R); 
 }
 public function clearRuntime(){
$R = $_GET['path'] : $_GET['path'] ? RUNTIME_PATH;
 if($this->_deleteDir($R))
 die("cleared!");
 }
 
}
