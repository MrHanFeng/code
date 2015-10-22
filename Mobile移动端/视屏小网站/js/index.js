$(function(){
    var video_data=[
        'mtv1.mp4','mtv2.mp4','mtv3.mp4'
    ];
    var video=document.getElementById('video');//获取到VIDEO的标签
    var play_window=$('.play_window');
    var cn_play=$('.cn-play');
    var pre=$('.pre');
    var next=$('.next');
    var play_now=$('.play_now');
    var key=0;
    play_now.html(turn_video(key));
    cn_play.click(function(){
            if(video.paused){
                video.play();
                cn_play.html('暂z停');
            }else{
                video.pause();
                cn_play.html('播放');
            }
         }
    );

    pre.click(function(){
        key-=1;
        if(key<0)key=video_data.length-1;
        play_now.html(turn_video(key));
    });
    next.click(function(){
        key+=1;
        if(key>=video_data.length)key=0;
        play_now.html(turn_video(key));
    });
    function turn_video(i){
        var change=' <video controls="controls" preload="auto" id="video"> <source src="mp4/'+video_data[i]+'" type="video/mp4"> </video>';
        play_window.html(change);
        video=document.getElementById('video'); //重新获取到VIDEO的标签
        cn_play.html('播放');
        return video_data[i];
    }




});