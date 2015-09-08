<?php

namespace Model;
use Think\Model;

//父类model 在/ThinkPHP/Library/Think/Model.class.php
class RoleModel extends Model{

	//权限分配
	// $auth是意味数组信息，给当前角色分配的权限id信息
	function saveAuth($auth,$role_id){
		// 把权限id数组变为由逗号分割的字符串信息
		$auth_ids = implode(',',$auth);
		// show_bug($auth_ids);

		// 根据ids权限id信息查询具体操作方法信息
		$info =D('Auth')->select($auth_ids);//二维数组信息
		// show_bug($info);
		// 拼装控制器和操作方法
		foreach ($info as $k => $v) {
			if(!empty($v['auth_c']) && !empty($v['auth_a']) ){
			$auth_ac .=$v['auth_c']."-".$v['auth_a'].",";
			}

		}
		$auth_ac =rtrim($auth_ac,',');//删除右边的逗号
		// show_bug($auth_ac);

		$dt = array(
			'role_id'=>$role_id,
			'role_auth_ids'=>$auth_ids,
			'role_auth_ac' =>$auth_ac,

			);
		return $this-> save($dt);


	} 

	
}