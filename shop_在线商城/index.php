<?php 
// 调试函数
	function show($msg){
	    echo "<pre style='color:red'>";
	    var_dump($msg);
	    echo "</pre>";
	}    

	// 把目前TP模式由生产模式变为开发模式
	define("APP_DEBUG",true);

	// 定义CSS,JS,IMG路径常量
	define("SITE_URL","http://localhost/buy_tp/shop/");

	define('UPLOAD',$_SERVER['DOCUMENT_ROOT'].'/buy_tp/shop/Public/');//上传图片的根目录,物理路径，用于对文件的操作
	define("IMG_UPLOAD",SITE_URL."Public/");//上传图片的根目录

	define("CSS_URL",SITE_URL."Public/Home/css/"); //css
	define("IMG_URL",SITE_URL."Public/Home/images/"); //img
	define("JS_URL",SITE_URL."Public/Home/js/"); //js

	define("ADMIN_CSS_URL",SITE_URL."Public/Admin/css/"); //css
	define("ADMIN_IMG_URL",SITE_URL."Public/Admin/images/"); //css
	define("ADMIN_JS_URL",SITE_URL."Public/Admin/js/"); //css




	// 引入框架的核心程序,放在最后！！
	include "../ThinkPHP/ThinkPHP.php";



	
 ?>