<?php
 // session_start();//用在存东西用的,code
  include_once "../config/db.php";
  $username=$_POST["username"];
  $password=$_POST["password"];
  $password2=$_POST["password2"];

if (mysqli_connect_errno()||empty($username)||empty($password)||$password!=$password2){
        echo '输入有误';
        echo "<script>alert('输入有误，注册失败！');</script>";
        echo "<script>location.href='register.php';</script>";   // 退出程序，后面的所有语句将不再执行
    }else{
        $sql="insert into users(username,password) values('$username','$password')";
        mysql_query($sql);
        echo '输入正确 ';
        echo "<script>alert('添加成功！')</script>";
        echo "<script>location.href='login.php';</script>";
}
  
?>
