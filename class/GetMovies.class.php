<?php
/**
*	使用方法:
*		调用main函数，无参数.自动调用电影天堂的信息。
*	
*	本类思路：
*		1.在电影首页，获取大分类导航链接。
*		2.在每个分类的电影列表页面,获得该类型电影下的每个电影
*		3.在每个具体电影页面,获得该电影下载链接等相关信息
*	原理：
*		1.利用文件操作读取某链接页面下的所有HTML信息。
*		2.利用正则表达式。匹配出想要的信息。
*	注意:
*		1.在换取其他站点的网站时，只有结构类似的才可以使用
*		2.注意正则表达式的换取，
*		3.建议不修改,默认提取《电影天堂》电影信息
*			
*/



	class GetMovies{
		CONST MOVIES_DIR="movies/";
		private $homeUrl="http://www.dytt8.net/";		//要获取的电影网站URL
		private $menu;									//存储导航url,name
		private $moviesList;							//每一个电影的url
		private $model;									//存放正则表达式
		// public


		/**
		* 分别调用类中其他函数，按步骤获取电影信息
		*	@return 
		*	成功返回所含全部电影信息的二维数组
		*	失败返回false
		*/
		function main(){
			$this->getMenu();						//获取首页分类URL
			for($i=0;$i<9;$i++){ 
				$this->getMovieList($i); 			//获得电影列表的每个地址，默认了提取9个分类
				// print_r($this->moviesList);
				$re = $this->getMovieInfo();				//获取每电影的信息
				if($re){
					return $re;
				}
				return false;
			}
		}


		function __construct(){
			$this->model["One"]= "/<li>\s*<a href=\"(.*?)\">(.*?)<\/a>/U";
			$this->model["Two"]= "/<b>.*<a href=\"(.*)\"/sU";
			$this->model["Three"]["name"]="/#07519a>(.*?)<\/font>/";
			$this->model["Three"]["url"]="/#fdfddf\"><a href=\"(.*?)\">/";
			$this->model["Three"]["intro"]="/<br \/><br \/>◎(.*?)<br \/><br \/>/";
			$this->model["Three"]["pic"]="/<p><br \/><img border=\"0\" src=\"(.*?)\" alt=/";
		}



// 获得导航菜单的URL，NAME
		protected function getMenu(){
			$data = file_get_contents($this->homeUrl);	//获取一级页面
			preg_match_all($this->model["One"],$data,$arr);
			$this->menu["url"] = $arr[1];				//分类的名称
			$this->menu["name"] = $arr[2];				//分类的大小
		}

// 获得某一分类下的所有电影列表的URL
		protected function getMovieList($i){
			$data = file_get_contents($this->menu["url"][$i]);	
			preg_match_all($this->model["Two"],$data,$arr);
			$j=0;
			foreach ($arr[1] as $value) {
			 $this->moviesList[$j]="http://www.ygdy8.net".$value;	
			 $j+=1;
			}
		}

// 获得 一个电影的具体信息
		protected function getMovieInfo(){
			$movie1 = array();
			foreach ($this->moviesList as $value) {
				$data = file_get_contents($value);

				// 获得电影名称
				preg_match($this->model["Three"]["name"],$data,$movie);
				$movie1["name"]=$movie[1];

				//获得电影URL
				preg_match($this->model["Three"]["url"],$data,$movie);
				$movie1["url"]=$movie[1];

				//获得电影介绍
				preg_match($this->model["Three"]["intro"],$data,$movie);
				@$movie1["intro"]=$movie[1];

				//获得电影PIC
				preg_match($this->model["Three"]["pic"],$data,$movie);
				@$movie1["pic"]=$movie[1];
				$arr[]=$movie1;
			}
			// print_r($arr);
			return $arr;
		}



		function __destruct(){

		}

	}


	$p1 = new GetMovies;
	$p1->main();
?>