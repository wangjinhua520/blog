<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function addCate(){
    	$this->display();
    }

    //添加栏目处理
    public function addCateHandle(){
    	$cate=D('Category');
    	if(!$cate->create($_POST)){
    		$this->error($cate->getError());
    	}
    	else{

    		if($cate->add($_POST)){
    			$this->success('栏目添加成功');

    	}
    	else{
    		$this->error('栏目添加失败');
    	}
    	} 	
    }

    //栏目列表
    public function cateList(){
		$cate = M('Category'); // 实例化User对象
		$count = $cate->count();// 查询满足要求的总记录数
		$pagecount=10; //每页显示几条记录
		$Page = new \Think\Page($count,$pagecount);// 实例化分页类 传入总记录数和每页显示的
		// 设置分页显示
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('first','首页');
		$Page->setConfig('last','末页');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');$Page->setConfig('header', '条数据');
		$show = $Page->show();// 分页显示输出
		$list = $cate->order('sort ASC')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
    }


    //修改栏目
    public function updateCate(){
        $this->cname=I('cname');
        $this->sort=I('sort');
        $this->cid=I('cid');
        $this->display();
    }

    //修改栏目表单处理
    public function updateCateHandle(){
       $cate=D('Category');
        if(!$cate->create($_POST)){
            $this->error($cate->getError());
        }
        else{

            if($cate->save($_POST)){
                $this->success('栏目修改成功',U('Category/cateList'));

        }
        else{
            $this->error('栏目修改失败，请重试');
        }
        }   
    }

    //删除栏目
    public function delete(){
        
    }

}