<?php

//后台商品控制器
namespace Admin\Controller;
use Component\AdminController;

class CategoryController extends AdminController{
	
	// 商品分类
	function showlist(){

		$cate = D("Category");
		$info = $cate -> select();
		$this->assign('info',$info);
		$this->display();
	}

	
	function add(){
		//两个逻辑：1展现表单2接收表单数据
			$category = D("Category");
			if(!empty($_POST)){
				$category -> create();//收集post表单数据
				$z= $category->add();
				if($z){
					//success(提示信息，跳转的url地址)
					$this->success('添加分类成功',U('Category/showlist'));
				}else{
					$this->error('添加分类失败',U('Category/showlist'));
				}
			}else{

			}
			$this->display();
	}
	//修改商品

	function upd($cat_id){
		//查询被修改商品信息并传递给模版
		$category = D("Category");
		//两个逻辑：展示表单、收集表单
		if(!empty($_POST)){
			// print_r($_POST);
			$category->create();
			$rst = $category->save();
			if($rst){
				$this->success('修改分类成功',U('Category/showlist'));
			}else{
				$this->error('修改分类失败',U('Category/showlist'));
			}
		}else{

		$info = D("Category")->find($cat_id);//一维数组
		$this ->assign('info',$info);
		$this->display();
		}
	}
	//
	function del($cat_id){
		$category = D("Category");
		// $rst = $category->delete(63);
		// $rst = $category->delete('61,62,63');
		$rst = $category ->delete($cat_id);
		// show_bug($rst);
    	// $this-> redirect('Category/showlist');
    	if($rst){
				// echo "success";
				$this->success('删除分类成功',U('Category/showlist'));
			}else{
				// echo "failure";
				$this->error('删除分类失败',U('Category/showlist'));
			}

	}
} 