<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/blog/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/blog/Public/Admin/js/jquery.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>


</head>

<body style="background:#f0f9fd;">
	<div class="lefttop"><span></span>系统管理</div>
    
    <dl class="leftmenu">
        
    <dd>
    <div class="title">
    <span><img src="/blog/Public/Admin/images/leftico01.png" /></span>信息管理
    </div>
    	<ul class="menuson">
        <li><cite></cite><a href="<?php echo U('Category/addCate');?>" target="rightFrame">添加栏目</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Category/cateList');?>" target="rightFrame">栏目管理</a><i></i></li>
        <li><cite></cite><a href="" target="rightFrame">添加文章</a><i></i></li>
        <li><cite></cite><a href="" target="rightFrame">文章管理</a><i></i></li>
        <li><cite></cite><a href="" target="rightFrame">图片列表</a><i></i></li>
        <li><cite></cite><a href="" target="rightFrame">自定义</a><i></i></li>
        <li><cite></cite><a href="" target="rightFrame">常用工具</a><i></i></li>
        <li><cite></cite><a href="" target="rightFrame">信息管理</a><i></i></li>
        <li><cite></cite><a href="" target="rightFrame">Tab页</a><i></i></li>
        <li><cite></cite><a href="" target="rightFrame">404页面</a><i></i></li>
        </ul>    
    </dd>
        
    
    <dd>
    <div class="title">
    <span><img src="/blog/Public/Admin/images/leftico02.png" /></span>消息推送
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="<?php echo U('Jpush/index');?>" target="rightFrame">添加推送</a><i></i></li>
        <li><cite></cite><a href="#">发布信息</a><i></i></li>
        <li><cite></cite><a href="#">档案列表显示</a><i></i></li>
        </ul>     
    </dd> 
    
    
    <dd><div class="title"><span><img src="/blog/Public/Admin/images/leftico03.png" /></span>编辑器</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li>
    </ul>    
    </dd>  
    
    
    <dd><div class="title"><span><img src="/blog/Public/Admin/images/leftico04.png" /></span>日期管理</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('System/clearRuntime');?>">清除缓存</a><i></i></li>
    </ul>
    
    </dd>   
    
    </dl>
    
</body>
</html>