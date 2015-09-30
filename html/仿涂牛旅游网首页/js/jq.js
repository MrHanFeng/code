/**
 * Created by hanfeng on 2015/9/30.
 */
/*��Jquery����д�����*/
$(function(){
    var main =$('#big_show');
    var left_menu=$('#left_menu');
    var lf_list=$('#left_menu li');
    var main_list=$('#big_show .showlist');

    ct_distance();
    /**
     * ������ߵ�����Ư�����룬����main���
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
        //���ö�������
        if($(window).scrollTop()<200){
            left_menu.hide();
        }else{
            left_menu.show();
        }
    }


    /**
     * ���õ����ߵ���ʵ��main��������Ӧģ��
     */
    lf_list.click(function(){
        lf_list.removeClass('lt-hover');//1.�Ƴ�CLASS
        $(this).addClass('lt-hover');//2.���CLASS
        var key = $(this).index();//��ȡ��ǰ������±꣬Ϊ�˻�ȡ��MAIN��Ӧ��ģ��
        var showlist = main_list.eq(key);//3.��ȡ����Ķ����Ӧmain�е�Ŀ�����Ŀ�
        var dis= showlist.offset().top-110;//Ŀ��mainģ��Ĺ�������Ӧ�ĸ߶�
        var cur= $(window).scrollTop();//Ŀ��mainģ��Ĺ�������Ӧ�ĸ߶�
        roll_fn(cur,dis,function(i){
            $(window).scrollTop(i);
        },20,100)
    });

    /**
     * ��main������������ߵ���
     */
    $(window).scroll( function() {
        var now_scroll=$(window).scrollTop(),key;
        $.each(main_list,function(i,v){
           var main_list_dis =  main_list.eq(i).offset().top;
            if(now_scroll>=main_list_dis-502) key=i;
        });
        lf_list.removeClass('lt-hover');
        lf_list.eq(key).addClass('lt-hover');
        //���ö�������
        if($(window).scrollTop()<200){
            left_menu.hide();
        }else{
            left_menu.show();
        }
        hidden_menu();
    } );



    /*���ú�ɫ���Ĺرհ�ť��ת*/
    var ad_box=$('#ad_box');
    var btn=$('#ad_box .ad_close');
    btn.css('margin-left',left_dis+55);
    btn.click(function(){
        ad_box.animate({width:0,opacity:0},300)
    });
    //������ת
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
     * ���ö���Ч����������
     * @param org ��ʼ״̬
     * @param aim Ŀ��״̬
     * @param fn ��ִ�еĺ���
     * @param speed ִ���ٶ�
     * @param speed һ��ִ�еĳ߶ȴ�С
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
 * JQUERY�ܽ�
 * ʵ�ֹ��ܣ�
 *      1.�������������
 *            ԭ������������������ĸ�����main�ĸ�����Ӧ���������±�ֵ��Ӧ��ͬ������Ϲ����߶�������
 *            �ؼ�JQ������
 *                  $(window).scroll.Top���ù������ľ���
 *                  obj.offset().top;��ȡ��ǰ�������ҳͷ���߶�
 *      2.����ͼƬ����������
 *            ԭ��������������ȡ��ǰ�����߶ȣ���ȡÿһ����ĸ߶ȣ������жϣ�����¼��������ǰ������±꡿
 *                  �Ӷ����á��±��Ӧ��ϵ���ҵ�������Ķ�Ӧģ��
 *            �ؼ�JQ������
 *                   $.each() ѭ����õ�CLASS���Ӷ��������ÿһ��DIV
 *                   obj.offset().top;��ȡ��ǰ�������ҳͷ���߶�
 *
 *      3.������رհ�ť��ת
 *            ԭ��     ����CSS3����
 *            �ؼ�JQ������transfor:rotate(10beg)
 *
 *      ���ú���
 *          roll_fn():���ö�ʱ��ʵ�ֲ����������仯����
 */


