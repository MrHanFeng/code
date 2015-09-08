<?php
session_start();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk"><title>中北网</title>
<link href="1.css" rel="stylesheet" type="text/css" />

</head>

<body >



<!--第1个大盒子*/-->
<div class="header">

        <div class="w1000">
            <img src="../images/logo.png" alt="中北大学" width=450 height=150  align="left">
			<br><br>

            <div class="header_r">
                <a href="1top.html">							                             	微博</a> 
                <a href="1top.html">							                             	微信</a> 
              	
<?php	
			// $sess=$_SESSION["username"];
        	if(isset($_SESSION["username"])){
        		echo '<a href="userinformation.php" target="_blank">'.$_SESSION["username"].'</a>';
        	}else{			                             	 
                echo '<a href="login.php">                                 登录</a> 
               		  <a href="register.php">								注册</a>';	
            }
?>
                <a href="javascript:void(0)" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.hahahahahaha.com.cn/');return(false);" style="BEHAVIOR: url(#default#homepage)">设为首页</a>
                <a href="#"   
                       onclick="window.external.addFavorite('http://www.hahahahahaha.com.cn/','韩峰');  
                                return false;"   
                       title="将本站添加到你的收藏夹中！"   
                       align="center">  
                        加入收藏  
                </a>  
            </div>
        </div>
    </div>





<!--第2个大盒子*/-->
<div class="nav_w">
	<div class="w1000">
            <div class="nav">
                <a href="../index.php" target="_blank"		>首页</a> 
                <a href="http://shejian2.cntv.cn/"					>美食</a> 
                <a href="http://china.nba.com/"						>运动</a> 
                <a href="http://ai.taobao.com/	"					>购物</a> 
                <a href="#"			>学习</a> 
                <a href="http://202.207.177.15:7777/zhxt_bks/zhxt_bks.html"		>选课</a> 
                <a href="http://baike.baidu.com/subview/79827/5107348.htm?fr=aladdin"   >二龙山</a> 
                <a href="http://ss.nuc.edu.cn/editor.php?id=21">中北人物</a>
              
            </div>
	</div>
</div>




<html>
   <head>
		<meta http-equiv="content-type" content="text/html;charset=gbk"><title>中北网</title>
		<link href="../1.css" rel="stylesheet" type="text/css" />
		<title>后台管理</title>
	</head>
	<body>
	
		<form  name="login" action="dealregister.php" method="post" align=center>
		  <table border=1  width="450" height=100 align="center" bgcolor="#87CEFA"  bordercolor="#2c5364" cellspacing=8 cellpadding=20 class="table">
			<tr>	
				<img src="../images/登陆.gif"  height="130" width=500 >
			</tr>
			
			<tr >
					<td align=center>帐&nbsp&nbsp&nbsp&nbsp号：</td>
					<td >&nbsp&nbsp<input type="text"  value="" name="username" size="25" maxlength="10"></td>
			</tr>
			
			
			<tr>
					<td align=center>密&nbsp&nbsp&nbsp&nbsp码：</td>
					<td >&nbsp&nbsp<input type="password" name="password" value="" size="27" maxlength="10"></td>
			</tr>

			<tr>
					<td align=center>确认密码：</td>
					<td >&nbsp&nbsp<input type="password" name="password2" value="" size="25" maxlength="10"></td>
			</tr>
			

			
			<tr bgcolor=#2c5364>
				<td colspan="2" align="center">
					<input type="submit" value="注册">
					<input type="reset" >
					<input type="button" value="清空" onclick="document.fir username">
					<a href="localhost/try/" target="_blank"	><input type="button" value="返回首页" ></a>
				</td>
			</tr>
	
		  </table>
		 </form>
<?php
include_once '../foot.php';
?>
	</body>
