<?php
return array(
		//'配置项'=>'配置值'

	// 让页面显示追中日志信息
	'SHOW_PAGE_TRACE' => true,


	/*  url模式设置  */
	'URL_MODEL' => 1,
	 // 默认false 表示URL区分大小写 true则表示不区分大小写
	'URL_CASE_INSENSITIVE' =>false,


	/*   sql数据库设置   */
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  'localhost', // 服务器地址
	'DB_NAME'               =>  'shop',          // 数据库名
	'DB_USER'               =>  'root',    		 // 用户名
	'DB_PWD'                =>  'root',          // 密码
	'DB_PORT'               =>  '3306',      	 // 端口
	'DB_PREFIX'             =>  'sw_',    		 // 数据库表前缀
	'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
	'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存,系统上线时注意，有缓存不用每次执行，避免浪费SQL资源
	'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8 



/*	'TMPL_L_DELIM'          =>  '{',// 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}',// 模板引擎普通标签结束标记

	'TAGLIB_BEGIN'          =>  '<',  // 标签库标签开始标记
	 'TAGLIB_END'            =>  '>',  // 标签库标签结束标记*/



	//修改模板引擎为smarty
	'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 默认模板引擎 以下设置仅对使用Think模板引擎有效



/*TP官网发送邮件*/
/*	'SMTP_SERVER' =>'smtp.163.com',					//邮件服务器
	'SMTP_PORT' =>'25',								//邮件服务器端口
	'SMTP_USER_EMAIL' =>'18335124662@163.com', 	//SMTP服务器的用户邮箱(一般发件人也得用这个邮箱)
	'SMTP_USER'=>'18335124662@163.com',			//SMTP服务器账户名
	'SMTP_PWD'=>'lfygdtmwnhtllhnk',							//SMTP服务器账户密码
	'SMTP_MAIL_TYPE'=>'HTML',						//发送邮件类型:HTML,TXT(注意都是大写)
	'SMTP_TIME_OUT'=>30,							//超时时间
	'SMTP_AUTH'=>true,		*/						//邮箱验证(一般都要开启)


	// // 配置邮件发送服务器
	'MAIL_HOST' =>'smtp.163.com',//smtp服务器的名称smtp.exmail.qq.com
	'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证renxiaole66@126.com
	'MAIL_USERNAME' =>'18335124662@163.com',//你的邮箱名
	'MAIL_FROM' =>'18335124662@163.com',//发件人地址
	'MAIL_FROMNAME'=>'MR.峰',//发件人姓名
	'MAIL_PASSWORD' =>'lfygdtmwnhtllhnk',//邮箱密码
	'MAIL_CHARSET' =>'utf-8',//设置邮件编码
	'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
);


