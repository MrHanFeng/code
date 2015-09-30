/**
 * Created by hanfeng on 2015/9/30.
 */
/*把Jquery代码写入此中*/
$(function(){
    var main =$('#big_show');
    var left_menu=$('#left_menu');
    var lf_list=$('#left_menu li');
    var main_list=$('#big_show .showlist');

    ct_distance();
    /**
     * 计算左边导航的漂浮距离，紧贴main左侧
     */
    function ct_distance(){
        var win_width=parseFloat($(window).width());
        var contain_width=parseFloat(main.width());
        var menu_width=parseFloat(left_menu.width());
        left_dis=(win_width-contain_width)/2-menu_width-1;
        left_menu.css('left',left_dis);
    }
    hidden_menu();
    function hidden_menu(){
        //设置顶部隐藏
        if($(window).scrollTop()<200){
            left_menu.hide();
        }else{
            left_menu.show();
        }
    }


    /**
     * 设置点击左边导航实现main滚动到对应模块
     */
    lf_list.click(function(){
        lf_list.removeClass('lt-hover');//1.移除CLASS
        $(this).addClass('lt-hover');//2.添加CLASS
        var key = $(this).index();//获取当前点击的下标，为了获取与MAIN对应的模块
        var showlist = main_list.eq(key);//3.获取到点的对象对应main中的目标是哪块
        var dis= showlist.offset().top-110;//目标main模块的滚动条对应的高度
        var cur= $(window).scrollTop();//目标main模块的滚动条对应的高度
        roll_fn(cur,dis,function(i){
            $(window).scrollTop(i);
        },20,100)
    });

    /**
     * 设main滚动，联动左边导航
     */
    $(window).scroll( function() {
        var now_scroll=$(window).scrollTop(),key;
        $.each(main_list,function(i,v){
           var main_list_dis =  main_list.eq(i).offset().top;
            if(now_scroll>=main_list_dis-502) key=i;
        });
        lf_list.removeClass('lt-hover');
        lf_list.eq(key).addClass('lt-hover');
        //设置顶部隐藏
        if($(window).scrollTop()<200){
            left_menu.hide();
        }else{
            left_menu.show();
        }
        hidden_menu();
    } );



    /*设置黑色广告的关闭按钮旋转*/
    var ad_box=$('#ad_box');
    var btn=$('#ad_box .ad_close');
    btn.css('margin-left',left_dis+55);
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
});

/**
 * JQUERY总结
 * 实现功能：
 *      1.导航条点击滚动
 *            原理：点击触发，导航条的个数与main的个数对应，【利用下标值对应相同】，结合滚动高度来设置
 *            关键JQ方法：
 *                  $(window).scroll.Top设置滚动条的距离
 *                  obj.offset().top;获取当前对象距网页头部高度
 *      2.滚动图片导航条滚动
 *            原理：滚动触发，获取当前滚动高度，获取每一个块的高度，进行判断，【记录滚动到当前区域的下标】
 *                  从而利用【下标对应关系】找到导航里的对应模块
 *            关键JQ方法：
 *                   $.each() 循环获得的CLASS，从而操作里边每一个DIV
 *                   obj.offset().top;获取当前对象距网页头部高度
 *
 *      3.广告栏关闭按钮旋转
 *            原理：     利用CSS3属性
 *            关键JQ方法：transfor:rotate(10beg)
 *
 *      利用函数
 *          roll_fn():利用定时器实现参数的慢慢变化过程
 */


