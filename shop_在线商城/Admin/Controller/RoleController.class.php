<?php 
	namespace Admin\Controller;
	use Component\AdminController;

	// 角色控制器
	class RoleController extends AdminController{


		// 显示角色列表
		function showlist(){

			$info = D('role') ->select();
			$this->assign('info',$info);
			$this->display();
		}
		// 添加角色
		function add_role(){
			$role = D('role');
			if(!empty($_POST)){
				$role->create();
				$re = $role->add();
				if($re){
					$this->success("添加角色成功",U('Role/showlist'));
				}else{
					$this->error("添加角色失败");
				}
			}else{
				$role->create();
				$role_id = $role ->add();
				$this->assign("role_id",$role_id);
				$this->display();
			}
		}

		// 修改角色权限
		function distribute($role_id){
			if(!empty($_POST)){
				// 利用RoleModel专门实现权限分配
				$role = new \Model\RoleModel();
				//saveAuth接收到一维数组信息
				$z = $role -> saveAuth($_POST['authname'], $role_id);
				if($z){
				    $this -> success('分配权限成功！',U('showlist'));
				} else {
				    $this -> error('分配权限失败！',U('showlist'));
				}
			}else{
				// 根据$role_id查询对应的角色名字
				$rinfo = D('role')->getByRole_id($role_id);
				$this ->assign('role_name',$rinfo['role_name']);

				// 查询全部的权限信息，放入模版显示并进行权限分配
				$pauth_info = D('Auth')->where('auth_level=0')->select();//父级权限
				$sauth_info = D('Auth')->where('auth_level=1')->select();//次父级权限
				$tauth_info = D('Auth')->where('auth_level=2')->select();//次次父级权限
				$this ->assign('pauth_info',$pauth_info);//把查询到的父级值传递到前台
				$this ->assign('sauth_info',$sauth_info);//把查询到的次父级值传递到前台
				$this ->assign('tauth_info',$tauth_info);//把查询到的次父级值传递到前台

				// 查询当前角色有的权限，为了让已存在的权限打勾
				$authinfo = D("Role")->getByRole_id($role_id);
				$auth_ids_arr = explode(',',$authinfo['role_auth_ids']); //数组auth_id 信息
				$this -> assign('auth_ids_arr', $auth_ids_arr);//把查询到已存在的权限ID传到前台

				$this->display();
			}
			
		}

		function del_role($role_id){
			$re = D('role')->delete($role_id);
			    if($re){
			        $this->success('删除角色成功',U('Role/showlist'));
			    }else{
			        $this->error('删除角色失败',U('Role/showlist'));
			    }
		}

	}


 ?>