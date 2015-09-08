<?php

namespace Home\Controller;
use Think\Controller;

class BookController extends Controller{

    function showlist($cat_id){

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


	// 按主题条件筛选产品
	function filterlist($cat_id,$type,$theme_id){

		$book = D("Book");

		// 栏目：报刊筛选
			// ①根据$cat_id查询对应的主体theme
		$themeinfo1 = D("Theme") ->where("theme_id=$theme_id")->select();
		$this->assign('themeinfo1',$themeinfo1);
		// show_bug($themeinfo);


		// 栏目：报刊列表
		// $Model->field('user.name,role.title')->
		// 	table(array('think_user'=>'user','think_role'=>'role'))->
		// 	limit(10)->select();

		// 1获得当前记录总条数
		$total = $book->where("book_theme_id =$theme_id")->where("book_category_id =$cat_id")-> count();
		$per = 12;
		// 2实例化分类页对象
		$page = new \Component\Page($total,$per);

		// 3拼装sql语句 获得每页信息
		$sql = "select * from bk_book where book_theme_id ='$theme_id' ".$page->limit;
		$info = $book->query($sql);
		// 4获得页面列表
		$pagelist = $page ->fpage();


		$this->assign('info',$info);
		$this->assign('pagelist',$pagelist);


		// 报刊分类
		$cate = D("Category");
		$cateinfo = $cate -> select();
		$this->assign('cateinfo',$cateinfo);

		// 下的主题
		$themeinfo = D('Theme') ->select();
		$this->assign('themeinfo',$themeinfo);
		
		//政法时事 -> 报纸 -> 中央及省级中共机关报
		//    当前分类
		$cate = D("Category");
		$thiscate = $cate -> select($cat_id);
		$this->assign('thiscate',$thiscate);
		//    报纸or杂志
		$this->assign('thistype',$type);

		//    当前主题
		$thistheme = D('Theme') ->select($theme_id);
		$this->assign('thistheme',$thistheme);

		//    同级分类信息  切记 ""  where("cat_id = $cat_id")
		$peertheme = D('Theme') ->where("cat_id = $cat_id") -> select();
		$this->assign('peertheme',$peertheme);

		// index 左侧 网订热门
		$bestseller = D("Book")->query("select * from bk_book order by book_sales desc limit 7");
		$this->assign('bestseller',$bestseller);
		$this->display();
		//$this->display('Book/showlist');
	}



	//报刊详情
	function detail($book_id){


		// detail 上部 报刊分类
		$cate = D("Category");
		$cateinfo = $cate -> select();
		$this->assign('cateinfo',$cateinfo);

		$book = D("Book");
		$bookinfo = $book ->select($book_id);
		// show_bug($info);
		// 获得报刊主题信息
		// $themeinfo = D('Theme') ->select();
		// $this->assign('themeinfo',$themeinfo);
		$this->assign('bookinfo',$bookinfo);

		// 把当前分类信息也传到页面  达到标签选中的效果$cat_id
		// 下面测试正确

		// 方法一
		// $bookthemeinfo = $book -> where("book_id='$book_id'") -> getField('book_theme_id');
		
		// 方法二
		$theme_id =  $book  -> getFieldByBookId("{$book_id}",'book_theme_id');
		
		// 依据theme_id 查询theme_name
		$themename =  D("Theme")  -> getFieldBythemeId("{$theme_id}",'theme_name');

		$this->assign('themename',$themename);


			// 依据theme_id 查出 类别信息 cat_name  cat_id
			$cat_id  =  D("Theme")  -> getFieldByThemeId("{$theme_id}",'cat_id');

			$this->assign('cat_id',$cat_id);

			//由cat_id 查出cat_name
			$cat_name  =  D("Category")  -> getFieldByCatId("{$cat_id}",'cat_name');

			$this->assign('cat_name',$cat_name);

		
		// idetail左侧 报刊分类
		$cate = D("Category");
		$cateinfo = $cate -> select();
		$this->assign('cateinfo',$cateinfo);

		// detail左侧 报刊分类 下的主题
		$themeinfo = D('Theme') ->select();
		$this->assign('themeinfo',$themeinfo);



		// 购买过该报刊的用户还购买了
		$similarinfo = $book ->limit(9)->select();
		$this->assign('similarinfo',$similarinfo);

		//热销推荐
		$bestseller = $book ->limit(6)->select();
		$this->assign('bestseller',$bestseller);


		$this->display();
    	// $this-> redirect('Book/showlist');

	}


} 