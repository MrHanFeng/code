

<body >

<?php
include_once 'head.php';
?>
<!--第3个大盒子*/-->
<div class="main" style="background:#ffffff;">
       <!--  <div class="main_bg"> -->
         
			<!--其中第1个小盒子-->
			<div class="left" style="background:#ffffff">
            	    
				<h3 class="h31"><b  style="background:#d0d0d0 ;">中北天下<i>搜索热词</i></b></h3>
                <ul class="ul1"><br><br>

             		<li><a  href="#"						>外卖</a></li>
					<li><a  href="#"						>刘有智</a></li>
					<li><a  href="#"						>挖掘机哪强</a></li><br>
					<li><a  href="#"						>主楼实验室</a></li>
					<li><a  href="#"						>雷诺健身</a></li>
					<li><a  href="#"						>阿里巴巴</a></li><br>
					<li><a  href="#"						>中北贴吧</a></li>
					<li><a  href="#"						>体测成绩</a></li>
					<li><a  href="#"						>海贼王</a></li><br>
					<li><a  href="#"						>LAMP</a></li>
					<li><a  href="#"						>Linux</a></li>
					<li><a  href="#"						>Apache</a></li><br>
					<li><a  href="#"						>Mysql</a></li>
					<li><a  href="#"						>PHP</a></li>
					<li><a  href="#"						>XAMPP</a></li></ul>
			</div>     
		
         

       <!--其中第2个小盒子-->

	 		<div class="right">
             			   <ul class="ul_list">
               			   <li class="li_top"><a href="#" target="_blank">
					<img src="images/1.jpg" alt="中北" /> </li></a>

			</div>  
	    <!-- </div> -->
</div> 


<div class="main">
       
         <!-- <div class="main_bg">  -->
			
			<div class="lefter">
            	   <div class="tit" style="margin-right:0,15,0,0;">
            	   		<div style="float: none; clear: both; height: 30px; 
            	   		  						background:#d0d0d0 ;	<!-- 另 -->
            	   		  						background-image: url(&quot;<!-- images/title.png -->&quot;); border-bottom: 2px solid;color:DIMGRAY;">
           					<div style="float: left; margin-left: 10px; line-height: 30px; font-weight:normal; font-size: 18px; color:black ;"> 国内新闻 </div>
           					<div style="float: right; margin: 5px 10px 0pt 0pt; font:12px;"><a style="color: #888;" href="newslist.php?newstype=student">更多国内新闻</a></div>
          				</div>
            	   </div>
            	  
            	   <div class="cont" 
            	   					style="background=#ffffff;">  <!--另 -->
							
					              <ul id="newsList_1"  >
					                <?php
									  include_once "config/db.php";
									  
									  $sql="select * from `news` where newstype='student' order by id desc limit 9" ;
									  
									  $result=mysql_query($sql);
									  
									  while($arrn=mysql_fetch_array($result))
									  {
									     echo "<li><span class='news_date'>($arrn[fbtime])</span><a href='newsshow.php?
									     id=$arrn[id]&newstype=student'>$arrn[title]</a></li>";
									  }
									?>
		              			</ul>
            				
					</div>     
			</div>

	 		<div class="righter" >
             			   <ul class="ul_list">
               			   <li class="li_top"><a href="#" target="_blank"></li>
								<img src="images/guonei.jpg" alt="中北" /> </a>
			</div>  	
	    <!-- </div> -->
</div> 

 

<div class="main">
       
         <!-- <div class="main_bg">  -->
			
			<div class="lefter">
            	   <div class="tit" style="margin-right:0,15,0,0;">
            	   		<div style="float: none; clear: both; height: 30px; 
            	   		  						background:#d0d0d0 ;	
            	   		  						background-image: url(&quot;<!-- images/title.png -->&quot;); border-bottom: 2px solid;color:DIMGRAY;">
           					<div style="float: left; margin-left: 10px; line-height: 30px; font-weight:normal; font-size: 18px; color:black ;"> 国际新闻 </div>
           					<div style="float: right; margin: 5px 10px 0pt 0pt; font:12px;"><a style="color: #888;" href="newslist.php?newstype=teacher">更多国际新闻</a></div>
          				</div>
            	   </div>
            	  <!--  <div class="naw"></div> -->
            	   <div class="cont" 
            	   					style="background=#ffffff;">  
							
					              <ul id="newsList_1" style="line-height: 30px;" >
									 <?php
								   $sql="select * from `news` where newstype='teacher' order by id desc limit 9" ;
								   $result=mysql_query($sql);
								   
								   while($arrn=mysql_fetch_array($result))
								   {
								       echo " <li><span class='news_date'>($arrn[fbtime])</span><a href='newsshow.php?id=$arrn[id]&newstype=teacher'>$arrn[title]</a></li>";
								   
								   }
								   
								   mysql_close();
								
								?>
		              			</ul>
            				
					</div>     
			</div>

	 		<div class="righter">
             			   <ul class="ul_list">
               			   <li class="li_top"><a href="#" target="_blank">
							<img src="images/guoji.jpg" alt="中北" /> </li></a>
			</div>  
	    <!-- </div> -->
</div> 



<div class="Go_go">
    <a class="Go_Top" href="#" title="回顶部"></a><a class="Go_Bottom" href="#bottom" title="回底部">
    </a>
</div>
      
<?php
include_once 'foot.php';
?>

    