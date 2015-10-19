<?php /* Smarty version Smarty-3.1.6, created on 2015-10-18 22:21:09
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\User\Comment.html" */ ?>
<?php /*%%SmartyHeaderCode:219905623aad5f3f8a7-16947951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd46ddcecb9665f3ad9a50e10f444d68bb05fb6d3' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\User\\Comment.html',
      1 => 1445177961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219905623aad5f3f8a7-16947951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brand_info' => 0,
    'goods_info' => 0,
    'v' => 0,
    'cate_info' => 0,
    'cm_num' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5623aad608604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5623aad608604')) {function content_5623aad608604($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>用户评论</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>

        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：会员管理-》用户评论</span>

            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="<?php echo @__SELF__;?>
" method="get">
                    品牌
                     <select name="brand_s" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['brand_info']->value),$_smarty_tpl);?>

                     </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>分类</td>
                        <td>评论数量</td>
                        <td align="center">操作</td>
                    </tr>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

                        <td><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" height="40" width="40"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['brand_info']->value[$_smarty_tpl->tpl_vars['v']->value['goods_brand_id']];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cate_info']->value[$_smarty_tpl->tpl_vars['v']->value['goods_category_id']];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['cm_num']->value[$_smarty_tpl->tpl_vars['v']->value['goods_id']]!=0){?>
                              <td><?php echo $_smarty_tpl->tpl_vars['cm_num']->value[$_smarty_tpl->tpl_vars['v']->value['goods_id']];?>
条</td>
                        <?php }else{ ?>
                             <td>0条</td>
                        <?php }?>
                        <td>
                            <a href="<?php echo @__CONTROLLER__;?>
/comment_detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">查看</a>
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