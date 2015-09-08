<?php
header("Content-type:text/html;charset=GBK");
  include_once "../../config/db.php";
  $id=$_GET["id"];

  $sql="select * from `users` where id='$id'";

  $result=mysql_query($sql);

  $arrn=mysql_fetch_array($result);

  mysql_close();


?>
<body bgcolor="#f5f5f5" >
</body>
<br><br><br>
<table table border=1  width="450" height=100 align="center" bgcolor="gray"   cellspacing=8 cellpadding=20>
<form name="modifyuser" action="dealmodifyuser.php" method="post">
      <tr>
          <td>用户名：</td>
          <td><input type="text" name="username" value="<?php echo $arrn['username'];  ?>"  readonly="true" /><br/>
          </td>
      </tr>

      <tr>
          <td>新密码：</td><td><input type="password" name="password" /></td>
      </tr>

      <tr>
          <td colspan=2 align=center>
          <input type="submit" value="  更   改  " size=50/>
          <input type="hidden" name="id" value="<?php echo $id; ?>" />
      </td>
      </tr>
</form>
</table>