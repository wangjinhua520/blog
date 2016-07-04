<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/blog/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">表单</a></li>
    </ul>

    </div>
    <form action="<?php echo U('Jpush/sendJpush');?>" method="post">
    <div class="formbody">
    <div class="formtitle"><span>添加栏目</span></div>
    <ul class="forminfo">
    <li><label>推送内容</label><input name="content" type="text" class="dfinput" placeholder="请输入推送内容" /><i>标题不能超过72个字符</i></li>
    <!-- <li><label>栏目排序</label><input name="sort" value="0" type="text" class="dfinput" /><i>请填写数值,例如：1</i></li> -->
    <br/> 
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
    </ul>
    </div>
    </form>
</body>

</html>