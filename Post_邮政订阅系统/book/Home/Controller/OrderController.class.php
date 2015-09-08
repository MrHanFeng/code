<?php

namespace Home\Controller;
use Think\Controller;

class OrderController extends Controller{

    function showlist(){

		$order = D("Order");
		$orderinfo = $order->where("user_id='$_SESSION[user_id]'")->select();
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
				// build_order_id() 创建订单函数
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
		if(!empty($_POST)){
			// print_r($_POST);
			$order->create();
			$rst = $order->save();
			if($rst){
				$this->success('修改订单成功',U('Order/showlist'));
			}else{
				$this->error('修改订单失败',U('Order/showlist'));
			}
		}else{

		$info = D("Order")->find($order_id);//一维数组
		$this ->assign('info',$info);
		$this->display();
		}
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