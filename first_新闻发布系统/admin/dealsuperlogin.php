<?php
  session_start();//���ڴ涫���õ�,code
  include_once "../config/db.php";
  $username=$_POST["superuser"];
  $password=$_POST["password"];

  $sql="select * from `users` where `username`='$username' and `password`='$password' ";

  
  $result=mysql_query($sql);//����һ�� MySQL ��ѯ


  $num=mysql_num_rows($result);//��¼$result�����������ؽ�������е���Ŀ
// $num=$result->num_rows();
  if($num>=1)
  {
     //��¼�ɹ�����ת����̨��ҳ
     @$_SESSION["superuser"]=$username;
     echo "<script>alert('��¼�ɹ���');</script>";
     echo "<script>location.href='index.php';</script>";
  }
  else
  {
     //��¼ʧ�ܣ���ת����¼ҳ��
     echo "<script>alert('��¼ʧ�ܣ�');</script>";
     echo "<script>location.href='superlogin.php';</script>";
  }


   
?>