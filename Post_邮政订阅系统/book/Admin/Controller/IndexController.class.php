<?php

namespace Admin\Controller;
use Component\AdminController;

class IndexController extends AdminController {


	//首页frameset html 框架集成
    function index(){

        if($_SESSION['mg_id']){
            $this->display();
        }else{
            // $this->redirect('Manager/login','您还未登录！请登录...');
            $this->redirect('Manager/login');
        }
    }
    function head(){
    	//获得当前系统都给我们提供什么常量可使用（系统和自定义）
    	//get_defined_constants([true])
    	//true 参数会把常量自动分组
    	//var_dump(get_defined_constants(true));
    	$this->display();
    }
    function left(){
        // 根据session用户id信息查询角色id信息
        $sql = "select * from bk_manager where mg_id=".$_SESSION['mg_id'];
    	$minfo=D()->query($sql);
        $role_id = $minfo[0]['mg_role_id'];

        //根据角色信息获取权限ids的信息
        $sql ="select * from bk_role where role_id=".$role_id;
        $rinfo = D()->query($sql); 
        // show_bug($rinfo);
        $auth_ids = $rinfo[0]['role_auth_ids'];

        //根据$auth_ids查询全部拥有的权限信息
        // ①获得顶级权限
        $sql ="select * from bk_auth where auth_level=0 ";
        // 如果是admin管理员要实现全部权限
        if($_SESSION['mg_id']!=1){
            $sql.=" and auth_id in ($auth_ids)";
        }
        $p_info = D()->query($sql); 
        // show_bug($ainfo);
        // ②获得次顶级权限
        $sql ="select * from bk_auth where auth_level=1 ";
         // 如果是admin管理员要实现全部权限
        if($_SESSION['mg_id']!=1){
            $sql.=" and auth_id in ($auth_ids)";
        }
        $s_info = D()->query($sql); 


        $this->assign('pauth_info',$p_info);
        $this->assign('sauth_info',$s_info);

        $this->display();
    } 

        function right(){
        $this->display();
    }

    function modifypwd(){

        //调用display(); 没有参数，那么获得的模版名称与当前操作的名称一直
        //display('hello'); Amidn/View/Magager/hello.html
        //show_bug($_POST);
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
                $rst = $user -> checkNamePwd($_POST['mg_name'],$_POST['mg_password']);
                if($rst==false){
                    echo "原密码错误";
                }else{
                    // 修改密码
                    //先判断两次密码是否一致
                    if($_POST['mg_pwd']==$_POST['mg_pwd2'])
                    {
                        $user->create();
                        $userinfo = new \Model\ManagerModel();
                        $mg_id_info = $userinfo -> getByMg_name($_POST['mg_name']);
                        //show_bug($mg_id_info);
                        $rst = $user -> where("mg_id=$mg_id_info[mg_id]")-> save();
                        if($rst){
                             // echo "修改密码成功:)";
                             $this->success('修改密码成功:)',U('right'));
                        }else{
                             // echo "修改密码失败(:";
                            $this->success('修改密码失败(:');
                        }
                    }
                    else
                    {
                         echo "两次密码不一致";
                    }
                    
                            // $this-> redirect('Index/index');

                }

            }
        }
            $this->display();   
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
        'useNoise'  => false,           // 是否添加杂点  
        'imageH'    => 40,              // 验证码图片高度
        'imageW'    => 150,             // 验证码图片宽度
        'length'    => 4,               // 验证码位数
        'fontttf'   => '4.ttf',              // 验证码字体，不设置随机获取
        'bg'        => array(243, 251, 254),  // 背景颜色
            );
        $verify = new \Think\Verify($config);
        $verify -> entry();

    }

}