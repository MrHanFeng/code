/*������֣�����ͼ�л�*/
    //var slide_img = document.getElementsByClassName('ad_pic');
    //var word_box = document.getElementsByClassName('word_box');
    //
    //for(var i=0 ;i<word_box.length;i++){
    //    word_box[i].onclick=function(){
    //
    //        slide_img[i].setAttribute('class',' ad_show');
    //    }
    //}

/*����ͼƬ�����������ɫ,
*   1.this���÷��ܹؼ�
*   2.���forѭ���ṹʵ�ʣ�������ɵ��ĵ�Ϊ4�δ��룬�ޱ����ģ�
*       ���Դ���forѭ������¼�onmouseoverʱ������ִ���¼�onmouseoverǰ�ߵĴ���var bl=true
*/
    var img_box =  document.getElementsByClassName('sp-box');

    for(var i=0;i<img_box.length;i++){
        var bl=true,is_this;
        /*����ƶ���ͼ��ʱ*/
        img_box[i].onmouseover=function(){
            if(is_this!=this)bl=true;
            is_this=this;//�����Ƿ��Ǳ��飬�������ٶ�̫�죬û�д��������ʱ���Ĵ�����
            if(bl==false)return;
            bl=false;
            var xs= 70,s_time;//Ĭ�����ظ߶�
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
        /*����ƿ�ʱ*/
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