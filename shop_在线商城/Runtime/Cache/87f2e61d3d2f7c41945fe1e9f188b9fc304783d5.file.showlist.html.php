<?php /* Smarty version Smarty-3.1.6, created on 2015-10-19 22:33:57
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Advert\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:45215624f99e3f08a9-38474030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87f2e61d3d2f7c41945fe1e9f188b9fc304783d5' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Advert\\showlist.html',
      1 => 1445265235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45215624f99e3f08a9-38474030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624f99e47174',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624f99e47174')) {function content_5624f99e47174($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>广告列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>

        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：广告管理-》广告列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add_ad">【添加广告】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>广告名称</td>
                        <td>前台所在位置</td>
                        <td>缩略图</td>
                        <td>建议大小</td>
                        <td align="center">操作</td>
                    </tr>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ad_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ad_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ad_position'];?>
</td>
                        <td><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['ad_small_img'];?>
" height="40" width="40"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ad_px'];?>
</td>
                        <td>
                            <a href="<?php echo @__MODULE__;?>
/Advert/update_ad/ad_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ad_id'];?>
">修改<br></a>
                            <a href='<?php echo @__MODULE__;?>
/Advert/del_ad?ad_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ad_id'];?>
' onclick="return confirm('确定要删除？');"> 删除 </a>
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