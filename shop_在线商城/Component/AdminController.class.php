<?php

//普通控制器的父类
namespace Component;
use Think\Controller;

class AdminController extends Controller{
    
    //构造方法,判断权限
    function __construct() {
        //先执行父类的构造方法，否则系统要报错
        //因为原先的构造方法默认是被执行的
        parent::__construct();
        
        // session判断
        if(!isset($_SESSION['mg_username'])){
             if( "login" != substr(strrchr(U(),'/'),1,5)){//截取出当前页面的URL，若等于login，不执行下边
                $this -> error('请先登录',U('Manager/login'));
             }
        }

        //CONTROLLER_NAME ---Goods
        //ACTION_NAME  ----showlist
        //当前请求操作在哪里，方便与后边SQL查询出来的进行比较

        $now_ac = CONTROLLER_NAME."-".ACTION_NAME;
        
        //过滤控制器和方法，避免用户非法请求
        //通过角色获得用户可以访问的控制器和方法信息
        $sql ="select role_auth_ac from sw_manager a join sw_role b on a.mg_role_id=b.role_id where a.mg_id=".$_SESSION['mg_id'];
        $auth_ac = D()->query($sql);
        // show_debug($auth_ac);

       $auth_ac = $auth_ac[0]['role_auth_ac'];
        
        //判断$now_ac是否在$auth_ac字符串里边有出现过
        //strpos函数如果返回false是没有出现，返回0 1 2 3表示有出现
        //管理员不限制
        //默认以下权限没有限制
        //Index/left  Index/right  Index/head  Index/index  Manager/login Manager-logout','Manager-verifyImg'
        $allow_ac = array('Index-left','Index-right','Index-head','Index-index','Manager-login','Manager-logout','Manager-verifyImg');
        if(!in_array($now_ac,$allow_ac) && $_SESSION['mg_id'] !=1 && strpos($auth_ac,$now_ac) === false){
            $this -> error('没有权限访问',U("Index/index"));
        }

    }

    //  访问空方法调用
    function _empty(){
        echo "<img src='".IMG_URL."404.gif"."' alt=''>";
    }

    function md6($pwd){
        return md5(md5($pwd));
    }

    /**
     * SQL语句结果的IF判断
     * @param $re ,执行SQL语句后的返回结果
     * @param $right $right[0]正确提示信息，$right[1]正确跳转页
     * @param $error $error[0]错误提示信息，$error[1]错误跳转页
     */
    function if_re($re,$right,$error){
        if($re){
            $this->success($right[0],U($right[1]));
        }else{
            $this->error($error[0],U($error[1]));
        }
    }


}
