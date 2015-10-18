<?php /* Smarty version Smarty-3.1.6, created on 2015-10-17 22:20:39
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Goods\gwc1.html" */ ?>
<?php /*%%SmartyHeaderCode:1653562257d304ef47-17490267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60fca5f283945a4ccbd7ec599a8c674e630a12b' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Goods\\gwc1.html',
      1 => 1445091633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1653562257d304ef47-17490267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562257d30992d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562257d30992d')) {function content_562257d30992d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 


        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 购物流程 
            </div>
        </div>
        <div class="blank"></div>

        <div class="blank"></div>
        <div class="block">
            <div class="flowBox">
                <h6><span>商品列表</span></h6>
                <form id="formCart">
                    <table cellpadding="5" cellspacing="1">
                        <tbody><tr>
                                <th>商品名称</th>
                                <th>属性</th>
                                <th>市场价</th>
                                <th>本店价</th>
                                <th>购买数量</th>
                                <th>小计</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td align="center">
                                    <a href="#" target="_blank"><img style="width: 80px; height: 80px;" src="<?php echo @IMG_URL;?>
24_thumb_G_1241971981429.jpg" title="P806" /></a><br />
                                    <a href="#" target="_blank" class="f6">P806</a>
                                </td>
                                <td>颜色:灰色 <br />
                                </td>
                                <td align="right">￥2400.00元</td>
                                <td align="right">￥2000.00元</td>
                                <td align="right">
                                    <input name="goods_number[43]" id="goods_number_43" value="1" size="4" class="inputBg" style="text-align: center;" onkeydown="showdiv(this)" type="text" />
                                </td>
                                <td align="right">￥2000.00元</td>
                                <td align="center">
                                    <a href="#" class="f6">删除</a>
                                </td>
                            </tr>
                        </tbody></table>
                    <table cellpadding="5" cellspacing="1">
                        <tbody><tr>
                                <td>
                                    购物金额小计 ￥2000.00元，比市场价 ￥2400.00元 节省了 ￥400.00元 (17%)              </td>
                                <td align="right">
                                    <input value="清空购物车" class="bnt_blue_1"  type="button" />
                                    <input name="submit" class="bnt_blue_1" value="更新购物车" type="submit" />
                                </td>
                            </tr>
                        </tbody></table>
                    <input name="step" value="update_cart" type="hidden" />
                </form>
                <table cellpadding="5" cellspacing="0" width="99%">
                    <tbody><tr>
                            <td><a href="<?php echo @__MODULE__;?>
/Index/index"><img src="<?php echo @IMG_URL;?>
continue.gif" alt="continue" /></a></td>
                            <td align="right"><a href="<?php echo @__CONTROLLER__;?>
/gwc2"><img src="<?php echo @IMG_URL;?>
checkout.gif" alt="checkout" /></a></td>
                        </tr>
                    </tbody></table>
            </div>
            <div class="blank"></div>
            <div class="blank5"></div>
        </div>
        
<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>