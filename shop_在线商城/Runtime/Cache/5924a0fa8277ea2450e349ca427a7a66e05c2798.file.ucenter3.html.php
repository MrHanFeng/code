<?php /* Smarty version Smarty-3.1.6, created on 2015-10-17 22:33:03
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Ucenter\ucenter3.html" */ ?>
<?php /*%%SmartyHeaderCode:35356225590688560-07215026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5924a0fa8277ea2450e349ca427a7a66e05c2798' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Ucenter\\ucenter3.html',
      1 => 1445092382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35356225590688560-07215026',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562255906f1d0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562255906f1d0')) {function content_562255906f1d0($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 





        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
            </div>
        </div>
        
        <div class="blank"></div>
        <div class="blank"></div>
        
        <div class="block clearfix">
            <div class="AreaL">
                <div class="box">
                    <div class="box_1">
                        <div class="userCenterBox">
                            <div class="userMenu">
                                <a href="<?php echo @__CONTROLLER__;?>
/ucenter1" ><img src="<?php echo @IMG_URL;?>
u1.gif" /> 欢迎页</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u2.gif" alt="" /> 用户信息</a>
                                <a href="<?php echo @__CONTROLLER__;?>
/ucenter3" class="curs"><img src="<?php echo @IMG_URL;?>
u3.gif" /> 我的订单</a>
                                <a href="<?php echo @__MODULE__;?>
/Ucenter/ucenter2"><img src="<?php echo @IMG_URL;?>
u4.gif" /> 收货地址</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u5.gif" alt="" /> 我的收藏</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u6.gif" alt="" /> 我的留言</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u7.gif" alt="" /> 我的标签</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u8.gif" alt="" /> 缺货登记</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u9.gif" alt="" /> 我的红包</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u10.gif" alt="" /> 我的推荐</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u11.gif" alt="" /> 我的评论</a>
                                <!--<a href="user.php?act=group_buy">我的团购</a>-->
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u12.gif" alt="" /> 跟踪包裹</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u13.gif" alt="" /> 资金管理</a>
                                <a href="#" style="background: none repeat scroll 0% 0% transparent; text-align: right; margin-right: 10px;"><img src="<?php echo @IMG_URL;?>
bnt_sign.gif" alt="" /></a>
                            </div>      </div>
                    </div>
                </div>
            </div>

            <div class="AreaR">
                <div class="box">
                    <div class="box_1">
                        <div class="userCenterBox boxCenterList clearfix" style="">
                            <h5><span>我的订单</span></h5>
                            <div class="blank"></div>
                            <table cellpadding="5" cellspacing="1">
                                <tbody><tr align="center">
                                        <td>订单号</td>
                                        <td>下单时间</td>
                                        <td>订单总金额</td>
                                        <td>订单状态</td>
                                        <td>操作</td>
                                    </tr>
                                    <tr>
                                        <td align="center"><a href="./user.php?act=order_detail&amp;order_id=20" class="f6">2012100649488</a></td>
                                        <td align="center">2012-10-06 20:08:43</td>
                                        <td align="right">￥5020.00元</td>
                                        <td align="center">未确认,未付款,未发货</td>
                                        <td align="center"><font class="f6"><a href="#" >取消订单</a></font></td>
                                    </tr>
                                </tbody></table>
                            <div class="blank5"></div>

                            <form action="/user.php" method="get">

                                <div id="pager" class="pagebar">
                                    <span class="f_l " style="margin-right: 10px;">总计 <b>1</b>  个记录</span>

                                </div>

                            </form>
                            <div class="blank5"></div>
                            <h5><span>合并订单</span></h5>
                            <div class="blank"></div>
                            <form action="#" method="post">
                                <table cellpadding="5" cellspacing="1">
                                    <tbody>
                                        <tr>
                                            <td align="right" width="22%">主订单:</td>
                                            <td align="left" width="12%"><select name="to_order">
                                                    <option selected="selected" value="0">请选择...</option>

                                                    <option value="2012100649488">2012100649488</option>
                                                </select></td>
                                            <td align="right" width="19%">从订单:</td>
                                            <td align="left" width="11%"><select name="from_order">
                                                    <option selected="selected" value="0">请选择...</option>

                                                    <option value="2012100649488">2012100649488</option>
                                                </select></td>
                                            <td width="36%">&nbsp;<input name="act" value="merge_order" type="hidden" />
                                                <input name="Submit" class="bnt_blue_1" style="border: medium none;" value="合并订单" type="submit" /></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td colspan="4" align="left">订单合并是在发货前将相同状态的订单合并成一新的订单。<br />收货地址，送货方式等以主定单为准。</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
       <?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>