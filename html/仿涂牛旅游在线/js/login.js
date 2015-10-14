/**
 * Created by hanfeng on 2015/10/14.
 */
$(function(){
    var l_username=$('input[name=user_username]');
    var l_password=$('input[name=user_password]');
    var l_validate=$('input[name=validate]');
    var login=$('.login');
    //var l_user_mes=$('.l-user_mes');
    //var l_pwd_mes=$('.l-pwd_mes');
    //var l_vld_mes=$('.l-vld_mes');

    //tip_fn('user_mes',1,'��ȷ');
    //l_username.blur(function(){
    //    if($(this).val){
    //        tip_fn('l-user_mes',0,'不能为空');
    //    }
    //});
    //l_password.blur(function(){
    //    if($(this).val){
    //        tip_fn('l-pwd_mes',0,'不能为空');
    //    }
    //});
    //l_validate.blur(function(){
    //    if($(this).val){
    //        tip_fn('l-vld_mes',0,'不能为空');
    //    }
    //});
    login.click(function(){
        var flag=-2;
        if(!l_username.val().length){tip_fn('l-user_mes',0,'不能为空');}else{flag+=1;}
        if(!l_password.val().length){tip_fn('l-pwd_mes',0,'不能为空');}else{flag+=1;}
        if(!l_validate.val().length){tip_fn('l-vld_mes',0,'不能为空');}else{flag+=1;}
        if(flag){
            var data={username:l_username.val(),password:l_password.val(),validate:l_validate.val()};
            $.ajax({
                url:'php/login.php',
                type:'POST',
                data:data,
                success:function(re){
                    if(typeof(re)!='object'){
                        re=eval('('+re+')');
                    }
                    if(re.bool=='true') {
                        $('.form_two').submit();
                        //tip_fn('log_mes',0,re.msg);
                        return;
                    }
                    tip_fn('log_mes',0,re.msg);

                },
                error:function(){
                    tip_fn('log_mes',0,'代码有误');
                }
            });
        }else{
            tip_fn('user_mes',0,'请补全信息');
        }



    });




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

});/*end jq*/