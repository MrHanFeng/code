<?php
	class MysqlClass{
		private $host="localhost";
		private $username="root";
		private $pass="root";
		private $db="shixun_test";
		private $conn;
		
		public function __construct(){
			$this->conn=@mysql_connect($this->host,$this->username,$this->pass) or die("数据库连接失败");
			mysql_select_db($this->db,$this->conn);
			$sql="set names utf8";
	        mysql_query($sql,$this->conn);
		}	
		
		

//返回一条查询数据 
		public function find($sql){
			$result=mysql_query($sql,$this->conn);
			if($result===false){
				return "查询失败";
			}
			// $a=mysql_fetch_row($result);
			// $a=mysql_fetch_array($result);
			$a=mysql_fetch_assoc($result);
			return $a?$a:null;
		}
		
		

//返回多条查询数据
		public function search($sql){
			$result=mysql_query($sql,$this->conn);
			if(mysql_num_rows($result)==0){
				return "查询失败";
			}else{				
				$re=array();
				while($a=mysql_fetch_assoc($result)){
					$re[]=$a;
				}
				return $re;
			}		
		}

// 插入，删除
		 function ins_del($sql){
			$result=mysql_query($sql,$this->conn);
			if(mysql_affected_rows()==0){	
				return "操作失败";
			}
			return true;
		}

//获取上次插入信息的ID值 
		public function insert($sql){
			$result=mysql_query($sql,$this->conn);
			if($result===false){
				return false;
			}
			return mysql_insert_id($this->conn);	
		}


		
// 返回SQL影响的行数
		public function affect_num($sql){
			$result=mysql_query($sql,$this->conn);
			if($result===false){
				return false;
			}
			return mysql_affected_rows($this->conn);			
		}
		

 		
//关闭数据库 
		public function __destruct(){
			mysql_close($this->conn);
		}

// 返回错误信息
		public function get_error(){
			return mysql_error($this->conn);
		}
	}

	
/*	$p1 = new MysqlClass();

	echo "<pre>";
// 	print_r( $p1 -> find("select * from users"));
	print_r($p1 -> select("select * from users;"));
	echo "</pre><br>";*/



?>