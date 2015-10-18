<?php /* Smarty version Smarty-3.1.6, created on 2015-10-17 22:28:40
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1168455cc71faa58853-34537635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db324eea4d7993342f368c33db14af030fcdee9a' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Index\\index.html',
      1 => 1445092120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1168455cc71faa58853-34537635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55cc71fabbfea',
  'variables' => 
  array (
    'goods_hot' => 0,
    'v' => 0,
    'goods_price' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cc71fabbfea')) {function content_55cc71fabbfea($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
            </div>
        </div>
        <div class="blank"></div>
        <div class="block box">

        <div class="block clearfix">

            <div class="AreaL">

                <h3><span>商品分类</span></h3> 
                <div id="category_tree" class="box_1">
                    <dl>
                        <dt><a href="#">手机类型</a></dt>
                        <dd>     
                            <a href="<?php echo @__MODULE__;?>
/Goods/showlist.html">CDMA手机</a>
                            <a href="#">GSM手机</a>
                            <a href="#">3G手机</a>
                            <a href="#">双模手机</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt><a href="#">手机配件</a></dt>
                        <dd>     
                            <a href="#">充电器</a>
                            <a href="#">耳机</a>
                            <a href="#">电池</a>
                            <a href="#">读卡器和内存卡</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt><a href="#">充值卡</a></dt>
                        <dd>     
                            <a href="#">小灵通/固话充值卡</a>
                            <a href="#">移动手机充值卡</a>
                            <a href="#">联通手机充值卡</a>
                        </dd>
                    </dl>

                </div>
                <div class="blank"></div>
                <div class="box">
                    <h3><span>销售排行榜</span></h3> 
                    <div class="box_1">
                        <div class="top10List clearfix">

                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_hot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                            <ul class="clearfix">
                                <img src="<?php echo @IMG_URL;?>
top_<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
.gif" class="iteration">
                                    <li class="topimg">
                                        <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" alt="" class="samllimg"></a>
                                    </li>

                                    <li class="iteration1">
                                        <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" title=""><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['goods_name'],12,'...');?>
</a><br />
                                        售价：<font class="f1">￥<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['goods_price'],5,'');?>
元</font><br />
                                    </li>
                            </ul>
                        <?php } ?>


                        </div>
                    </div>
                </div>
                <div class="blank5"></div><div class="box">  <h3><span>品牌专区</span></h3>
                    <div class="box_1">
                        <div class=" brands clearfix">
                            <a href="#"><img src="<?php echo @IMG_URL;?>
1240803062307572427.gif" alt="诺基亚 (7)"></a>
                            <a href="#"><img src="<?php echo @IMG_URL;?>
1240802922410634065.gif" alt="摩托罗拉 (1)"></a>
                            <a href="#"><img src="<?php echo @IMG_URL;?>
1240803144788047486.gif" alt="多普达 (1)"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="AreaM">
                <div class="box clearfix">
                    <div id="focus">
                        <img src="<?php echo @IMG_URL;?>
111.jpg" width="515" height="160" alt="" />
                    </div>       
                </div>
                <div class="blank"></div>

                <div class="itemTit" id="itemHot">
                    <div class="tit">热卖商品</div>
                    <h2><a href="#" >全部商品</a></h2>
                    <h2 class="h2bg"><a href="#" >GSM手机</a></h2>
                    <h2 class="h2bg"><a href="#" >双模手机</a></h2>
                    <h2 class="h2bg"><a href="#" >充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >小灵通/固话充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >移动手机充值卡</a></h2>
                </div>
                <div id="show_hot_area" class="clearfix">

                <!-- <volist name="goods_hot" id="v" key="k" offset="0" length='3'> -->
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['goods_hot']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = (int)3;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total']);
?> <!-- step=2 start=0 show=false -->
                    <div class="goodsItem">
                        <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['goods_hot']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['goods_small_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
" class="goodsimg"></a><br />
                        <p class="f1"><a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></p>
                        <font class="market">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price']+300;?>
元</font><br />
                        <font class="f1">
                            ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
元                     </font>
                    </div>
                    <?php endfor; endif; ?>
                <!-- </volist> -->
                </div>

             
                <div class="blank"></div>

                <div class="itemTit" id="itemBest">

                    <div class="tit">精品推荐</div>
                    <h2><a href="#" >全部商品</a></h2>
                    <h2 class="h2bg"><a href="#" >GSM手机</a></h2>
                    <h2 class="h2bg"><a href="#" >双模手机</a></h2>
                    <h2 class="h2bg"><a href="#" >充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >联通手机充值卡</a></h2>
                </div>
                <div id="show_best_area" class="clearfix">

                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_price']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
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


                        <font class="market">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price']+100;?>
元</font><br />

                        <font class="f1">
                            ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
元                     </font>
                    </div>
                    <?php } ?>


                </div>
                <div class="blank"></div>

                <div class="itemTit" id="itemNew">
                    <div class="tit">新品上架</div>
                    <h2><a href="#" >全部商品</a></h2>
                    <h2 class="h2bg"><a href="#" >GSM手机</a></h2>
                    <h2 class="h2bg"><a href="#" >双模手机</a></h2>
                    <h2 class="h2bg"><a href="#" >充值卡</a></h2>  
                    <h2 class="h2bg"><a href="#" >移动手机充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >联通手机充值卡</a></h2>
                </div>
                <div id="show_new_area" class="clearfix">
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="诺基亚E66">诺基亚E66</a></p>
                        <font class="market">￥2758元</font><br />
                        <font class="f1">
                            ￥2298元                     </font>
                    </div>
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
1_thumb_G_1240902890710.jpg" alt="KD876" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="KD876">KD876</a></p>
                        <font class="market">￥1666元</font><br />
                        <font class="f1">
                            ￥1388元                     </font>
                    </div>
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="飞利浦9@9v">飞利浦9@9v</a></p>
                        <font class="market">￥479元</font><br />
                        <font class="f1">
                            ￥399元                     </font>
                    </div>

                </div>
                <div class="blank"></div>

            </div>


            <div class="AreaL" style="float: right;">

                <h3><span>新闻快讯</span></h3> 
                <div class="NewsList tc box_1" style="border-top: medium none;">
                    <ul>
                        <li>
                            <a href="#" title="三星SGHU308说明书下载">三星SGHU308说明书下载</a>
                        </li>
                        <li>
                            <a href="#" title="手机游戏下载">手机游戏下载</a>
                        </li>
                        <li>
                            <a href="#" title="促销诺基亚N96">促销诺基亚N96</a>
                        </li>
                        <li>
                            <a href="#" title="诺基亚5320 促销">诺基亚5320 促销</a>
                        </li>
                        <li>
                            <a href="#" title="3G知识普及">3G知识普及</a>
                        </li>
                        <li>
                            <a href="#" title="诺基亚6681手机广告欣赏">诺基亚6681手机广告欣赏</a>
                        </li>
                        <li>
                            <a href="#" title="飞利浦9@9促销">飞利浦9@9促销</a>
                        </li>
                        <li>
                            <a href="#" title="800万像素超强拍照机 LG Viewty Smart再曝光">800万像素超强拍照机 LG V...</a>
                        </li>
                    </ul>
                </div>

                <div class="blank"></div>
                <div class="box">  
                    <h3><span>订单查询</span></h3>
                    <div class="box_1">
                        <div class="boxCenterList">
                            <form name="ecsOrderQuery">
                                <input name="order_sn" class="inputBg" type="text" /><br />
                                <div class="blank5"></div>
                                <input value="查询该订单号" class="bnt_blue_2"  type="button" />
                            </form>
                            <div id="ECS_ORDER_QUERY" style="margin-top: 8px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blank"></div>
                <div class="blank"></div><div class="box">
                    <h3><span>邮件订阅</span></h3>
                    <div class="box_1">

                        <div class="boxCenterList RelaArticle">
                            <input id="user_email" class="inputBg" type="text" /><br />
                            <div class="blank5"></div>
                            <input class="bnt_blue" value="订阅"  type="button" />
                            <input class="bnt_bonus" value="退订"  type="button" />
                        </div>
                    </div>
                </div>
                <div class="blank"></div>
                <div class="box"> 
                    <h3>
                        <span><a href=""></a></span>
                        <a href="">更多</a>
                    </h3>
                    <div class="box_1">

                        <div class="boxCenterList RelaArticle">
                        </div>
                    </div>
                </div>
                <div class="blank5"></div>
                
                <style type="text/css">
                    .boxCenterList form{display:inline;}
                    .boxCenterList form a{color:#404040; text-decoration:underline;}
                </style>
                
                <div class="box">  
                    <h3><span>发货查询</span></h3>
                    <div class="box_1">
                        <div class="boxCenterList">
                            订单号 2009061909851<br />
                            发货单 232421   <div class="blank"></div>
                            订单号 2009052224892<br />
                            发货单 1123344   <div class="blank"></div>
                        </div>
                    </div>
                </div>
                <div class="blank"></div>
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
ecmoban_link.jpg" alt="YONGDA商城" border="0"></a>

                    <a href="#" target="_blank" title="YONGDA 网上商店管理系统">
                        <img src="<?php echo @IMG_URL;?>
yongda_logo.gif" alt="YONGDA 网上商店管理系统" border="0" />
                    </a>


                    [<a href="#" target="_blank" title="免费申请网店">免费申请网店</a>]
                    [<a href="#" target="_blank" title="免费开独立网店">免费开独立网店</a>]


                    [<a href="#" target="_blank" title="免费开独立网店">yongda商城</a>]
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
                <a href="#">Powered&nbsp;by&nbsp;<strong><span style="color: rgb(51, 102, 255);">YongDa</span></strong></a>
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
    </body>
</html><?php }} ?>