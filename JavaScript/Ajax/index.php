<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/8
 * Time: 8:45
 */
//echo $_GET['id'];
$arr=array(
    1=>array('id'=>1,'title'=>'我是标题一','info'=>'我是内容一'),
    2=>array('id'=>2,'title'=>'我是标题二','info'=>'我是内容二'),
    3=>array('id'=>3,'title'=>'我就是变了','info'=>'我就是变了三内容'),
    4=>array('id'=>4,'title'=>'我是标题四','info'=>'我是内容四'),
    5=>array('id'=>5,'title'=>'我是标题五','info'=>'我是内容五'),
);
/*$arr=array(
    'status'=>1,
    'data'=>$arr
);*/
$arr=json_encode($arr);
//print_r($arr);
echo $arr;
