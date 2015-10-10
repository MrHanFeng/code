<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/8
 * Time: 16:55
 */
$mysql=mysql_connect('localhost','root','');
if(!$mysql){
    exit('连接数据库失败!'.mysql_error());
}
mysql_select_db('zsl',$mysql);
mysql_query('set names utf8');
//用户内容读取
$sql="select * from zl_user";
$rst=mysql_query($sql);
$data=array();
while($row=mysql_fetch_array($rst)){
    $data[]=array(
        'u_name'=>$row['u_name'],
        'u_mob'=>$row['u_mob'],
        'u_id'=>$row['u_id'],
        'u_time'=>date('Y-m-d H:i:s',$row['u_time']),
    );
}
mysql_close($mysql);
exit(json_encode($data));