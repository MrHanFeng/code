/**
 * Created by Administrator on 2015/10/8.
 */
$(function(){
    $('#sub-id').click(function(){
        var form_cls=$('.form-cls');
        var data={};
        $.each(form_cls,function(i,v){
            var v=form_cls.eq(i);
            data[v.attr('name')]=v.val();
        });
        $.ajax({
            type:'POST',
            url:'register.php',
            data:data,
            success:function(data){
                if(typeof(data)!='object'){
                    data=eval('('+data+')');
                }
                if(data.status==true){
                    alert(data.msg);
                    var table_id=$('#table-id').find('tbody');
                    var tpl='';
                    $.each(data.data,function(i,v){
                        tpl+='<tr>' +
                            '<td>'+ v.u_name+'</td>' +
                            '<td>'+ v.u_tel+'</td>' +
                            '<td>'+ v.u_time+'</td>' +
                            '<td><span data-val="'+ v.u_id+'" class="del-id">删除</span></td>' +
                            '</tr>';
                    });
                    table_id.html(tpl);
                }else{
                    alert(data.msg);
                }
            },
            error:function(){
                alert('操作失败!');
            }
        });
    });
});