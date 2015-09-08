<?php

namespace Model;
use Think\Model;

//父类model 在/ThinkPHP/Library/Think/Model.class.php
class UserModel extends Model{
	//一次性获取全部的验证错误
	protected $patchValidate  = true;
	//实现表单项目验证
	//通过重写父类属性——validate实现表单验证
    protected $_validate  =   array(  // 自动验证定义
    	//验证用户名 require必须填写

    	array('username','require','用户名必须填写'),
    	array('password','require','密码必须填写'),

    	//可以为同一个项目设置多个验证规则
    	array('password2','require','密码必须填写'),
    	array('password2','password','两次密码必须一致',0,'confirm'),

    	//邮箱验证
    	array('user_email','email','邮箱格式不正确',2),
    	
    	//验证QQ
    	//都为数字，长度5-10、首位不为0
    	//正则验证 /^[1-9]\d{4,9}$/
    	array('user_qq','/^[1-9]\d{4,9}$/','QQ格式不正确'),

    	//验证手机号
    	//都为数字，长度11位、首位不为0
    	//正则验证 /^[1-9]\d{10}$/   /1[3|5|7|8|][0-9]{9}/
    	array('user_tel','/1[3|5|7|8|][0-9]{9}/','手机格式不正确'),

    	//学历 必须选择一个，值在 2，3，4，5访问内
    	array('user_xueli',"2,3,4,5",'必须选择一个学历','0','in'),

    	//爱好 必须选择两项以上
    	//爱好的值是数组，数组元素个数为两个以上
    	array('user_hobby','check_hobby','爱好必须两项以上',1,'callback'),

	);
	//自定义方法验证爱好信息
	//$name 参数是当前被验证项目的信息
	//$name = $_POST['user_hobby']
	function check_hobby($name){
		// print_r($name);
		if(count($name)<2){
			return false;
		}else {
			return true;
		}

	}


    // 登录
    // 制作判读用户名和密码的方法
    function checkNamePwd($username,$pwd){
        // 根据$name查询是否有此记录
        // select * from sw_user where username=$username;
        // select()  find()
        // 根据指定字段进行查询getByXXX()  getByMg_name($username)
        // getByUsername();   父类model 利用__call() 封装的方法        php 方法不区分大小写
        // getByXXX()函数返回一维数组信息
        $info = $this -> getByUsername($username);
        // $info =null 说明用户名错误
        // $info =一维数组 用户名正确
        // show_bug($info);
        // $info 不为null 就可以继续验证密码
        if($info!= null){
            //验证密码(查询出来的密码与用户输入的密码比较)
            if($info['password'] !=$pwd){
                return false;
            }else{
                return $info;
            }
        }else{
            return false;
        }


    }
} 
