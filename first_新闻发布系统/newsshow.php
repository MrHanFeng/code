<?php
// session_start();
  include_once "config/db.php";
  include_once 'head.php';
  $id=$_GET["id"];
  $newstype=$_GET["newstype"];
  
  $sql="update `news` set clicknum=clicknum+1 where id='$id'";
  mysql_query($sql);
  
  
  
  $sql="select * from `news` where id='$id'";
  
  $result=mysql_query($sql);
  
  $arrn=mysql_fetch_array($result);
  
  mysql_close();

		 if(empty($_SESSION["username"]))
			 {
               echo "<script>alert('请先登录！');</script>";
   			   echo "<script>location.href='index.php';</script>";
   			 }

?>


<div class="main">
	

<div style="float: none; clear: both; border-color: black; border-style: solid; border-width: 0px;">

	<!-- 标题栏 -->
          <div style="float: none; clear: both; height: 30px; background-image: url(&quot;images/title.png&quot;);
          					<!--  border-bottom: 1px solid darkgray; -->">
            <div style="margin-left: 10px; line-height: 32px; font-weight: bold; font-size: 20px; color:dimgray;">
              <div id="doc_title"><?php 
			  						  if($newstype=='teacher')
									  {
									      echo "<a href='newslist.php?newstype=teacher'>国际新闻</a>";
									  }
									  else
									  {
									      echo "<a href='newslist.php?newstype=student'>国内新闻</a>";
									  }
			                       
								   ?></div>
            </div>
          </div>

<!-- 内容栏 -->
          <div style="clear: both; float: none; margin: 30,100,10; line-height: 28px;">
		           <!-- 标题 -->
		             <div style="font-size:22px;  color:#144650; line-height: 38px;margin: 30  "  >
		              		<?php echo $arrn["title"]."-----(点击量：".$arrn["clicknum"].")";  ?></div>

		            
		            <!-- 内容 -->

					<div style="font-size:16px;  color:#144650;">
			               <?php
						       echo $arrn["content"];
						   
						   ?>
			             

			            <!-- 发布时间 -->
			              <div align=right; >
			                <p><?php echo $arrn["fbtime"];  ?></p>
			              </div>
		            </div>
		          
        </div>


</div>
</div>
<?php
 include_once 'foot.php';?>