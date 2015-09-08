<?php

namespace Home\Controller;
use Think\Controller;

class RecommendController extends Controller{

    function recommend(){

		$book = D("Book");
		// 栏目：报刊筛选
			// ①根据$cat_id查询对应的主题theme
			// 先获取cat_id
		$cate = D("Category");
		$cateinfo1 = $cate ->where("cat_id =$cat_id")-> select();
		$this->assign('cateinfo1',$cateinfo1);
		$themeinfo = D("Theme") ->where("cat_id=$cat_id")->select();
		$this->assign('themeinfo',$themeinfo);
		// show_bug($themeinfo);


		// 栏目：报刊列表
		// $Model->field('user.name,role.title')->
		// 	table(array('think_user'=>'user','think_role'=>'role'))->
		// 	limit(10)->select();

		// 1获得当前记录总条数
		$total = $book->where("book_category_id =$cat_id")-> count();
		$per = 12;
		// 2实例化分类页对象
		$page = new \Component\Page($total,$per);

		// 3拼装sql语句 获得每页信息
		$sql = "select * from bk_book where book_category_id ='$cat_id' ".$page->limit;
		$info = $book->query($sql);
		// 4获得页面列表
		$pagelist = $page ->fpage();


		$this->assign('info',$info);
		$this->assign('pagelist',$pagelist);

		// index左侧 报刊分类
		$cate = D("Category");
		$cateinfo = $cate -> select();
		$this->assign('cateinfo',$cateinfo);

		// index左侧 报刊分类 下的主题
		$themeinfo = D('Theme') ->select();
		$this->assign('themeinfo',$themeinfo);

		// 把当前分类信息也传到页面  达到标签选中的效果$cat_id
		$this->assign('cateid',$cat_id);

		$this->display();
	}


} 