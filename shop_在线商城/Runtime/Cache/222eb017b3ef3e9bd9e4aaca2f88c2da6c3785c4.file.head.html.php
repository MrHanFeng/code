<?php /* Smarty version Smarty-3.1.6, created on 2015-08-29 13:45:36
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:1225755d131eb9d8b60-55455912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '222eb017b3ef3e9bd9e4aaca2f88c2da6c3785c4' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Index\\head.html',
      1 => 1440635236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225755d131eb9d8b60-55455912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55d131ebc7e76',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d131ebc7e76')) {function content_55d131ebc7e76($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="<?php echo @ADMIN_IMG_URL;?>
header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="<?php echo @ADMIN_IMG_URL;?>
header_left.jpg" 
                                   width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>当前用户：<?php echo $_SESSION['mg_username'];?>
 &nbsp;&nbsp; 
                    <a style="color: #fff" href="<?php echo @__MODULE__;?>
/Index/update_manager/mg_id/<?php echo $_SESSION['mg_id'];?>
" target=main>修改口令</a> &nbsp;&nbsp; 
                    <a style="color: #fff" 
                        href="<?php echo @__MODULE__;?>
/Manager/logout" target=_top onclick="return confirm('确定要退出？');">退出系统
                    </a> 
                </td>
                <td align=right width=268><img height=56 
                                               src="<?php echo @ADMIN_IMG_URL;?>
header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>