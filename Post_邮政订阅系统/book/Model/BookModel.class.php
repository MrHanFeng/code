<?php

//Book图书数据模型model

namespace Model;
use Think\Model;

//父类model 在/ThinkPHP/Library/Think/Model.class.php
class BookModel extends Model{

	//可以给当前模型定义一些个性化设置

	// 按品牌条件筛选产品
	function filterlist($cat_id,$brand_id){

		$goods = D("Book");

		// 栏目：图书筛选
			// ①根据$cat_id查询对应的品牌brand
		$brandinfo = D("Brand") ->where("cat_id=$cat_id")->select();
		$this->assign('brandinfo',$brandinfo);
		// show_bug($brandinfo);


		// 栏目：图书列表
		// $Model->field('user.name,role.title')->
		// 	table(array('think_user'=>'user','think_role'=>'role'))->
		// 	limit(10)->select();

		// 1获得当前记录总条数
		$total = $goods->where("goods_brand_id =$brand_id")->where("goods_category_id =$cat_id")-> count();
		$per = 12;
		// 2实例化分类页对象
		$page = new \Component\Page($total,$per);

		// 3拼装sql语句 获得每页信息
		$sql = "select * from sw_goods where goods_brand_id ='$brand_id' ".$page->limit;
		$info = $goods->query($sql);
		// 4获得页面列表
		$pagelist = $page ->fpage();


		$this->assign('info',$info);
		$this->assign('pagelist',$pagelist);
		$this->display('Book/showlist');
	}


	// 由$goods_id 得到 $cat_id 
	// 写到Googs里面
	// 把当前分类信息也传到页面  达到标签选中的效果$cat_id
	// function getBookInfo($goods_id){

	// 	$goods = D("Book");
	// 	$goodsinfo =  $goods -> select($goods_id);
	// 	// show_bug($goodsinfo);

	// 	// 获得图书品牌信息
	// 	$brandinfo = D('Brand') ->select();
	// 	$this->assign('brandinfo',$brandinfo);
	// 	$this->assign('info',$info);

	// }


	
}