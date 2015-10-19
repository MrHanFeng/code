<?php /* Smarty version Smarty-3.1.6, created on 2015-10-18 20:00:37
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Goods\brand_update.html" */ ?>
<?php /*%%SmartyHeaderCode:246715623693bd87d27-36483560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b89aae12130ad398c70c027bdf0aece1b88dc0' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Goods\\brand_update.html',
      1 => 1445169636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246715623693bd87d27-36483560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5623693bdce23',
  'variables' => 
  array (
    'brand_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5623693bdce23')) {function content_5623693bdce23($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加品牌</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加品牌信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Goods/brand_info">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>品牌名称</td>
                    <td><input type="text" name="brand_name" value="<?php echo $_smarty_tpl->tpl_vars['brand_info']->value['brand_name'];?>
"/></td>
                </tr>

                <tr>
                    <td>品牌官网</td>
                    <td><input type="text" name="brand_url" value="<?php echo $_smarty_tpl->tpl_vars['brand_info']->value['brand_url'];?>
"/></td>
                </tr>
                <tr>
                    <td>预览</td>
                    <td>

                        <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['brand_info']->value['brand_small_logo'];?>
" alt="" width="80" height="40">
                        <input type="checkbox" name="del_pic">删除图片
                    </td>
                </tr>
                <tr>
                    <td>更换LOGO</td>
                    <td>
                        <input type="file" name="brand_img" />(请上传非gif格式图片)
                    </td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="brand_desc"><?php echo $_smarty_tpl->tpl_vars['brand_info']->value['brand_desc'];?>
</textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="hidden" name="brand_id" value="<?php echo $_smarty_tpl->tpl_vars['brand_info']->value['brand_id'];?>
" />
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>