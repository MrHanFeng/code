<?php
	// 本类由系统自动生成，仅供测试用途
	namespace Home\Controller;
	use Component\HomeController;

	class IndexController extends HomeController {
	    public function index(){
	    	$this->sql();
	    	$this->display();
	    }

		function sql(){
	    	$goods = D('goods');

			// 按热度搜索全部商品
	    	$info = $goods->field('goods_id,goods_name,goods_price,goods_big_img,goods_small_img')->limit(0,6)->order('goods_sale_num desc')->select();
	    	// ss($info);
	    	$this->assign('goods_hot',$info);

	    	// 价格最贵排行
	    	$info = $goods->field('goods_id,goods_name,goods_price,goods_big_img,goods_small_img')->limit(0,3)->order('goods_price desc')->select();
	    	$this->assign('goods_price',$info);

	    	// 新品排行
	    	$info = $goods->field('goods_id,goods_name,goods_price,goods_big_img,goods_small_img')->limit(0,3)->order('goods_create_time desc')->select();
	    	$this->assign('goods_price',$info);
		}




	}	    