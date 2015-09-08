<?php
	session_start();
header("Content-type:text/html;charset=GBK");
	
	unset($_SESSION["username"]);
	// session_destroy();

	echo "<script>alert('注销成功！');</script>";
    echo "<script>location.href='../index.php';</script>";
?>

<!-- <html>
<head>
<title>正在跳转</title>
<meta http-equiv="Content-Language" content="zh-CN">
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=gb2312">
<meta http-equiv="refresh" content="1;url=../index.php">
</head>
<body bgcolor=black>
	<div style="font:100px;color:red; text-align:center">注销成功</div>
</body>
</html> -->