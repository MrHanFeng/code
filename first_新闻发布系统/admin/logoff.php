<?php
	session_start();
header("Content-type:text/html;charset=GBK");
	
	unset($_SESSION["username"]);
	// session_destroy();

	echo "<script>alert('ע���ɹ���');</script>";
    echo "<script>location.href='../index.php';</script>";
?>

<!-- <html>
<head>
<title>������ת</title>
<meta http-equiv="Content-Language" content="zh-CN">
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=gb2312">
<meta http-equiv="refresh" content="1;url=../index.php">
</head>
<body bgcolor=black>
	<div style="font:100px;color:red; text-align:center">ע���ɹ�</div>
</body>
</html> -->