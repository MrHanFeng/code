<?php
  session_start();//���ڴ涫���õ�,code
  include_once "../config/db.php";
  $username=$_POST["username"];
  $password=$_POST["password"];
  $yz=$_POST["yz"];
  $num=$_POST["num"];
if(strval($yz)!=strval($num))
 {
  echo "<script>alert('��֤���������!');history.go(-1);</script>";
  exit;
 }

  $sql="select * from `users` where `username`='$username' and `password`='$password' ";

  
  $result=mysql_query($sql);//����һ�� MySQL ��ѯ


  $num=mysql_num_rows($result);//��¼$result�����������ؽ�������е���Ŀ
// $num=$result->num_rows();
  if($num>=1)
  {
     //��¼�ɹ�����ת����̨��ҳ
     @$_SESSION["username"]=$username;
     echo "<script>alert('��¼�ɹ���');</script>";
     echo "<script>location.href='../index.php';</script>";
  }
  else
  {
     //��¼ʧ�ܣ���ת����¼ҳ��
     echo "<script>alert('��¼ʧ�ܣ�');</script>";
     echo "<script>location.href='login.php';</script>";
  }


   
?>