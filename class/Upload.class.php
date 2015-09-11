<?php 

/**
*	����:
*		1.����inlcude�����ļ�,���º���upload ���ô洢·��
*		2.ֱ�����ã����ǰ̨�����к���,ע��ǰ̨form��enctype
*		3.�����гɹ���ת���ļ���ָ��Ŀ¼����÷���ֵurl����ȫ·��
*		4.��ָ���洢��·���������ݿ�
*/



	/**
	*	�ļ��ϴ����������ļ����浽ָ��·��
	*	@param 
	*		$filename:����д���ļ����� name="XXX" �����Զ�ʶ��$_FILES
	*	@return �ɹ�����ͼƬ�洢����ȫ·����ʧ�ܷ���false
	*/
	function upload($filename){
		include_once(__ROOT__.'/common/Upload.class.php');//�������ļ�
		$path  = __ROOT__."/public/upload/".date("Y-m-d",time());//����·��
		$upload = new upload($filename,$path);//ʵ��������
		$url  = $upload->uploadFile();//���ó�Ա�������ɹ����ر���������ַ
		if(empty($url)){
			return false;
		}
		return $url;
	}

// ----------------------------------------------------------------------------------

	class Upload{
		protected $fileName;	//�ļ�����
		protected $maxSize;  //�ļ�����С
		protected $allowMime; //�����ͼƬ��Χ
		protected $allowExt;	//������ļ���׺��
		protected $uploadPath;	//�����ļ��ϴ�·��
		protected $imgFlag;		//�Ƿ��������ʵͼ��
		protected $fileInfo;	//$_FILES['filename'][...]
		protected $error;//���ص��ļ�����
		protected $ext; //��ȡ���ļ���׺

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
		 * ����ϴ��ļ��Ƿ����
		 * @return boolean
		 */
		protected function checkError(){
			if(!is_null($this->fileInfo)){
				if($this->fileInfo['error']>0){
					switch($this->fileInfo['error']){
						case 1:
							$this->error='������PHP�����ļ���upload_max_filesizeѡ���ֵ';
							break;
						case 2:
							$this->error='�����˱���MAX_FILE_SIZE���õ�ֵ';
							break;
						case 3:
							$this->error='�ļ����ֱ��ϴ�';
							break;
						case 4:
							$this->error='û��ѡ���ϴ��ļ�';
							break;
						case 6:
							$this->error='û���ҵ���ʱĿ¼';
							break;
						case 7:
							$this->error='�ļ�����д';
							break;
						case 8:
							$this->error='����PHP����չ�����ж��ļ��ϴ�';
							break;
							
					}
					return false;
				}else{
					return true;
				}
			}else{
				$this->error='�ļ��ϴ�����';
				return false;
			}
		}
		/**
		 * ����ϴ��ļ��Ĵ�С
		 * @return boolean
		 */
		protected function checkSize(){
			if($this->fileInfo['size']>$this->maxSize){
				$this->error='�ϴ��ļ�����';
				return false;
			}
			return true;
		}
		/**
		 * �����չ��s
		 * @return boolean
		 */
		protected function checkExt(){
			$this->ext=strtolower(pathinfo($this->fileInfo['name'],PATHINFO_EXTENSION));
			if(!in_array($this->ext,$this->allowExt)){
				$this->error='���������չ��';
				return false;
			}
			return true;
		}
		/**
		 * ����ļ�������
		 * @return boolean
		 */
		protected function checkMime(){
			if(!in_array($this->fileInfo['type'],$this->allowMime)){
				$this->error='��������ļ�����';
				return false;
			}
			return true;
		}
		/**
		 * ����Ƿ�����ʵͼƬ
		 * @return boolean
		 */
		protected function checkTrueImg(){
			if($this->imgFlag){
				if(!@getimagesize($this->fileInfo['tmp_name'])){
					$this->error='������ʵͼƬ';
					return false;
				}
				return true;
			}
		}
		/**
		 * ����Ƿ�ͨ��HTTP POST��ʽ�ϴ�������
		 * @return boolean
		 */
		protected function checkHTTPPost(){
			if(!is_uploaded_file($this->fileInfo['tmp_name'])){
				$this->error='�ļ�����ͨ��HTTP POST��ʽ�ϴ�������';
				return false;
			}
			return true;
		}
		/**
		 *��ʾ���� 
		 */
		protected function showError(){
			exit('<span style="color:red">'.$this->error.'</span>');
		}
		/**
		 * ���Ŀ¼�������򴴽�
		 */
		protected function checkUploadPath(){
			if(!file_exists($this->uploadPath)){
				mkdir($this->uploadPath,0777,true);
			}
		}
		/**
		 * ����Ψһ�ַ���
		 * @return string
		 */
		protected function getUniName(){
			return md5(uniqid(microtime(true),true));
		}
		/**
		 * �ϴ��ļ�
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
					$this->error='�ļ��ƶ�ʧ��';
					$this->showError();
				}
			}else{
				$this->showError();
			}
		}
	}