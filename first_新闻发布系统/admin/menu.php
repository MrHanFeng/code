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
                echo '<a href="login.php" target="_parent"> <h2>�����ȵ�¼</h2></a>';
            }else{
            	echo '<h2>��̨����<br/></h2>

				<br/>
				���Ź���<br/>
				--------------<br/>

				<a href="news/addnews.php" target="main" title="��ѽ~">�������</a><br/><br/>
				<a href="news/listnews.php" target="main" title="���ѽ~">�����б�</a><br/>
				<br/>
				<br/>
				�û�����<br/>
				--------------<br/>
				<a href="users/adduser.php" target="main" title="�˲��ˣ���">����û�</a><br/><br/>
				<a href="users/listusers.php" target="main" title="�Ҳ��ҵ㣿">�û��б�</a>';
		}
?>
</body>