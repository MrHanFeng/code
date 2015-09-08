<?php

namespace Admin\Controller;
use Think\Controller;

class ManagerController extends Controller {

    function login(){
		//调用display(); 没有参数，那么获得的模版名称与当前操作的名称一直
		//display('hello'); Amidn/View/Magager/hello.html

    	if(!empty($_POST)){
    		// 验证码校验
    		$verify = new \Think\Verify();
    		if(!$verify->check($_POST['captcha'])){
    			echo "验证码错误";
    		}else{
    			// echo "验证码正确";
    			// 判断用户名和密码，在model模型里面制作方法进行验证
    			// ①先判断用户名存在与否
    			// ②再判断密码是否正确
    			$user = new \Model\ManagerModel();
    			$rst = $user -> checkNamePwd($_POST['mg_username'],$_POST['mg_password']);
    			if($rst==false){
    				echo "用户名或密码错误";
    			}else{
    				// 登录信息持久化
    				session('mg_username',$rst['mg_name']);
    				session('mg_id',$rst['mg_id']);
    				// session(name,value) 设置session
    				// session(name) 获取 session
    				// session(name,null) 删除指定session
    				// session(null) 清空全部session
    				// 页面跳转到后台首页redirect()
    				// $this->redirect($url,$params,$delay,$msg)
    				$this-> redirect('Index/index');


    			}

    		}
    	}

    		$this -> assign('lang',L());
			$this->display();  	

    	

    }
    // 退出系统logout
    function logout(){
    	session(null);
    	$this ->redirect("Manager/login");
    }

    // 制作专门的方法实现验证码生成
    function verifyImg(){
    	// 以下类verify在之前并没有include引入
    	// 走自动加载Think.class.php  autoload()
    	$config = array(
        'useZh'     => false,           // 使用中文验证码 
        'useImgBg'  => false,           // 使用背景图片 
        'fontSize'  => 20,              // 验证码字体大小(px)
        'useCurve'  => true,            // 是否画混淆曲线
        'useNoise'  => false,            // 是否添加杂点	
        'imageH'    => 40,              // 验证码图片高度
        'imageW'    => 150,             // 验证码图片宽度
        'length'    => 4,               // 验证码位数
        'fontttf'   => '4.ttf',              // 验证码字体，不设置随机获取
        'bg'        => array(243, 251, 254),  // 背景颜色
    		);
    	$verify = new \Think\Verify($config);
    	$verify -> entry();

    }

    function showlist(){
        $info =D('Manager')->select();
        // 下面部分以提取为函数
        // // 查询全部角色的信息
        // $rrinfo = D("Role")->select();//二维数组信息
        // // array(1=>'经理',2=>'主管',3=>'总监');
        
        // $rinfo=array();
        // foreach ($rrinfo as $k => $v) {
        //     $rinfo[$v['role_id']]= $v['role_name'];// array(1=>'经理',2=>'主管');
        // }

        // // $this->assign('rinfo',array(1=>'经理',2=>'主管'));
        $rinfo = $this->getRoleInfo();


        $this->assign('rinfo',$rinfo);
        $this->assign('info',$info);
        $this->display();

    }


    function add(){
    //两个逻辑：1展现表单2接收表单数据
        $manager = D("Manager");
        if(!empty($_POST)){
            $manager -> create();//收集post表单数据
            $z= $manager->add();
            if($z){
                $this->success('添加管理员成功',U('showlist'));
            }else{
                $this->error('添加管理员失败',U('showlist'));
            }
        }else{

        // 获得管理员信息
        $roleinfo = D('Role') ->select();
        $this->assign('roleinfo',$roleinfo);

        $this->display();
        }
    }

    function upd($mg_id){

        if(!empty($_POST)){
            // print_r($_POST);
            $manager =D('Manager');
            $manager->create();
            $z=$manager->save();
            if($z){
                $this->success('修改管理员成功',U('showlist'));
            }else{
                $this->error('修改管理员失败',U('showlist'));

            }
        }else{


        // 获得被修改管理员的信息
        $info = D('Manager')->find($mg_id);
        // 获得角色信息
        $rinfo = $this->getRoleInfo();

        $this->assign('rinfo',$rinfo);
        $this->assign('info',$info);
        $this->assign('mg_id',$mg_id);
        $this->assign('role_id',$info['mg_role_id']);//当前管理员的角色
        $this->display();
        }
    }
    function del($mg_id){

        $z = D('Manager')->delete($mg_id);
        if($z){
                $this->success('删除管理员成功',U('showlist'));
            }else{
                $this->error('删除管理员失败',U('showlist'));
            }
    }



    // 查询全部角色的信息
    function getRoleInfo(){
        // 查询全部角色的信息
        $rrinfo = D("Role")->select();//二维数组信息
        // array(1=>'经理',2=>'主管',3=>'总监');
        
        $rinfo=array();
        foreach ($rrinfo as $k => $v) {
            $rinfo[$v['role_id']]= $v['role_name'];// array(1=>'经理',2=>'主管');
        }
        return $rinfo;
    }
}