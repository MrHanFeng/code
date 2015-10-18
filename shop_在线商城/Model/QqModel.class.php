<?php 
	namespace Model;
	use Think\Model;

	class QqModel extends Model{
		/* 定义当前模型操作真实的数据表*/
		// protected $trueTableName = 'tencent_qq';

		/*定义表前缀,覆盖config里边的表前缀*/
		protected $tablePrefix = 'tencent_';

	}




 ?>