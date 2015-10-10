<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/8
 * Time: 15:50
 */
$mysql=mysql_connect('localhost','root','');
if(!$mysql){
    exit('连接数据库失败!'.mysql_error());
}
mysql_select_db('zsl',$mysql);
mysql_query('set names utf8');
$u_name=$_POST['u_name'];
$u_pwd=md5($_POST['u_pwd']);
$u_mob=$_POST['u_mob'];
if(!$u_name){
    $data=array(
        'status'=>false,
        'msg'=>'用户名不能为空!'
    );
    exit(json_encode($data));
}
$u_time=time();
//判断此用户是否注册过
$sql="select * from zl_user WHERE u_name='".$u_name."'";
$rst_s=mysql_query($sql);
$num=mysql_num_rows($rst_s);
if($num>0){
    $data=array(
        'status'=>false,
        'msg'=>'此用户已存在!'
    );
    exit(json_encode($data));
}
//对此用户进行注册
$rst_int=mysql_query("insert into zl_user (u_name,u_pwd,u_mob,u_time) values ('$u_name','$u_pwd','$u_mob',$u_time)");
mysql_close($mysql);
if($rst_int===false){
    $data=array(
        'status'=>false,
        'msg'=>'用户注册失败!'
    );
    exit(json_encode($data));
}else{
    $data=array(
        'status'=>true,
        'msg'=>'用户注册成功!'
    );
    exit(json_encode($data));
}




