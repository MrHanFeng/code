<?php
header("Content-type:text/html;charset=GBK");

   include_once "../../config/db.php";
   echo $id=$_GET["id"];
   
   $sql="delete from `users` where id='$id'";
   mysql_query($sql);

   mysql_close();
   
    echo "<script>alert('É¾³ý³É¹¦£¡');</script>";
    echo "<script>location.href='listusers.php';</script>";
  

?>

<body bgcolor="red" >
</body>