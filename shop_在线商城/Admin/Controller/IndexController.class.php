<?php 
	// 后台控制器
	
	namespace Admin\Controller;
	use Component\AdminController;

	class IndexController extends AdminController{
		function index(){
			// 打印出各种常量
			// var_dump(get_defined_constants(true));//true自动分组显示

			$this->display();
		}

		// 展现后台头部页面
		function head(){

			$this -> display();
		}

		// 后台左部页面
		function left(){
			// 三步获得管理员的权限
			// 1.根据管理员IDSESSION['mg_id'] 查到对应角色ID['role_id']
			$sql = "select * from sw_manager where mg_id=".$_SESSION['mg_id'];
			$minfo = D()->query($sql);//把管理员登录对应的其他信息查询出来
			$role_id = $minfo[0]['mg_role_id'];//获得该管理员对应的角色的ID
			// 2.根据角色ID['role_id']查询到对应的权限ID[role_auth_ids]
			$sql = "select * from sw_role where role_id=".$role_id;
			$rinfo = D()->query($sql);
			$auth_ids = $rinfo[0]['role_auth_ids'];//获得该管理员的角色对应的权限ID
			// 3.根据权限ID[role_auth_ids]查询到该管理员全部的权限信息
			$sql = "select * from sw_auth where auth_level = 0 ";

			//判断，若是超级管理员登录，给所有权限
			if($_SESSION['mg_id'] != 1 ){$sql .= " and auth_id in ($auth_ids)";}
			$p_info = D()->query($sql);//获得该管理员所有的顶级权限
			
			$sql = "select * from sw_auth where auth_level = 1 ";
			//判断，若是超级管理员登录，给所有权限，【！只有数据库中超级管理员的ID为1时有效！】
			if($_SESSION['mg_id'] != 1 ){$sql .= "  and auth_id in ($auth_ids)";}
			$s_info = D()->query($sql);//获得该管理员所有的次顶级权限

			$this->assign('pauth_info',$p_info);//把查询出来的顶级权限的所有信息传过去
			$this->assign('sauth_info',$s_info);//次顶级权限的信息发过去
			$this->display();
		}

		// 后台右部页面
		function right(){
			$this->display();
		}

		// 修改自己密码
		function update_manager($mg_id){
		    if(!empty($_POST)){
		        // ss($_POST);
		        $info = D('manager');
		        $info ->create();
		        if($_POST['mg_pwd'] != $_POST['mg_pwd2']){
		        	$this->error('两次密码输入不一致');
		        }
		        $info ->mg_pwd = $this->md6($_POST['mg_pwd']);//以MD6加密存入密码
		        $re = $info ->save(); 
		        if($re){
		            $this->success('修改密码成功',U('Manager/login'));
		        }else{
		            $this->error('修改密码失败');
		        }
		    }else{
		        $info = D('manager')->find($mg_id);
		        $this->assign('manager_info',$info);//把该管理员信息传入前台
		        /*为了下拉菜单全部角色名字*/
		        $info = D('role')->field('role_name')->find($info['mg_role_id']);    
		        $this->assign('role_name',$info['role_name']);
		        $this->display();
		    }

		}


	}


 ?>