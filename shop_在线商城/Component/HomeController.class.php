<?php

//普通控制器的父类
namespace Component;
use Think\Controller;

class HomeController extends Controller{
    //构造方法
    function __construct() {
        //先执行父类的构造方法，否则系统要报错
        //因为原先的构造方法默认是被执行的
        parent::__construct();
    }

    //  访问空方法调用
    function _empty(){
        echo "<img src='".IMG_URL."404.gif"."' alt=''>";
    }

    function md6($pwd){
        return md5(md5($pwd));
    }
    

}
