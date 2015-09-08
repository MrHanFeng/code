
<body bgcolor="#f5f5f5" >
<?php
header("Content-type:text/html;charset=GBK");

  include_once "../../config/db.php";

  $sql="select * from `users`";
  $result=mysql_query($sql);
?>
<br><br><br>
<table border=1  width="450" height=100 align="center" bgcolor="gray"   cellspacing=8 cellpadding=20 >
  <tr>
    <td><h3>id</h3></td>
    <td><h3>用户名</h3></td>
    <td><h3>修改</h3></td>
    <td><h3>删除</h3></td>
  </tr>
  <?php
  
    while($arrn=mysql_fetch_array($result))
    {
       echo "<tr>
              <td>$arrn[id]</td>
              <td>$arrn[username]</td>
              <td><a href='modifyuser.php?id=$arrn[id]'>修改</a></td>
              <td><a href='deluser.php?id=$arrn[id]'>删除</a></td>
             </tr>";
    }

    mysql_close();

  ?>
</table>
</body>