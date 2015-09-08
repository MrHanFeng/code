<?php
header("Content-type:text/html;charset=GBK");
  include_once "../../config/db.php";
  $id=$_GET["id"];

  $sql="delete from `news` where id='$id'";
  
  mysql_query($sql);
  mysql_close();

  echo "<script>alert('É¾³ý³É¹¦£¡');</script>";
  echo "<script>location.href='listnews.php';</script>"; 

  


?>

<body bgcolor="#f5f5f5" >
</body>