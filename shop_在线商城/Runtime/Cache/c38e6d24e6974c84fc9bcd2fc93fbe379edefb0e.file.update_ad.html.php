<?php /* Smarty version Smarty-3.1.6, created on 2015-10-19 22:40:30
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Advert\update_ad.html" */ ?>
<?php /*%%SmartyHeaderCode:309195624ff59480b85-54364361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c38e6d24e6974c84fc9bcd2fc93fbe379edefb0e' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Advert\\update_ad.html',
      1 => 1445265628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309195624ff59480b85-54364361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624ff594caf1',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624ff594caf1')) {function content_5624ff594caf1($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改广告</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：广告管理-》修改广告信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Advert/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>广告名称</td>
                    <td><input type="text" name="ad_name"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ad_name'];?>
"/></td>
                </tr>
                <tr>
                    <td>广告位置</td>
                    <td><input type="text" name="ad_position" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ad_position'];?>
"/></td>
                </tr>
                <tr>
                    <td>图片预览</td>
                    <td>
                        <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['info']->value['ad_small_img'];?>
" alt="" height="60" width="60">
                        <input type="checkbox" name="del_pic">删除
                    </td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="ad_img" /></td>
                </tr>
                <tr>
                    <td>图片建议大小</td>
                    <td><input type="text" name="ad_px" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ad_px'];?>
"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>