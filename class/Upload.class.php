<?php 

/**
*	步骤:
*		1.导入inlcude本类文件,如下函数upload 配置存储路径
*		2.直接运用，配合前台，运行函数,注意前台form打开enctype
*		3.若运行成功，转运文件至指定目录，获得返回值url物理全路径
*		4.把指定存储的路径存入数据库
*/



	/**
	*	文件上传函数，把文件保存到指定路径
	*	@param 
	*		$filename:表单里写的文件名称 name="XXX" ，会自动识别$_FILES
	*	@return 成功返回图片存储物理全路径，失败返回false
	*/
	function upload($filename){
		include_once(__ROOT__.'/common/Upload.class.php');//引入类文件
		$path  = __ROOT__."/public/upload/".date("Y-m-d",time());//定义路径
		$upload = new upload($filename,$path);//实例化对象
		$url  = $upload->uploadFile();//调用成员方法，成功返回保存的物理地址
		if(empty($url)){
			return false;
		}
		return $url;
	}

// ----------------------------------------------------------------------------------

	class Upload{
		protected $fileName;	//文件名称
		protected $maxSize;  //文件最大大小
		protected $allowMime; //允许的图片范围
		protected $allowExt;	//允许的文件后缀名
		protected $uploadPath;	//设置文件上传路径
		protected $imgFlag;		//是否开启检测真实图像
		protected $fileInfo;	//$_FILES['filename'][...]
		protected $error;//返回的文件错误
		protected $ext; //获取的文件后缀

		public function __construct($fileName='myFile',$uploadPath='./uploads',$imgFlag=true,$maxSize=5242880,$allowExt=array('jpeg','jpg','png','gif'),$allowMime=array('image/jpeg','image/png','image/gif')){
			$this->fileName=$fileName;
			$this->maxSize=$maxSize;
			$this->allowMime=$allowMime;
			$this->allowExt=$allowExt;
			$this->uploadPath=$uploadPath;
			$this->imgFlag=$imgFlag;
			$this->fileInfo=$_FILES[$this->fileName];
		}
		/**
		 * 检测上传文件是否出错
		 * @return boolean
		 */
		protected function checkError(){
			if(!is_null($this->fileInfo)){
				if($this->fileInfo['error']>0){
					switch($this->fileInfo['error']){
						case 1:
							$this->error='超过了PHP配置文件中upload_max_filesize选项的值';
							break;
						case 2:
							$this->error='超过了表单中MAX_FILE_SIZE设置的值';
							break;
						case 3:
							$this->error='文件部分被上传';
							break;
						case 4:
							$this->error='没有选择上传文件';
							break;
						case 6:
							$this->error='没有找到临时目录';
							break;
						case 7:
							$this->error='文件不可写';
							break;
						case 8:
							$this->error='由于PHP的扩展程序中断文件上传';
							break;
							
					}
					return false;
				}else{
					return true;
				}
			}else{
				$this->error='文件上传出错';
				return false;
			}
		}
		/**
		 * 检测上传文件的大小
		 * @return boolean
		 */
		protected function checkSize(){
			if($this->fileInfo['size']>$this->maxSize){
				$this->error='上传文件过大';
				return false;
			}
			return true;
		}
		/**
		 * 检测扩展名s
		 * @return boolean
		 */
		protected function checkExt(){
			$this->ext=strtolower(pathinfo($this->fileInfo['name'],PATHINFO_EXTENSION));
			if(!in_array($this->ext,$this->allowExt)){
				$this->error='不允许的扩展名';
				return false;
			}
			return true;
		}
		/**
		 * 检测文件的类型
		 * @return boolean
		 */
		protected function checkMime(){
			if(!in_array($this->fileInfo['type'],$this->allowMime)){
				$this->error='不允许的文件类型';
				return false;
			}
			return true;
		}
		/**
		 * 检测是否是真实图片
		 * @return boolean
		 */
		protected function checkTrueImg(){
			if($this->imgFlag){
				if(!@getimagesize($this->fileInfo['tmp_name'])){
					$this->error='不是真实图片';
					return false;
				}
				return true;
			}
		}
		/**
		 * 检测是否通过HTTP POST方式上传上来的
		 * @return boolean
		 */
		protected function checkHTTPPost(){
			if(!is_uploaded_file($this->fileInfo['tmp_name'])){
				$this->error='文件不是通过HTTP POST方式上传上来的';
				return false;
			}
			return true;
		}
		/**
		 *显示错误 
		 */
		protected function showError(){
			exit('<span style="color:red">'.$this->error.'</span>');
		}
		/**
		 * 检测目录不存在则创建
		 */
		protected function checkUploadPath(){
			if(!file_exists($this->uploadPath)){
				mkdir($this->uploadPath,0777,true);
			}
		}
		/**
		 * 产生唯一字符串
		 * @return string
		 */
		protected function getUniName(){
			return md5(uniqid(microtime(true),true));
		}
		/**
		 * 上传文件
		 * @return string
		 */
		public function uploadFile(){
			if($this->checkError()&&$this->checkSize()&&$this->checkExt()&&$this->checkMime()&&$this->checkTrueImg()&&$this->checkHTTPPost()){
				$this->checkUploadPath();
				$this->uniName=$this->getUniName();
				$this->destination=$this->uploadPath.'/'.$this->uniName.'.'.$this->ext;
				if(@move_uploaded_file($this->fileInfo['tmp_name'], $this->destination)){
					return  $this->destination;
				}else{
					$this->error='文件移动失败';
					$this->showError();
				}
			}else{
				$this->showError();
			}
		}
	}