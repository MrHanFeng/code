<?php


namespace Model;
use Think\Model;

//父类model 在/ThinkPHP/Library/Think/Model.class.php
class OrderModel extends Model{

	//可以给当前模型定义一些个性化设置
	function build_order_id(){
        return date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
    }


	
}