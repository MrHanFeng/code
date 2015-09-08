<?php
include_once 'head.php';
?>


<head>
<style type="text/css">
table{
  border:"0";
  width:1000px;
 
}
a{
  text-decoration: none;
}
 tr a:hover{
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
<div class="main">
<table >
  <tr bgcolor=gray >
    <td><h2>id</h2></td>
    <td><h2>БъЬт</h2></td>

  </tr>
  <?php
     include_once "config/db.php";
     $newstype=$_GET["newstype"];
     $sql="select * from `news` where newstype='$newstype'order by id desc;";

     $result=mysql_query($sql);

     while($arrn=mysql_fetch_array($result))
     {
        echo "
				<tr>
		    		  <td>$arrn[id]</td>
		    		  <td><a href='newsshow.php?id=$arrn[id]&newstype=$newstype'>$arrn[title]</a></td>


		 		</tr>
              ";
     }


     mysql_close();

  ?>
</table></body>

</div>

<?php
 include_once 'foot.php';?>