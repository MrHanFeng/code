<?php /* Smarty version Smarty-3.1.6, created on 2015-08-13 19:13:16
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Goods\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:950355cc7bcccc4d73-44417918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f16d1580d452e50001567d8da4e12b7a5506cdf5' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Goods\\showlist.html',
      1 => 1438274634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '950355cc7bcccc4d73-44417918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods_price' => 0,
    'v' => 0,
    'goods_hot' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55cc7bcce10e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cc7bcce10e3')) {function content_55cc7bcce10e3($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> <a href="#">手机类型</a> <code>&gt;</code> <a href="#">GSM手机</a> 
            </div>
        </div>
        <div class="blank"></div>

        <div class="block box">

        <div class="block clearfix">
            <div class="AreaL">
                <h3><span>商品分类</span></h3> 
                <div id="category_tree" class="box_1">
                    <dl>
                        <dt><a href="#">CDMA手机</a></dt>
                        <dd>       </dd>
                    </dl>
                    <dl>
                        <dt><a href="#">GSM手机</a></dt>
                        <dd>       </dd>
                    </dl>
                    <dl>
                        <dt><a href="#">3G手机</a></dt>
                        <dd>       </dd>
                    </dl>
                    <dl>
                        <dt><a href="#">双模手机</a></dt>
                        <dd>       </dd>
                    </dl>

                </div>
                <div class="blank"></div><div style="display: block;" class="box" id="history_div">
                    <h3><span>浏览历史</span></h3>
                    <div class="box_1">

                        <div class="boxCenterList clearfix" id="history_list">
                            <ul class="clearfix">
                                <li class="goodsimg">
                                    <a href="#" target="_blank">
                                        <img src="<?php echo @IMG_URL;?>
8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="B_blue" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" title="飞利浦9@9v">飞利浦9@9v</a><br />
                                    本店售价：<font class="f1">￥399元</font><br />
                                </li>
                            </ul>
                            <ul class="clearfix">
                                <li class="goodsimg">
                                    <a href="#" target="_blank">
                                        <img src="<?php echo @IMG_URL;?>
9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="B_blue" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" title="诺基亚E66">诺基亚E66</a><br />
                                    本店售价：<font class="f1">￥2298元</font><br />
                                </li>
                            </ul>
                            <ul id="clear_history">
                                <a onclick="clear_history()">[清空]</a>
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="blank5"></div>

            </div>


            <div class="AreaR">

                <div class="box">
                    <div class="box_1">
                        <h3><span>商品筛选</span></h3>
                        <div class="screeBox">
                            <strong>品牌：</strong>
                            <span>全部</span>
                            <a href="#">诺基亚</a>&nbsp;
                            <a href="#">摩托罗拉</a>&nbsp;
                            <a href="#">多普达</a>&nbsp;
                            <a href="#">飞利浦</a>&nbsp;
                            <a href="#">夏新</a>&nbsp;
                            <a href="#">三星</a>&nbsp;
                            <a href="#">索爱</a>&nbsp;
                            <a href="#">联想</a>&nbsp;
                            <a href="#">金立</a>&nbsp;
                        </div>
                        <div class="screeBox">
                            <strong>价格：</strong>
                            <span>全部</span>
                            <a href="#">200&nbsp;-&nbsp;1700</a>&nbsp;
                            <a href="#">1700&nbsp;-&nbsp;3200</a>&nbsp;
                            <a href="#">4700&nbsp;-&nbsp;6200</a>&nbsp;
                        </div>
                        <div class="screeBox">
                            <strong>颜色 :</strong>
                            <span>全部</span>
                            <a href="#">灰色</a>&nbsp;
                            <a href="#">白色</a>&nbsp;
                            <a href="#">金色</a>&nbsp;
                            <a href="#">黑色</a>&nbsp;
                        </div>
                        <div class="screeBox">
                            <strong>屏幕大小 :</strong>
                            <span>全部</span>
                            <a href="#">1.75英寸</a>&nbsp;
                            <a href="#">2.0英寸</a>&nbsp;
                            <a href="#">2.2英寸</a>&nbsp;
                            <a href="#">2.6英寸</a>&nbsp;
                            <a href="#">2.8英寸</a>&nbsp;
                        </div>
                        <div class="screeBox">
                            <strong>手机制式 :</strong>
                            <span>全部</span>
                            <a href="#">CDMA</a>&nbsp;
                            <a href="#">GSM,850,900,1800,1900</a>&nbsp;
                            <a href="#">GSM,900,1800,1900,2100</a>&nbsp;
                        </div>
                        <div class="screeBox">
                            <strong>外观样式 :</strong>
                            <span>全部</span>
                            <a href="#">滑盖</a>&nbsp;
                            <a href="#">直板</a>&nbsp;
                        </div>
                    </div>
                </div>
                <div class="blank"></div>


                <div class="itemTit" id="itemBest">

                    <div class="tit">精品推荐</div>
                </div>
                <div id="show_best_area" class="clearfix">
                     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_price']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <div class="goodsItem">
                 
                        <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
" class="goodsimg"></a><br />
                        <p class="f1"><a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></p>


                        <font class="market">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price']+200;?>
元</font><br />

                        <font class="f1">
                            ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
元                     </font>
                    </div>
                    <?php } ?>


                </div>
                <div class="blank"></div>
                <div class="box">
                    <div class="box_1">
                        <h3>
                            <span>商品列表</span>
                            <form method="GET" class="sort" name="listform">
                                显示方式：
                                <a href="#"><img src="<?php echo @IMG_URL;?>
display_mode_list.gif" alt=""></a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
display_mode_grid_act.gif" alt=""></a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
display_mode_text.gif" alt=""></a>&nbsp;&nbsp;

                                <a href="#"><img src="<?php echo @IMG_URL;?>
goods_id_DESC.gif" alt="按上架时间排序"></a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
shop_price_default.gif" alt="按价格排序"></a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
last_update_default.gif" alt="按更新时间排序"></a>
                                <input name="category" value="3" type="hidden" />
                                <input name="display" value="grid" id="display" type="hidden" />
                                <input name="brand" value="0" type="hidden" />
                                <input name="price_min" value="0" type="hidden" />
                                <input name="price_max" value="0" type="hidden" />
                                <input name="filter_attr" value="0" type="hidden" />
                                <input name="page" value="1" type="hidden" />
                                <input name="sort" value="goods_id" type="hidden" />
                                <input name="order" value="DESC" type="hidden" />
                            </form>
                        </h3>
                        <form name="compareForm" action="compare.php" method="post" onsubmit="return compareGoods(this);">
                            <div class="clearfix goodsBox" style="border: medium none; padding: 11px 0pt 10px 5px;">
                               
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_hot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>

                                <div class="goodsItem">
                                    <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
" class="goodsimg"></a><br />
                                    <p><a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></p>
                                    <font class="market_s">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price']+200;?>
元</font><br />
                                    <font class="shop_s">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
元</font><br />
                                    <a href="#"><img src="<?php echo @IMG_URL;?>
goumai.gif"></a> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#"><img src="<?php echo @IMG_URL;?>
shoucang.gif"></a>
                                </div>
                                <?php } ?>

                            </div>
                        </form>

                    </div>
                </div>
                <div class="blank5"></div>

                           <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

           

            </div>  

        </div>

        </div>

        <div class="blank"></div>
        <div class="block">
            <a href="#" target="_blank" title="YONGDA商城"><img alt="YONGDA商城" src="<?php echo @IMG_URL;?>
di.jpg"></a>
            <div class="blank"></div>
        </div>
        <div class="block">
            <div class="box">
                <div class="helpTitBg" style="clear: both;">
                    <dl>
                        <dt><a href="#" title="新手上路 ">新手上路 </a></dt>
                        <dd><a href="#" title="售后流程">售后流程</a></dd>
                        <dd><a href="#" title="购物流程">购物流程</a></dd>
                        <dd><a href="#" title="订购方式">订购方式</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="手机常识 ">手机常识 </a></dt>
                        <dd><a href="#" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                        <dd><a href="#" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                        <dd><a href="#" title="如何享受全国联保">如何享受全国联保</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="配送与支付 ">配送与支付 </a></dt>
                        <dd><a href="#" title="货到付款区域">货到付款区域</a></dd>
                        <dd><a href="#" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                        <dd><a href="#" title="支付方式说明">支付方式说明</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="会员中心">会员中心</a></dt>
                        <dd><a href="#" title="资金管理">资金管理</a></dd>
                        <dd><a href="#" title="我的收藏">我的收藏</a></dd>
                        <dd><a href="#" title="我的订单">我的订单</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="服务保证 ">服务保证 </a></dt>
                        <dd><a href="#" title="退换货原则">退换货原则</a></dd>
                        <dd><a href="#" title="售后服务保证 ">售后服务保证</a></dd>
                        <dd><a href="#" title="产品质量保证 ">产品质量保证</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="联系我们 ">联系我们 </a></dt>
                        <dd><a href="#" title="网站故障报告">网站故障报告</a></dd>
                        <dd><a href="#" title="选机咨询 ">选机咨询</a></dd>
                        <dd><a href="#" title="投诉与建议 ">投诉与建议</a></dd>
                    </dl>
                </div>
            </div>


        </div>
        <div class="blank"></div>
        <div id="bottomNav" class="box block">
            <div class="box_1">
                <div class="links clearfix"> 
                    <a href="#" target="_blank" title="YONGDA商城"><img src="<?php echo @IMG_URL;?>
category.htm" alt="YONGDA商城" border="0"></a>


                    [<a href="#" target="_blank" title="">yongda商城</a>]
                </div>
            </div>
        </div>
        <div class="blank"></div>
        <div id="bottomNav" class="box block">
            <div class="bNavList clearfix">
                <a href="#">免责条款</a>
                |
                <a href="#">隐私保护</a>
                |
                <a href="#">咨询热点</a>
                |
                <a href="#">联系我们</a>
                |
                <a href="#">公司简介</a>
                |
                <a href="#">批发方案</a>
                |
                <a href="#">配送方式</a>

            </div>
        </div>

        <div id="footer">
            <div class="text">
                © 2005-2012 YONGDA 版权所有，并保留所有权利。<br />
            </div>
        </div>
        <div style="display: none; top: 200px;" id="compareBox" align="center">
            <ul id="compareList"></ul>
            <input value="" type="button" />
        </div>
    </body>
</html>
<?php }} ?>