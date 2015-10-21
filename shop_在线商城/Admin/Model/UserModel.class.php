<?php 
	namespace Admin\Model;
	use Think\Model;

	class UserModel extends Model{

		// 是否批处理验证
		protected $patchValidate    =   true;


		// 实现表单项目验证
		// 通过重写父类属性_validate实现表单验证
    	protected $_validate     =   array(
    		array('username','require','用户名必须填写'),
    		array('password','require','密码必须填写'),
    		array('password2','require','确认密码密码必须填写'),
    		array('password2','password','两次密码输入不相同','0','confirm'),	//比较应用
    		array('user_email','email','请输入正确的Email'),
    		// array('user_qq','/^[1-9]\d{4,9}$/','请输入5-10位的QQ数字号码'),		//正则应用
    		// array('user_tel','/^[1-9]\d{5,10}$/','请输入11手机号码'),
    		// array('user_xuli','2,3,4','请选择一个学历',0,'in'),					//选择范围内
    		// array('user_hobby','check_hobby',"爱好必须两项以上",1,'callback'),	//调用函数验证
    		);  

    	// 自定义方法验证上边爱好信息
    	function check_hobby($name){
    		if(count($name)<2){
    			return false;
    		}else{
    			return true;
    		}
    	}

		/**
		 * 查询用户信息
		 * @param id 0表示全部信息，否则查询特定id信息
		 * @return bool
		 * 		成功返回数据
		 * 		失败返回false
		 */
		function user_list_fn($id=0){
			$user=M('User');
			if($id===0){
				$re=$user->where("user_status!='delete'")->select();
//				echo $user->getLastSql();
			}else{
				$re=$user->find($id);
			}
			if($re){
				return $re;
			}else{
				return false;
			}
		}

		/**
		 * 查询某会员的激活状态与全部状态
		 * @param $id ，会员ID
		 * @return array， 二维数组，$arr['cur_idy']当前激活状态；$arr['all_idy']所有激活状态
		 */
		function user_identify($id){
			$user=M('User');
			$arr=array();
			$arr['cur_idy']=$user->field('identify')->find($id);
//			$arr['all_idy']
			$aa=$user->field('identify')->group('identify')->select();
			foreach($aa as $v){
				if($v['identify']){
					$arr['all_idy'][$v['identify']]='已激活';
				}else{
					$arr['all_idy'][$v['identify']]='未激活';
				}
			}
//			show($arr['all_idy']);
//			exit;
			return $arr;
		}

	}

 ?>