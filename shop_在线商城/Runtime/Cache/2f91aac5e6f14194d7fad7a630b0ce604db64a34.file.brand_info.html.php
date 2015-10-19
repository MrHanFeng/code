<?php /* Smarty version Smarty-3.1.6, created on 2015-10-18 17:33:57
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Goods\brand_info.html" */ ?>
<?php /*%%SmartyHeaderCode:3247256231c9195b3b9-13901811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f91aac5e6f14194d7fad7a630b0ce604db64a34' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Goods\\brand_info.html',
      1 => 1445160834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3247256231c9195b3b9-13901811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56231c91aca71',
  'variables' => 
  array (
    'brand_info_find' => 0,
    'brand_info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56231c91aca71')) {function content_56231c91aca71($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>品牌列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》品牌列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Goods/brand_add">【添加品牌】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="<?php echo @__SELF__;?>
" method="get">
                    品牌<select name="brand_s" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['brand_info_find']->value),$_smarty_tpl);?>

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
                        <td>品牌名称</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌描述</td>
                        <td>品牌官网</td>
                        <td align="center">操作</td>
                    </tr>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['brand_id'];?>
</td>
                        <td><a href="<?php echo @__SELF__;?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['brand_name'];?>
</a></td>
                        <td><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['brand_big_logo'];?>
" height="50" width="120"></td>
                        <td><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['brand_small_logo'];?>
" height="40" width="80"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['brand_desc'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['brand_url'];?>
</td>
                        <td><a href="<?php echo @__MODULE__;?>
/Goods/brand_update/brand_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['brand_id'];?>
">修改</a>
                        <a href='<?php echo @__MODULE__;?>
/Goods/brand_delete?brand_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['brand_id'];?>
' onclick="return confirm('确定要删除？');">删除</a></td>
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