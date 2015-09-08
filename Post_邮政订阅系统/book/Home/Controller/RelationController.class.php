<?php

namespace Home\Controller;
use Think\Controller;

class RelationController extends Controller{

    function showlist(){

		$relation = D("Relation");
		$relationinfo = $relation->where("user_id='$_SESSION[user_id]'")->select();
		$this->assign('relationinfo',$relationinfo);
		
		$this->display();
		// $this->display('Cart:showlist_next');
		// $this->display('User/user_relation');
	}

	function add(){
		//两个逻辑：1展现表单2接收表单数据
			$relation = D("Relation");
			if(!empty($_POST)){
				$relation -> create();//收集post表单数据
				$z= $relation->add();
				if($z){
					$this->success('添加收货人信息成功',U('Relation/showlist'));
					// $this->redirect('Relation/showlist');
				}else{
					$this->error('添加收货人信息失败',U('Relation/showlist'));
				}
			}else{

			}
		$this->display();
	}

	//修改商品
	function upd($relation_id){
		//查询被修改商品信息并传递给模版
		$relation = D("Relation");
		//两个逻辑：展示表单、收集表单
		if(!empty($_POST)){
			// print_r($_POST);
			$relation->create();
			$rst = $relation->save();
			if($rst){
				$this->success('修改联系人信息成功',U('Relation/showlist'));
			}else{
				$this->error('修改联系人信息失败',U('Relation/showlist'));
			}
		}

		$relationinfo = D("Relation")->select($relation_id);//一维数组
		$this ->assign('relationinfo',$relationinfo);
		$this->display();
		
	}

	//删除
	function del($relation_id){
		$relation = D("Relation");
		$rst = $relation ->delete($relation_id);
    	if($rst){
				$this->success('删除联系人信息成功',U('showlist'));
			}else{
				$this->error('删除联系人信息失败',U('showlist'));
			}

	}

} 