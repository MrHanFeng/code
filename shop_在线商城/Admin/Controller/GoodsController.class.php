<?php 
	namespace Admin\Controller;
	use Component\AdminController;

	class GoodsController extends AdminController{

		// 商品展示
		function showlist(){

			/*分页显示*/
			$goods = D('goods');
			//1.获得当前记录总条数
			$total = $goods -> count();
			$per = 7;	//每页条数
			//2.实例化分页对象
			$page = new \Component\Page($total,$per);//实例化分页类
			// 3.写SQL语句
			$sql = "select * from sw_goods ";
			if(!empty($_GET['brand_s'])){//解决查询问题
				$sql .= " where goods_brand_id = ".$_GET['brand_s'];
			}
			$sql .= " ".$page->limit;
			$info = $goods ->query($sql);
			// 4.获得页码列表
			$pagelist = $page->fpage();
			$this->assign('pagelist',$pagelist);
			$this->assign('info',$info);
			// 使用数据Model模型
			// 实例化model对象
			// $goods = new \Model\GoodsModel();
			// show_debug($goods);
			// $info = $goods->field()->table('sw_goods')->where("goods_price > 200")->group()->limit()->order('goods_price')->select();
			// echo $goods->where('goods_price>1000')->min('goods_price');

			/*品牌查询*/
			$brand_info = D('brand')->select();
			$brand_arr = array();
			foreach ($brand_info as $k => $v) {
				$info['goods_id'];
				$brand_arr[$v['brand_id']] = $v['brand_name'] ;//下标为ID，POST传过来的值也为ID
			}
			$this->assign('brand_info',$brand_arr);

			/*分类查询*/
			$cate_info = D('category')->select();
			$cate_arr =array();
			foreach ($cate_info as $k => $v) {
				$cate_arr[$v['cat_id']] = $v['cat_name'];
			}
			$this->assign('cate_info',$cate_arr);
			$this->display();
		}


		// 添加商品
		function add(){
			$goods = D('Goods');
			if(!empty($_POST)){
				$this->upload_img();
				/*	//方法一
					$ar = $_POST;
					$re = $goods->add($ar);*/

				/*	//方法二
					$goods->goods_name = $_POST['goods_name'];
					$goods->goods_number = $_POST['goods_number'];
					$goods->goods_weight = $_POST['goods_weight'];
					$goods->goods_price = $_POST['goods_price'];
					$goods->goods_introduce = $_POST['goods_introduce'];
					$re= $goods->add();*/

				 //方法三
					$goods->create();//	手机POST表单数据，但表单里的name必须与sql一致！
					$goods->goods_create_time = time();//上传时间
					$re= $goods->add();
					
					if($re){
						// 自动跳转
						$this->success('添加商品成功',U("Goods/showlist"));
						// echo "success";
					}else{
						$this->error("添加商品失败",U("Goods/add"));
						// echo "error";
					}
			}else{
				/*传输商品分类*/
				$cate_arr = $this->cate_info();
				$this->assign('cate_info',$cate_arr);

				/*传输品牌分类*/
				$brand_arr = $this->brand_info();
				$this->assign('brand_info',$brand_arr);

				$this->display();
			}
		}




		// 修改商品
		function update($goods_id){
			$goods = D("goods");
			//两个逻辑，收集表单，展示表单，
			if(!empty($_POST)){
				$this->upload_img();
				$goods->create();
				$goods->goods_last_time = time();//上传时间
				$re = $goods->save();
				if($re){
					$this->success('修改成功',U('showlist'));
				}else{
					$this->error('修改失败,请重新修改');
				}
			}else{
				/*传输商品分类*/
				$cate_arr = $this->cate_info();
				$this->assign('cate_info',$cate_arr);

				/*传输品牌分类*/
				$brand_arr = $this->brand_info();
				$this->assign('brand_info',$brand_arr);

				$info = $goods->find($goods_id);
				$this->assign("info",$info);
				$this->assign('goods_category_id',$info['goods_category_id']);//选中该商品分类下拉id
				$this->assign('goods_brand_id',$info['goods_brand_id']);//选中该商品牌子下拉ID
				$this->display();
			}
		}

		// 删除商品
		function delete(){
			$goods = D('Goods');
			$id = $_GET['goods_id'];
			$re = $goods->delete($id);
			$re = $goods->delete(1,2,3);
			// $re = $goods->where("goods_id>60")->delete();
			if($re){
				echo "succeful";
				// $this->success('删除成功',U('Goods/showlist'));
			}else{
				echo "error";
			}
		}


		// 添加商品分类
		function add_cate(){
			$cate = D('category');
			if(!empty($_POST)){
				$cate->create();
				$re = $cate->add();
				if($re){
					$this->success("添加分类成功",U('Goods/add_cate'));
				}else{
					$this->error("添加分类失败");
				}
			}else{
				$cates = $cate->select();
				foreach ($cates as $k => $v) {
					$arr[$v['cat_id']]=$v['cat_name'];
				}
				$this->assign('cat_name',$arr);
				$this->display();
			}
		}
		// 删除商品分类
		function del_cate($cate_id){
			$re = D('category')->delete($cate_id);
			if($re){
				$this->success('删除分类成功','Goods/add_cate');
			}else{
				$this->redirect('Goods/add_cate');
			}
		}



		function upload_img(){
				/*文件上传*/
					// 判断附件是否上传了文件，有就实力化并上传到服务器指定位置
					// 并把路径存入$_post
				if(!empty($_FILES)){

					// 设置路径
					$config = array(
						'rootPath'=>'./Public/',//设置保存根路径，默认是在根目录的Upload
						'savePath'=>'upload/',  //跟路径下的保存路径
			            'subName' => array('date','Y-m-d'),//保存路径下的子目录
			            'autoSub' => true,      //是否使用子目录保存上传文件 false则在upload目录下不再分解目录
						'maxSize' => 3145728,    //文件大小（以字节为单位）默认为-1 不限大小 
			            // 'saveName' => array('uniqid','kaitou'),    //保存文件的命名规则
			            'exts' => array('jpg', 'gif', 'png', 'jpeg'),    
						);
					$upload = new \Think\Upload($config);
					$re = $upload -> uploadOne($_FILES['goods_image']);//返回已经上传的图片信息
					if(!$re){
						$upload->getError();
						// $this->error("添加图片失败",U("Goods/add"));
					}else{
						// 拼装图片的路径
						$bigimg = $re['savepath'].$re['savename'];//拼接大图路径
						$_POST['goods_big_img'] = $bigimg;//大图路径存入POST，后边一起存入数据库

						/*制作缩略图Image.class.php*/
						$image = new \Think\Image();
						$srcImg = $upload->rootPath.$bigimg;//设置画板图片的路径
						$image->open($srcImg);//打开图像资源
						$image->thumb(150,150);//缩略图的宽高，以最大150按比例缩放
						$smallimg = $re['savepath']."small_".$re['savename'];//拼接小图路径
						$image->save($upload->rootPath.$smallimg);	//把小图存入upload，【一定要注意加上根路径】
						$_POST['goods_small_img']=$smallimg; //小图路径存入POST，后边一起存入数据库
					}
				}
		}


		

		// 返回商品分类name及ID
		function cate_info(){
			$cate_info = D('category')->select();
			$cate_arr = array();
			foreach ($cate_info as $k => $v) {
				$cate_arr[$v['cat_id']] = $v['cat_name'] ;//下标为ID，POST传过来的值也为ID
			}
			return $cate_arr;
		}
		// 返回商品品牌name及ID
		function brand_info(){
			$brand_info = D('brand')->select();
			$brand_arr = array();
			foreach ($brand_info as $k => $v) {
				$brand_arr[$v['brand_id']] = $v['brand_name'] ;//下标为ID，POST传过来的值也为ID
			}
			return $brand_arr;
		}



	}



 ?>