<?php
   include_once "../../config/db.php";
header("Content-type:text/html;charset=GBK");

   $id=$_GET["id"];

   $sql="select * from `news` where id='$id'";

   $result=mysql_query($sql);
   
   $arrn=mysql_fetch_array($result);

   mysql_close();


?>
<head>
  <style type="text/css">
      .hahaha{
      	
      	background:"gray" ;
      	width:1000px; 
      	margin-left: 15px;>
      }

  </style>
</head>
<body bgcolor="#f5f5f5" >
&nbsp

<div class="hahaha">

<form name="modifynews" action="dealmodifynews.php" method="post">
<h2 align="center">修改新闻</h2><br/>
&nbsp&nbsp&nbsp&nbsp标题：<input type="text" name="title" value="<?php echo $arrn["title"]; ?>" /><br/><br/>
&nbsp&nbsp&nbsp&nbsp内容：<textarea name="content" rows="20" cols="100"><?php echo $arrn["content"]; ?></textarea><br/><br/>
&nbsp&nbsp&nbsp&nbsp发布者：<input type="text" name="fbname" value="<?php echo $arrn["fbname"]; ?>" /><br/><br/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="更改" />
<input type="hidden" name="id" value="<?php echo $id; ?>" />
</form>
</div>


</body>