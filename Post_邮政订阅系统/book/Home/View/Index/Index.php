<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0107)http://bk.11185.cn/index.do;JSESSIONID_PUB=4jS0VX1Lyv5Gp30YgvVJMngJfJhRgvqrL5xhQQ1QlHXkrpxSpyZ2!-1869903175 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>中国邮政报刊订阅网</title>

<link href="{$smarty.const.CSS_URL}base.css" rel="stylesheet" type="text/css">
<link href="{$smarty.const.CSS_URL}index.css" rel="stylesheet" type="text/css">
<link href="{$smarty.const.CSS_URL}captify.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="{$smarty.const.CSS_URL}jquery-ui.css">
<script type="text/javascript" src="{$smarty.const.JS_URL}jquery-1.9.1.js"></script>
<script type="text/javascript" src="{$smarty.const.JS_URL}jquery-ui.js"></script>
<script type="text/javascript" src="{$smarty.const.JS_URL}base.js"></script>
<!-- <script type="text/javascript" src="{$smarty.const.JS_URL}index.js"></script> -->
<script type="text/javascript" src="{$smarty.const.JS_URL}jquery.easing.1.3.js"></script>
 {literal}
<script type="text/javascript">
jQuery.noConflict();
/* 返回页面顶部JS效果  */
jQuery(document).ready(function($){
	$(window).bind("scroll",function(){ 
		var a=$("#sidepanel");
		var b=document.body.scrollTop||document.documentElement.scrollTop;0==b?a.hide():a.show();
	});
	$("#nav").find(".menu li:first").addClass("on");
	//图片蒙版
	$('.captify').hover(
		function() {
			$(this).children('div:last').stop(false,true).animate({bottom:6},{duration:200, easing: 'easeOutQuart'});
		},
		function() {
			$(this).children('div:last').stop(false,true).animate({bottom:-100},{duration:200, easing: 'easeOutQuart'});
		}
	);
	$("#p_rank li:gt(7)").hide();
	$("#h_rank li:gt(7)").hide();

});
</script>
 {/literal}
</head>

<body>

	<!-- 返回页面顶部 -->
	<div style="right: 2px; display: none;" id="sidepanel" class="hide">
		<a href="http://bk.11185.cn/index.do;JSESSIONID_PUB=4jS0VX1Lyv5Gp30YgvVJMngJfJhRgvqrL5xhQQ1QlHXkrpxSpyZ2!-1869903175#" class="gotop"></a>
	</div>
	
	<!-- 快捷导航 -->
	<div id="shortcut">
<div class="w">
	<ul class="fl lh">
    	<li class="fore1 ld">
    		<b></b>
    		<a href="javascript:addToFavorite()" rel="nofollow">收藏中国邮政报刊订阅网</a>
    	</li>
	</ul>
	<ul class="fr lh">
		<li id="loginbar" class="fore1">您好，欢迎使用中国邮政报刊订阅网！<span>[<a href="{$smarty.const.__MODULE__}/User/login" target="_blank">用户登录</a>&nbsp;<a href="{$smarty.const.__MODULE__}/User/login" target="_blank">报刊社登录</a>]<a href="{$smarty.const.__MODULE__}/User/register">[免费注册]</a></span></li>
		
		<li id="mobile-subscibe" class="ld">
			<s></s>
			<a target="_blank" href=""><i></i>手机订阅</a>
		</li>
		<li id="special_order" class="ld">
			<s></s>
			<a href="http:" style="color:red;"><i></i>专用单订阅</a>
		</li>
        <li id="other-service" class="ld menu">
        	<s></s>
		<a href="http://bk.11185.cn/logon.do?method=mycount">我的报刊</a>
        </li>
	</ul>
	<span class="cls"></span>
</div>	
<!-- 网站顶部使用的快捷方式，包含：登录、注册、分类信息等 -->

	</div>
	<!-- 模糊查询 -->
	<div id="header" class="w clearfix">
		



 {literal}
