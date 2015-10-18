<?php

namespace Admin\Controller;
use Component\AdminController;

class AuthController extends AdminController{

    // 展示权限列表
    function showlist(){
        $info = $this -> getInfo();
        $this -> assign('info', $info);
        $this -> display();
    }
    // 添加权限
    function add(){
        if(!empty($_POST)){
            //在AuthModel里边通过一个指定方法实现权限添加
            $auth = new \Model\AuthModel();
            $z = $auth->addAuth($_POST);//执行添加6个数据
            if($z){
                $this -> success('添加权限成功！',U('showlist'));
            }else {
                $this -> error('添加权限失败！',U('add'));
            }
        }else{
            //获得父级权限信息
            $info = $this -> getInfo(true);
            //show_bug($info); 
            //从$info里边获得信息。例如：array(1=>'商品管理',2=>'添加商品',3=>'订单打印')
            //以便在smarty模板中使用{html_options}
            $authinfo = array();
            foreach($info as $v){//二维变一维数组
                $authinfo[$v['auth_id']] = $v['auth_name'];
            }

            $this -> assign('authinfo', $authinfo);
            $this -> display();
        }
    }
    //修改权限
    function update($auth_id){
        if(!empty($_POST)){
            $auth = new \Model\AuthModel();
            $z = $auth->updateAuth($_POST);//执行添加6个数据
            if($z){
                $this -> success('添加权限成功！',U('showlist'));
            }else {
                $this -> error('添加权限失败！',U('showlist'));
            }
        }else{
            $info = D('auth')->find($auth_id);
            $this->assign("auth_info",$info);

            // 查询出父级权限,下拉列表
            $re = $this->getInfo(true);
            $auth_pid_arr =array();
            foreach ($re as $k => $v) {
                $auth_pid_arr[$v['auth_id']]=$v['auth_name'];
            }
            $this->assign('auth_pid',$info['auth_pid']);//默认选中当前下拉
            $this->assign('auth_pid_arr',$auth_pid_arr);


            $this->display();
        }
    } 
    // 删除权限
    function del_auth($auth_id){
        $re = D('auth')->delete($auth_id);
        if($re){
                 $this->success('删除权限成功',U('Auth/showlist'));
        }else{
                 $this->error('删除权限失败',U('Auth/showlist'));
        }
    }




    // 查看管理员信息
    function manager(){
        $info = D('manager')->select();
        $this->assign('manager_info',$info);
        
        $role = D('role')->field('role_id,role_name')->select();
        $role_ar = array();
        foreach ($role as $k => $v) {
            $role_ar[$v['role_id']] = $v['role_name'];
        }
        $this->assign('role_info',$role_ar);

        $this->display();
    }
    // 添加管理员
    function add_manager(){
        if(!empty($_POST)){
            $info = D('manager');
            $info ->create();
            $info ->mg_pwd = $this->md6($_POST['mg_pwd']);//以MD6加密存入密码
            $info ->mg_time = time();//以MD6加密存入密码
            $re = $info ->add();
            if($re){
                $this->success('添加管理员成功','manager');
            }else{
                $this->error('添加管理员失败');
            }
        }else{
            $info = D('role')->select();
            $role_ar = array();
            foreach ($info as $k => $v) {
                $role_ar[$v['role_id']] = $v['role_name'];
            }
            $this->assign('role_info',$role_ar);
            $this->display();
        }
    }
    // 修改管理员信息
    function update_manager($mg_id){
        if(!empty($_POST)){
            // ss($_POST);
            $info = D('manager');
            $info ->create();
            $info ->mg_pwd =$this->md6($_POST['mg_pwd']);//以MD6加密存入密码
            $re = $info ->save(); 
            if($re){
                $this->success('修改管理员成功',U('Auth/manager'));
            }else{
                $this->error('修改管理员失败');
            }
        }else{
            $info = D('manager')->find($mg_id);
            $this->assign('manager_info',$info);//把该管理员信息传入前台
            /*味蕾下拉菜单全部角色名字*/
            $info = D('role')->select();        
            $role_ar = array();
            foreach ($info as $k => $v) {
                $role_ar[$v['role_id']] = $v['role_name'];
            }
            $this->assign('role_info',$role_ar);
            $this->display();
        }

    }
    // 删除管理员信息
    function del_manager($mg_id){
       $re =  D('manager')->delete($mg_id);
       if($re){
                $this->success('删除管理员成功',U('Auth/manager'));
       }else{
                $this->error('删除管理员失败');
       }
    }




    // 以二维数组形式，返回权限表里各个的信息
    function getInfo($flag=false){
        //如果$flag标志为false，查询全部的权限信息
        //如果$flag标志为true,只查询level=0/1的权限信息
        $auth = D('Auth');
        // 为了区分上边有两个函数调用时的区别
        if($flag == true){
             $info = D('Auth')->where('auth_level<2')->order('auth_path asc')->select();//在add页面，排序查询出来，auth_level 3的就不用做父类了
        }else {
             $info = D('Auth')->order('auth_path asc')->select();//在showlist页面，排序查询出来，让他父级次父级排在一起
        }
        //$info[X][auth_name] = "->"auth_name
        foreach($info as $k => $v){
            $info[$k]['auth_name'] = str_repeat('__',$v['auth_level']).$info[$k]['auth_name'];//根据auth_level来控制缩进的次数
        }

        return $info;
    }
}
