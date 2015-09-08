<?php

//后台报刊控制器
namespace Admin\Controller;
use Component\AdminController;

class BookController extends AdminController{
	
	function showlist(){

		$book = D("Book");

		// 1获得当前记录总条数
		$total = $book-> count();
		$per = 7;
		// 2实例化分类页对象
		$page = new \Component\Page($total,$per);

		// 3拼装sql语句 获得每页信息
		$sql = "select * from bk_book where book_status='1' ".$page->limit;
		$info = $book->query($sql);
		// 4获得页面列表
		$pagelist = $page ->fpage();

		// 获得报刊品牌信息
		$themeinfo = D('Theme') ->select();
		$this->assign('themeinfo',$themeinfo);
		// $info = $book -> select();
		$this->assign('info',$info);
		$this->assign('pagelist',$pagelist);
		$this->display();
	}
	//报刊回收站 
	function recycle(){

		$book = D("Book");

		// 1获得当前记录总条数
		$total = $book-> count();
		$per = 7;
		// 2实例化分类页对象
		$page = new \Component\Page($total,$per);

		// 3拼装sql语句 获得每页信息
		$sql = "select * from bk_book  where book_status='0' ".$page->limit;
		$info = $book->query($sql);
		// 4获得页面列表
		$pagelist = $page ->fpage();

		// 获得报刊品牌信息
		$themeinfo = D('Theme') ->select();
		$this->assign('themeinfo',$themeinfo);
		// $info = $book -> select();
		$this->assign('info',$info);
		$this->assign('pagelist',$pagelist);
		$this->display();
	}

	
	function add(){
		//两个逻辑：1展现表单2接收表单数据
		$book = D("Book");
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
				$z = $upload -> uploadOne($_FILES['book_img']);
				if(!$z){
					show_bug($upload->getError());//获得上传附件产生的错误信息
				}else{
					// 拼装图片的路径名
					$bigimg = $z['savepath'].$z['savename'];
					$_POST['book_big_img']=$bigimg;

					// 把已经上传好的图片制作缩略图Image.class.php
					$image = new \Think\Image();
					// open() 打开图像资源，通过路径找到图像
					$srcimg = $upload->rootPath.$bigimg;
					$image ->open($srcimg);
					$image ->thumb(150,150);//按照比例缩小
					$smalling = $z['savepath']."small".$z['savename'];
					$image ->save($upload->rootPath.$smalling);
					$_POST['book_small_img']=$smalling;


				}
			}
			$book -> create();//收集post表单数据
			$z= $book->add();
			if($z){
				//展现一个提示页面并做页面跳转
				//success(提示信息，跳转的url地址)
				$this->success('添加报刊成功',U('Book/showlist'));
				// echo "success";
			}else{
				$this->error('添加报刊失败',U('Book/showlist'));
				// echo "error";
			}
		}else{

		// 获得类别信息
		$catinfo = D('Category') ->select();
		$this->assign('catinfo',$catinfo);

		// 获得报刊品牌信息
		$themeinfo = D('Theme') ->select();
		$this->assign('themeinfo',$themeinfo);
		$this->display();
		}
	}
	//修改报刊

	function upd($book_id){
		//查询被修改报刊信息并传递给模版
		$book =D("Book");
		$info = D("Book")->find($book_id);//一维数组
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
				$z = $upload -> uploadOne($_FILES['book_img']);
				// show_bug($z);
				if(!$z){
					// show_bug($upload->getError());//获得上传附件产生的错误信息
					// echo $info[book_big_img];
					// echo $info[book_small_img];
					$_POST['book_big_img']=$info[book_big_img];
					$_POST['book_small_img']=$info[book_small_img];
				}else{
					// 拼装图片的路径名
					$bigimg = $z['savepath'].$z['savename'];
					$_POST['book_big_img']=$bigimg;

					// 把已经上传好的图片制作缩略图Image.class.php
					$image = new \Think\Image();
					// open() 打开图像资源，通过路径找到图像
					$srcimg = $upload->rootPath.$bigimg;
					$image ->open($srcimg);
					$image ->thumb(150,150);//按照比例缩小
					$smalling = $z['savepath']."small".$z['savename'];
					$image ->save($upload->rootPath.$smalling);
					$_POST['book_small_img']=$smalling;


				}
			}

			$book->create();
			// show_bug($book);
			// exit(0);
			$rst = $book->save();
			// show_bug($rst);
			// exit(0);
			if($rst){
				$this->success('更新报刊成功',U('showlist'));
			}else{
				$this->success('更新报刊失败',U('showlist'));
			}
		}else{

		$info = D("Book")->find($book_id);//一维数组


		// 获得类别信息
		$catinfo = D('Category') ->select();
		$this->assign('catinfo',$catinfo);
		// 获得报刊品牌信息
		$themeinfo = D('Theme') ->select();
		$this->assign('themeinfo',$themeinfo);
		$this ->assign('info',$info);
		$this->display();
		}
	}
	//
	function del($book_id){
		$book = D("Book");
		// $rst = $book->delete(63);
		// $rst = $book->delete('61,62,63');
		$rst = $book ->delete($book_id);
		// show_bug($rst);
    	$this-> redirect('Book/showlist');

	}
	// 报刊分类
	function cate(){

		$cate = D("Category");
		$info = $cate -> select();
		$this->assign('info',$info);
		$this->display();

	}
	//报刊详情
	function getMoney(){
		return "1000rmb";
	}
	// 设置缓存数据
	function s1(){
		S('name','tom',1);
		S('age','25');
		S('addr','bj');
		S('hobby',array('篮球','排球','足球'));
		echo "success";
	}
	// 读取缓存数据
	function s2(){
		echo S('name');
		echo S('age');
		echo S('addr');
		print_r(S('hobby'));
	}
	// 删除指定缓存
	function s3(){

		// S('name',null);
		// S('age',null);
		// S('addr',null);
		echo 'delete';
	}
	// 外面用户访问的方法
	function y1(){
		show_bug($this->y2());
	}
	// 被其他方法调用的方法，获得指定信息
	function y2(){
		// 第一次从数据获取数据，后续在有效期从缓存获取数据
		$info = S('book_info');
		if($info){
			return $info;

		}else{
			// 没有缓存信息，就从数据库获取数据，再把数据缓存起来
			// 连接数据库
			$dt = "apple5s".time();
			S("book_info",$dt,10);
			return $dt;

		}
	}


	//报刊列表展示
	 function showlist1(){
	 	//使用数据model模型
	 	//实例化model对象
		//$book= new \Model\BookModel(); //object(Model\BookModel)
	 	//$book = D("Book");  //object(Think\Model)
	 	
	 	$book = M("User");  //object(Think\Model)
	 	// $book = D();//实例化model对象与m方法一致
	 	//实例化model对象，实际操作Book
	    show_bug($book);

	 	//获得qq的信息
	 	// $qq= new \Model\QqModel();
	 	// show_bug($qq);

	 	// $book = D ("Book");

	 	// $info = $book -> select();//获取数据信息
//	 	foreach($info as $k => $v){
//	 		echo $v['book_name']."<br/>";
//	 	}
	 	
	 	// $this -> assign('info',$info);


		$this->display();
	}
	function showlist2(){

		// $book = D("Book");
		$book = D();

		// $info =$book-> where("book_price > 1000 and book_name like '索%'") ->select();//获得数据信息

		//查询指定字段
		// $info = $book->field("book_id,book_name")->select();

		//限制条数
		//$info = $book->limit(5,5)->select();

		//分组查询group by
		//查询当前报刊一共的分组信息
		//$info = $book->field('book_category_id')->select();//有重复数据
		//$info = $book->field('book_category_id')->group('book_category_id') ->select();


		//排序显示结果order by book_price desc
		// $info = $book ->table("bk_user")-> order('book_price desc')->select();
		// $info = $book ->table("bk_user")->select();

		// show_bug($info);
		
		// foreach($info as $k => $v){
		// echo $v['book_name']."<br/>";
	    //    }
		//把数据assign到模板
		$this ->assign('info',$info);
		//使用smarty模板
		
		
		$this->display();
	}

	function showlist3(){
		// $book = D("Book");

		//查询主键值等于30的记录信息
		// $info = $book -> select(30);
		// $info = $book -> find(30);//返回一维数组
		// show_bug($info);
		// $info = $book -> select("20,21,22,23");
		// $info = $book -> select();

		//查看记录总条数
		// echo $book -> count();
		// echo "<br/>";
		// echo $book -> max('book_price');

		// echo $book -> where("book_price>1000")->count();
		
		$book = D("Book");
		$info = $book -> select();
		$this->assign('info',$info);
		$this->display();
	}

	//添加报刊
	 function add1(){
	 	//第一种：利用数组方式添加数据
	 	$book = D("Book");
	 	$ar = array(
	 		'book_name' =>'iphone5s',
	 		'book_price'=>4999,
	 		'book_number'=>53,
	 		);
	 	$rst = $book->add($ar);
	 	// show_bug($rst);
	 	if($rst >0){
	 		echo "add_success";
	 	}else{
	 		echo "add_failure";
	 	}

		$this->display();
	}
	function add2(){
	 	//第二种：利用AR(active_record)添加数据
	 	$book = D("Book");
	 	$book->book_name = "htc_one";
	 	$book->book_price=3000;
	 	//add()返回的是添加数据的主键
	 	$rst = $book->add();
	 	// show_bug($rst);
	 	if($rst >0){
	 		echo "add_success";
	 	}else{
	 		echo "add_failure";
	 	}

		$this->display();
	}
	function upd1(){
	 	$book = D("Book");
	 	$ar = array(
	 	'book_name'=>'黑莓手机',
		'book_price'=>2300
	 	);
	 	$rst = $book ->where('book_id>60')-> save($ar);
	 	show_bug($rst);

		$this->display();
	}
} 