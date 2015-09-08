<?php

namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function index(){
    	// 热卖报刊
		$book = D("Book");
		$info = $book ->limit(3)->select();
		$this->assign('info',$info);

		// index广告
		$advert = D("Advert");
		$advertinfo = $advert ->where('advert_position=0')->limit(1)-> select();
		$this->assign('$advertinfo',$advertinfo);
		//show_bug($advertinfo);


		// index左侧 报刊分类
		$cate = D("Category");
		$cateinfo = $cate -> select();
		$this->assign('cateinfo',$cateinfo);

		// 				报刊主题
		$themeinfo = D('Theme') ->select();
		$this->assign('themeinfo',$themeinfo);


		// index 左侧 网订热门
		$bestseller = D("Book")->query("select * from bk_book order by book_sales desc limit 7");
		$this->assign('bestseller',$bestseller);


		// index 左下侧 倾力推荐
		$recommend = D("Book")->query("select * from bk_book order by book_sales desc limit 7");
		$this->assign('recommend',$recommend);


		//畅销报刊
		$salesinfo = D("Book") ->limit(10)->order('book_sales desc')->select();
		$this->assign('salesinfo',$salesinfo);

		//精品报刊
				//<!-- 高端大气上档次 -->
		$nicebook1 = D("Book") ->limit(0,10)->order('book_create_time desc')->select();
		$this->assign('nicebook1',$nicebook1);
				//<!-- 报刊亭去晚就没货 -->
		$nicebook2 = D("Book") ->limit(0,1)->order('book_create_time desc')->select();
		$this->assign('nicebook2',$nicebook2);


		$this->display();

    }

    

}