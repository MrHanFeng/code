/**
 * Created by hanfeng on 2015/10/12.
 */
    $(function(){
        var nickname=$('.nickname');
        var username=$('.username');
        var password=$('.password');
        var password_two=$('.password_two');
        var mobile=$('.mobile');
        var id_card=$('.id_card');
        var accept=$('input[name=accept]');
        var next=$('input[name=next]');


        /*登录注册的界面切换*/
        var lo_re_tit=$('.form_top span');
        var lo_re_con=$('.form_left form');
        lo_re_tit.click(function(){
            var key;
            lo_re_tit.removeClass('t-hover');
            $(this).addClass('t-hover')
            key=$(this).index();
            lo_re_con.removeClass('fm-hover')
            lo_re_con.eq(key).addClass('fm-hover');
        });




        /*昵称操作*/
        nickname.blur(function(){
            //alert(nickname.val().length);
            if(nickname.val().length<4){
                tip_fn('nick_mes',0,'请大于3位');
            }else{
                tip_fn('nick_mes',1,'正确');
            }
        });

        /*帐号操作*/
        username.click(function(){
            username.val('')
        });
        username.blur(function(){

            $.ajax({
               url:'php/register.php?action=1',
               type:'POST',
                data:{user_username:username.val()},
               success:function(f){
                   if(f>=1){
                       tip_fn('user_mes',0,'帐号存在');return;
                   }
                   if(username.val().length<6 || username.val().length>18) {
                       tip_fn('user_mes',0,'非6-18之间');
                       return;
                   };
                   tip_fn('user_mes',1,'正确');
               },
               error:function(){
                   tip_fn('user_mes',0,'程序错误');
               }
            });
        });


        /*密码操作*/
        var last_pwd;

        password.keyup(function(){
            var pwd_len=password.val().length;
            var pwd_mes=$('.pwd_mes');
            var pwd_strong=$('.pwd_strong');
            if(pwd_len<6){
                tip_fn('pwd_mes',0,'密码过短');
                pwd_strong.css('display','inline-block');
                pwd_strong.find('.li_one').css('background','red');
            }else if(pwd_len<10 ){
                pwd_strong.find('.li_two').css('background','yellow');
                tip_fn('pwd_mes',0,'强度中');
                //pwd_strongfind('.li_one').css('backround:red');
            }else if(pwd_len<16) {
                pwd_strong.find('.li_three').css('background', 'green');
                tip_fn('pwd_mes',1,'强度高');
            }
            if(pwd_len>16){
                pwd_strong.find('.li_one').css('background','none');
                pwd_strong.find('.li_two').css('background','none');
                pwd_strong.find('.li_three').css('background','none');
                password.val(last_pwd);
            }
            last_pwd=password.val();
        });
        password.blur(function(){
            var pwd_len=password.val().length;
            if(pwd_len>6){
                tip_fn('pwd_mes',1,'正确');
            }else{
                tip_fn('pwd_mes',0,'长度不对');
            }
        });

        /*确认密码操作*/

        password_two.blur(function(){
            if(password_two.val().length==0){
                tip_fn('pwd2_mes',0,'密码为空');
            }
        });
        password_two.keyup(function(){
            //alert(password.val()+'|||'+password_two.val());
            if(password_two.val()!=password.val()){
                tip_fn('pwd2_mes',0,'密码不一致');
            }else{
                tip_fn('pwd2_mes',1,'正确');
            }
        });

        /*爱好全选，反选*/
        var hobby=$('input[type=checkbox]');
        var hb_one=$('.hb_one');
        var hb_two=$('.hb_two');
        var hb_three=$('.hb_three');
        hb_one.click(function(){
            for(var i =0 ;i <hobby.length;i++ ){
                hobby[i].checked=true;
            }
        });
        hb_two.click(function(){
            for(var i =0 ;i <hobby.length;i++ ){
                hobby[i].checked=false;
            }
        });
        hb_three.click(function(){
            for(var i =0 ;i <hobby.length;i++ ){
                hobby[i].checked=!hobby[i].checked;
            }
        });

        /*手机操作*/
        mobile.blur(function(){
            var tel=mobile.val();
            var match = /^(13[0-9]|15[0-9]|17[678]|18[0-9]|14[57])\d{8}$/;
            var a =tel.match(match);
            if(a){
                tip_fn('tel_mes',1,'正确');
            }else{
                tip_fn('tel_mes',0,'格式错误');
            }
        });

        /*身份证操作*/
        id_card.blur(function(){
            var tel=id_card.val();
            var match = /^(1[1-5]|2[1-3]|3[1-7]|4[1-6]|5[1-4]|6[1-5]|71|8[1-2])\d{8}[0-1]\d{6}(\d|x)$/i;
            var a =tel.match(match);
            if(a){
                tip_fn('id_mes',1,'正确');
            }else{
                tip_fn('id_mes',0,'格式错误');
            }
        });

        /*联动操作*///设置数备库，重新设置，减少代码冗余
        var sheng=$('.sheng');
        var shi=$('.shi');
        var qu=$('.qu');
        var city_data={
            '山西省': {
                '太原市':['万柏林区','杏花岭区','迎泽区'],
                '大同市':['大同区','大同区','大同区']
            },
            '安徽省': {
                '芜湖市':['芜湖区','芜湖区','芜湖区'],
                '合肥市':['合肥区','合肥区','合肥区'],
                '六安市':['六安区','六安区','六安区']
            },
            '江苏省': {
                '南京市':['南京区','南京区','南京区'],
                '苏州市':['苏州区','苏州区','苏州区']
            },

            '浙江省': {
                '杭州市':['杭州区','杭州区','杭州区']
            }
        };
        add_sheng();
        function add_sheng(){
            var str='<option value="">--请选择--</option>';
            for(var i in city_data){
                str +='<option value="'+i+'">'+i+'</option>';
            }
            sheng.html(str);
        }
       sheng.change(function(){
           var str='<option value="">--请选择--</option>';
           qu.html(str);
           var index=sheng.find('option:selected').text();
           var temp=city_data[index];
//        console.log(temp);
           for(var i in temp){
               str += '<option value="'+i+'">'+i+'</option>';
           }
           shi.html(str);
       });

        shi.change(function(){
            var str='<option value="">--请选择--</option>';
            qu.html(str);
            var index=sheng.find('option:selected').text();
            var index2=shi.find('option:selected').text();
            var temp=city_data[index][index2];
        //console.log(temp);
            for(var i in temp){
                str += '<option value="'+temp[i]+'">'+temp[i]+'</option>';
            }
            qu.html(str);
        });

        qu.blur(function(){
            var index=qu.find('option:selected').val();
            if(index){
                tip_fn('city_mes',1,'正确');
            }else{
                tip_fn('city_mes',0,'请选择');
            }
        });


        /*确认同意条款*/
        //accept.click(function(){
        //    var is_this=$(this);
        //    if(is_this.attr('checked')=='checked'){
        //        next.css({'background':'orangered','cursor':'pointer'});
        //        is_this.removeAttr("checked", true);
        //    }else{
        //        next.css({'background':'#999999','cursor':'auto'});
        //    }
        //});
       /* accept.toggle(
            function(){
                next.css({'background':'orangered','cursor':'pointer'});
                var is_this=$(this);
                //设置一个超时器来设置，本来点击到了，防止它迅速清除，这是事件和选择框执行的先后顺序问题
                setTimeout(function(){
                    is_this.attr("checked", true);
                },100);
                $(this).removeAttr("checked");
                //is_this.attr("checked", true);
            },
            function(){
                next.css({'background':'#999999','cursor':'auto'});
                var is_this=$(this);
                setTimeout(function(){
                    $(this).removeAttr("checked");
                },100);
            }
        );*/

        accept.click(
            function(){
                if(accept.val()==1){
                    accept.val('0');
                    accept.removeAttr("checked");
                    next.css({'background':'#999999','cursor':'auto'});
                }else{
                    accept.val('1');
                    accept.attr("checked", true);
                    next.css({'background':'orangered','cursor':'pointer'});
                }
            }
        );
       /* accept.click(
        function(){
            next.css({'background':'orangered','cursor':'pointer'});
            accept.attr("checked", true);
        },
        function(){
            next.css({'background':'#999999','cursor':'auto'})
        });*/


        /*点击下一步，验证并提交信息*/
        next.click(function(){
            //alert(r_e('user_mes'));
            if(accept.val()==0){
                return;
            }

            if(r_e('nick_mes')&&r_e('user_mes')&&r_e('pwd_mes')&&r_e('pwd2_mes')&&r_e('tel_mes')&&r_e('id_mes')&&r_e('city_mes')){
                transform_data()
            }else{
                alert('请输入正确信息');
            }
        });


        /* 传输数据给后台*/
        function transform_data(){
            /*获取爱好*/
            var hobby=$('input[name=hobby]');
            var hobby_data='';//存放爱好的值
            for(var i=0;i<hobby.length;i++){
                //alert(hobby[i].checked);//on
                //alert(hobby.eq(i).val());//值
                //alert(hobby.eq(i).text());//undefined
                if(hobby[i].checked){
                    hobby_data +=hobby.eq(i).val()+',';
                }
            }
            /*获取性别*/
            var sex=$('input[name=sex]:checked').val();
            var city=$('.sheng').val()+','+$('.shi').val()+','+$('.qu').val();
            var tran_data= {
                'user_nickname' :rt_tip_mes('nickname'),
                'user_username' : rt_tip_mes('username') ,
                'user_password': rt_tip_mes('password') ,
                'user_password2': rt_tip_mes('password2') ,
                'user_sex'      : sex ,
                'user_hobby'    : hobby_data ,
                'user_mobile'   : rt_tip_mes('tel_num') ,
                'user_id_card'  : rt_tip_mes('id_num') ,
                'user_city'     : city
            };
            $.ajax({
                url:'php/register.php?action=3',
                type:'POST',
                data:tran_data,
                success:function(re){
                    if(re){
                        alert('注册成功,请登录');
                        location.href=('register.html');
                    }else{
                        alert('注册失败');
                    }
                },
                error:function(){}
            })
        }



        /**
         *  添加提示信息
         * @param cls 要操作的类
         * @param flag 正确or错误 0错 1正确
         * @param mes 提示的信息
         */
        function tip_fn(cls,flag,mes){
            var cls=$('.'+cls);
            cls.html(mes);
            if(flag){
                cls.css('color','green');
            }else{
                cls.css('color','red');
            }
        }

        /**
         * 获取不同name的input的节点
         * @param name  input的name值
         * @returns {*}
         */
        function rt_tip_mes(name){
            var cls=$('input[name='+name+']');
            return cls.val();
        }

        /*判断每个提示框里的内容是否正确*/
        function r_e(cls){
            var cls=$('.'+cls);
            if(cls.html()=='正确')return true;
            return false;
        }

    });/*end jq*/