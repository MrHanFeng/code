<?php /* Smarty version Smarty-3.1.6, created on 2015-09-05 20:10:35
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Auth\update.html" */ ?>
<?php /*%%SmartyHeaderCode:527255eadbbb0f33e7-54921443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf5e7eb8c500b35cc523a64dd9f4154379cb78f' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Auth\\update.html',
      1 => 1438266586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '527255eadbbb0f33e7-54921443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth_info' => 0,
    'auth_pid_arr' => 0,
    'auth_pid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55eadbbb24eeb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55eadbbb24eeb')) {function content_55eadbbb24eeb($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
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
                <span style="float:left">当前位置是：权限管理-》修改权限信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Auth/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>权限id</td>
                    <td><input type="hidden" name="auth_id" value="<?php echo $_smarty_tpl->tpl_vars['auth_info']->value['auth_id'];?>
"/>
                    <?php echo $_smarty_tpl->tpl_vars['auth_info']->value['auth_id'];?>
</td>
                </tr>
                <tr>
                    <td>权限名称</td>
                    <td><input type="text" name="auth_name" value="<?php echo $_smarty_tpl->tpl_vars['auth_info']->value['auth_name'];?>
"/></td>
                </tr>
                <tr>
                    <td>父级权限</td>
                    <td>
                        <select name='auth_pid'>
                            <option value='0'>请选择</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['auth_pid_arr']->value,'selected'=>$_smarty_tpl->tpl_vars['auth_pid']->value),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>权限控制器</td>
                    <td><input type="text" name="auth_c" value="<?php echo $_smarty_tpl->tpl_vars['auth_info']->value['auth_c'];?>
"/></td>
                </tr>
                <tr>
                    <td>权限操作方法</td>
                    <td><input type="text" name="auth_a" value="<?php echo $_smarty_tpl->tpl_vars['auth_info']->value['auth_a'];?>
"/></td>
                </tr>

                
                <tr>
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