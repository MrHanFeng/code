<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/8
 * Time: 10:37
 */
$mysql=mysql_connect('localhost','root','');
if(!$mysql){
    exit('连接失败!'.mysql_error());
}
mysql_select_db('shop',$mysql);
mysql_query('set names utf8');
$status=true;
$u_name=$_POST['u_name'];
$u_pwd=md5($_POST['u_pwd']);
$u_tel=$_POST['u_tel'];
$u_time=time();
//判断此用户是否存在
$sql_select="select * from sp_user where u_name='".$u_name."'";
$rst_select=mysql_query($sql_select);
$num=mysql_num_rows($rst_select);
if($num>0){
    $data=array(
        'status'=>false,
        'msg'=>'此用户已存在!'
    );
    exit(json_encode($data));
}
//添加到新用户中
$sql="insert into sp_user (u_name,u_pwd,u_tel,u_time) values ('$u_name','$u_pwd','$u_tel','$u_time')";
$rst=mysql_query($sql);
$msg='用户注册成功';
if($rst===false){
    $status=false;
    $msg='注册失败!';
}else{
    $rst_sel=mysql_query("select * from sp_user");
    $data_row=array();
    while($row=mysql_fetch_array($rst_sel)){
        $data_row[]=array(
            'u_id'=>$row['u_id'],
            'u_name'=>$row['u_name'],
            'u_tel'=>$row['u_tel'],
            'u_time'=>date('Y-m-d H:i:s',$row['u_time']),
        );
    }
}
$data=array(
    'status'=>$status,
    'msg'=>'用户注册成功!',
    'data'=>$data_row
);
mysql_close($mysql);
exit(json_encode($data));