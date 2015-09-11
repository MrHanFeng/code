<?php 
	class SetPdo{
		private $host;
		private $dbname;
		private $username;
		private $pwd;
		private $encode;
		private $pdo;

		function __CONSTRUCT($dbname,$username,$pwd,$encode="utf8"){
			try{
				$this->pdo = new PDO("mysql:host=localhost;dbname={$dbname}",$username,$pwd,array(PDO::ATTR_AUTOCOMMIT=>true,PDO::ATTR_PERSISTENT=>1));
				$this->pdo->query("set names {$encode}");
				echo "数据库链接成功<br>";
			}catch(PDOException $e){
				echo "数据库链接失败<br>".$e->getMessage();
			}
			
		}

		// 插入,返回插入的ID值
		function insert($sql){
			try{
				$re = $this->pdo->exec($sql);//返回收影响函数
				if( $re > 0){
					return  $this->pdo->lastInsertId();
				}else{
					throw new PDOException("执行失败<br>");
				}
			}catch(PDOException $e){
				echo "插入错误".$e->getMessage();
			}
		}

		// 插入，预处理
		function ins($name,$sid,$school){
			// 正常函数?区别在于SQL的执行次数，预处理SQL值执行一次，剩下的数据往里填充，数据实在和数据库直接交互
/*			var_dump("insert into t (name,sid,school) values ($name,$sid,$school)");
			$a = $this->pdo->exec("insert into t (name,sid,school) values ('$name',$sid,'$school')");
			var_dump($a);
*/

		// 预处理
			$re = $this->pdo->prepare('insert into t (name,sid,school) values (:name,:sid,:school);');
			$a = $re->execute(array("name"=>$name,"sid"=>$sid,"school"=>$school));


			if($a){
				echo $this->pdo->lastInsertId();
			}
			else{
				echo "插入失败<br>";
			}
			


		}


		// 删除功能 返回true false
		function delete($sql){
			try{
				$re = $this->pdo->exec($sql);//返回收影响函数
				if( $re > 0){
					return  true;
				}else{
					throw new PDOException("执行失败<br>");
				}
			}catch(PDOException $e){
				echo "删除错误".$e->getMessage();
				return false;
			}
		}


		//修改功能，事务处理 
		function update($num){
			try{

				$this->pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);//先关闭自动提交

				$this->pdo->beginTransaction();		//开启事务

				$re = $this->pdo->exec("update s set age=age+{$num} where id=11");
				if($re > 0){
					echo "张三练功成功，+{$num}岁<br>";
				}else{
					throw new PDOException('张三年龄增加失败<br>');
				}

				$re = $this->pdo->exec("update s set age=age-{$num} where id=22");
				if($re > 0){
					echo "李四练功成功，-{$num}岁<br>";
				}else{
					throw  new PDOException('李四年龄增加失败<br>');
				}
				$this->pdo->commit();
				return true;
			}catch(PDOException $e){
				echo "更新失败，操作错误".$e->getMessage();
				$this->pdo->rollback();
				return false;
			}
			$this->pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,1);//开启自动提交
		}


		// 查询功能，预处理
		function find($table,$id){
			$re = $this->pdo->query("select * from {$table} where id = {$id}");
			$re ->setFetchMode(PDO::FETCH_ASSOC);//设置fetch模式，为索引数组
			$rse = $re->fetch();
		}



	}

	$pdo = new SetPdo("shixun_test","root","root","utf8");
	// $pdo->insert("insert into t( name , sid ) values ('test','11'),('test2','22')");
	// $pdo->delete("delete from t where id=32");
	// $pdo->update(20);
	// $pdo ->find("t","2");
	// $pdo ->search();
	$pdo->ins("hahaha",111,"zb");

 ?>