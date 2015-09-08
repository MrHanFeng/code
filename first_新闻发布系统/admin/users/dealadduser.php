<?php
header("Content-type:text/html;charset=GBK");

  include_once "../../config/db.php";
 
  $username=$_POST["username"];
  $password=$_POST["password"];

  $sql="insert into `users` (`username`,`password`) values ('$username','$password')";

   mysql_query($sql);

   mysql_close();
   
   echo "<script>alert('Ìí¼Ó³É¹¦£¡');</script>";
   echo "<script>location.href='adduser.php';</script>";

?>