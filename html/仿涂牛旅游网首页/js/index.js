/*点击文字，大广告图切换*/
    //var slide_img = document.getElementsByClassName('ad_pic');
    //var word_box = document.getElementsByClassName('word_box');
    //
    //for(var i=0 ;i<word_box.length;i++){
    //    word_box[i].onclick=function(){
    //
    //        slide_img[i].setAttribute('class',' ad_show');
    //    }
    //}

/*滑动图片背景渐变深化颜色,
*   1.this的用法很关键
*   2.理解for循环结构实质，最后生成的文档为4段代码，无变量的，
*       所以触发for循环里的事件onmouseover时，不会执行事件onmouseover前边的代码var bl=true
*/
    var img_box =  document.getElementsByClassName('sp-box');

    for(var i=0;i<img_box.length;i++){
        var bl=true,is_this;
        /*鼠标移动到图上时*/
        img_box[i].onmouseover=function(){
            if(is_this!=this)bl=true;
            is_this=this;//区分是否是本块，减少因速度太快，没有触发清除定时器的错误率
            if(bl==false)return;
            bl=false;
            var xs= 70,s_time;//默认像素高度
            var hs_id=this.getElementsByClassName('img_shadow');
            //clearTimeout(s_time);
            s_time=setInterval(function(){
                if(xs <= 0){
                    clearTimeout(s_time);
                    bl=true;
                    return;
                }
                xs-=10;
                hs_id[0].style.top=xs+"px";
            },1);
        }
        /*鼠标移开时*/
        img_box[i].onmouseout =function(){
            if(is_this!=this)bl=true; is_this=this;
            if(bl==false)return;bl=false;
            var xs=0,time;
            var hs_id=this.getElementsByClassName('img_shadow');
            //clearTimeout(time);
            time=setInterval(function(){
                if(xs>=70){
                    hs_id[0].setAttribute('style','');
                    clearTimeout(time);
                    bl=true;
                    return;
                }
                xs+=10;
                hs_id[0].style.top=xs+"px";
            },1)

            //img_shadow[3].setAttribute('style','')
        }
    }
    //
    //s_time=setInterval(function(){
    //    if(tm==3){
    //        clearTimeout(s_time);
    //        return;
    //    }
    //    tm+=1;
    //    alert(tm)
    //},100)




    //setInterval(function(){
    //
    //},200)