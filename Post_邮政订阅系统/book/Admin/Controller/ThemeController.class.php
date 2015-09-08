<?php

//后台主题控制器
namespace Admin\Controller;
use Component\AdminController;

class ThemeController extends AdminController{
	
	function showlist(){
		$info = D('Theme') ->select();
		// $categary =D('Theme');
		$catinfo = D('Category') ->select();
		// $sql = "select * from sw_category where cat_id='{$info[0][cat_id]}'";
		// echo $sql;
		// $catinfo=$categary ->query($sql);

		// show_bug($info);
		// show_bug($catinfo);
		$this->assign('catinfo',$catinfo);
		$this->assign('info',$info);

		$this->display();
	}

	function add(){
		if(!empty($_POST)){
			// print_r($_POST);
			// 在Thememodel里面通过一个指导方法实现主题删除
			$theme = D('Theme');
			$z=$theme->add($_POST);
			if($z){
				$this->success('添加主题成功',U('showlist'));
			}else{
				$this->error('添加失败',U('showlist')); // 只写showlist代表当前控制器的showlist方法
			}
		}else{

		// 获得类别信息
		$catinfo = D('category') ->select();
		$this->assign('catinfo',$catinfo);

		$this->display();
		}
	}


	function upd($theme_id){
		//查询被修改主题信息并传递给模版
		$theme =D('Theme');
		//两个逻辑：展示表单、收集表单
		if(!empty($_POST)){
			// print_r($_POST);
			$theme->create();
			$rst = $theme->save();
			if($rst){
				$this->success('更新主题成功',U('showlist'));
			}else{
				$this->error('更新主题失败',U('showlist')); // 只写showlist代表当前控制器的showlist方法
			}
		}else{

		$info = D('Theme') ->find($theme_id);//一维数组
		$this ->assign('info',$info);

		// 获得类别信息
		$catinfo = D('Category') ->select();
		$this->assign('catinfo',$catinfo);
		// show_bug($info);
		// show_bug($catinfo);
		$this->display();
		}
	}
	function del($theme_id){

		$z = D('Theme')->delete($theme_id);
		if($z){
				$this->success('删除主题成功',U('showlist'));
			}else{
				$this->error('删除主题失败',U('showlist'));
			}
	}
} 