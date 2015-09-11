<?php 
	步骤：
		1.准备配置文件：
			pager.css   
			pager.class.php
		2.代码中引入文件(注意路径配置正确)
    		HTML:					<link rel="stylesheet" href="../css/article.css">
			PHP的pager()函数中:		include_once(__ROOT__.'/common/pager.class.php');//根据自己路径来
		3.引入如下代码：
 ?>



<?php 	
/*------------------------------------------------------------------------------*/
/*------------------------------------前台调用----------------------------------*/
/*------------------------------------------------------------------------------*/
	// 定义默认查看第一页
	if(!isset($_GET['page'])){
	  $_GET['page']=1;
	}
	$arr = page(@$_GET['page'],10,"table_name");//调用page()函数
	$info =$arr['info'];
	$page =$arr['page_html'];


	// 按分页输出信息
	foreach ($info as $value) {
		echo $value['id'];
				.
				.
				.
		echo $value['name'];
	}
	
	//输出可显示分页的HTML代码
	echo $page;

/*------------------------------------------------------------------------------*/
/*------------------------------------函数写法----------------------------------*/
/*------------------------------------------------------------------------------*/

	/**
	*	分页通用模版，调用此函数即可
	*  <--	此函数简单通用模版，当增加功能，需要约束各种数据条件时，重写即可   -->
	*	@param 
	* 		$cur_page 当前为第几页
	* 		$per_num 每页条数
	*		$table_name 查询那个表
	*	@return
	*	成功返回 链接表的信息, 三维数组
	*		$return['page_html'] :为分类的HTML代码
	*		$return['info'] :数据的信息，二维数组，下标为分类的ID，值为所搜索的对应字段，
	*	失败返回false
	*/
	function page($cur_page,$per_num,$table_name){
		// 1.数据库链接
		$table = M($table_name);
		// 2.计算数据总数
		$total_num = $table->count();
		// 3.获得HTML分页代码
		$page_html = pager($total_num,$cur_page,$per_num);
		// 4.设置limit约束，【分页本质】
		$limit = ($cur_page-1)*$per_num	;// 设置limit第一个参数参数,前边已经显示了多少数据 
		// 5.语句查询返回对应分页的信息
		$info = $table->limit($limit,$per_num)->select();
		if(empty($info) ){
			return false;
		}
		// 6.数据归一,返回分页HTML代码与分页的信息
		$return['page_html'] = $page_html;
		$return['info'] = $info;
		return $return;
	}


	/**
	*	生成分页代码 ，与pager.class.php合用
	*	@param 
	*		$total_num 	  设置总数据量
	*		$get_page     当前为第几页,默认第一页
	*		$per_page_num 每页显示条数
	*	@return 
	*		$pageStr  根据数据编辑好的分页HTML代码
	*/
	function pager($total_num,$CurrentPage,$per_page_num){
		// echo __ROOT__.'/common/pager.class.php';exit;
		include_once(__ROOT__.'/common/pager.class.php');//根据自己路径来
		$myPage=new pager($total_num,intval($CurrentPage),$per_page_num);     //总页数，当前页数，每页数量
		// 获得并输出分页HTML
		$pageStr= $myPage->GetPagerContent();   	//获得分页代码
		return $pageStr;   							//输出分页的HTML代码
	}




 ?>