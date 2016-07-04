<?php
namespace Admin\Model;
use Think\Model;
class CategoryModel extends Model{
	protected $_validate = array(
	array('cname','require','栏目名称不能为空'), //默认情况下用正则进行验证
	array('cname','','帐号名称已经存在！ ',0,'unique',1), // 在新增的时候验证name字段是否唯一
	);
}