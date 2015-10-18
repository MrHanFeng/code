<?php /* Smarty version Smarty-3.1.6, created on 2015-08-17 08:59:51
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Auth\update_manager.html" */ ?>
<?php /*%%SmartyHeaderCode:1619155d13207730613-83595443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e23023f765e44f7a88a396ed7175af1c0c5ffe5a' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Auth\\update_manager.html',
      1 => 1438251167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1619155d13207730613-83595443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager_info' => 0,
    'role_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55d132078fb5f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d132078fb5f')) {function content_55d132078fb5f($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加权限</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：权限管理-》添加管理员信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Auth/manager">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>账户名</td>
                    <td><input type="text" name="mg_name" value="<?php echo $_smarty_tpl->tpl_vars['manager_info']->value['mg_name'];?>
"/></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="mg_pwd" </td>
                </tr>
                <tr>
                    <td>权限角色</td>
                    <td>
                        <select name='mg_role_id'>
                            <option value='0'>请选择</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['role_info']->value,'selected'=>$_smarty_tpl->tpl_vars['manager_info']->value['mg_role_id']),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td><input type="hidden" name="mg_id" value="<?php echo $_smarty_tpl->tpl_vars['manager_info']->value['mg_id'];?>
" /></td>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>
<?php }} ?>