$(function(){
    /*顶部广告*/
    var top_ad=$('#top-ad');
    top_ad.show(1000);
    top_ad.find('.ad-close').click(function(){
        top_ad.hide(1000);
    });

    /*顶部小箭头*/
    var nav_item_one=$('#header .nav_item_one');
    nav_item_one.hover(
        function(){
            nav_item_one.find('.dropdown-db').css('display','block');
            nav_item_one.css({'border':'1px solid #f3f3f3','border-top':'none'});
            turn_jt(nav_item_one.find('.header_icon'),1)
        },
        function(){
            nav_item_one.find('.dropdown-db').css('display','none');
            nav_item_one.css('border','none');
            turn_jt(nav_item_one.find('.header_icon'),0)
        }
    );
    var nav_item_two=$('.nav_item_two');
    nav_item_two.hover(function(){
        nav_item_two.find('.dropdown-map').css('display','block');
        turn_jt(nav_item_two.find('.header_icon'),1)
    },
    function(){
        nav_item_two.find('.dropdown-map').css('display','none');
        turn_jt(nav_item_two.find('.header_icon'),0)
    });


    /*顶部搜索热门城市*/
    var first_wd=$('#first_wd li');
    var city_list=$('#city_list .city');
    var md_span=$('.md-span');
    //箭头与城市显示
    md_span.hover(
        function(){
            turn_jt(md_span.find('.header_icon'),1);
         $('#first_wd').parent().css('display','block');

    },
        function(){
          turn_jt(md_span.find('.header_icon'),0);
          $('#first_wd').parent().css('display','none')}

    );
    //点击更换地区
    first_wd.click(function(){
        first_wd.removeClass('fw-hover');
        city_list.removeClass('cl-hover');
        $(this).addClass('fw-hover');
        var key = $(this).index();
        city_list.eq(key).addClass('cl-hover')
    });
    //搜索框的产品下拉 fa-chevron-down
    var sh_left=$('.search_box .sh_left');
    sh_left.hover(
        function(){
             sh_left.find('.spic').css('display','block');
            turn_jt(sh_left.find('.fa-chevron-down'),1);
         },
        function(){
            sh_left.find('.spic').css('display','none');
            turn_jt(sh_left.find('.fa-chevron-down'),0);
        }
    );
    //点击高级搜索时
    var high_sh=$('.high_sh');
    high_sh.find('span').toggle(
        function(){
            high_sh.find('.more_info').css('display','block');
            turn_jt(high_sh.find('.header_icon'),1);

    },
        function(){
            high_sh.find('.more_info').css('display','none');
            turn_jt(high_sh.find('.header_icon'),0);
        }
    );
    /*横向菜单*/
    var menu=$('.hd-menu .mn-li');
    menu.hover(
        function(){
            var rt_down=$(this).find('.rt_down');
            if(rt_down.find('.down_box').length){
                menu.css('height','37px');
                menu.find('span').eq(0).addClass('icon_tt');
                rt_down.addClass('hover');
                turn_jt( $(this).find('.icon_jt'),1);
            }
        },function(){
            turn_jt( $(this).find('.icon_jt'),0);
            $(this).find('.rt_down').removeClass('hover');
        }

    );

    /*分类菜单*/
    var ct_detail=$('.hd-menu .ct_detail');
    var ct_dt_box=ct_detail.find('.ct-dt-box');
    ct_detail.hover(
        function(){
            var key = $(this).index();
            ct_dt_box.eq(key).addClass('hover');
        },
        function(){
            ct_dt_box.removeClass('hover');
        }
    );


    /*中间广告滚动图*/
    //手动触发切换
    //var mn_tp_left=$('#main .mn-tp-left');
    var ad_big_imgs=$('#main .ad_big_imgs');
    var ad_big_img=ad_big_imgs.find('.ad_big_img');
    var ad_word_li=ad_big_imgs.find('.ad_word li');
    var ad_small_imgs=$('#main .ad_small_imgs');
    ad_word_li.hover(
        function(){
            ad_big_img.removeClass('ad-hover');
            ad_word_li.removeClass('li-hover');
            var key=$(this).index();
            $(this).addClass('li-hover');
            ad_big_img.eq(key).addClass('ad-hover');
        }, function(){}
    );
    //自动切换，左右点击切换
    var icon_pre=ad_big_imgs.find('.icon_pre');
    var icon_next=ad_big_imgs.find('.icon_next');
    roll();
    /**
     * 广告图片滚动效果，附带点击左右切换
     */
    function roll(){
        ad_big_imgs.hover(
            function(){
                clearInterval(auto_tran);
                icon_pre.click(function(){
                    if(i==0)i=6;
                    i-=1;
                    big_small_pic(i);
                });
                icon_next.click(function(){
                    if(i==5)i=-1;
                    i+=1;
                    big_small_pic(i);
                });
            },
            function(){
                roll();
            }
        );
        var i=0;
        var auto_tran=setInterval(function(){
            if(i > 5)i=0;
            big_small_pic(i);
            i++;
        },2000);
    }
    /*广告图片对class的切换*/
    function big_small_pic(i){
        ad_big_img.removeClass('ad-hover');
        ad_word_li.removeClass('li-hover');
        ad_big_img.eq(i).addClass('ad-hover');
        ad_word_li.eq(i).addClass('li-hover');
    }


    /*中间高高滚图下边的图片*/
    var ad_small_img=$('#main .ad_small_imgs img');
    ad_small_img.hover(
        function(){
            $(this).animate({left:-100},'fast');
            var li =$(this).parent().parent();
            li.css('width','135px');
        },function(){
            $(this).animate({left:0},'fast');
            var li =$(this).parent().parent();
            li.css('width','100px');
        }
    );


    /*设置广告图左下角 订机票*/
    var if_bottom=$('#main .if-bottom');
    var bm_tit=if_bottom.find('.if-bm_tit li');
    var bm_con=if_bottom.find('.if-bm_con .cn-con');
    bm_tit.click(function(){
        bm_tit.removeClass('li-hover');
        bm_con.removeClass('con-hover');
        var key=bm_tit.index($(this));
        bm_tit.eq(key).addClass('li-hover');
        bm_con.eq(key).addClass('con-hover');
    });


    /*设置中间效果切换，图片阴影*/
    var md_lf_showlist =$('#main .md-lf-showlist');
    img_shadow_fn();
    function img_shadow_fn(){
        $.each(md_lf_showlist,function(i,v){
            /*切换导航与对应内容*/
            var showlt_tit=$(this).find('.showlt_tit li');
            var showlt_con=$(this).find('.showlt_con .st-cn-right ');
            showlt_tit.click(function(){
                showlt_tit.removeClass('st-li-hover');
                $(this).addClass('st-li-hover');
                var key=$(this).index();
                showlt_con.removeClass('ri-hover');
                showlt_con.eq(key).css('opacity','0.5');
                showlt_con.eq(key).animate({opacity:1},'fast');
                showlt_con.eq(key).addClass('ri-hover');
            });
        });

        /*中间介绍小图背景阴影设置*/
        var img=md_lf_showlist.find('.cn-ri_img');
        img.hover(
            function(){
                var img_shadow=$(this).find('.cn-ri_img_shadow');
                img_shadow.css('top',120);
                img_shadow.animate({'top':0},'fast');
            },
            function(){
                var img_shadow=$(this).find('.cn-ri_img_shadow');
                img_shadow.animate({'top':120},'fast');
            }
        );
    };

    /*热销排行报的切换*/
    var order_tit=$('.hot_order .order_tit li');
    var order_con=$('.hot_order .order_cons');
    order_tit.click(function(){
        order_tit.removeClass('od-tit-hover');
        order_con.removeClass('od-con-hover');
        var key =$(this).index();
        order_tit.eq(key).addClass('od-tit-hover')
        order_con.eq(key).addClass('od-con-hover')
    });


    /*右边银行卡效果*/
    var credit_down=$('.credit_down');
    var as_box_one=$('.bank_box .as_box_one');
    as_box_one.hover(
        function(){
            credit_down.css('display','block');
        },
        function(){
            credit_down.css('display','none');
        }
    );

    /*设置左边导航*/
    var left_menu=$('#left_menu');
    var left_menu_li=left_menu.find('li');
    var main_showlists=$('.md-lf-showlist ');
     //计算左边的距离
    var window_width=parseFloat($(window).width());
    var menu_width=parseFloat(left_menu.width());
    ct_dis()
   function ct_dis(){
       var left =(window_width-1200)/2-menu_width-3;
       left_menu.css('left',left);
   }
    //设置顶部隐藏
    function hidden_menu(){
        if($(window).scrollTop()<200){
            left_menu.hide();
        }else{
            left_menu.show();
        }
    }
    hidden_menu();

     //设main滚动，联动左边导航
    $(window).scroll( function() {
        var now_scroll=$(window).scrollTop(),key;
        $.each(main_showlists,function(i,v){
           var main_showlist= $(this).offset().top;
            if(now_scroll+150>=main_showlist)key=i;
        });
        left_menu_li.removeClass('lt-hover');
        left_menu_li.eq(key).addClass('lt-hover');
        //设置顶部隐藏
        if($(window).scrollTop()<200){
            left_menu.hide();
        }else{
            left_menu.show();
        }
        hidden_menu();
    } );
    //设置点击左边导航，跳转到对应内容
    left_menu_li.click(function(){
        left_menu_li.removeClass('lt-hover');
        $(this).addClass('lt-hover');
        var key=$(this).index();
        var dis= main_showlists.eq(key).offset().top-100;//目标main模块的滚动条对应的高度
        var cur= $(window).scrollTop();//目标main模块的滚动条对应的高度
        roll_fn(cur,dis,function(i){
            $(window).scrollTop(i);
        },20,100)
    });

    /*设置黑色广告的关闭按钮旋转*/
    var ad_box=$('#ad_box');
    var btn=$('#ad_box .ad_close');
    btn.click(function(){
        ad_box.animate({width:0,opacity:0},300)
    });
    //设置旋转
    btn.hover(
        function(){
            roll_fn(0,180,function(i){
                btn.css('transform','rotate('+i+'deg)')
            },10,10)
        },
        function(){
            roll_fn(180,0,function(i){
                btn.css('transform','rotate('+i+'deg)')
            },10,10)
        }
    );


    /**
     * 设置转动箭头，
     * @param obj 为操作的对象
     * @param i 状态 1为启动，2位返回
     */
    function turn_jt(obj,i){
        var a,b;
        if(i){
            a=0;b=180
        }else{
            a=180,b=0
        }
        roll_fn(a,b,function(i){
            obj.css('transform','rotate('+i+'deg)')
        },10,10)
    }



    /**
     * 设置动画效果，触发器
     * @param org 初始状态
     * @param aim 目标状态
     * @param fn 所执行的函数
     * @param speed 执行速度
     * @param speed 一次执行的尺度大小
     */
    function roll_fn(org,aim,fn,speed,size){
        var ff=org;
        var test = setInterval(function(){
            if(org<aim){
                if(ff>=aim){
                    clearInterval(test);
                    return;
                }
                ff+=size;
            }else{
                if(ff<=aim){
                    clearInterval(test);
                    return;
                }
                ff-=size;
            }
            fn(ff);
        },speed)
    }

});/*end $()*/

