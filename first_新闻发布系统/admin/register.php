<?php
session_start();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk"><title>�б���</title>
<link href="1.css" rel="stylesheet" type="text/css" />

</head>

<body >



<!--��1�������*/-->
<div class="header">

        <div class="w1000">
            <img src="../images/logo.png" alt="�б���ѧ" width=450 height=150  align="left">
			<br><br>

            <div class="header_r">
                <a href="1top.html">							                             	΢��</a> 
                <a href="1top.html">							                             	΢��</a> 
              	
<?php	
			// $sess=$_SESSION["username"];
        	if(isset($_SESSION["username"])){
        		echo '<a href="userinformation.php" target="_blank">'.$_SESSION["username"].'</a>';
        	}else{			                             	 
                echo '<a href="login.php">                                 ��¼</a> 
               		  <a href="register.php">								ע��</a>';	
            }
?>
                <a href="javascript:void(0)" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.hahahahahaha.com.cn/');return(false);" style="BEHAVIOR: url(#default#homepage)">��Ϊ��ҳ</a>
                <a href="#"   
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
                <a href="../index.php" target="_blank"		>��ҳ</a> 
                <a href="http://shejian2.cntv.cn/"					>��ʳ</a> 
                <a href="http://china.nba.com/"						>�˶�</a> 
                <a href="http://ai.taobao.com/	"					>����</a> 
                <a href="#"			>ѧϰ</a> 
                <a href="http://202.207.177.15:7777/zhxt_bks/zhxt_bks.html"		>ѡ��</a> 
                <a href="http://baike.baidu.com/subview/79827/5107348.htm?fr=aladdin"   >����ɽ</a> 
                <a href="http://ss.nuc.edu.cn/editor.php?id=21">�б�����</a>
              
            </div>
	</div>
</div>




<html>
   <head>
		<meta http-equiv="content-type" content="text/html;charset=gbk"><title>�б���</title>
		<link href="../1.css" rel="stylesheet" type="text/css" />
		<title>��̨����</title>
	</head>
	<body>
	
		<form  name="login" action="dealregister.php" method="post" align=center>
		  <table border=1  width="450" height=100 align="center" bgcolor="#87CEFA"  bordercolor="#2c5364" cellspacing=8 cellpadding=20 class="table">
			<tr>	
				<img src="../images/��½.gif"  height="130" width=500 >
			</tr>
			
			<tr >
					<td align=center>��&nbsp&nbsp&nbsp&nbsp�ţ�</td>
					<td >&nbsp&nbsp<input type="text"  value="" name="username" size="25" maxlength="10"></td>
			</tr>
			
			
			<tr>
					<td align=center>��&nbsp&nbsp&nbsp&nbsp�룺</td>
					<td >&nbsp&nbsp<input type="password" name="password" value="" size="27" maxlength="10"></td>
			</tr>

			<tr>
					<td align=center>ȷ�����룺</td>
					<td >&nbsp&nbsp<input type="password" name="password2" value="" size="25" maxlength="10"></td>
			</tr>
			

			
			<tr bgcolor=#2c5364>
				<td colspan="2" align="center">
					<input type="submit" value="ע��">
					<input type="reset" >
					<input type="button" value="���" onclick="document.fir username">
					<a href="localhost/try/" target="_blank"	><input type="button" value="������ҳ" ></a>
				</td>
			</tr>
	
		  </table>
		 </form>
<?php
include_once '../foot.php';
?>
	</body>
