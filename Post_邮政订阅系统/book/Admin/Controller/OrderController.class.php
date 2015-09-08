<?php

namespace Admin\Controller;
use Component\AdminController;

class OrderController extends AdminController{

    function showlist(){

		$order = D("Order");
		$orderinfo = $order->where("order_status=1")->select();
		$this->assign('orderinfo',$orderinfo);
		
		$this->display();
	}
	// 已完成订单
	function finish_list(){

		$order = D("Order");
		$orderinfo = $order->where("order_status=2")->select();
		$this->assign('orderinfo',$orderinfo);
		
		$this->display();
	}
	// 显示订单详情
	function orderdetail($order_id){

		$order = D("Order");
		$orderinfo = $order->where("order_id=$order_id")->select();
		$this->assign('orderinfo',$orderinfo);

		$goods = D("Goods");
		$goodsinfo  = $goods->select();
		$this->assign('goodsinfo',$goodsinfo);
		
		$this->display();
	}

	function add(){
		//两个逻辑：1展现表单2接收表单数据
			// $order = D("Order");
			$order = new \Model\OrderModel();
			if(!empty($_POST)){
				// show_bug($_POST);
				// exit(0);
				$_POST[order_id]=$order-> build_order_id();
				$order -> create();//收集post表单数据
				// show_bug($_POST);
				// exit(0);
				$z= $order->add();
				if($z){
					$this->success('添加订单信息成功');
				}else{
					$this->error('添加订单信息失败');
				}
			}
			// 获取订单号
					$order = D("Order");
					$orderinfo = $order->where("user_id='$_SESSION[user_id]'")
					->order("order_id desc")->limit(1)->select();
					$this->assign('orderinfo',$orderinfo);
			$this->display();

	}

	//修改商品
	function upd($order_id){
		//查询被修改商品信息并传递给模版
		$order = D("Order");
		//两个逻辑：展示表单、收集表单
// $order -> getFieldByOrder_id('$order_id','goods_id');
// 			show_bug($order);
// 			exit(0);


		$rst=$order->execute("update sw_order set order_status='2' where order_id=$order_id");
		if($rst){
			// 商品发货，同时将该商品销量+1；

			// 针对某个字段查询并返回某个字段的值，例如
			// $userId = $User->getFieldByName('liu21st','id');
			// 表示根据用户的name获取用户的id值。
			// $goodsinfo = D("Order") -> getByOrderId('$order_id');
			$goodsinfo = D("Order") -> getField('goods_id');
			// dump($goodsinfo);
			// show_bug($goodsinfo);
			$goods = D("Goods");
			$sql = "update sw_goods set goods_sales=goods_sales+1 where goods_id=$goodsinfo";
			// echo "$sql";
			// exit(0);
			$goods -> execute($sql);
				$this->success('修改订单信息成功',U('Order/showlist'));
		}else{
				$this->error('修改订单信息失败',U('Order/showlist'));
		}

		// $info = D("Order")->find($order_id);//一维数组
		// $this ->assign('info',$info);
		// $this->display();
	}

	//删除
	function del($order_id){
		
		$order = D("Order");
		$rst = $order ->where("order_id=$order_id")->delete();
		// show_bug($_POST);
				// exit(0);
    	if($rst){
				$this->success('删除订单成功',U('Order/showlist'));
			}else{
				$this->error('删除订单失败',U('Order/showlist'));
			}

	}


} 