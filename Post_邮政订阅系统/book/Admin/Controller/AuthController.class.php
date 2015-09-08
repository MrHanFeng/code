<?php

namespace Admin\Controller;
use Component\AdminController;

class AuthController extends AdminController{

	function showlist(){
		$info =$this->getInfo();
		$this->assign('info',$info);
		$this->display();
	}
	function add(){

		if(!empty($_POST)){
			// print_r($_POST);
			// 在Authmodel里面通过一个指导方法实现权限添加
			$auth = new \Model\AuthModel();
			$z=$auth->addAuth($_POST);
			if($z){
				$this->success('添加权限成功',U('showlist'));
			}else{
				$this->error('添加失败',U('showlist')); // 只写showlist代表当前控制器的showlist方法
			}
		}else{

		// 获得父级权限信息
		$info = $this -> getInfo();
		// show_bug($info);
		// 从$info里面获取信息。例如array(1=>'权限管理'，2=>'添加权限');
		// 以便在smarty模版中使用内建函数{html_options}
		$authinfo =array();
		foreach ($info as $v) {
 			$authinfo[$v['auth_id']]=$v['auth_name'];
		}
		// show_bug($authinfo);
		$this->assign('authinfo',$authinfo);

		$this->display();
		}
	}

	function getInfo($flag=false){
		// 如果$flag标志为false，查询全部的权限信息
		// 如果$flag标志为true，查询level=0/1的权限信息
		$auth =D('Auth');
		if($flag == true){
		$info = D('Auth')->where('auth_level<2')->order('auth_path asc')->select();

		}else{

		$info = D('Auth')->order('auth_path asc')->select();
		}
		foreach($info as $k => $v){
			$info[$k]['auth_name'] = str_repeat('-->', $v['auth_level']).$info[$k]['auth_name'];
		}
		return $info;
	}

	function upd($auth_id){
		//查询被修改权限信息并传递给模版
		$auth =D('Auth');
		//两个逻辑：展示表单、收集表单
		if(!empty($_POST)){
			// print_r($_POST);
			$auth->create();
			$rst = $auth->save();
			if($rst){
				$this->success('修改权限信息成功',U('showlist'));
			}else{
				$this->error('修改权限信息失败',U('showlist'));
			}
		}else{

		$info = D('Auth')->find($auth_id);//一维数组
		$this ->assign('info',$info);
		$this->display();
		}
	}
} 