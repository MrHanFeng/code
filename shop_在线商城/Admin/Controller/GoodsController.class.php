<?php 
	namespace Admin\Controller;
	use Component\AdminController;

	class GoodsController extends AdminController{

		// 商品展示
		function showlist(){
			if(!empty($_GET['brand_s'])){
				$where=" where goods_brand_id ={$_GET['brand_s']} and goods_status!='del'";
			}else{
				$where=" where goods_status!='del'";
			}
			$arr=$this->pager('goods',6,$where);

			$this->assign('pagelist',$arr['pagelist']);
			$this->assign('info',$arr['info']);
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
//				$info['goods_id'];
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

		/*商品回收站*/
		function showlist_del(){
//			$arr=$this->pager('goods',6,'goods_brand_id',$_GET['brand_s']);
			$arr=$this->pager('goods',6,"where goods_status ='del'");

			$this->assign('pagelist',$arr['pagelist']);
			$this->assign('info',$arr['info']);
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
//				$info['goods_id'];
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
				$arr=$this->upload_img($_FILES['goods_image']);
				$_POST['goods_big_img']=$arr['big'];
				$_POST['goods_small_img']=$arr['small'];
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
				$cate_arr = $this->cate_info_fn();
				$this->assign('cate_info',$cate_arr);

				/*传输品牌分类*/
				$brand_arr = $this->brand_info_fn();
				$this->assign('brand_info',$brand_arr);

				$this->display();
			}
		}




		// 修改商品
		function update($goods_id){
			$goods = D("goods");
			//两个逻辑，收集表单，展示表单，
			$re = $goods->find($goods_id);
			if(!empty($_POST)){
				if($_POST['del_pic']){
					unlink(UPLOAD.$re['goods_big_img']);
					unlink(UPLOAD.$re['goods_small_img']);
					unset($_POST['del_pic']);
					$_POST['goods_big_img']='';
					$_POST['goods_small_img']='';
				}
				if(!empty($_FILES['goods_image']['name'])){
					unlink(UPLOAD.$re['goods_big_img']);
					unlink(UPLOAD.$re['goods_small_img']);
					$arr=$this->upload_img($_FILES['goods_image']);
					$_POST['goods_big_img']=$arr['big'];
					$_POST['goods_small_img']=$arr['small'];
				}

				$goods->create();
				$goods->goods_last_time = time();//上传时间
				$re = $goods->save();
				if($re){
					$this->success('修改成功',U('showlist'));
				}else{
					$this->error('修改失败,请重新修改');
				}
			}else{

				$this->assign('goods_pic',$re['goods_small_img']);

				/*传输商品分类*/
				$cate_arr = $this->cate_info_fn();
				$this->assign('cate_info',$cate_arr);

				/*传输品牌分类*/
				$brand_arr = $this->brand_info_fn();
				$this->assign('brand_info',$brand_arr);


				$this->assign("info",$re);
				$this->assign('goods_category_id',$re['goods_category_id']);//选中该商品分类下拉id
				$this->assign('goods_brand_id',$re['goods_brand_id']);//选中该商品牌子下拉ID
				$this->display();
			}
		}

		// 删除商品列表的商品
		function delete(){
			$goods = D('Goods');
			$id = $_GET['goods_id'];
			$data=array('goods_status'=>'del');
			$re=$goods->where('goods_id='.$id)->data($data)->save();
			if($re){
//				echo "succeful";
				 $this->success('删除成功',U('Goods/showlist'));
			}else{
//				echo "error";
				$this->success('删除失败',U('Goods/showlist'));
			}
		}
		//恢复回收站的商品
		function goods_renew(){
			$goods = D('Goods');
			$id = $_GET['goods_id'];
			$data=array('goods_status'=>'checked');
			$re=$goods->where('goods_id='.$id)->data($data)->save();
			if($re){
//				echo "succeful";
				$this->success('恢复成功',U('Goods/showlist_del'));
			}else{
//				echo "error";
				$this->success('恢复失败',U('Goods/showlist_del'));
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


		/**
		 * 查看品牌分类
		 */
		function brand_info(){
			$arr=$this->pager('brand',8);
			$this->assign('pagelist',$arr['pagelist']);
			$this->assign('brand_info',$arr['info']);
			$this->display();
		}

		/**
		 * 添加品牌
		 */
		function brand_add(){
			$brand=D('brand');
			if(!empty($_POST)){
				$arr=$this->upload_img($_FILES['brand_img']);
				$_POST['brand_big_logo']=$arr['big'];
				$_POST['brand_small_logo']=$arr['small'];
				$brand->create();
				$re = $brand->add();
				if($re){
					$this->success('添加成功',U('brand_info'));
				}else{
					$this->error('添加失败');
				}
			}else{
				$this->display();
			}
		}
		/**
		 * 修改品牌
		 */
		function brand_update(){
			$brand=D('brand');

			if(!empty($_POST)){
//				添加图片删除功能
				$re = $brand->find($_POST['brand_id']);
				if(isset($_POST['del_pic'])){
					unlink(UPLOAD.$re['brand_big_logo']);
					unlink(UPLOAD.$re['brand_small_logo']);
					unset($_POST['del_pic']);//删除变量$_POST['del_pic']
					$_POST['brand_big_logo']='';
					$_POST['brand_small_logo']='';
				}
//				如果用户有上传新照片操作
				if(!empty($_FILES['brand_img']['name'])){
					unlink(UPLOAD.$re['brand_big_logo']);
					unlink(UPLOAD.$re['brand_small_logo']);
					$arr=$this->upload_img($_FILES['brand_img']);
					$_POST['brand_big_logo']=$arr['big'];
					$_POST['brand_small_logo']=$arr['small'];
				}
				$brand->create();
//				$brand->find($_POST['brand_id']);

				$re = $brand->save();
//				echo $brand->getLastSql();
				if($re){
					$this->success('修改成功',U('brand_info'));
				}else{
					$this->error('修改失败');
				}

			}else{
				$re = $brand->find($_GET['brand_id']);
				$this->assign('brand_info',$re);
				$this->display();
			}
		}

		/**
		 * 删除品牌
		 */
		function brand_delete(){
			$brand=M('brand');
			$re=$brand->delete($_GET['brand_id']);
			if($re){
				$this->success('删除成功',U('brand_info'));
			}else{
				$this->error('删除失败');
			}
		}




		/**
		 * 文件上传,判断附件是否上传了文件，有就实力化并上传到服务器指定位置
		 * @param $img_name $_FILES['name] 前台input[file]的name值
		 * @return array 返回大小图片的地址
		 */
		 function upload_img($img_name){
				if(!empty($_FILES)){
					// 参数配置
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
//					$re = $upload -> uploadOne($_FILES['goods_image']);//返回已经上传的图片信息
					$re = $upload -> uploadOne($img_name);//返回已经上传的图片信息
					if(!$re){
						$upload->getError();
						// $this->error("添加图片失败",U("Goods/add"));
					}else{
						// 拼装图片的路径
						$bigimg = $re['savepath'].$re['savename'];//拼接大图路径


						/*制作缩略图Image.class.php*/
						$image = new \Think\Image();
						$srcImg = $upload->rootPath.$bigimg;//设置画板图片的路径
						$image->open($srcImg);//打开图像资源
						$image->thumb(150,150);//缩略图的宽高，以最大150按比例缩放
						$smallimg = $re['savepath']."small_".$re['savename'];//拼接小图路径
						$image->save($upload->rootPath.$smallimg);	//把小图存入upload，【一定要注意加上根路径】

						return array('big'=>$bigimg,'small'=>$smallimg);
					}
				}
		}




		// 返回商品分类name及ID,
		private function cate_info_fn(){
			$cate_info = D('category')->select();
			$cate_arr = array();
			foreach ($cate_info as $k => $v) {
				$cate_arr[$v['cat_id']] = $v['cat_name'] ;//下标为ID，POST传过来的值也为ID
			}
			return $cate_arr;
		}
		// 返回商品品牌name及ID，用来做下拉
		private function brand_info_fn(){
			$brand_info = D('brand')->select();
			$brand_arr = array();
			foreach ($brand_info as $k => $v) {
				$brand_arr[$v['brand_id']] = $v['brand_name'] ;//下标为ID，POST传过来的值也为ID
			}
			return $brand_arr;
		}

		/**
		 * 分页显示集成函数
		 * @param $table_name  查询的表名
		 * @param $num 每页条数
		 * @param $where 条件判断
		 * @return array 返回值
		 * 		array['info']存放查询的分页信息
		 * 		array['pagelist']存放分页的HTML代码
		 * 注意 修改表前缀，本函数用的必须为QUERY查询的方式,因为分页类用到->limit的效果是QUERY查询的
		 */
		  function pager($table_name,$num=10,$where=''){
			/*分页显示*/
			$$table_name = D($table_name);

			//1.获得要查询数据的总条数
			  	$sql = "select count(*) as affect_num from sw_{$table_name}";
			  	if(!empty($where)){//解决查询问题
				  $sql .= " ".$where;
			  	}
			  	$total = $$table_name -> query($sql);
				$per = $num;	//每页条数
			//2.实例化分页对象，把本次查询总条数，每页条数，传入
				$page = new \Component\Page($total[0]['affect_num'],$per);//实例化分页类
		    // 3.写有分页效果的SQL语句
				$sql = "select * from sw_{$table_name}";
				if(!empty($where)){//解决查询问题
					$sql .= " ".$where;
				}
				$sql .= " ".$page->limit;
				//	echo $sql;
		    //4.查询出有分页效果的数据
				$info = $$table_name ->query($sql);
			  // 5.获得页码列表
				$pagelist = $page->fpage();
				  $return =array('info'=>$info,'pagelist'=>$pagelist);
				//	show($return);
				return $return;
		}

	}



 ?>