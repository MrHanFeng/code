<?php 
include_once dirname(__DIR__)."/config.php";//��������ļ���������Ŀ�����п���

/*------------------------------------------------------------*/
/*---------------------�����ļ���Ϣ---------------------------*/
/*------------------------------------------------------------*/
	// include_once __DIR__."/config.php";//�������ݿ���������

	define('DB_HOST','127.0.0.1');
	define('DB_USER','root');
	define('DB_PASS','root');
	define('DB_NAME','cms');

	// ʵ���������ݺ���
	function M($table){
		try{
			$table=new MysqlClass($table);
		}catch(Exception $e){
			$e->getMessage();
			exit();
		}
		return $table;
	}

/*------------------------------------------------------------*/
/*------------------------------------------------------------*/
/*------------------------------------------------------------*/




	Class Mysqlclass{

		static $mysqli;				//�洢mysqli����
		private $_table;			//��ǰ�ı���
		private $field="*";			//��ѯ�ֶ�
		private $where;				//where����
		private $sql;				//ִ�е����
		private $error_info;		//���ڴ洢������Ϣ
		private $group;				//��������
		private $order;				//��������
		private $limit;				//limit����
		private $join;				//join����
		private $data;				//insert��update����������
		private $error=array(		//�����,�����еĴ������ͣ���������
				'E01'=>'û��������',
				'E02'=>'û������where����',
			);


		/**
  		 * @param $table
		 * $table ����
		 *
		 */
		function __construct($table){
			// �״�ʵ����mysqli����
			if(!self::$mysqli){//���û��ʵ�������������
				self::$mysqli = @new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
				if(mysqli_connect_errno()){
					throw new Exception(mysqli_connect_errno());
				}
				self::$mysqli->set_charset('utf8');
			}
			$this->_table=$table;
		}

		/**
		 * ���ò�ѯҪ���ص��ֶ�ֵ
		 * @param $field
		 * $field �ֶ�
		 * ���������飬Ҳ�������ַ���
		 * @return $this
		 */
        function field($field){
			if(is_array($field)){
				$sql=implode(',',$field);// $field=array('name','sid');
			}else if(is_string($field)){
				$sql=$field;// $field='name,sid';
			}
			$this->field=$sql;
			return $this;
		}

		/**
		 * ���ñ����ӵ�����
		 * @param $join
		 * $join ��������
		 * ֻ�����ַ���
		 * ʾ����t2 on t2.id=id
		 * @param string $type ����ѡ��
		 * $type ��������
		 * �ο�ֵ��left inner right
		 * @return $this
		 */
		function join($join,$type="left"){
			 $this->join = " {$type} join {$join}";// $join=('s on s.id=t.sid');
			return $this;
		}

		/**
		 *	���ò�ѯ����е�where����
		 *	@param $where
		 *  	
		 *	@return $this	
		 *
		*/
		function where($where){
			if(is_string($where)){
				$sql = " where {$where}";//$where="id>1"
			}elseif(is_array($where)){
				$sql = " where ";
				foreach ($where as $k => $v) {
					if(is_array($v)){//�������ĵ�һ��Ԫ�ػ������飬������Ϊ��ά����
						switch ($v[0]) {
							case '>':
							case '<':
							case '>=':
							case '<=':
							case '!=':
							case '=':
								$sql .=" {$k}{$v[0]}'{$v[1]}' and";// $where=array('id'=>array(">",1));
								break;
							case "is":
							case "is not":
								$sql .=" {$k} {$v[0]} null and";//$where=array('name'=>array('is',"tom"));
								break;
							case "between":
								if(is_array($v[1])){
									$sql .="{$k} between {$v[1][0]} and {$v[1][1]} and";//$where = array('id'=>array('between',array(4,6))) ��ά����
								}elseif(is_numeric($v[1]) && is_numeric($v[2])){
									$sql .="{$k} between {$v[1]} and {$v[2]} and";//$where = array('id'=>array('between',4,6)) ��ά����
								}
								break;
							case "like":
							case "not like":
								$sql .="{$k} {$v[0]} '{$v[1]}' and";// $where =array('name'=>array('not like','tom'));
								break;
							case "in":
							case "not in":
								if(is_array($v[1])){
									$sql .=" {$k} {$v[0]} ('".implode("','", $v[1])."') and";// $where =array('name'=>array('in',array('tom','jam','dim')));
								}elseif(is_string($v[1]))
									$sql .="{$k} {$v[0]} ({$v[1]}) and";  // $where =array('name'=>array('in','"tom","jam"'));

						}
					}elseif(is_string($v)){//$where=array("id"=>"1")
						$sql .=" {$k}='{$v}' and";
					}
				}
				$sql = substr($sql,0,-4);
			}
			$this->where = $sql;
			return $this;
		}
	
		/**
		 *���ò�ѯ����е�group����
		 * @param $group
		 * $group ��������
		 * �������ַ�����Ҳ����������
		 * �ַ���ʾ��: id,name
		 * ����ʾ��: array('id','name')
		 * @return $this
		 */
		function group($group){
			$sql = " group by ";
			if(is_array($group)){
				$sql .=implode(',',$group);//$group=array('id','name');
			}elseif(is_string($group)){
				$sql .=$group;//$group='name,sid';
			}
			$this->group = $sql;
			return $this;
		}

		/**
		 * ���ò�ѯ����е�order����
		 * @param $order
		 * $order ��������
		 * �������ַ�����Ҳ����������
		 * �ַ���ʾ��: id DESC,name
		 * ����ʾ��: array('id'=>"DESC",'name'=>"ASC")
		 * @return $this
		 */
		function order($order){
			$sql = "order by ";
			$order_arr=array('ASC','DESC');
			if(is_string($order)){
				$sql .= $order;// $order=('id DESC');
			}elseif(is_array($order)){
				foreach ($order as $k => $v) {
					$v=strtoupper($v);
					if(in_array($v,$order_arr)){
						$sql .= "{$k} {$v},";// $order=(array('id'=>'DESC','name'=>'asc'));
					}
				}
				// echo $sql = substr($sql,0,-1);
				// echo $sql = substr($sql,0,strlen($sql)-1);
				$sql = substr_replace($sql, "", -1);
			}
			$this->order = $sql;
			return $this;
		}

		/**
		 * ���ò�ѯ����е�limit����
		 * @param $start
		 * $start ��ʼλ��
		 * ֻ��������
		 * ����ʾ��:3
		 * @param int $length ����ѡ��
		 * $length ��������
		 * ֻ������
		 * @return $this
		 */
		function limit($limit,$length=0){
			if(!$length){
				$sql = "limit {$limit}";// $limit=(2);
			}else{
				$sql = "limit {$limit},{$length}";// $limit=('1,2');
			}
			$this->limit = $sql;
			return $this;
		}

		/**
		 * ����insert updateʱ����������
		 * @param $data
		 * ֻ��������
		 * ����ʾ����array('id'=>'','name'=>'test')
		 * @return $this
		 */
		function data($data){
		    $this->data=$data;
		    return $this;
		}

// --------------------------------------------------------------------------------
// ����ΪSQL������
// --------------------------------------------------------------------------------

		/**
		 * 	ִ�в�ѯ�����������
		 * @return array|bool|null
		 * ���н��ʱ����һά����
		 * ��ѯʧ�ܷ��� false
		 * û�н������ null
		 * ��Ҫʹ��===false�ж��Ƿ�ִ�гɹ�
		 */
		function find(){
			$sql = "select {$this->field} from {$this->_table} {$this->join} {$this->where} {$this->group} {$this->order} limit 1";
			$this->sql = $sql;
			return $this->query_one($sql);

		}

		/**
		 * ִ�в�ѯ�����������
		 * @return array|bool|null
		 * ���н��ʱ���ض�ά����
		 * ��ѯʧ�ܷ��� false
		 * û�н������ null
		 * ��Ҫʹ��===false�ж��Ƿ�ִ�гɹ�
		 */
		function select(){
			$sql = "select {$this->field} from {$this->_table} {$this->join} {$this->where} {$this->group} {$this->order} {$this->limit}";
			$this->sql = $sql;
			return $this->query($sql);
		}

		/**
		 *	@return 
		 *	ִ�гɹ�������Ӱ������
		 *	ִ��ʧ�ܷ���boolֵ false
		*/
		function delete(){
			$sql = "delete from {$this->_table} {$this->where}";
			$re = self::$mysqli -> query($sql);
			$this->sql = $sql;//��SQL��丳ֵ��������ò鿴
			if($re){
				return self::$mysqli->affected_rows;
			}else{
				return false;
			}
		}

        /**
         * ִ�в������
         * @return bool|mixed
         * ִ��ʧ�ܷ���false
         * ִ�гɹ�����insert_id(������id)
         */
        function insert(){
			$insert_sql=$this->createInsertData();
			if(!$insert_sql){
				return false;
			}
			$sql="insert into {$this->_table} {$insert_sql}";
			$result=$this->exec($sql);
			if($result){
				return self::$mysqli->insert_id;
			}
			return false;	
		}

        /**
         * ִ�и��²���
         * @return bool|int
         * ִ��ʧ�ܷ���false
         * ִ�гɹ�������Ӱ�������
         */
        function update(){
			$update_sql=$this->createUpdateData();
			if(!$update_sql){
				return false;
			}
			if(!$this->where){//��ֹ�������ݿ��¹�
				$this->setError('E02',$this->error['E02']);
				return false;
			}
			 $sql="update {$this->_table} set {$update_sql} {$this->where}";
			$result=$this->exec($sql);
			if($result){
				return self::$mysqli->affected_rows;
			}
			return false;			
		}

		/**
		 * ִ��ͳ����������
		 * @return bool|int
		 * ��ѯʧ�ܷ��� false
		 * ��ѯ�ɹ�����һ����������
		 */
		function count(){
			$sql = "select count(*) as hf_sum from {$this->_table}{$this->join}{$this->where}{$this->group}{$this->order} limit 1";
			$result=$this->query_one($sql);
			if($result){
				return (int)$result['hf_sum'];
				// return $result;
			}else{
				return false;
			}
		}

		/**
		*	����ֶ�������ֵ
		*	@param int�ֶ�
		*	@return ���ֶ����ɵ����ֵ 
		*/
		function max($name){
			$sql = "select $name from {$this->_table}{$this->where} order by $name DESC";
			$result=$this->query($sql);
			return $result[0][$name];
		}

		/**
		*	����ֶ������Сֵ
		*	@param int�ֶ�
		*	@return ���ֶ����ɵ�Сֵ 
		*/
		function min($name){
			$sql = "select $name from {$this->_table}{$this->where} order by $name ASC";
			$result=$this->query($sql);
			return $result[0][$name];
		}


// --------------------------------------------------------------------------------
// ����ΪSQL�ľ������
// --------------------------------------------------------------------------------

		/**
		 * ִ�в�ѯ���������sql��� select����
		 * @param $sql
		 * $sql ��ѯ���
		 * ֻ�����ַ���
		 * @return array|bool|null
		 * ���н��ʱ����һά����
		 * ��ѯʧ�ܷ��� false
		 * û�н������ null
		 * ��Ҫʹ��===false�ж��Ƿ�ִ�гɹ�
		 */
		function query_one($sql){
			$re = self::$mysqli->query($sql);
			$this->sql = $sql;
			$this->clearParam();//������Ե�����ֵ
			if($re ===false){
				$this->setError();//?????????????????????????????????????????????
				return false;
			}elseif ($re->num_rows == 0) {
				$re->num_rows;
				return null;
			}else{
				return $re->fetch_assoc();//����һλ����
			}
		}

        /**
         * ִ�в�ѯ���������sql��� select
         * @param $sql
         * $sql ��ѯ���
         * ֻ�����ַ���
         * @return array|bool|null
         * ���н��ʱ���ض�ά����
         * ��ѯʧ�ܷ��� false
         * û�н������ null
         * ��Ҫʹ��===false�ж��Ƿ�ִ�гɹ�
         */
		function query($sql){
			$re = self::$mysqli->query($sql);
			// print_r($re);
			$this->sql = $sql;
			$this->clearParam();//������Ե�����ֵ
			if($re === false){
				$this->setError();//?????????????????????????????????????????????
				return false;
			}elseif ($re->num_rows == 0) {
				return null;
			}else{
				$list=array();
				while($r = $re->fetch_assoc()){
					$list[]=$r;
				}
				return $list ;//���ض�ά����
			}
		}

		/**
          * ִ�в�ѯ��������sql,insert,update�õ�
          * ��--Ҳ���Զ��⿪�ţ���һЩֱ������SQL��䣬�ڵ��ü��Ӱ�캯�������������������֧����ԭʼ��SQL��ѯ--��
          * @param $sql
          * $sql ��ѯ���
          * ֻ�����ַ���
          * �ַ���ʾ��:delete from t where id = 1
          * @return bool
          * ��ѯʧ�ܷ��� false
          * û�н������ true
          *
         */
		function exec($sql){
			$result=self::$mysqli->query($sql);
            $this->sql=$sql;
			$this->clearParam();
			if(!$result){
				$this->setError();
			}
			return $result;			
		}

        /**
         * ��data�������洢������ת��insert���
         * @return bool|string
         * ���data���Բ��������򷵻�  false
         * ���data�����������򷵻�ת���Ľ��
         * ����˵������һλ������뵥�����ݣ���ά��������������Ϊ׼��
         *    
         *    һά
         * array(
         *	 'id'=>0,
         *	 'name'=>'test',
         * )
         *
         *	��ά
         * array(
		 *	0=>array('id'=>'';'name'=>'aa'),
		 *	1=>array('id'=>'';'name'=>'aa'),
		 *	2=>'1111',//Ҫ�����˵�
		 *	3=>array('id'=>'';'name'=>'aa'),
         *)
         */
        function createInsertData(){
			if(is_array($this->data)){//��data()���Ѿ�����������
				$first_array=current($this->data);//��data[0]��ֵ���������ж����ǲ�������				
				if(is_array($first_array)){//�����Ϊ��ά����
					$insert_sql='('.implode(',',array_keys($first_array)).') values ';
					foreach($this->data as $row){
						if(is_array($row)){//���˵ڶ�ά�Ĳ��������Ԫ�أ����ϱ�����
							echo  $insert_sql .="('".implode("','",array_values($row))."'),";
						}
					}
					return substr($insert_sql,0,-1);//ȥ�����Ķ���
				}else{//��ǰ������һά���飬ֱ�Ӱ���������ֵ���SQL���
					$insert_sql='('.implode(',',array_keys($this->data)).') values ';
					$insert_sql.="('".implode("','",array_values($this->data))."')";
					return $insert_sql;
				}
			}else{//���������飬���򱨴�
				$this->setError('E01',$this->error['E01']);
				return false;
			}
		}


        /**
         * ִ�и��²���
         * ��data�������洢������ת��update���
         * @return bool|string
         * ���data���Բ��������򷵻�  false
         * ���data�����������򷵻�ת���Ľ��
         */
        function createUpdateData(){
			if(is_array($this->data)){
				$update_sql="";
				foreach($this->data as $key=>$row){
					 $update_sql.="{$key}='{$row}',";			
				}
				return substr($update_sql,0,-1);
			}else{
				$this->setError('E01',$this->error['E01']);
				return false;
			}
		}

        /**
         * ���ô�����
         * @param $errno
         * $errno ������
         * �ַ���ʾ���� E01
         * @param string $error
         * $error ������ʾ
         * �ַ���ʾ��: û������
         * ������ò���������ʹ�ò��������δ�ṩ��ʹ��ϵͳ������Ϣ
         */
		function setError($errno=0,$error=''){
			if(self::$mysqli->errno && $errno==0){//ָϵͳ�Ĵ��󣬷���ǰ�����ȼ���
				$this->error_info['errno']=self::$mysqli->errno;//���ش�����Ϣ���롣
				$this->error_info['error']=self::$mysqli->error;//������һ�� MySQL �����������ı�������Ϣ 
			}elseif($errno>0){//�˹����õĴ���
				$this->error_info['errno']=$errno;
				$this->error_info['error']=$error;
			}
		}

        /**
         * ��ȡ��һ�δ�����Ϣ
         * @return mixed
         * ������һ�δ�����Ϣ
         * ��������Ϊ���� ���� errno error
         * ����ʾ�� array('errno'=>'E01','error'=>"û������")
         */
        function getError(){
			return $this->error_info;
		}

		// �������ĵ��ã�������Ե�ֵ
		function clearParam(){
			$this->field="*";
			$this->where="";
			$this->group="";
			$this->order="";
			$this->limit="";
			$this->join="";
			$this->data="";
		}

		// ��ȡ��ǰ��SQL������Ϊ�ϱ�ÿһ���������������SQL����$sql
		function getLastSql(){
		 	return $this->sql;
		}

// --------------------------------------------------------------------------------
// ����ΪSQL�ĵĸ�������
// --------------------------------------------------------------------------------
		
        /**
         * ��������
         * @return bool
         */
        function startTrans(){
        	self::$mysqli->autocommit(TRUE);
			$sql="start transaction";
			return $this->exec($sql);
		}


        /**
         * �ύ����
         * @return bool
         */
        function commit(){
			return self::$mysqli->commit();
		}

        /**
         * �ع�����
         * @return bool
         */
        function rollback(){
			return self::$mysqli->rollback();
		}


		function endTrans(){
        	self::$mysqli->autocommit(false);
			$sql="end transaction";
			return $this->exec($sql);
		}
// --------------------------------------------------------------------------------
// ����ΪSQL���������
// --------------------------------------------------------------------------------


	}
 ?>