<?php
// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
	

// 定义应用目录
define('APP_PATH','./App/');

//缓存目录
define('RUNTIME_PATH',APP_PATH.'Runtime/');

//生成静态页面的文件位置
//define('HTML_PATH', './htm');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

/*
1：在根目录下的全局index.php中加下面这行：

define('HTML_PATH', './htm');//生成静态页面的文件位置

 

2：在项目的配置文件config.php中加下面这行：

'HTML_FILE_SUFFIX' => '.html',// 默认静态文件后缀

 

3：在需要生成静态页的action里加入下面显红的代码

public function view()
{
$wheres = "id = $_GET[id]";
$news = $this->news->where($wheres)->find();
$this->assign("news", $news);
$this->buildHtml('1', HTML_PATH . '/news/', 'view', 'utf8');
$this->display();
}

buildHtml方法

参数1：生成的静态页名称

参数2：静态页保存的目录

参数3：生成静态页的方法名

参数4：静态页编码（是utf8，不是utf-8）

*/