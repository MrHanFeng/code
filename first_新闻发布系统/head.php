<?php
session_start();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk"><title>中北网</title>
<link href="1.css" rel="stylesheet" type="text/css" />

</head>

<body  style="background:#e3e3e3 ;">



<!--第1个大盒子*/-->
<div class="header" >

        <div class="w1000">
            <img src="images/logo.png" alt="中北大学" width=450 height=150  align="left">
			<br><br>

            <div class="header_r">
                <a href="1top.html">							                             	微博</a> 
                <a href="1top.html">						    微信</a> 
 
<?php   
            // $sess=$_SESSION["username"];
            if(isset($_SESSION["username"])){
                echo '<a href="admin/userinformation.php" target="_blank">'.$_SESSION["username"].'</a>';
                echo '<a href="admin/logoff.php" target="_parent">注销</a>';
            }else{                                           
                echo '<a href="admin/login.php" target="_parent">                                 登录</a> 
                      <a href="admin/register.php" target="_parent">                               注册</a>';    
            }
?>
                <a href="javascript:void(0)" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.hahahahahaha.com.cn/');return(false);" style="BEHAVIOR: url(#default#homepage)">设为首页</a>
                <a href="http://localhost:8888/QianQiu/index"   
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
                <a href="index.php" target="_blank"		            >首页</a> 
                <a href="http://shejian2.cntv.cn/"					>美食</a> 
                <a href="http://china.nba.com/"						>运动</a> 
                <a href="http://ai.taobao.com/"						>购物</a> 
                <a href="#"			>学习</a> 
                <a href="http://202.207.177.15:7777/zhxt_bks/zhxt_bks.html"		>选课</a> 
                <a href="http://baike.baidu.com/subview/79827/5107348.htm?fr=aladdin"   >二龙山</a> 
                <a href="http://ss.nuc.edu.cn/editor.php?id=21">中北人物</a>
              
            </div>

            <div style="float:right;margin:8,50,0,0;">
                <form action="search.php" method="post">
                    <input style="text" value="搜索" name="search_name"  onclick="if(this.value==this.defaultValue)this.value=''" weight=50px height=36px;>
                    <input type="hidden" name="jdcz" value="jdcz">
                    <input type="submit" value="立即查找" class="buttoncss">
                </form>
            </div>
	</div>
</div>






