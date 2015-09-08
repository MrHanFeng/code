<?php
return array(
	//'配置项'=>'配置值'

	//url模式设置
	'URL_MODEL'=> '1',
	//让页面显示日志追踪信息
	'SHOW_PAGE_TRACE'   => true,
    // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_CASE_INSENSITIVE'  =>  false, 



    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'book',      // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'bk_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
   
    //以下字段缓存没有其作用
    //1如果是调试模式就不起作用
    //2 'DB_FIELDS_CACHE' 为false也不起作用
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    //修改模板引擎为smarty
    'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 默认模板引擎 以下设置仅对使用Think模板引擎有效


);