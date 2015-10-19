<?php /* Smarty version Smarty-3.1.6, created on 2015-10-19 22:13:06
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Advert\add_ad.html" */ ?>
<?php /*%%SmartyHeaderCode:131025624f9dc8ccef2-16215219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de51ee4288927ab7ae0d3852b54a0c85ac32d5df' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Advert\\add_ad.html',
      1 => 1445263975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131025624f9dc8ccef2-16215219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624f9dc92ab0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624f9dc92ab0')) {function content_5624f9dc92ab0($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加广告</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：广告管理-》添加广告信息</span>
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
                    <td><input type="text" name="ad_name" /></td>
                </tr>
                <tr>
                    <td>广告位置</td>
                    <td><input type="text" name="ad_position" /></td>
                </tr>
                <tr>
                    <td>图片</td>
                    <td><input type="file" name="ad_img" /></td>
                </tr>
                <tr>
                    <td>图片建议大小</td>
                    <td><input type="text" name="ad_px" /></td>
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