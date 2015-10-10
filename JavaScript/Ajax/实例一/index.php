<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/7
 * Time: 15:29
 */
$mysql=mysql_connect('localhost','root','');
if(!$mysql){
    exit('数据库连接失败!'.mysql_error());
}
mysql_select_db('eadmin',$mysql);
mysql_query('set names utf8;');
echo $_POST['id'];
$sql='select * from e_admin WHERE  aid='.$_GET['id'];
$rst=mysql_query($sql);
$data=array();
while($row=mysql_fetch_array($rst)){
    $data[]=$row;
}
echo json_encode($data);
mysql_close($mysql);