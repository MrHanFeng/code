

<body >

<?php
include_once 'head.php';
?>
<!--��3�������*/-->
<div class="main" style="background:#ffffff;">
       <!--  <div class="main_bg"> -->
         
			<!--���е�1��С����-->
			<div class="left" style="background:#ffffff">
            	    
				<h3 class="h31"><b  style="background:#d0d0d0 ;">�б�����<i>�����ȴ�</i></b></h3>
                <ul class="ul1"><br><br>

             		<li><a  href="#"						>����</a></li>
					<li><a  href="#"						>������</a></li>
					<li><a  href="#"						>�ھ����ǿ</a></li><br>
					<li><a  href="#"						>��¥ʵ����</a></li>
					<li><a  href="#"						>��ŵ����</a></li>
					<li><a  href="#"						>����Ͱ�</a></li><br>
					<li><a  href="#"						>�б�����</a></li>
					<li><a  href="#"						>���ɼ�</a></li>
					<li><a  href="#"						>������</a></li><br>
					<li><a  href="#"						>LAMP</a></li>
					<li><a  href="#"						>Linux</a></li>
					<li><a  href="#"						>Apache</a></li><br>
					<li><a  href="#"						>Mysql</a></li>
					<li><a  href="#"						>PHP</a></li>
					<li><a  href="#"						>XAMPP</a></li></ul>
			</div>     
		
         

       <!--���е�2��С����-->

	 		<div class="right">
             			   <ul class="ul_list">
               			   <li class="li_top"><a href="#" target="_blank">
					<img src="images/1.jpg" alt="�б�" /> </li></a>

			</div>  
	    <!-- </div> -->
</div> 


<div class="main">
       
         <!-- <div class="main_bg">  -->
			
			<div class="lefter">
            	   <div class="tit" style="margin-right:0,15,0,0;">
            	   		<div style="float: none; clear: both; height: 30px; 
            	   		  						background:#d0d0d0 ;	<!-- �� -->
            	   		  						background-image: url(&quot;<!-- images/title.png -->&quot;); border-bottom: 2px solid;color:DIMGRAY;">
           					<div style="float: left; margin-left: 10px; line-height: 30px; font-weight:normal; font-size: 18px; color:black ;"> �������� </div>
           					<div style="float: right; margin: 5px 10px 0pt 0pt; font:12px;"><a style="color: #888;" href="newslist.php?newstype=student">�����������</a></div>
          				</div>
            	   </div>
            	  
            	   <div class="cont" 
            	   					style="background=#ffffff;">  <!--�� -->
							
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
								<img src="images/guonei.jpg" alt="�б�" /> </a>
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
           					<div style="float: left; margin-left: 10px; line-height: 30px; font-weight:normal; font-size: 18px; color:black ;"> �������� </div>
           					<div style="float: right; margin: 5px 10px 0pt 0pt; font:12px;"><a style="color: #888;" href="newslist.php?newstype=teacher">�����������</a></div>
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
							<img src="images/guoji.jpg" alt="�б�" /> </li></a>
			</div>  
	    <!-- </div> -->
</div> 



<div class="Go_go">
    <a class="Go_Top" href="#" title="�ض���"></a><a class="Go_Bottom" href="#bottom" title="�صײ�">
    </a>
</div>
      
<?php
include_once 'foot.php';
?>

    