<script type="text/javascript">
	/* 删除左右两端的空格 */
	function trim(str){ 
		return str.replace(/(^\s*)|(\s*$)/g, "");
	}
	/* 判断对象是否为空 */
	function isNullOrEmpty(strVal) {
		if (strVal == '' || strVal == null || strVal == undefined) {
			return true;
		} else {
			return false;
		}
	}
	/* 验证浏览器内核  */
	function checkBrowserCore() {
		var Sys = {};
		var ua = navigator.userAgent.toLowerCase();
		var s;
		(s = ua.match(/msie ([\d.]+)/)) ? Sys.trident = s[1] : (s = ua
				.match(/firefox\/([\d.]+)/)) ? Sys.firefox = s[1] : (s = ua
				.match(/chrome\/([\d.]+)/)) ? Sys.chrome = s[1] : (s = ua
				.match(/opera.([\d.]+)/)) ? Sys.opera = s[1] : (s = ua
				.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;
		return Sys;
	}

	/* 过滤空格 */
	function ignoreSpaces(string) {
		var temp = "";
		string = '' + string;
		splitstring = string.split(" ");
		for (var i = 0; i < splitstring.length; i++)
			temp += splitstring[i];
		return temp;
	}
	
	/* 模糊查询方法 */
	function search(searchKey) {
		var searchVal = "";
		if(searchKey==null){
			searchVal = jQuery("#searchKey").val();
		}else{
			searchVal = jQuery(searchKey).val();
		}
		if(trim(searchVal)=="可按照报刊名称或邮发代号查询" || isNullOrEmpty(trim(searchVal))){
			return;
		}
		jQuery("#fuzzySearchForm").submit();
	}
	function keyMove(keyCode) {
		if (keyCode == 40) {
			var sel_li = jQuery('#shelper').find('li.item-selected');
			if (sel_li.length == 0) {
				jQuery("#shelper li:eq(0)").addClass('item-selected');
				jQuery("#searchKey").focus().val(
						jQuery("#shelper li:eq(0)").children('div.search-item')
								.text());

			} else if ("s_9" == sel_li.attr('id')) {
				jQuery("#shelper li:eq(9)").removeClass('item-selected');
				jQuery("#shelper li:eq(0)").addClass('item-selected');
				jQuery("#searchKey").focus().val(
						jQuery("#shelper li:eq(0)").children('div.search-item')
								.text());
			} else {
				sel_li.removeClass('item-selected');
				sel_li.next().addClass('item-selected');
				jQuery("#searchKey").focus().val(
						sel_li.next().children('div.search-item').text());
			}
		} else if (keyCode == 38) {
			var sel_li = jQuery('#shelper').find('li.item-selected');
			if (sel_li.length == 0) {
				jQuery("#shelper li:eq(9)").addClass('item-selected');
				jQuery("#searchKey").focus().val(
						jQuery("#shelper li:eq(9)").children('div.search-item')
								.text());
			} else if ("s_0" == sel_li.attr('id')) {
				jQuery("#shelper li:eq(0)").removeClass('item-selected');
				jQuery("#shelper li:eq(9)").addClass('item-selected');
				jQuery("#searchKey").focus().val(
						jQuery("#shelper li:eq(9)").children('div.search-item')
								.text());
			} else {
				sel_li.removeClass('item-selected');
				sel_li.prev().addClass('item-selected');
				jQuery("#searchKey").focus().val(
						sel_li.prev().children('div.search-item').text());
			}
		}
	}
	
	function removeCarttips(obj){
		var index = jQuery(obj).attr("idx");
		jQuery.getJSON("http://bk.11185.cn:80/index/cart.do?method=removeCartTips",{"index":index},function(data){
			if(data==null|| data==""){
				jQuery("#carttips dl dd").html("").append("<div class='prompt'><div class='nogoods'><b></b>您的购物车中还没有报刊，赶紧添加吧！</div></div>");
				jQuery("#shopping-amount").text(0);
			}else{
				jQuery("#carttips dl dd").html("").append("<div id='carttips-content'><div class='smt'><h4 class='fl'>最近购买报刊</h4></div><div class='smc'><ul id='mcart-mz'></ul></div><div class='smb ar'></div></div>");
				var count = 0,total=0.00;
				jQuery.each(data,function(i,item){
					var imgPath = item.pblsPressImage.imageName;
					if(imgPath==null){
						imgPath="/correcting/style/images/no_photo.jpg";
					}else{
						imgPath="/media/upload"+imgPath;
					}
					count = count + parseInt(item.itemCount);
					total = total + parseFloat(item.subscribeRefPrice)*item.itemCount;
					jQuery("#mcart-mz").append("<li><div class='p-img fl'><a href='http://bk.11185.cn:80/index/detail.do?method=getCataDetail&year="+item.year+"&pressCode="+item.oldPressCode+"' target='_blank'><img src='"+imgPath+"' alt='"+item.pressName+"' height='50' width='50'></a></div><div class='p-name fl'><span></span><a href='http://bk.11185.cn:80/index/detail.do?method=getCataDetail&year="+item.year+"&pressCode="+item.oldPressCode+"' title='"+item.pressName+"' target='_blank'>"+item.pressName+"</a></div><div class='p-detail fr ar'><span class='p-price'><strong>￥"+item.subscribeRefPrice+"</strong>×"+item.itemCount+"</span><br><a class='delete' idx='"+i+"'href='javascript:void(0);' onclick='removeCarttips(this)'>删除</a></div></li>")
				});
				//alert(count+","+total+","+$("#mcart-mz").html());

				jQuery("#carttips-content div.smb").html("").append("共<b>"+count+"</b>件商品　共计<strong>￥"+Number(total).toFixed(2)+"</strong><br><a href='http://bk.11185.cn:80/index/cart.do?method=cartList' title='去购物车结算' id='btn-payforgoods'>去购物车结算</a>");
				jQuery("#shopping-amount").text(count);
			}
		});
	}
	function loadCarttips(){
		jQuery.getJSON('http://bk.11185.cn:80/index/cart.do?method=cartTips',null, function(data) {
			if(data==null|| data==""){
				jQuery("#carttips dl dd").html("").append("<div class='prompt'><div class='nogoods'><b></b>您的购物车中还没有报刊，赶紧添加吧！</div></div>");
			}else{
				jQuery("#carttips dl dd").html("").append("<div id='carttips-content'><div class='smt'><h4 class='fl'>最近购买报刊</h4></div><div class='smc'><ul id='mcart-mz'></ul></div><div class='smb ar'></div></div>");
				var count = 0,total=0.00;
				jQuery.each(data,function(i,item){
					var imgPath = item.pblsPressImage.imageName;
					if(imgPath==null){
						imgPath="/correcting/style/images/no_photo.jpg";
					}else{
						imgPath="/media/upload"+imgPath
					}
					count = count + parseInt(item.itemCount);
					total = total + parseFloat(item.subscribeRefPrice)*item.itemCount;
					jQuery("#mcart-mz").append("<li><div class='p-img fl'><a href='http://bk.11185.cn:80/index/detail.do?method=getCataDetail&year="+item.year+"&pressCode="+item.oldPressCode+"' target='_blank'><img src='"+imgPath+"' alt='"+item.pressName+"' height='50' width='50'></a></div><div class='p-name fl'><span></span><a href='http://bk.11185.cn:80/index/detail.do?method=getCataDetail&year="+item.year+"&pressCode="+item.oldPressCode+"' title='"+item.pressName+"' target='_blank'>"+item.pressName+"</a></div><div class='p-detail fr ar'><span class='p-price'><strong>￥"+item.subscribeRefPrice+"</strong>×"+item.itemCount+"</span><br><a class='delete' idx='"+i+"'href='javascript:void(0);' onclick='removeCarttips(this)'>删除</a></div></li>")
				});
				//alert(count+","+total+","+$("#mcart-mz").html());

				jQuery("#carttips-content div.smb").html("").append("共<b>"+count+"</b>件商品　共计<strong>￥"+Number(total).toFixed(2)+"</strong><br><a href='http://bk.11185.cn:80/index/cart.do?method=cartList' title='去购物车结算' id='btn-payforgoods'>去购物车结算</a>");
				jQuery("#shopping-amount").text(count);
			}
		});
	}
	/* 点击关闭按钮调用方法 */
	function hideTip() {
		jQuery("#shelper").hide();
	}

	/* 选择查询列表某一项后调用方法 */
	function clickItem(item) {
		jQuery("#searchKey").focus().val(
				jQuery(item).children('div.search-item').text());
		hideTip();
	}
	jQuery(document).ready(function($){
		$("body").bind('click',function(){
			hideTip();
		});
		$("#searchKey").keyup(function(event) {
			var currKey=event.keyCode;
			//currKey=String.fromCharCode(event.keyCode)||String.fromCharCode(event.which); // 处理firefox兼容问题
			var searchValue = ignoreSpaces($(this).val());
			var url = "/index/fuzzy.do?method=fuzzySearch";
			if (currKey == 38 || currKey == 40 || currKey == 13) {
				//alert(currKey);
				keyMove(currKey);
				return;
			}
			if (searchValue != "") {
				$.getJSON( url, { 'searchValue' : searchValue }, function(data) {
					$("#shelper").html(""); // 清空ul内容
					$.each( data, function(i, item) {
						if(i<10){
							$("#shelper").append("<li title='" + item[0] + "' id='s_" + i + "'onmouseover='javascript:$(\"#shelper\").find(\"li.item-selected\").removeClass(\"item-selected\");' onclick='clickItem(this)'><div class='search-item'>" + item[0] + "</div><div class='search-count'>" + item[1] + "&nbsp;(" + item[2] + ")</div></li>"); 
						}
					});
					$("#shelper").append("<li class='close' onclick='hideTip()'>关闭</li>"); $("#shelper").show(); 
				});
			}
		});
		loadCarttips();
		$("#carttips dl").hover(function(){
			$(this).addClass("hover");
			loadCarttips();
		},function(){
			$(this).removeClass("hover");
		});
	});
</script>
 {/literal}
  {literal}
<style>
.gwc {
    background: none repeat scroll 0 0 #F7F7F7;
    border: 1px solid #EFEFEF;
    height: 12px;
    line-height: 12px;
    margin-top: 10px;
    padding: 5px 10px 10px 10px;
}

</style>
 {/literal}
		<div class="logo">
			<a hidefocus="true" href="http://bk.11185.cn/"> 
				<img width="325" height="75" alt="报刊订阅" src="{$smarty.const.IMG_URL}logo.jpg">
			</a>
		</div>
    <div class="search">
  		<form action="http://bk.11185.cn/index/catalogSearch.do" method="get" id="fuzzySearchForm">
			<input type="hidden" name="method" value="findCatalog">
			 {literal}
			<input id="searchKey" name="searchKey" class="query" onKeyDown="javascript:if(event.keyCode==13) search(this);" value="可按照报刊名称或邮发代号查询" onBlur="if(value==&#39;&#39;){value=&#39;可按照报刊名称或邮发代号查询&#39;}" onFocus="if(value==&#39;可按照报刊名称或邮发代号查询&#39;){value=&#39;&#39;}">
            <input type="button" class="search_button" onClick="search()">
            <ul id="shelper" class="hide" style="display: none;">
			</ul>
			 {/literal}
      	</form>
		
	<!--	<div class="gwc fr">
		<a target="_blank" href="http://bk.11185.cn:80/index/cart.do?method=getCartList">
	<img width="20" height="16" src="/correcting/style/images/cartlogo.gif">
	<span>购物车<font color="red" id="cartListSize">1</font>件
		</span></a>
	</div>-->
		<div class="hot"><strong>热门搜索:</strong>
			<a href="http://bk.11185.cn/index/detail.do?method=getCataDetail&pressCode=1-38" target="_blank">参考消息</a>  
			<a href="http://bk.11185.cn/index/detail.do?method=getCataDetail&pressCode=54-17" target="_blank">读者</a>   
			<a href="http://bk.11185.cn/index/detail.do?method=getCataDetail&pressCode=82-921" target="_blank">财经</a>
		</div>
	</div>
	<div id="carttips">
		<dl class="">
			<dt class="ld">
				<s></s>
				<span class="shopping">
					<span id="shopping-amount">1</span>
				</span>
				<a href="http://bk.11185.cn/index/cart.do?method=cartList" id="settleup-url">购物车</a>
				<b></b> 
			</dt>
			<dd><div id="carttips-content"><div class="smt"><h4 class="fl">最近购买报刊</h4></div><div class="smc"><ul id="mcart-mz"><li><div class="p-img fl"><a href="http://bk.11185.cn/index/detail.do?method=getCataDetail&year=2015&pressCode=82-512" target="_blank"><img src="{$smarty.const.IMG_URL}20140905093847_1.jpg" alt="电脑爱好者" height="50" width="50"></a></div><div class="p-name fl"><span></span><a href="http://bk.11185.cn/index/detail.do?method=getCataDetail&year=2015&pressCode=82-512" title="电脑爱好者" target="_blank">电脑爱好者</a></div><div class="p-detail fr ar"><span class="p-price"><strong>￥8</strong>×1</span><br><a class="delete" idx="0" href="javascript:void(0);" onClick="removeCarttips(this)">删除</a></div></li></ul></div><div class="smb ar">共<b>1</b>件商品　共计<strong>￥8.00</strong><br><a href="http://bk.11185.cn/index/cart.do?method=cartList" title="去购物车结算" id="btn-payforgoods">去购物车结算</a></div></div></dd>
		</dl>
	</div>

	</div>
	<!-- 导航菜单 -->
	<div style="width:990px; margin:0 auto;">
		<div id="nav" class="clearfix">
			
<ul class="menu">
	<li class="on"><a href="Index.php">首页</a></li>
	<li><a href="Hotsale.php">畅销报刊</a></li>
	<li><a href="Campus.php">优秀校园报刊</a></li>
	<li><a href="{$smarty.const.__MODULE__}/Recommend/recommend">海南省报刊推荐</a></li>
	<li style="float: right"><img src="{$smarty.const.IMG_URL}phone.jpg" border="0" style="margin-right:10px;"></li>
</ul>
<!--
<script>
	(function(){
		var url = window.location.href;
		var navId = url.split("&")[1];
		if(undefined!=navId && undefined!=navId.split("=")[1]){
			alert();
			$(".menu li").addClass("on").siblings().removeClass("on");
		}
	})(jQuery);
</script>-->
		</div>
	</div>

<div class="w mt10 clearfix">
		<!-- 报刊分类菜单 -->
		<div class="hmain-left">
			
 {literal}


<script type="text/javascript">
<!-- 
	jQuery(document).ready(function($){
		var typee=[];
		for(var i=0;i<typee.length;i++) {
			if(typee[i][3]=="2"){
				$("#fir_menu_"+typee[i][2]).find("div.i-mc .subitem:eq(0)").append("<dl id='sec_menu_"+typee[i][0]+"'><dt><a href='http://bk.11185.cn:80/index/catalogSearch.do?method=findCatalogByType&tv="+typee[i][0]+"&dg="+typee[i][3]+"&pid="+typee[i][2]+"'>"+typee[i][1]+"</a></dt><dd></dd></dl>"); 
			}else if(typee[i][3]=="3"){
				$("#sec_menu_"+typee[i][2]).find("dd:eq(0)").append("<em><a href='http://bk.11185.cn:80/index/catalogSearch.do?method=findCatalogByType&tv="+typee[i][0]+"&dg="+typee[i][3]+"&pid="+typee[i][2]+"'>"+typee[i][1]+"</a></em>");
			}
		}

		$("#categorys div.item").each(function(){
			$(this).hover(function(){
				$(this).addClass("hover").find("div.i-mc").show();
				$("#categorys").addClass("hover");
				$("#categorys div.i-mc").css({"top":$("#categorys").top});//需要显示的对应索引内容
			},function(){
				$(this).removeClass("hover").find("div.i-mc").hide();
				$("#categorys").removeClass("hover");
			});
		});
	});
 -->
</script>

 {/literal}
<div id="categorys" class="">
	<div class="mt">
		<h1 class="title"><strong class="title-green">报刊</strong>分类</h1>
	</div>
	<div class="mc">
		
			{foreach $cateinfo as $k => $v}
				<div id="fir_menu_902" class="item">
					<span>
						<h3><a href="javascript:void(0);">{$v.cat_name}</a></h3>
						<s></s>
					</span>
					<div class="i-mc hide" style="display: none;">
						<div class="subitem">
						<dl id="sec_menu_01">
							

							<dt><a href="">报纸</a></dt>

						<dd>
							{foreach $themeinfo as $kk => $themev}
							{if $themev.cat_id==$v.cat_id && $themev.type == 0}
							<em>
								<a 
href="{$smarty.const.__MODULE__}/Book/filterlist/cat_id/{$v.cat_id}/type/0/theme_id/{$themev.theme_id}">{$themev.theme_name}</a>
							</em>
							{/if}
							{/foreach}
						</dd>
						
						</dl>


						<dl id="sec_menu_02">
							<dt><a href="">杂志</a>
							</dt>

							<dd>
								{foreach $themeinfo as $kk => $themev}
								{if $themev.cat_id==$v.cat_id && $themev.type == 1}
								<em>
<a href="{$smarty.const.__MODULE__}/Book/filterlist/cat_id/{$v.cat_id}/type/1/theme_id/{$themev.theme_id}">{$themev.theme_name}</a>
								</em>
								{/if}
								{/foreach}
							</dd>
						</dl>
						</div>
					</div>
				</div>
			{/foreach}

	</div>
</div>
			

		</div>
		<!-- 轮播图片 -->
		<div class="hmain-middle">
			

<link rel="stylesheet" href="{$smarty.const.CSS_URL}demo.css">
<link rel="stylesheet" href="{$smarty.const.CSS_URL}layout.css">
<div class="wrap">


			<div class="example">
		
				<div id="cxslide_x" class="cxslide_x">
					<div class="box">
						<ul class="list">
						{foreach $advertinfo as $k => $v}
						<li>
						<a href="" target="_blank">
						<img src="{$smarty.const.IMG_UPLOAD}{$v.advert_img}" width="600" height="280" alt="新华社">
						<p>焦点图说明文字 111</p>
						</a>
						</li>
                		{/foreach}
						</ul>
					</div>
				</div>
			</div>
			
{literal}		
<script src="{$smarty.const.JS_URL}jquery.js"></script>
<script src="{$smarty.const.JS_URL}jquery.cxslide.min.js"></script>
<script>
$('#cxslide_x').cxSlide({
	plus: true,
	minus: true
});

$('#cxslide_y').cxSlide({
	type: 'y'
});

$('#cxslide_fade').cxSlide({
	events: 'mouseover',
	type: 'fade',
	speed: 300
});
</script>
{/literal}
</div>
</div>
 

		<div class="hmain-right">
			<!-- 公告栏 -->
			<div id="board" class="bd_e6 h165">
				

<h1 class="title">
	<span class="title-green">公告</span>
	<a href=""><span class="hr-more">更多&gt;&gt;</span></a>
</h1>
<div id="callboard">
	<ul style="list-style:square outside;">
				
					<li>
						<a href="" target="_blank">
					  		<span style="width:150px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">关于用户注册功能恢复的公告</span>
						</a>
						<img src="{$smarty.const.IMG_URL}new.bmp">
					</li>	
				
				
					<li>
						<a href="http://bk.11185.cn/news/news.do?method=read&newsId=967" target="_blank">
					  		<span style="width:150px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">网站系统升级提示</span>
						</a>
						
					</li>	
				
					<li>
						<a href="http://bk.11185.cn/news/news.do?method=read&newsId=946" target="_blank">
					  		<span style="width:150px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">第一批中奖用户用单</span>
						</a>
						
					</li>	
				
			
		
			
				
				
					<li>
						<a href="http://bk.11185.cn/news/news.do?method=read&newsId=926" target="_blank">
					  		<span style="width:150px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">报刊订阅提示</span>
						</a>
						
					</li>	
				
			
		
			
				
				
					<li>
						<a href="http://bk.11185.cn/news/news.do?method=read&newsId=846" target="_blank">
					  		<span style="width:150px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">专用单、订阅卡使用说明</span>
						</a>
						
					</li>	
				
			
		
			
				
				
					<li>
						<a href="http://bk.11185.cn/news/news.do?method=read&newsId=729" target="_blank">
					  		<span style="width:150px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">新版网站使用注意事项</span>
						</a>
						
					</li>	
				
			
		
			
				
				
					<li>
						<a href="http://bk.11185.cn/news/news.do?method=read&newsId=746" target="_blank">
					  		<span style="width:150px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">新版上线致用户</span>
						</a>
						
					</li>	
				
			
		
	
	</ul>
</div>

			</div>
			<!-- 订单快速查询 -->
			<div id="order_tips" class="bd_e6 h130">
	 {literal}			
<style>
.ui-state-default .ui-icon {
	background-image: url(/correcting/style/images/jquery-ui/ui-icons_888888_256x240.png)/*{iconsDefault}*/;
}
#fasttipsDialog ul li{float:left; overflow:hidden;}
#fasttipsDialog ul.ft_title{margin:5px auto; position:relative; width:760px; height:25px; border-bottom:2px solid green; font:bold 14px/25px 'microsoft yahei';text-align:center;vertical-align:middle;}
#fasttipsDialog ul.ft_body{margin:5px auto; width:760px; height:30px; border-bottom:1px solid #eee; font:normal 14px/30px '宋体'; text-align:center;vertical-align:middle;}
#fasttipsDialog .bord{border:1px solid #eee; width:780px; min-height:200px; margin:15px auto; text-align:center; vertical-align:middle;}
#fasttipsDialog #dis_content{margin:5px auto; }
#fasttipsDialog .ordrNO{width:120px;}
#fasttipsDialog .presName{width:60px;}
#fasttipsDialog .subsTime{width:200px;}
#fasttipsDialog .issuYear{width:60px;}
#fasttipsDialog .issuNO{width:110px;}
#fasttipsDialog .receName{width:80px;}
#fasttipsDialog .ordrState{width:130px;}
</style>
<script type="text/javascript">
	function openDialog() {
		//设置帮助信息弹出框
		jQuery("#fasttipsDialog").dialog({
			autoOpen : true,
			width : 810,
			height : 350,
			resizable : false,
			modal : true,
			show : {
				effect : "blind",
				duration : 500
			},
			hide : {
				effect : "explode",
				duration : 500
			}
		});
	}
	function inputCheck(){
		var orderNo = jQuery("#orderNo").val().trim();
		var receiverName = jQuery("#receiverName").val().trim();
		if(orderNo == ""){
			alert("订单编号不能为空");
			return;
		}else if(receiverName==""){
			alert("收报人姓名不能为空");
			return;
		}
		//else if(orderNo=="" || orderNo=="订单号/查询号" ){	
		//|| /\d{16}/.test(orderNo) || /^[cnsi|CNSI]\d{12}$/.test(orderNo)
			//alert("订单编号非法");
			//return;
		//}
		else{
			jQuery.getJSON('/index/home.do?method=orderSearchNoLogon', {'orderNo':orderNo,'receiverName':receiverName}, function(data){
				jQuery("#dis_content").html(""); // 清空弹出框内容
				jQuery.each(data, function(i, item) { 
					var errMsg = item.errMsg;
					if(errMsg!=null){
						jQuery("#dis_content").append("<span class='grey'>"+errMsg+"</span>");
					}else{
						var state = item.orderState;
						if(state=="未交邮")
							state="报刊要货中";
						jQuery("#dis_content").append("<ul class='ft_body'><li class='ordrNO'>"+item.orderNo+"</li><li class='presName'>"+item.pressName+"</li><li class='subsTime'>"+(new Date(item.subscribeTime.time).format("yyyy-MM-dd hh:mm:ss"))+"</li><li class='issuYear'>"+item.issueYear+"</li><li class='issuNO'>"+item.startIssue+" - "+item.endIssue+"</li><li class='receName'>"+item.receiverName+"</li><li class='ordrState'>"+state+"</li></ul>");	
					}
				});
				openDialog();
			});
		}
	}
</script>
 {/literal}
<h1 class="title"><span class="title-green">订单</span>查询</h1>
<div class="hmain-search">
	<div class="tc h95">
		<!-- placeholder为HTML5属性，表示当属性清空时显示指定的内容 -->
		<div class="nowrap pt2 pl10">
			<span class="grey ff-ya">订单号：</span>
			<input id="orderNo" type="text" class="txt-input" placeholder="订单号/查询号">
		</div>
		<div class="nowrap pl10">
			<span class="grey ff-ya">收报人：</span>
			<input id="receiverName" type="text" class="txt-input" placeholder="收报人">
		</div>
		<input type="button" class="hm-btn-search mt5" onClick="inputCheck()">
	</div>
</div>
<div id="fasttipsDialog" style="display: none;font: 12px/ 1.5 Arial;" title="订单查询结果">
	<div class="bord">
		<ul class="ft_title">
			<li class="ordrNO">订单编号</li>
			<li class="presName">报刊名称</li>
			<li class="subsTime">提交时间</li>
			<li class="issuYear">发行年份</li>
			<li class="issuNO">订阅期号</li>
			<li class="receName">收报人姓名</li>
			<li class="ordrState">订单状态</li>
		</ul>
		<span class="cls"></span>
		<div id="dis_content">
		</div>
	</div>
</div>
			</div>
		</div>
	</div>


	<link href="{$smarty.const.CSS_URL}base.css" rel="stylesheet" type="text/css">
<link href="{$smarty.const.CSS_URL}index.css" rel="stylesheet" type="text/css">
<link href="{$smarty.const.CSS_URL}captify.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="{$smarty.const.CSS_URL}jquery-ui.css">
<script type="text/javascript" src="{$smarty.const.JS_URL}jquery-1.9.1.js"></script>
<script type="text/javascript" src="{$smarty.const.JS_URL}jquery-ui.js"></script>
<script type="text/javascript" src="{$smarty.const.JS_URL}base.js"></script>
<script type="text/javascript" src="{$smarty.const.JS_URL}index.js"></script>
<script type="text/javascript" src="{$smarty.const.JS_URL}jquery.easing.1.3.js"></script>


	<div class="w mt20 clearfix">
		<!-- 网订热门 -->
		<div class="fl">
			


<script type="text/javascript">
	jQuery(document).ready(function($){
		$("#p_rank li.item").changeTxtStyle();	// 引用外部index.js功能方法
		// 设置默认显示
		$('#p_rank li:eq(0)').find('.itemTit').hide();
		$('#p_rank li:eq(0)').find('.itemContain').show();
	});
	
</script>

<div class="rank">
	<div class="title-fwb">
		<div class="first_letter">
			<span style="font-size:18px; color:#fff;">网</span><span style=" line-height:34px;margin-left:5px;">订热门</span>
		</div>
	</div>
	<div class="bd">
		<ul id="p_rank" class="hoverList">
			{foreach $bestseller as $k => $v}
				<li class="posr item">
					
						<b class="posa ico_rankNum">{$v@iteration}</b>
					
					
					<p class="itemTit nowarp" style="display: none;">{$v.book_name}</p>
					<div class="tc itemContain hide" style="display: block;">
						
							<s></s>
						
						<div class="imgBox">
							
							<a title="{$v.book_name}" href="{$smarty.const.__MODULE__}/Book/detail/book_id/{$v.book_id}">
								<img alt="{$v.book_name}" src="{$smarty.const.IMG_UPLOAD}{$v.book_small_img}">
							</a>
						</div>
						<div class="itemAttrs">
							<p class="p-name">
								
								<a href="">
								{$v.book_name}</a></p>
							<p class="p-price"><strong>¥{$v.book_price}</strong>元/年</p>
						</div>
					</div>
				</li>
		{/foreach}
		</ul>
	</div>
</div>
		</div>
		<!-- 畅销推荐 -->
		<div class="fr">
			


<div class="recommend">
		<h1 class="title-fwb">
		<div class="first_letter" style="padding:0;"><span style="font-size:18px;color:#fff;">畅</span><span style=" line-height:34px;margin-left:5px;">销报刊</span></div>
		<span id="r_sort" class="fr-sort">
			
				<!--<a id="05" href="http://bk.11185.cn:80/media/imgNav.do?method=salableType&classCode=05">-->
				<a id="01" href="http://bk.11185.cn/index/hotsale.do?method=init" class="">
					青少教育类
				</a>
			
				<!--<a id="06" href="http://bk.11185.cn:80/media/imgNav.do?method=salableType&classCode=06">-->
				<a id="02" href="" class="selected">
					时尚逸志类
				</a>
			
				<!--<a id="01" href="http://bk.11185.cn:80/media/imgNav.do?method=salableType&classCode=01">-->
				<a id="03" href="" class="">
					时政财经类
				</a>
			
				<!--<a id="02" href="http://bk.11185.cn:80/media/imgNav.do?method=salableType&classCode=02">-->
				<a id="04" href="" class="">
					文化综合类
				</a>
			
				<!--<a id="03" href="http://bk.11185.cn:80/media/imgNav.do?method=salableType&classCode=03">-->
				<a id="05" href="" class="">
					老年健康类
				</a>
			
				<!--<a id="04" href="http://bk.11185.cn:80/media/imgNav.do?method=salableType&classCode=04">-->
				<a id="06" href="" class="">
					家庭生活类
				</a>
			
			<!-- <a class="floor-more" href="">更多》</a> -->
		</span>
	</h1>
	<div id="r_detail" class="fr_div">
		
	<!-- 畅销推荐内容,根据分类信息在页面加载时使用ajax调用后台动态查询 -->
				 {foreach $salesinfo as $k => $v}
				 <ul id="d_0{$v@iteration}" class="hide" style="display: none;">
					<li>
					<div class="captify">
					<div class="imgBox">
						<a href="{$smarty.const.__MODULE__}/Book/detail/book_id/{$v.book_id}"><img alt="幼儿画报" src="{$smarty.const.IMG_UPLOAD}{$v.book_big_img}">
						</a>
					</div>
					<div class="caption"><span>2-551<br>旬刊</span></div></div>
					<div class="itemAttrs"><p class="p-name"><a href="{$smarty.const.__MODULE__}/Book/detail/book_id/{$v.book_id}">{$v.book_name}</a></p>
					<p class="p-price"><strong>¥{$v.book_price}</strong>元/年</p>
					</div>
					</li>
				</ul>
					{/foreach}
				
			</ul>
		
	</div>
</div>
</div>
	</div>
	<div class="w mt20 clearfix">
		<!-- 热卖推荐 -->
		<div class="fl">
			



<script type="text/javascript">
	jQuery(document).ready(function($){
		$("#h_rank li.item").changeTxtStyle();	// 引用外部index.js功能方法
		// 设置默认显示
		$('#h_rank li:eq(0)').find('.itemTit').hide();
		$('#h_rank li:eq(0)').find('.itemContain').show();
	});

</script>
<div class="rank">
	<div class="title-fwb">
		<div class="first_letter"><span style="font-size:18px; color:#fff;">倾</span><span style=" line-height:34px;margin-left:5px;">力推荐</span></div>
	</div>
	<div class="bd">
		<ul id="h_rank" class="hoverList">
			{foreach $recommend as $k => $v}
				<li class="posr item">
					
						<b class="posa ico_rankNum">1</b>
					
					
					<p class="itemTit nowarp" style="display: none;">{$v.book_name}</p>
					<div class="tc itemContain hide" style="display: block;">
						
							<s></s>
						
						<div class="imgBox">
							
							<a title="{$v.book_name}" href="{$smarty.const.__MODULE__}/Book/detail/book_id/{$v.book_id}" target="_blank">
								<img alt="{$v.book_name}" src="{$smarty.const.IMG_UPLOAD}{$v.book_small_img}">
							</a>
						</div>
						<div class="itemAttrs">
							<p class="p-name">
								
								<a href="" target="_blank">
								{$v.book_name}</a>
							</p>
							<p class="p-price"><strong>¥{$v.book_price}</strong>元/年</p>
						</div>
					</div>
				</li>
			{/foreach}
		</ul>
	</div>
</div>
		</div>
		<!-- 精品推荐 -->
		<div class="fr">
			

<div class="recommend">
	<h1 class="title-fwb">
		<div class="first_letter" style="padding:0;"><span style="font-size:18px; color:#fff;">精</span><span style=" line-height:34px; margin-left:5px;">品报刊</span></div>
		<span id="b_sort" class="fr-sort">
			<!--<a id="magazine" href="javascript:void(0);" class="selected">高端大气上档次</a>
			<a id="news" href="javascript:void(0);">报刊亭去晚就没货</a>-->
			
				<!--<a id="07" href="http://bk.11185.cn:80/media/imgNav.do?method=salableType&classCode=07">-->
				<a id="07" href="javascript:void(0);" class="selected ">
					高端大气上档次
				</a>
			
				<!--<a id="08" href="http://bk.11185.cn:80/media/imgNav.do?method=salableType&classCode=08">-->
				<a id="08" href="javascript:void(0);">
					报刊亭去晚就没货
				</a>
			
		</span>
	</h1>



	<div id="b_detail" class="fr_div">
		<!-- 高端大气上档次 -->
			<ul id="d_07" class="hide" style="display: block;">
				{foreach $nicebook1 as $k => $v}
				<li>
					<div class="captify">
						<div class="imgBox">
							<a href="{$smarty.const.__MODULE__}/Book/detail/book_id/{$v.book_id}"><img alt="商业评论" src="{$smarty.const.IMG_UPLOAD}{$v.book_big_img}"></a>
						</div>
						<div class="caption">
							<span>80-115<br>月刊</span>
						</div>
					</div>
					<div class="itemAttrs">
						<p class="p-name">
							<a href="{$smarty.const.__MODULE__}/Book/detail/book_id/{$v.book_id}">{$v.book_name}</a>
						</p>
						<p class="p-price"><strong>¥{$v.book_price}</strong>元/年</p>
					</div>
				</li>
			{/foreach}
			</ul>
		<!-- 报刊亭去晚就没货 -->
			<ul id="d_08" class="hide" style="display: block;">
				{foreach $nicebook2 as $k => $v}
				<li>
					<div class="captify">
						<div class="imgBox">
							<a href="{$smarty.const.__MODULE__}/Book/detail/book_id/{$v.book_id}"><img alt="商业评论" src="{$smarty.const.IMG_UPLOAD}{$v.book_big_img}"></a>
						</div>
						<div class="caption">
							<span>80-115<br>月刊</span>
						</div>
					</div>
					<div class="itemAttrs">
						<p class="p-name">
							<a href="{$smarty.const.__MODULE__}/Book/detail/book_id/{$v.book_id}">{$v.book_name}</a>
						</p>
						<p class="p-price"><strong>¥{$v.book_price}</strong>元/年</p>
					</div>
				</li>
			{/foreach}
			</ul>
		
	</div>
</div>
<script>
	// (function($){
	// 	// 分类标题默认显示样式
	// 	$("#b_sort a:eq(0)").addClass("selected");
	// 	// 分类内容默认显示第一个
	// 	queryClassifyContent($("#b_sort a:eq(0)").attr("id"));
	// 	//var dis_ul = $("#r_sort a:eq(0)").attr("id");
	// 	$("#b_detail ul:eq(0)").show();
	// 	// 为分类标题添加鼠标悬停事件,达到当选择其他分类标题时内容动态改变
	// 	$("#b_sort a").bind('click',function(){
	// 		$(this).addClass("selected").siblings("a.selected").removeClass("selected");
	// 		var rd = $("#b_detail").find("ul[id='d_"+$(this).attr("id")+"']");
	// 		if(rd.find("li").length==0){
	// 			queryClassifyContent($(this).attr("id"));
	// 		}
	// 		rd.show().siblings().hide();
	// 	});
	// })(jQuery);
$("#07").click(function(){
	$("#d_07").css("display","block");
	$("#d_08").css("display","none");
});
$("#08").click(function(){
	$("#d_07").css("display","none");
	$("#d_08").css("display","block");
});
</script>
		</div>
	</div>
	<!-- 广告区 -->
	<div class="w mt20 clearfix">
		
<script>

$(function(){
	$("#advertise li:not(:first)").css("display","none");
	var last=$("#advertise li:last");
	var first=$("#advertise li:first");
	setInterval(function(){
		if(last.is(":visible")){
			first.fadeIn(500).addClass("in");
			last.hide();
		}else{
			$("#advertise li:visible").addClass("in");
			$("#advertise li.in").next().fadeIn(500);
			$("li.in").hide().removeClass("in");
		}
	},5000);//每5秒钟切换一条，你可以根据需要更改
});

</script>
<div id="advertise">
	<ul>
		<li><a href="http://bk.11185.cn:80/advertisement/page.do?id=renminRecommend" target="_blank"><img src="http://bk.11185.cn:80/page/{$smarty.const.IMG_URL}renmin_bar.png"></a></li>
		<li><a href="http://bk.11185.cn:80/advertisement/page.do?id=xinhuaRecommend" target="_blank"><img src="http://bk.11185.cn:80/page/{$smarty.const.IMG_URL}xinhua/xinhua_title_red.jpg"></a></li>
		<li><a href="http://www.izhyd.com/" target="_blank"><img src="{$smarty.const.IMG_URL}read183.jpg"></a></li>
	</ul>
</div>
	</div>


<div class="w mt20 clearfix">
		
<div id="service">
	<dl class="fore1">
		<dt><b></b><strong>新手入门</strong></dt>
		<dd>
			<div><a href="http://bk.11185.cn/index/service.do?method=subscriptionnotes">订阅须知</a></div>
			<div><a href="http://bk.11185.cn/index/service.do?method=FAQnotes">常见问题</a></div>
			<!--<div><a href="http://bk.11185.cn:80/helpCenter.do?method=helpForward&forwardId=main">业务介绍</a></div>
			<div><a href="http://bk.11185.cn:80/news/news.do?method=find1&paraID=3">政策法规</a></div>
			<div><a href="http://bk.11185.cn:80/pubinfo/pubinfo.do?method=find">刊社信息</a></div>-->
		</dd>
	</dl>
	<dl class="fore2">
		<dt><b></b><strong>支付方式</strong></dt>
		<dd>
			<div><a href="http://bk.11185.cn/index/service.do?method=paynotes&pageId=1">在线支付</a></div>
			<div><a href="http://bk.11185.cn/index/service.do?method=paynotes&pageId=2">订阅券（卡）支付</a></div>
		</dd>
	</dl>
	<dl class="fore3">
		<dt><b></b><strong>售后服务</strong></dt>
		<dd>
			<!--
			<div><a href="http://bk.11185.cn:80/order/netdownorder.do?method=selectOrder">我的订单</a></div>
			
			<div><a href="http://bk.11185.cn:80/userService.do">报刊续订</a></div>
			<div><a href="http://bk.11185.cn:80/userService.do">报刊退订</a></div>
			<div><a href="http://bk.11185.cn:80/userService.do">订单改址</a></div>-->
			<div><a href="http://bk.11185.cn/index/service.do?method=billnotes">开具票据</a></div>
		</dd>
	</dl>
	<dl class="fore4">
		<dt><b></b><strong>特色服务</strong></dt>
		<dd>
		<!--
			<div><a href="http://bk.11185.cn:80/helpCenter.do?method=helpForward&forwardId=question4">异地改址</a></div>
			<div><a href="http://bk.11185.cn:80/helpCenter.do?method=helpForward&forwardId=question5">集订分送</a></div>-->
			<div><a href="http://bk.11185.cn/userService.do">名址查询</a></div>
			<div><a href="http://bk.11185.cn/userService.do">邮政机构查询</a></div>
		</dd>
	</dl>
	<dl class="fore5">
		<dt><b></b><strong>网站介绍</strong></dt>
		<dd>
			<div><a href="http://bk.11185.cn/index/service.do?method=aboutnotes">关于我们</a></div>
			<div><a href="http://bk.11185.cn/index/service.do?method=contactnotes">联系我们</a></div>

		</dd>
	</dl>
</div>
	</div>
	<!-- 版权信息 -->
	<div id="copyright" class="mt20 clearfix">
		
Copyright 2010, 版权所有 中国邮政集团公司
<br>
服务热线：400-66-11185
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_30043824'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D30043824%26l%3D2' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_30043824"><a href="http://quanjing.cnzz.com/" target="_blank" title="全景统计"><img border="0" hspace="0" vspace="0" src="{$smarty.const.IMG_URL}2.gif"></a></span><script src="{$smarty.const.IMG_URL}c.php" type="text/javascript"></script><script src="{$smarty.const.IMG_URL}core.php" charset="utf-8" type="text/javascript"></script>

	</div>


</body>
<script>
	$("#01").mouseover(function(){
	$("#01").addClass("selected");
	$("#01").siblings().removeClass("selected");
	$("#d_01").css("display","block");
	$("#d_02").css("display","none");
	$("#d_03").css("display","none");
	$("#d_04").css("display","none");
	$("#d_05").css("display","none");
	$("#d_06").css("display","none");

});
$("#02").mouseover(function(){
	$("#02").addClass("selected");
	$("#02").siblings().removeClass("selected");
	$("#d_01").css("display","none");
	$("#d_02").css("display","block");
	$("#d_03").css("display","none");
	$("#d_04").css("display","none");
	$("#d_05").css("display","none");
	$("#d_06").css("display","none");
});
$("#03").mouseover(function(){
	$("#03").addClass("selected");
	$("#03").siblings().removeClass("selected");
	$("#d_01").css("display","none");
	$("#d_02").css("display","none");
	$("#d_03").css("display","block");
	$("#d_04").css("display","none");
	$("#d_05").css("display","none");
	$("#d_06").css("display","none");
});
$("#04").mouseover(function(){
	$("#04").addClass("selected");
	$("#04").siblings().removeClass("selected");
	$("#d_01").css("display","none");
	$("#d_02").css("display","none");
	$("#d_03").css("display","none");
	$("#d_04").css("display","block");
	$("#d_05").css("display","none");
	$("#d_06").css("display","none");
});
$("#05").mouseover(function(){
	$("#05").addClass("selected");
	$("#05").siblings().removeClass("selected");
	$("#d_01").css("display","none");
	$("#d_02").css("display","none");
	$("#d_03").css("display","none");
	$("#d_04").css("display","none");
	$("#d_05").css("display","block");
	$("#d_06").css("display","none");
});
$("#06").mouseover(function(){
	$("#06").addClass("selected");
	$("#06").siblings().removeClass("selected");
	$("#d_01").css("display","none");
	$("#d_02").css("display","none");
	$("#d_03").css("display","none");
	$("#d_04").css("display","none");
	$("#d_05").css("display","none");
	$("#d_06").css("display","block");
});

</script>	

</html>