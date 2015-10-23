/**
 * Created by Administrator on 2015/10/19.
 */
$(function(){
    var vo_data=['陈奕迅 - 兄弟.mp3','筷子兄弟 - 老男孩.mp3','陈奕迅 - 浮夸.mp3','张宇 - 雨一直下.mp3','郑智化-水手.mp3'];
    var next_id=$('.next-id');
    var last_id=$('.last-id');
    var ov_cls=$('.ov-cls');
    var index_n=0;
    ms_tpl();
    var ms_list=$('.ms-list');
    play_fn(index_n);
    function play_fn(i){
        ms_list.removeClass('ms-list-hover');
        ms_list.eq(i).addClass('ms-list-hover');
        var vo_id=ov_tpl(i);
        var play_id=$('.play-id');
        play_id.unbind();
        play_id.click(function(){
            if(vo_id.paused){
                vo_id.play();
            }else{
                vo_id.pause();
            }
        });
    }
    function ov_tpl(i){
        var vl=vo_data[i].split('.');
        var tpl='<audio controls="controls" loop="loop" id="vo-id" style="width: 100%;">' +
            '<source src="audio/'+vo_data[i]+'" type="audio/mpeg"></audio>' +
            '<div style="padding: 5px;color: #ffffff">当前歌曲:'+vl[0]+'</div>';
        ov_cls.html(tpl);
        return document.getElementById('vo-id');
    }
    function ms_tpl(){
        var tpl='';
        $.each(vo_data,function(i,v){
            var v_l= v.split('.');
            tpl+='<li class="ms-list">'+v_l[0]+'</li>';
        });
        $('.ms-id').html('<h2>音乐榜单</h2><ul>'+tpl+'</ul>');
    }
    next_id.click(function(){
        index_n--;
        if(index_n<0)index_n=vo_data.length;
        play_fn(index_n);
    });
    last_id.click(function(){
        index_n++;
        if(index_n>=vo_data.length)index_n=0;
        play_fn(index_n);
    });

    ms_list.click(function(){
        index_n=ms_list.index($(this));
        play_fn(index_n);
    });
})
