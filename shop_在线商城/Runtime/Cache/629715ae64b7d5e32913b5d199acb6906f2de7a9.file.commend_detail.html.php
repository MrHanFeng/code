<?php /* Smarty version Smarty-3.1.6, created on 2015-10-18 22:13:53
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\User\comment_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:176085623a3585328e2-60710833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '629715ae64b7d5e32913b5d199acb6906f2de7a9' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\User\\comment_detail.html',
      1 => 1445177627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176085623a3585328e2-60710833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5623a3585ced1',
  'variables' => 
  array (
    'comment_info' => 0,
    'v' => 0,
    'user' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5623a3585ced1')) {function content_5623a3585ced1($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：会员管理-》评论列表</span>

            </span>
        </div>
        <div></div>

        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>评论者</td>
                        <td>内容</td>
                        <td>IP地址</td>
                        <td>评论时间</td>
                        <td>审核状态</td>
                        <td align="center">操作</td>
                    </tr>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comment_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cm_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['$v.cm_user_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cm_content'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cm_ip'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['cm_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['cm_status']==1){?>
                            <td>已审核</td>
                        <?php }else{ ?>
                            <td>未审核</td>
                        <?php }?>

                         <?php if ($_smarty_tpl->tpl_vars['v']->value['cm_status']==1){?>
                            <td><a href="<?php echo @__CONTROLLER__;?>
/commend_change?flag=0/cm_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['cm_id'];?>
">取消审核</a></td>
                         <?php }else{ ?>
                            <td><a href="<?php echo @__CONTROLLER__;?>
/commend_change?flag=1&cm_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cm_id'];?>
">通过审核</a></td>
                        <?php }?>


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