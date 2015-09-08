<?php

// 普通控制器父类
namespace Component;
use Think\Controller;

class AdminController extends Controller{

	// 构造方法
	function  __construct(){
		// 先执行父类的构造方法，否则系统要报错
		// 因为原先的构造方法默认是被执行的
		parent::__construct();



		// CONTROLLER_NAME  ---Goods
		// ACTION_NAME      ---showlist
		// 当前请求操作
		$now_ac =CONTROLLER_NAME."-".ACTION_NAME;
		// show_bug($now_ac);

		// 过滤控制器和方法，避免用户非法请求
		// 通过角色获得用户可以访问的控制器和方法信息
		$sql = "select role_auth_ac from bk_manager a join bk_role b on a.mg_role_id=b.role_id
		where a.mg_id =".$_SESSION['mg_id'];
		$auth_ac = D()->query($sql);
		$auth_ac = $auth_ac[0]['role_auth_ac'];
		// show_bug($auth_ac);


		// 判断$now_ac 是否在$auth_ac字符串里面有出现过
		// strpos函数返回false表示没有出现过，返回0 1 2 3 表示有出现过
		// 管理员admin不限制
		// 默认一下权限没有限制
		// Index/left Index/right Index/index Manager/login
		$allow_ac = array('Index-left','Index-right','Index-head','Index-index','Manager-login','Index-modifypwd','Index-verifyImg');
		if(!in_array($now_ac,$allow_ac) && $_SESSION['mg_id'] !=1 && strpos($auth_ac,$now_ac) === false){
			$this->error('没有访问权限',U("right"));			
			//$this->error('没有访问权限',U("Index/index"));			
		}
	}
}