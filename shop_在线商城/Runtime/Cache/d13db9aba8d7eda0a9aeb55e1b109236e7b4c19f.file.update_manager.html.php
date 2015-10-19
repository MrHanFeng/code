<?php /* Smarty version Smarty-3.1.6, created on 2015-10-18 20:33:09
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Index\update_manager.html" */ ?>
<?php /*%%SmartyHeaderCode:1995756239185482cf7-29799376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd13db9aba8d7eda0a9aeb55e1b109236e7b4c19f' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Index\\update_manager.html',
      1 => 1438265117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1995756239185482cf7-29799376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager_info' => 0,
    'role_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5623918557cd3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5623918557cd3')) {function content_5623918557cd3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <span style="float:left">当前位置是：权限管理-》修改密码信息</span>

            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>账户名</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['manager_info']->value['mg_name'];?>
</td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="mg_pwd" </td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="mg_pwd2" </td>
                </tr>
                <tr>
                    <td>权限角色</td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['role_name']->value;?>

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