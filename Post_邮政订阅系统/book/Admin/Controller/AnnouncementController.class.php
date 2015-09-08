<?php

//后台公告控制器
namespace Admin\Controller;
use Component\AdminController;

class AnnouncementController extends AdminController{
	
	function showlist(){
		$info = D('Announcement') ->select();
		$this->assign('info',$info);

		$this->display();
	}

	function add(){
		if(!empty($_POST)){
			// print_r($_POST);
			// 在Announcementmodel里面通过一个指导方法实现公告删除
			$z= D('Announcement')->add($_POST);
			// print_r($z);
			if($z){
				$this->success('添加公告成功',U('showlist'));
			}else{
				$this->error('添加失败',U('showlist')); // 只写showlist代表当前控制器的showlist方法
			}
		}else{

		// 获得类别信息

		$this->display();
		}
	}


	function upd($id){
		//查询被修改公告信息并传递给模版
		$announcement =D('Announcement');
		//两个逻辑：展示表单、收集表单
		if(!empty($_POST)){
			print_r($_POST);
			$announcement->create();
			$rst = $announcement->save();
			if($rst){
				$this->success('更新公告成功',U('showlist'));
			}else{
				$this->error('更新公告失败',U('showlist')); // 只写showlist代表当前控制器的showlist方法
			}
		}else{

		$info = D('Announcement') ->find($id);//一维数组

		$this ->assign('id',$info[id]);
		$this ->assign('title',$info[title]);
		$this ->assign('content',$info[content]);

		$this->display();
		}
	}

	function del($id){

		$z = D('Announcement')->delete($id);
		if($z){
				$this->success('删除公告成功',U('showlist'));
			}else{
				$this->error('删除公告失败',U('showlist'));
			}
	}
} 