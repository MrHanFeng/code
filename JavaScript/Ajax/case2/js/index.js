/**
 * Created by Administrator on 2015/10/8.
 */
$(function(){

    var sub_id=$('#sub-id');
    var form_cls=$('.form-cls');
    sub_id.click(function(){
        $.ajax({
            url:'php/register.php',
            type:'POST',
            data:{
                u_name:$('input[name=u_name]').val(),
                u_pwd:$('input[name=u_pwd]').val(),
                u_mob:$('input[name=u_mob]').val()
            },
            success:function(data){
                if(typeof(data)!='object'){
                    data=eval('('+data+')');
                }
                if(data.status==true){
                    //alert(data.msg);
                    form_cls.val('');
                    load_ajax();
                }else{
                    alert(data.msg);
                }
            },
            error:function(){
                alert('操作失败!')
            }
        });
    });
    var tab_id=$('#tab-id').find('tbody');
    $(window).load(function(){
        load_ajax();
    });
    function load_ajax(){
        $.ajax({
            url:'php/show.php',
            type:'POST',
            data:{},
            success:function(data){
                if(typeof(data)!='object'){
                    data=eval('('+data+')');
                }
                var tpl='';
                $.each(data,function(i,v){
                    tpl+='<tr>' +
                        '<td>'+ v.u_name+'</td>' +
                        '<td>'+ v.u_mob+'</td>' +
                        '<td>'+ v.u_time+'</td>' +
                        '<td><span class="del-cls" data-id="'+ v.u_id+'">删除</span></td>' +
                        '</tr>';
                });
                tab_id.html(tpl);
                var del_cls=$('.del-cls');
                del_cls.unbind();
                del_cls.click(function(){
                    var id=$(this).attr('data-id');
                    del_ajax(id);
                });
            },
            error:function(){

            }
        })
    };
    
    function del_ajax(id){
        $.ajax({
            url:'php/del.php',
            type:'POST',
            data:{u_id:id},
            success:function(data){
                if(typeof(data)!='object') data=eval('('+data+')');
                if(data.status==true){
                    //alert(data.msg);
                    load_ajax();
                }else{
                    alert(data.msg);
                }
            },
            error:function(){
                alert('操作失败');
            }
        })
    }



});