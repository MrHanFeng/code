var queryClassifyContent=function(classCode){
			var d_id = "d_"+classCode;
			
				jQuery.ajax({
					url:'/index/home.do?method=imageSwitch',
					type:'post',
					data:{'classCode':classCode},
					dataType:'json',
					beforeSend:function(){jQuery("#wait").show();},
					complete:function(){jQuery("#wait").hide();},
					success:function(data){
						if(data==null||data==""){
							jQuery("#"+d_id).html("对不起，畅销推荐模块维护中... ...");
						}else{
							jQuery("#"+d_id).html(""); // 清空ul内容
							// 将不同分类的畅销推荐内容动态添加到UL模块中，以ID区分所有推荐模块信息
							jQuery.each(data, function(i, item) { 
								//var d_id = "d_"+data[i].CLASS_CODE;
								//if(undefined==$("#"+d_id).attr("id")){
								//	jQuery("#r_detail").append("<ul id='"+d_id+"' class='hide'></ul>");
								//}
								if(jQuery("#"+d_id+" li").length<10){
									var imagePath = data[i].IMAGE_NAME;
									// 设置默认显示图片
									if(imagePath == null){
										imagePath = "/correcting/style/images/no_photo.jpg";
									}else{
										imagePath = "/media/upload"+imagePath;
									}
									//jQuery("#"+d_id).append("<li><div class='captify'><div class='imgBox'><a href='/index/detail.do?method=getCataDetail&year="+data[i].YEAR+"&pressCode="+data[i].PRESS_CODE+"'><img alt='"+data[i].PRESS_NAME+"' src='"+imagePath+"'></a></div><div class='caption'><span>"+data[i].PRESS_CODE+"<br>"+data[i].PERIOD_TYPE_NAME+"</span></div></div><div class='itemAttrs'><p class='p-name'><a href='/index/detail.do?method=getCataDetail&year="+data[i].YEAR+"&pressCode="+data[i].PRESS_CODE+"'>"+data[i].PRESS_NAME+"</a></p><p class='p-price'><strong>\¥"+Number(data[i].YEAR_PRICE).toFixed(2)+"</strong>元/年</p></div></li>");
									jQuery("#"+d_id).append("<li><div class='captify'><div class='imgBox'><a href='/index/detail.do?method=getCataDetail&pressCode="+data[i].PRESS_CODE+"'><img alt='"+data[i].PRESS_NAME+"' src='"+imagePath+"'></a></div><div class='caption'><span>"+data[i].PRESS_CODE+"<br>"+data[i].PERIOD_TYPE_NAME+"</span></div></div><div class='itemAttrs'><p class='p-name'><a href='/index/detail.do?method=getCataDetail&pressCode="+data[i].PRESS_CODE+"'>"+data[i].PRESS_NAME+"</a></p><p class='p-price'><strong>\¥"+Number(data[i].YEAR_PRICE).toFixed(2)+"</strong>元/年</p></div></li>");
								}
							});
							//图片蒙版
							jQuery('.captify').hover(
								function() {
									jQuery(this).children('div:last').stop(false,true).animate({bottom:6},{duration:200, easing: 'easeOutQuart'});
								},
								function() {
									jQuery(this).children('div:last').stop(false,true).animate({bottom:-100},{duration:200, easing: 'easeOutQuart'});
								}
							);
						}
					},
					error:function(){jQuery("#"+d_id).html("系统处理异常，请稍后重试... ...");}
				});
			
		};

(function($){
		$.extend($.fn,{
			/* 文字与图片布局切换 ，用于：浏览记录*/
			changeTxtStyle:function(obj){
						var settings = {
							titEle : ".itemTit",
							containEle : ".itemContain",
							hiddenClass : "hide",
							callback:function(){}
						  };
						$.extend(settings,obj);
						return this.each(function(){
							$(this).hover(function(){
								$(this).siblings().find(settings.titEle).show();
								$(this).find(settings.titEle).hide();
								$(this).siblings().find(settings.containEle).hide();
								$(this).find(settings.containEle).show();
							},function(){
								//alert($(this).nextAll().length);
								if($(this).nextAll().length!=9){
									$(this).find(settings.titEle).show();
									$(this).find(settings.containEle).hide();
									$(this).siblings("li:eq(0)").find(settings.titEle).hide();
									$(this).siblings("li:eq(0)").find(settings.containEle).show();
								}
							});
						});
			}
		});
})(jQuery);