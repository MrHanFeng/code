<?php
include_once('config/db.php');
include_once('head.php');



$jdcz=$_POST["jdcz"];
$search_name=$_POST["search_name"];



		if($jdcz!="")
		{


	     $sql=mysql_query("select * from news where title like '%".$search_name."%' order by fbtime desc");
	     
	      /*  sql连接方法二
	      $sql="select * from news where title like '%".$search_name."%' order by fbtime desc";
	      $result=mysql_query($sql);
// */
//  		 $arrn=mysql_fetch_array($sql);
		
		}

		// else
		// {
		//    if($mh=="1")
		//     {
		// 	  $sql=mysql_query("select * from shangpin where huiyuanjia $dx".$jg." and typeid='".$lb."' and mingcheng like '%".$name."%'",$conn);
			
		// 	}
		//     else
		// 	{
		// 	  $sql=mysql_query("select * from shangpin where huiyuanjia $dx".$jg." and typeid='".$lb."' and mingcheng = '".$name."'",$conn);
			
		// 	}
		
		
		// }  


?>

<div class="main">
	<br>
	<br>
<h3 style="text-align:left; color=blue" >您是否再找:</h3>
	<br>
	<br>
<?php
	while($arrn=mysql_fetch_array($sql)){

	
	echo "<li><span class='news_date'>($arrn[fbtime])</span>
			<a href='newsshow.php? id=$arrn[id]&newstype=student'>$arrn[title]</a>
		  </li>";

	}
?>
</div>





<?php
include_once('foot.php');
?>