<?php

   mysql_connect("localhost","root","root");//用于连接数据库服务器
   mysql_select_db("soft");				//选择其中的一个数据库
   mysql_query("set names gbk");		//解决乱码问题

/*
	mysql_query($sql);发送一条 MySQL 查询
	session_start();用在存东西用的,code	
	mysql_num_rows($result);记录$result中数量，返回结果集中行的数目


*/
   
/*
先进入主界面(index.php)
1.登录连接
	----处理登陆页面(deallogin.php)
			失败:login.php 页面
			成功：index.php 页面
				进入框架index.php，
				
				新闻管理：
						添加新闻（news/addnews.php）：
							处理添加新闻（dealaddnews.php）
						
						新闻列表（news/listnews.php）：
							修改新闻（modifynews.php）
								处理修改（dealmodifynews.php）
							删除新闻（delnews.php）
				用户管理:
						添加用户（users/adduser.php）
							处理添加用户（dealadduser.php）
				
						用户列表（users/listusers.php）
							修改用户（modifyuser.php）
								处理修改（dealmodifyuser.php）
							删除用户（deluser.php）

2.新闻查询，本页面+（student，teacher）新闻
3.查询快递页面（show）
*/


?>