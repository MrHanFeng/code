<?php
session_start();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk"><title>中北网</title>
<link href="../1.css" rel="stylesheet" type="text/css" />

</head>

<body >

<div class="header">

        <div class="w1000">
            <img src="../images/logo.png" alt="中北大学" width=450 height=150  align="left">
			<br><br>
		 
            <div class="header_r">
                <a href="1top.html">							                             	微博</a> 
                <a href="1top.html">								微信</a>	
<?php	
			// $sess=$_SESSION["username"];
        	if(isset($_SESSION["username"])){
        		echo '<a href="userinformation.php" target="_blank">'.$_SESSION["username"].'</a>';
        		echo '<a href="logoff.php" target="_parent">注销</a>';
        	}else{			                             	 
                echo '<a href="login.php">                                 登录</a> 
               		  <a href="register.php">								注册</a>';	
            }
?>



                <a href="javascript:void(0)" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.hahahahahaha.com.cn/');return(false);" style="BEHAVIOR: url(#default#homepage)">设为首页</a>

      			<a href="www.hahaha.com"   
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
                <a href="http://ai.taobao.com/"						>购物</a> 
                <a href="#"			>学习</a> 
                <a href="http://202.207.177.15:7777/zhxt_bks/zhxt_bks.html"		>选课</a> 
                <a href="http://baike.baidu.com/subview/79827/5107348.htm?fr=aladdin"   >二龙山</a> 
                <a href="http://ss.nuc.edu.cn/editor.php?id=21">中北人物</a>
              
            </div>
	</div>
</div>




	<body>
	
		<form  name="login" action="deallogin.php" method="post" >
		  <table border=1  width="450" height=300 align="center" bgcolor="#87CEFA"  bordercolor="#2c5364" cellspacing=0 class="table">
			<tr>	
				<img src="../images/登陆.gif"  height="130" width=500 >
			</tr>
			
			<tr >
				<th rowspan="3" width="90">
					<ul type="square">
						<li>帐&nbsp&nbsp&nbsp&nbsp号：</li><br><br><br><br>
						<li>密&nbsp&nbsp&nbsp&nbsp码：</li><br><br><br><br>
						<li>验&nbsp证&nbsp码：</li>
					</ul>
				</th>
				<td weight="50">&nbsp&nbsp<input type="text"  value="hf" name="username" size="25" maxlength="10"></td>
			</tr>
			
			
			<tr>
				<td>&nbsp&nbsp<input type="password" name="password" value="" size="25" maxlength="10"></td>
			</tr>
			
			
			<tr>
<!-- 				<td>&nbsp&nbsp<input type="text"  value="" size="25" maxlength="6"></td> -->




					<td colspan='3' width="80" height="20"><div style="align:left; margin-left:8;"	 >
						<input type="text" name="yz" size="10" 
								class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                     
                 	
                 				<div align="right"> &nbsp;
                 				<?php
									   $num=intval(mt_rand(1000,9999));
									   for($i=0;$i<4;$i++){
										echo "<img src=../images/code/".substr(strval($num),$i,1).".gif>";
									   }
									?>
								<input type="hidden" value="<?php echo $num;?>" name="num">
                 				 </div> 
                 	</td>



			</tr>

			
			<tr bgcolor=#2c5364>
				<td colspan="2" align="center">
					<input type="submit" value="登录">
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