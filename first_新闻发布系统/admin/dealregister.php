<?php
 // session_start();//���ڴ涫���õ�,code
  include_once "../config/db.php";
  $username=$_POST["username"];
  $password=$_POST["password"];
  $password2=$_POST["password2"];

if (mysqli_connect_errno()||empty($username)||empty($password)||$password!=$password2){
        echo '��������';
        echo "<script>alert('��������ע��ʧ�ܣ�');</script>";
        echo "<script>location.href='register.php';</script>";   // �˳����򣬺����������佫����ִ��
    }else{
        $sql="insert into users(username,password) values('$username','$password')";
        mysql_query($sql);
        echo '������ȷ ';
        echo "<script>alert('��ӳɹ���')</script>";
        echo "<script>location.href='login.php';</script>";
}
  
?>
