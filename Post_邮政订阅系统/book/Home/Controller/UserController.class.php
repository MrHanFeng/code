<?php

namespace Home\Controller;
use Think\Controller;
//Controllor父类：ThinkPHP/Libraey/Think/Controller.class.php
class UserController extends Controller{
	//用户登录 默认为public
	    function login(){
		//调用display(); 没有参数，那么获得的模版名称与当前操作的名称一直
		//display('hello'); Amidn/View/Magager/hello.html

    	if(!empty($_POST)){
            show_bug($_POST);
    		// 验证码校验
    		$verify = new \Think\Verify();
    		if(!$verify->check($_POST['captcha'])){
    			// echo "验证码错误";
				$this ->assign('error_verify','验证码错误');

    		}else{
    			// echo "验证码正确";
    			// 判断用户名和密码，在model模型里面制作方法进行验证
    			// ①先判断用户名存在与否
    			// ②再判断密码是否正确
    			$user = new \Model\UserModel();
    			$rst = $user -> checkNamePwd($_POST['username'],$_POST['password']);
                echo "123";
                show_bug($rst);
    			if($rst==false){
    				echo "用户名或密码错误";
                    $this-> success('登录成功','/Index/index');
    			}else{
    				// 登录信息持久化
    				session('username',$rst['username']);
    				session('user_id',$rst['user_id']);
    				// session(name,value) 设置session
    				// session(name) 获取 session
    				// session(name,null) 删除指定session
    				// session(null) 清空全部session
    				// 页面跳转到后台首页redirect()
    				// $this->redirect($url,$params,$delay,$msg)
    				$this-> success('登录成功','/Index/index');
    				//$this-> redirect('Index/index', array('cate_id' => 2), 2, '登陆成功，页面跳转中');


    			}

    		}
    	}

    		$this -> assign('lang',L());
			$this->display();  	

    }


    // 退出系统logout
    function logout(){
    	session(null);
    	$this ->redirect("User/login");
    }
    // 制作专门的方法实现验证码生成
    function verifyImg(){
    	// 以下类verify在之前并没有include引入
    	// 走自动加载Think.class.php  autoload()
    	$config = array(
        'useZh'     => false,           // 使用中文验证码 
        'useImgBg'  => false,           // 使用背景图片 
        'fontSize'  => 15,              // 验证码字体大小(px)
        'useCurve'  => false,            // 是否画混淆曲线
        'useNoise'  => false,            // 是否添加杂点	
        'imageH'    => 28,              // 验证码图片高度
        'imageW'    => 105,             // 验证码图片宽度
        'length'    => 4,               // 验证码位数
        'fontttf'   => '4.ttf',              // 验证码字体，不设置随机获取
        'bg'        => array(243, 251, 254),  // 背景颜色
    		);
    	$verify = new \Think\Verify($config);
    	$verify -> entry();

    }
	//用户注册
	function register(){
		$user = new \Model\UserModel();
		//判断表单师范提交
		if(!empty($_POST)){
			//show_bug($_POST);
			$z=$user->create();  //集成表单验证
			//只有全部验证通过$z才会为真
			if(!$z){
				//验证失败，输出错误信息
				//getError() 方法返回验证失败的信息
				// show_bug($user->getError());
				$user->getError();
				$this ->assign('user',$user->getError());

				// exit();

			}else{
				//把爱好由数组变成字符串“1，3，4”
				// 使用ar方式处理爱好的字段信息
				// create() 方法收集的数据也是把数据变为模型对象的属性
				$user -> user_hobby = implode(',',$_POST['user_hobby']);
				$rst = $user->add();
				if($rst){
					$this->success('注册成功',U('Index/index'));
					// echo "success";
				}else{
					echo "error";
					$this->error('注册失败',U('Index/index'));
				}
			}
		}else{
			$this->display();
		}
	 	
	}

	//空操作跳转到：404页面
	function _empty(){
		// echo "<img src='".IMG_URL.'404.gif'."' alt='' />";
        $this->display('User:404');

	}

    function user_relation(){

        $this->display();
    }

    function user_relation_add(){

        $this->display();
    }

    function ucenter(){

        $this->display();
    }

}    