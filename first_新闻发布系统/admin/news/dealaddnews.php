<?php
header("Content-type:text/html;charset=GBK");
  include_once "../../config/db.php";

  $title=$_POST["title"];
  $content=$_POST["content"];
  $newstype=$_POST["newstype"];
  $fbname=$_POST["fbname"];
  date_default_timezone_set("prc");
  $fbtime=date("Y-m-d");
  $clicknum=100;

  $sql="insert into `news` (`title`,`content`,`newstype`,`fbname`,`fbtime`,`clicknum`) values ('$title','$content','$newstype','$fbname','$fbtime','$clicknum')";

  mysql_query($sql);

  mysql_close();
  
  echo "<script>alert('发布成功！');</script>";
  echo "<script>location.href='addnews.php';</script>";  

?>