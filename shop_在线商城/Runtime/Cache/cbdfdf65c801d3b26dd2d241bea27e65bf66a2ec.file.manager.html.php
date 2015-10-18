<?php /* Smarty version Smarty-3.1.6, created on 2015-08-17 08:59:35
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Auth\manager.html" */ ?>
<?php /*%%SmartyHeaderCode:2851055d131f71f2d94-33534681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbdfdf65c801d3b26dd2d241bea27e65bf66a2ec' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Auth\\manager.html',
      1 => 1438249307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2851055d131f71f2d94-33534681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager_info' => 0,
    'v' => 0,
    'role_info' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55d131f7348a7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d131f7348a7')) {function content_55d131f7348a7($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>权限列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：权限管理-》管理员列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Auth/add_manager">【添加管理员】</a>
                </span>
            </span>
        </div>
        <div></div>
        

        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>管理员账户名</td>
                        <td>密码</td>
                        <td>上次登录时间</td>
                        <td>角色</td>
                        <td>操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['manager_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_pwd'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['mg_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['role_info']->value[$_smarty_tpl->tpl_vars['v']->value['mg_role_id']];?>
</td>
                        <td>
                            <a href="<?php echo @__MODULE__;?>
/Auth/update_manager/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
">修改</a>
                            <a href="<?php echo @__MODULE__;?>
/Auth/del_manager/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
" onclick="return confirm('确定要删除？');">删除</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>