<?php
  session_start();//用在存东西用的,code
  include_once "../config/db.php";
  $username=$_POST["username"];
  $password=$_POST["password"];
  $yz=$_POST["yz"];
  $num=$_POST["num"];
if(strval($yz)!=strval($num))
 {
  echo "<script>alert('验证码输入错误!');history.go(-1);</script>";
  exit;
 }

  $sql="select * from `users` where `username`='$username' and `password`='$password' ";

  
  $result=mysql_query($sql);//发送一条 MySQL 查询


  $num=mysql_num_rows($result);//记录$result中数量，返回结果集中行的数目
// $num=$result->num_rows();
  if($num>=1)
  {
     //登录成功，跳转到后台首页
     @$_SESSION["username"]=$username;
     echo "<script>alert('登录成功！');</script>";
     echo "<script>location.href='../index.php';</script>";
  }
  else
  {
     //登录失败，跳转到登录页面
     echo "<script>alert('登录失败！');</script>";
     echo "<script>location.href='login.php';</script>";
  }


   
?>