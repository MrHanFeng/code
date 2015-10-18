<?php 
 	namespace Model;
 	use Think\Model;

 	class ManagerModel extends Model{
 		//制作一个方法对用户名和密码进行校验
 		function checkNamePwd($name,$pwd){
 			$info = $this -> getByMg_name($name);//getByXXX是__call封装好的方法，返回一个一维数组
 			//如果能查询出来信息，说明有此用户，再比较密码
 			$md6 = new \Component\AdminController;
 			if($info != null){		
 				if($info['mg_pwd'] != $md6->md6($pwd)){
 					return false;
 				} else {
 					return $info;
 				}
 			}else{
 				return false;
 			}

 		}


 	}


 ?>