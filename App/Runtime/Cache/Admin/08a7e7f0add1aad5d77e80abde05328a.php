<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>栏目列表</title>
<link href="/blog/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/blog/Public/Admin/js/jquery.js"></script>
<style type="text/css">
.pagelist{ text-align:center; background:#f1f1f1; padding:7px 0; margin-top: 20px;}
.pagelist a{ margin:0 5px; border:#3eafe0 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; background:#fff; color:#6185a2;}
.pagelist span{ margin:0 5px; border:#3eafe0 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; color:#6185a2; color:#fff; background:#3eafe0;}
.tablelink{

    padding:0 10px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>


</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">数据表</a></li>
    <li><a href="#">基本内容</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
        <li class="click"><span><img src="/blog/Public/Admin/images/t01.png" /></span>添加</li>
        <li class="click"><span><img src="/blog/Public/Admin/images/t02.png" /></span>修改</li>
        <li><span><img src="/blog/Public/Admin/images/t03.png" /></span>删除</li>
        <li><span><img src="/blog/Public/Admin/images/t04.png" /></span>统计</li>
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="/blog/Public/Admin/images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th> 栏目编号</th>
        <th>栏目名称</th>
        <th>排序</th>  
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td><?php echo ($v["id"]); ?></td>
        <td><?php echo ($v["cname"]); ?></td>
        <td><?php echo ($v["sort"]); ?></td>
        <td>
        <a href="<?php echo U('Category/updateCate',array('cid'=>$v['id'],'cname'=>$v['cname'],'sort'=>$v['sort']));?>" class="tablelink">修改</a>     
        <a href="#" class="tablelink">删除</a>
        </td>
        </tr><?php endforeach; endif; ?>   
        </tbody>
    </table>
    
    <div class="pagelist"><?php echo ($page); ?></div>
    
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="/blog/Public/Admin/images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>  
    </div>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>

</body>

</html>