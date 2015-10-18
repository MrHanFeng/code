<?php 

	namespace Admin\Controller;
	use Think\Controller;

	class ManagerController extends Controller{

		function login(){
			if(!empty($_POST)){
				$verify = new \Think\Verify();//实例化验证码类
				if(!$verify -> check($_POST['captcha'])){
					$re="<font color=red>验证码错误</font>";
					$this->assign('re',$re);
				}else{
					$user = new \Model\ManagerModel();//实例化用户验证类
					$re =  $user ->checkNamePwd($_POST['mg_username'],$_POST['mg_password']);
					if( $re === false){
							$re="<font color=red>帐号或者密码错误</font>";
							$this->assign('re',$re);
					}else{
						//登录成功，录入SESSION
						session('mg_username',$re['mg_name']);
						session('mg_id',$re['mg_id']);
						$time = D('manager');
						$time->mg_id = $re['mg_id'];
						$time->mg_time = time();
						$time->save();
						// $this->redirect($url,$params,$delay,$msg)
						$this->redirect('Index/index');
					}
				}
			}
			$this -> display();
		}


		function logout(){
			session(null);
			$this -> redirect('Manager/login');
		}


		function verifyImg(){
			$config = array(
					'imageH' =>30,		//验证码高度
					'imageW' =>100,		//验证码宽度
					'fontSize' => 14,	//验证码字体大小
					'fontttf'=>'4.ttf', //验证码字体风格
					'length' => 4,		//验证码位数
				);
			$verify = new \Think\Verify($config);//实例化验证码类
			$verify -> entry();//生成验证码
		}


	}
 ?>