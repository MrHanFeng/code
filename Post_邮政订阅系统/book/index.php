<?php

header("content-type:text/html;charset=utf-8");

//制作一个输出调试函数
function show_bug($msg){
		echo "<pre style='color:red'>";
	 	var_dump($msg);
	 	echo "</pre>";
}
//定义css、img、js常量
define("SITE_URL","http://localhost/Post/");
define("CSS_URL",SITE_URL."book/Public/Home/css/");//css路径
define("IMG_URL",SITE_URL."book/Public/Home/img/");//img路径
define("JS_URL",SITE_URL."book/Public/Home/js/");//js路径

define("ADMIN_CSS_URL",SITE_URL."book/Public/Admin/css/");//css路径
define("ADMIN_IMG_URL",SITE_URL."book/Public/Admin/img/");//img路径
define("ADMIN_JS_URL",SITE_URL."book/Public/Admin/js/");//js路径


define("__PUBLIC__",SITE_URL."book/Public/");

//百度Ueditor路径
define("UEDITOR_URL",SITE_URL."book/Public/Ueditor/");

// 为上传图片设置路径
define("IMG_UPLOAD",SITE_URL."book/Public/");


//把当前模式由生产模式变为开发模式
define("APP_DEBUG",true);


//引入框架的核心程序
include "../ThinkPHP/ThinkPHP.php";