<?php /* Smarty version Smarty-3.1.6, created on 2015-10-18 16:45:03
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Goods\brand_add.html" */ ?>
<?php /*%%SmartyHeaderCode:2483056235b6a862263-22961161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e4398fc07430bca54c07aac64945592c52c6cfa' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Goods\\brand_add.html',
      1 => 1445157901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2483056235b6a862263-22961161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56235b6a8b047',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56235b6a8b047')) {function content_56235b6a8b047($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                    <td><input type="text" name="brand_name" /></td>
                </tr>

                <tr>
                    <td>品牌官网</td>
                    <td><input type="text" name="brand_url" /></td>
                </tr>
                <tr>
                    <td>品牌LOGO</td>
                    <td><input type="file" name="brand_img" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="brand_desc"></textarea>
                    </td>
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