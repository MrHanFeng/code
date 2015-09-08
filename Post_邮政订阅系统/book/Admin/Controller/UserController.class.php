<?php

//后台商品控制器
namespace Admin\Controller;
use Component\AdminController;

class UserController extends AdminController{
	
	// 用户列表
	function showlist(){

		$user = D("User");
		$info = $user -> select();
		$this->assign('info',$info);
		$this->display();
	}
	
	//用户禁言
	function lock($user_id){

		$user = D("User");

		$sql = "update sw_user set user_lock ='1' where user_id = '$user_id'";
		$rst = $user->execute($sql);
		if($rst){
				$this->success('禁言该用户成功',U('showlist'));
			}else{
				$this->error('禁言该用户失败',U('showlist'));
			}
	}

	function unlock($user_id){

		$user = D("User");

		$sql = "update sw_user set user_lock ='0' where user_id = '$user_id'";
		$rst = $user->execute($sql);
		if($rst){
				$this->success('解除禁言成功',U('showlist'));
			}else{
				$this->error('解除禁言失败',U('showlist'));
			}
	}

	//删除用户
	function del($user_id){

		$user = D("User");
		$rst = $user ->delete($user_id);
    	if($rst){
				$this->success('删除用户成功',U('showlist'));
			}else{
				$this->error('删除用户失败',U('showlist'));
			}

	}

} 