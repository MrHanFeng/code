

/*����ͼƬ�����������ɫ,��style
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


/*������֣�����ͼ�л�����class*/


    var slide_img = document.getElementsByClassName('ad_pic');
    var word_box = document.getElementsByClassName('word_box');
    for(var i=0;i<word_box.length;i++){
        word_box[i]=this;
        word_box[i].onmouseover=function(){
            for(var j=0;j<word_box.length;j++){move_class('ad_show',slide_img[j]);if(word_box[j]==this) k=j}
            add_class('ad_show',slide_img[k]);
            clearInterval(time_roll);
        }
    }

    function auto_roll(x){
        for(var j=0;j<word_box.length;j++){move_class('ad_show',slide_img[j]);}
        add_class('ad_show',slide_img[x]);
    }
    var y=0;
    var time_roll = setInterval(function(){
        auto_roll(y);
        y+=1;
        if(y==word_box.length)y=0;
    },2500)
    /**
     *  ���class
     *  @param ad_cls:Ҫ��ӵ�class����
     *  @param cls_name ��Ҫ������DOM�ڵ㣬�Ѿ���document.getElementByClassName��ȡ
     */
    function add_class(ad_cls,cls_name){
            var temp = cls_name.getAttribute('class');
            temp +=' '+ad_cls;
            cls_name.setAttribute('class',temp);
         }

    /**
     *  ɾ��class
     *  @param del_cls:Ҫɾ����class����
     *  @param cls_name ��Ҫ������DOM�ڵ㣬�Ѿ���document.getElementByClassName��ȡ
     */
    function move_class(del_cls,cls_name){
            var temp = cls_name.getAttribute('class');
            if(!temp)return;
            temp = temp.replace(' '+del_cls,'');
            cls_name.setAttribute('class',temp)
        }

