<?php

namespace Home\Controller;
use Think\Controller;

class CartController extends Controller{

    function showlist(){

		$cart = D("Cart");
		$info = $cart->select();

		$goods = D("Goods");
		$goodsinfo  = $goods->select();

		$this->assign('info',$info);
		$this->assign('goodsinfo',$goodsinfo);
		$this->display();
	}
	function showlist_next(){

		$cart = D("Cart");
		$info = $cart->where("user_id=$_SESSION[user_id]")->select();
		$this->assign('info',$info);
		
		$goods = D("Goods");
		$goodsinfo  = $goods->select();
		$this->assign('goodsinfo',$goodsinfo);

		// 收货人信息
		$relation = D("Relation");
		$relationinfo = $relation->where("user_id='$_SESSION[user_id]'")->select();
		$this->assign('relationinfo',$relationinfo);

		$this->display();

	}


        function add(){
        //两个逻辑：1展现表单2接收表单数据
            $cart = D("Cart");
            // show_bug($_SESSION);
            // exit(0);

            if(!empty($_POST)){
                $cart -> create();//收集post表单数据
                // $data['user_id'] = $_SESSION['uid'];
                // $data['user_name'] = $_SESSION['username'];
                // $z= $cart->data($data)->add();
                $z= $cart->add();
                if($z){
                   $this->success('已添加到购物车',U('showlist'));
                }else{
                    $this->error('添加失败',U('showlist'));
                }
           
    }
     // $this->display();
}
	//商品详情
	function detail($cart_id){

		$cart = D("Cart");
		$info = $cart ->select($cart_id);
		// show_bug($rst);
		// 获得商品品牌信息
		$brandinfo = D('Brand') ->select();
		$this->assign('brandinfo',$brandinfo);
		$this->assign('info',$info);
		$this->display();
    	// $this-> redirect('Cart/showlist');

	}
	function del($cart_id){
		$cart = D("Cart");
		$rst = $cart ->delete($cart_id);
		if($rst){
               $this->success('删除成功！',U('showlist'));
       	}else{
               $this->error('删除失败！',U('showlist'));
        }
	}

} 