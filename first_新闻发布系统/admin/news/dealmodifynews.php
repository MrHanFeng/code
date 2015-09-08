<?php
header("Content-type:text/html;charset=GBK");
  include_once "../../config/db.php";

  $id=$_POST["id"];

  $title=$_POST["title"];
  $content=$_POST["content"];
  $fbname=$_POST["fbname"];

  $sql="update `news` set `title`='$title',`content`='$content',`fbname`='$fbname' where id='$id'";
  mysql_query($sql);
  mysql_close();
  
  echo "<script>alert('ÐÞ¸Ä³É¹¦£¡');</script>";
  echo "<script>location.href='listnews.php';</script>"; 
?>