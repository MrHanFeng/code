<?php
session_start();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk"><title>�б���</title>
<link href="1.css" rel="stylesheet" type="text/css" />

</head>

<body  style="background:#e3e3e3 ;">



<!--��1�������*/-->
<div class="header" >

        <div class="w1000">
            <img src="images/logo.png" alt="�б���ѧ" width=450 height=150  align="left">
			<br><br>

            <div class="header_r">
                <a href="1top.html">							                             	΢��</a> 
                <a href="1top.html">						    ΢��</a> 
 
<?php   
            // $sess=$_SESSION["username"];
            if(isset($_SESSION["username"])){
                echo '<a href="admin/userinformation.php" target="_blank">'.$_SESSION["username"].'</a>';
                echo '<a href="admin/logoff.php" target="_parent">ע��</a>';
            }else{                                           
                echo '<a href="admin/login.php" target="_parent">                                 ��¼</a> 
                      <a href="admin/register.php" target="_parent">                               ע��</a>';    
            }
?>
                <a href="javascript:void(0)" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.hahahahahaha.com.cn/');return(false);" style="BEHAVIOR: url(#default#homepage)">��Ϊ��ҳ</a>
                <a href="http://localhost:8888/QianQiu/index"   
                       onclick="window.external.addFavorite('http://www.hahahahahaha.com.cn/','����');  
                                return false;"   
                       title="����վ��ӵ�����ղؼ��У�"   
                       align="center">  
                        �����ղ�  
                </a>  
            </div>
        </div>
    </div>





<!--��2�������*/-->
<div class="nav_w">
	<div class="w1000">
            <div class="nav">
                <a href="index.php" target="_blank"		            >��ҳ</a> 
                <a href="http://shejian2.cntv.cn/"					>��ʳ</a> 
                <a href="http://china.nba.com/"						>�˶�</a> 
                <a href="http://ai.taobao.com/"						>����</a> 
                <a href="#"			>ѧϰ</a> 
                <a href="http://202.207.177.15:7777/zhxt_bks/zhxt_bks.html"		>ѡ��</a> 
                <a href="http://baike.baidu.com/subview/79827/5107348.htm?fr=aladdin"   >����ɽ</a> 
                <a href="http://ss.nuc.edu.cn/editor.php?id=21">�б�����</a>
              
            </div>

            <div style="float:right;margin:8,50,0,0;">
                <form action="search.php" method="post">
                    <input style="text" value="����" name="search_name"  onclick="if(this.value==this.defaultValue)this.value=''" weight=50px height=36px;>
                    <input type="hidden" name="jdcz" value="jdcz">
                    <input type="submit" value="��������" class="buttoncss">
                </form>
            </div>
	</div>
</div>






