<?php
session_start();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk"><title>�б���</title>
<link href="../1.css" rel="stylesheet" type="text/css" />

</head>

<body >

<div class="header">

        <div class="w1000">
            <img src="../images/logo.png" alt="�б���ѧ" width=450 height=150  align="left">
			<br><br>
		 
            <div class="header_r">
                <a href="1top.html">							                             	΢��</a> 
                <a href="1top.html">								΢��</a>	
<?php	
			// $sess=$_SESSION["username"];
        	if(isset($_SESSION["username"])){
        		echo '<a href="userinformation.php" target="_blank">'.$_SESSION["username"].'</a>';
        		echo '<a href="logoff.php" target="_parent">ע��</a>';
        	}else{			                             	 
                echo '<a href="login.php">                                 ��¼</a> 
               		  <a href="register.php">								ע��</a>';	
            }
?>



                <a href="javascript:void(0)" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.hahahahahaha.com.cn/');return(false);" style="BEHAVIOR: url(#default#homepage)">��Ϊ��ҳ</a>

      			<a href="www.hahaha.com"   
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
                <a href="http://ai.taobao.com/"						>����</a> 
                <a href="#"			>ѧϰ</a> 
                <a href="http://202.207.177.15:7777/zhxt_bks/zhxt_bks.html"		>ѡ��</a> 
                <a href="http://baike.baidu.com/subview/79827/5107348.htm?fr=aladdin"   >����ɽ</a> 
                <a href="http://ss.nuc.edu.cn/editor.php?id=21">�б�����</a>
              
            </div>
	</div>
</div>




	<body>
	
		<form  name="login" action="deallogin.php" method="post" >
		  <table border=1  width="450" height=300 align="center" bgcolor="#87CEFA"  bordercolor="#2c5364" cellspacing=0 class="table">
			<tr>	
				<img src="../images/��½.gif"  height="130" width=500 >
			</tr>
			
			<tr >
				<th rowspan="3" width="90">
					<ul type="square">
						<li>��&nbsp&nbsp&nbsp&nbsp�ţ�</li><br><br><br><br>
						<li>��&nbsp&nbsp&nbsp&nbsp�룺</li><br><br><br><br>
						<li>��&nbsp֤&nbsp�룺</li>
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
					<input type="submit" value="��¼">
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