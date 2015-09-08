<?php
session_start();
?>
<?php 
header("Content-type:text/html;charset=GBK");
 ?>


	<body bgcolor="gray">
	
		<form  name="login" action="dealsuperlogin.php" method="post">
		  <table border=1  width="450" height=300 align="center" bgcolor="#87CEFA"  bordercolor="#2c5364" cellspacing=0 >
			<tr>
				<caption style="backgruond:red">
					<h1>超级管理员登录</h1>
				</caption>


			</tr>

		
			
			<tr >
				<th rowspan="3" width="90">
					<ul type="square">
						<li>帐&nbsp&nbsp&nbsp&nbsp号：</li><br><br><br><br>
						<li>密&nbsp&nbsp&nbsp&nbsp码：</li><br><br><br><br>
						<li>验&nbsp证&nbsp码：</li>
					</ul>
				</th>
				<td weight="50">&nbsp&nbsp<input type="text"  value="hf" name="superuser" size="25" maxlength="10"></td>
			</tr>
			
			
			<tr>
				<td>&nbsp&nbsp<input type="password" name="password" value="" size="25" maxlength="10"></td>
			</tr>
			
			
			<tr>
				<td>&nbsp&nbsp<input type="text"  value="" size="25" maxlength="6"></td>
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

