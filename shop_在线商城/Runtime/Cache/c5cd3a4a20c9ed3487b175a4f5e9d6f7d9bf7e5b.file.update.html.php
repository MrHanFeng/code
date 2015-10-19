<?php /* Smarty version Smarty-3.1.6, created on 2015-10-18 20:24:26
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Goods\update.html" */ ?>
<?php /*%%SmartyHeaderCode:985656230c51871168-23430531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5cd3a4a20c9ed3487b175a4f5e9d6f7d9bf7e5b' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Goods\\update.html',
      1 => 1445171065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '985656230c51871168-23430531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56230c5190d58',
  'variables' => 
  array (
    'info' => 0,
    'cate_info' => 0,
    'goods_category_id' => 0,
    'brand_info' => 0,
    'goods_brand_id' => 0,
    'goods_pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56230c5190d58')) {function content_56230c5190d58($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Goods/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_name'];?>
" /></td>
                </tr>
                <tr>
                    <td>商品库存</td>
                    <td>
                        <input type="text" name="goods_number" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_number'];?>
" />
                    </td>
                </tr>
                <tr>
                    <td>商品重量</td>
                    <td>
                        <input type="text" name="goods_weight"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_weight'];?>
"/>
                    </td>
                </tr>
                <tr>
                    <td>商品分类</td>
                    <td>
                        <select name="goods_category_id">
                            <option value="0">请选择</option>   
                             <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cate_info']->value,'selected'=>$_smarty_tpl->tpl_vars['goods_category_id']->value),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品品牌</td>
                    <td>
                        <select name="goods_brand_id">
                            <option value="0">请选择</option>                
                             <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['brand_info']->value,'selected'=>$_smarty_tpl->tpl_vars['goods_brand_id']->value),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_price'];?>
" /></td>
                </tr>
                <tr>
                    <td>图片预览</td>
                    <td>
                        <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['goods_pic']->value;?>
" alt="" height="60" width="60">
                        <input type="checkbox" name="del_pic">删除
                    </td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="goods_image" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_imgage'];?>
" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="goods_introduce"><?php echo $_smarty_tpl->tpl_vars['info']->value['goods_introduce'];?>
</textarea>
                    </td>
                </tr>
                
                <tr>
                    <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_id'];?>
" />
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>