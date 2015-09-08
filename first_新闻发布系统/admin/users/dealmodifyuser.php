<?php
header("Content-type:text/html;charset=GBK");

  include_once "../../config/db.php";
  $password=$_POST["password"];
  $id=$_POST["id"];

  $sql="update `users` set `password`='$password' where `id`='$id'";

  mysql_query($sql);

  echo "<script>alert('ÐÞ¸Ä³É¹¦£¡');</script>";
  echo "<script>location.href='listusers.php';</script>";


?>