<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/8
 * Time: 17:17
 */
$mysql=mysql_connect('localhost','root','');
if(!$mysql){
    exit('连接数据库失败!'.mysql_error());
}
mysql_select_db('zsl',$mysql);
mysql_query('set names utf8');
$rst_del=mysql_query('delete from zl_user where u_id='.$_POST['u_id']);
if($rst_del===false){
    $data=array(
        'status'=>false,
        'msg'=>'用户删除失败'
    );
}else{
    $data=array(
        'status'=>true,
        'msg'=>'用户删除成功'
    );
}
mysql_close($mysql);
exit(json_encode($data));