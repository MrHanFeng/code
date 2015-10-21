<?php

namespace Model;
use Think\Model;

//权限模型
class AuthModel extends Model{
    //添加权限方法
    function addAuth($auth){
        //$auth里边存在4个信息，还缺少两个关键信息：auth_path和auth_level
        $new_id = $this -> add($auth);  //返回新记录的主键id值
        
        
        if($auth['auth_pid'] == 0){ //① 当前权限是顶级权限，path=$new_id
            $auth_path = $new_id;
        } else {                    //② 当前权限是非顶级权限，path=父级全路径+$new_id
            $pinfo = $this -> find($auth['auth_pid']); //查询出父级的记录信息
            $p_path = $pinfo['auth_path']; //找到它里边存的对应的父级全路径
            $auth_path = $p_path."-".$new_id;   //组装起来
        }

        //      把全路径变为数组，计算数组的个数和减去-1，就是level的信息
        $auth_level = count(explode('-',$auth_path))-1;
        
        $dt = array(
            'auth_id' => $new_id,
            'auth_path'=>$auth_path,
            'auth_level'=>$auth_level,
        );
        return $this -> save($dt);
    }

    // 修改权限
    function updateAuth($auth){
        // show_debug($auth);
        // exit;
        //$auth里边存在4个信息，还缺少两个关键信息：auth_path和auth_level
        $new_id = $auth['auth_id'];//返回操作本行的ID值
        
        if($auth['auth_pid'] == 0){ //① 当前权限是顶级权限，path=$new_id
            $auth_path = $new_id;
        } else {                    //② 当前权限是非顶级权限，path=父级全路径+$new_id
            $pinfo = $this -> find($auth['auth_pid']); //查询出父级的记录信息
            $p_path = $pinfo['auth_path']; //找到它里边存的对应的父级全路径
            $auth_path = $p_path."-".$new_id;   //组装起来
        }

        //      把全路径变为数组，计算数组的个数和减去-1，就是level的信息
        $auth_level = count(explode('-',$auth_path))-1;
        
        $dt = array(
            'auth_id' => $new_id,
            'auth_path'=>$auth_path,
            'auth_level'=>$auth_level,
        );
        $arr = array_merge($auth,$dt);
        // show_debug($arr);
        // show_debug($auth);
        // show_debug($dt);exit;
        return $this -> save($arr);
    }

}

