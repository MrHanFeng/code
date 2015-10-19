<?php /* Smarty version Smarty-3.1.6, created on 2015-10-19 22:09:30
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Goods\showlist_del.html" */ ?>
<?php /*%%SmartyHeaderCode:92755624a52bb3c1c3-14592145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37f712cd3e150ea90aff86061a10b7e11360a15d' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Goods\\showlist_del.html',
      1 => 1445263769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92755624a52bb3c1c3-14592145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624a52bbd08e',
  'variables' => 
  array (
    'brand_info' => 0,
    'info' => 0,
    'v' => 0,
    'cate_info' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624a52bbd08e')) {function content_5624a52bbd08e($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>商品回收站</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品回收站</span>

            </span>
        </div>
        <div></div>
        <!--<div class="div_search">
            <span>
                <form action="<?php echo @__SELF__;?>
" method="get">
                    品牌<select name="brand_s" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['brand_info']->value),$_smarty_tpl);?>

                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>-->
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>重量</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>分类</td>
                        <td>创建时间</td>
                        <td>上次操作</td>
                        <td align="center">操作</td>
                    </tr>
            <?php if ($_smarty_tpl->tpl_vars['info']->value!=null){?>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</td>
                        <td><a href="<?php echo @__SELF__;?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_weight'];?>
</td>
                        <td><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" height="60" width="60"></td>
                        <td><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" height="40" width="40"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['brand_info']->value[$_smarty_tpl->tpl_vars['v']->value['goods_brand_id']];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cate_info']->value[$_smarty_tpl->tpl_vars['v']->value['goods_category_id']];?>
</td>

                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['goods_create_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['goods_last_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <td>
                            <a href="<?php echo @__MODULE__;?>
/Goods/goods_renew/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">恢复<br></a>
                        </td>
                    </tr>
                <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                           <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
            <?php }else{ ?>
                    <tr>
                        <td colspan="12"> <h1>抱歉，暂无信息</h1> </td>
                    </tr>

            <?php }?>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>