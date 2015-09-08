<head>
  <meta charset="GBK">
<style type="text/css">
body{
  margin: 0 auto;
}
table{
  border:"0";
  width:1000;
  
}
a{
  text-decoration: none;
}
a:hover{
  color:red;
  margin:2,0,0,2;
}

tr{
padding-top:10px;
}

td{
  border-bottom: 1px dotted black;
   text-align="center";
   padding:8px;
}

</style>
</head>

<body bgcolor="#f5f5f5" >
<table >
  <tr bgcolor=gray >
    <td><h2>id</h2></td>
    <td><h2>标题</h2></td>
    <td><h2>修改</h2></td>
    <td><h2>删除</h2></td>

  </tr>
  <?php
     include_once "../../config/db.php";

     $sql="select * from `news` order by id desc";

     $result=mysql_query($sql);

     while($arrn=mysql_fetch_array($result))
     {
        echo "
		<tr>
    		  <td>$arrn[id]</td>
          <td>$arrn[title]</td>
   		    <td><a href='modifynews.php?id=$arrn[id]'>修改</a></td>
    		  <td><a href='delnews.php?id=$arrn[id]'>删除</a></td>
 		</tr>
              ";
     }


     mysql_close();

  ?>
</table></body>