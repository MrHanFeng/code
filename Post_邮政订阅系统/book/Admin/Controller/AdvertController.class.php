<?php

//后台广告控制器
namespace Admin\Controller;
use Component\AdminController;

class AdvertController extends AdminController{
	
	function showlist(){

		$advert = D("Advert");

		$info = $advert -> select();
		$this->assign('info',$info);
		$this->display();
	}
	
	function add(){
		//两个逻辑：1展现表单2接收表单数据
		$advert = D("Advert");
		if(!empty($_POST)){
			// 判断附件是否有上传
			// 如果有则实例化Upload，把附件上传到服务器指定位置
			// 然后把附件路径名获得到，存入$_POST
			if(!empty($_FILES)){
				// "./"在php里面是相对于入口文件来走的
				$config =array(
					'rootPath' => './public/', //根目录
					'savePath'=>'upload/',//保存路径
					);
				// 附件被上传到路径：根目录/保存目录路径/创建日期目录
				$upload = new \Think\Upload($config);
				//uploadOne会返回已经上传的附件信息
				$z = $upload -> uploadOne($_FILES['advert_img']);
				if(!$z){
					show_bug($upload->getError());//获得上传附件产生的错误信息
				}else{
					// 拼装图片的路径名
					$bigimg = $z['savepath'].$z['savename'];
					// $_POST['advert_img']=$bigimg;

					// 把已经上传好的图片制作缩略图Image.class.php
					$image = new \Think\Image();
					// open() 打开图像资源，通过路径找到图像
					$srcimg = $upload->rootPath.$bigimg;
					$image ->open($srcimg);
					$image ->thumb(598,297);//按照比例缩小 width="598px" height="297px"
					$smalling = $z['savepath']."small".$z['savename'];
					$image ->save($upload->rootPath.$smalling);
					// $_POST['advert_small_img']=$smalling;
					$_POST['advert_img']=$smalling;


				}
			}
			$advert -> create();//收集post表单数据
			$z= $advert->add();
			if($z){
				$this->success('添加广告成功',U('Advert/showlist'));
			}else{
				$this->error('添加广告失败',U('Advert/showlist'));
			}
		}else{

		$this->display();
		}
	}
	//修改广告

	function upd($advert_id){
		//查询被修改广告信息并传递给模版
		$advert =D("Advert");
		$info = D("Advert")->find($advert_id);//一维数组
		// show_bug($info);
		//两个逻辑：展示表单、收集表单
		if(!empty($_POST)){
			// print_r($_POST);
			// exit(0);
			// 判断附件是否有上传
			// 如果有则实例化Upload，把附件上传到服务器指定位置
			// 然后把附件路径名获得到，存入$_POST
			if(!empty($_FILES)){
				// "./"在php里面是相对于入口文件来走的
				$config =array(
					'rootPath' => './public/', //根目录
					'savePath'=>'upload/',//保存路径
					);
				// 附件被上传到路径：根目录/保存目录路径/创建日期目录
				$upload = new \Think\Upload($config);
				//uploadOne会返回已经上传的附件信息
				$z = $upload -> uploadOne($_FILES['advert_img']);
				// show_bug($z);
				if(!$z){
					// show_bug($upload->getError());//获得上传附件产生的错误信息
					// echo $info[advert_big_img];
					// echo $info[advert_small_img];
					$_POST['advert_big_img']=$info[advert_big_img];
					$_POST['advert_small_img']=$info[advert_small_img];
				}else{
					// 拼装图片的路径名
					$bigimg = $z['savepath'].$z['savename'];
					// $_POST['advert_img']=$bigimg;

					// 把已经上传好的图片制作缩略图Image.class.php
					$image = new \Think\Image();
					// open() 打开图像资源，通过路径找到图像
					$srcimg = $upload->rootPath.$bigimg;
					$image ->open($srcimg);
					$image ->thumb(515,160);//按照比例缩小
					$smalling = $z['savepath']."small".$z['savename'];
					$image ->save($upload->rootPath.$smalling);
					// $_POST['advert_small_img']=$smalling;
					$_POST['advert_img']=$smalling;


				}
			}

			$advert->create();
			// show_bug($advert);
			// exit(0);
			$rst = $advert->save();
			// show_bug($rst);
			// exit(0);
			if($rst){
				$this->success('更新广告成功',U('showlist'));
			}else{
				$this->success('更新广告成功',U('showlist'));
			}
		}else{}

		$this ->assign('info',$info);
		$this->display();
		
	}
	//
	function del($advert_id){
		$advert = D("Advert");
		$rst = $advert ->delete($advert_id);
		$this->success('删除广告成功',U('showlist'));

	}

} 