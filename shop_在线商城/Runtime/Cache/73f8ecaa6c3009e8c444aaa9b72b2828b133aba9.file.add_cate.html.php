<?php /* Smarty version Smarty-3.1.6, created on 2015-08-17 09:11:10
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Goods\add_cate.html" */ ?>
<?php /*%%SmartyHeaderCode:2049255d134ae5f4ad9-95954279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73f8ecaa6c3009e8c444aaa9b72b2828b133aba9' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Goods\\add_cate.html',
      1 => 1438264879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2049255d134ae5f4ad9-95954279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat_name' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55d134ae65656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d134ae65656')) {function content_55d134ae65656($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加分类</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">

    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加分类信息</span>
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
                <th>现有分类</th>
                <tr>
                    <td>
                        <b>名称:</b>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat_name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <a href="<?php echo @__CONTROLLER__;?>
/del_cate/cate_id/<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" title="点击删除" onclick="return confirm('确定要删除？');"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
|</a> 
                        <?php } ?>
                    </td>

                    
                </tr>
               
                <th>添加分类</th>
                <tr>
                    <td>商品分类名称:</td>
                </tr>
                <tr>
                    <td><input type="text" name="cat_name" /></td>
                    
                    
                </tr>
                
                <tr>
                    <td colspan="1" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>