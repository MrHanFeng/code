<?php
session_start();
?>

<head>
<meta charset=GBK>
<style type="text/css">
body{
	padding:0px;
	margin: 0 0 0 80px;
}
a{
	color:#d7d7d7;
	text-decoration:none;
}
a:hover{ 
	color:#FF4500;
	margin-top:2px;
	margin-left:2px;	
	}
h2{ color:yellow }

</style>
</head>


<body bgcolor="#2c5364" color=#d7d7d7 leftmargin=100 rightmargin=0;>
<br>
<br>
<?php
		 if(empty($_SESSION["superuser"])){
                echo '<a href="login.php" target="_parent"> <h2>请您先登录</h2></a>';
            }else{
            	echo '<h2>后台管理<br/></h2>

				<br/>
				新闻管理<br/>
				--------------<br/>

				<a href="news/addnews.php" target="main" title="点呀~">添加新闻</a><br/><br/>
				<a href="news/listnews.php" target="main" title="快点呀~">新闻列表</a><br/>
				<br/>
				<br/>
				用户管理<br/>
				--------------<br/>
				<a href="users/adduser.php" target="main" title="怂不怂？！">添加用户</a><br/><br/>
				<a href="users/listusers.php" target="main" title="敢不敢点？">用户列表</a>';
		}
?>
</body>