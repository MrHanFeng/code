<?php /* Smarty version Smarty-3.1.6, created on 2015-10-17 22:26:59
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Goods\gwc2.html" */ ?>
<?php /*%%SmartyHeaderCode:3774562259380259e1-97288911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43442453ade47bc47c1467f76263515ce1fbd3ab' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Goods\\gwc2.html',
      1 => 1445091796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3774562259380259e1-97288911',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562259380e509',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562259380e509')) {function content_562259380e509($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 


        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 购物流程 
            </div>
        </div>

        <div class="blank"></div>
        <div class="blank"></div>

        <div class="block">
            <form action="<?php echo @__CONTROLLER__;?>
/do_order" method="post" name="theForm" id="theForm" >
                <div class="flowBox">
                    <h6><span>商品列表</span><a href="#" class="f6">修改</a></h6>
                    <table cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th>商品名称</th>
                                <th>属性</th>
                                <th>市场价</th>
                                <th>本店价</th>
                                <th>购买数量</th>
                                <th>小计</th>
                            </tr>

                            <tr>
                                <td>
                                    <a href="#" target="_blank" class="f6">诺基亚N85</a>
                                </td>

                                <td>颜色:黑色 <br />
                                </td>
                                <td align="right">￥3612.00元</td>
                                <td align="right">￥3010.00元</td>
                                <td align="right">1</td>
                                <td align="right">￥3010.00元</td>
                            </tr>

                            <tr>
                                <td>
                                    <a href="#" target="_blank" class="f6">P806</a>
                                </td>

                                <td>颜色:灰色 <br />
                                </td>
                                <td align="right">￥2400.00元</td>
                                <td align="right">￥2000.00元</td>
                                <td align="right">1</td>
                                <td align="right">￥2000.00元</td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    购物金额小计 ￥5010.00元，比市场价 ￥6012.00元 节省了 ￥1002.00元 (17%)              </td>
                            </tr>
                        </tbody></table>
                </div>
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>收货人信息</span><a href="#" class="f6">修改</a></h6>
                    <table cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <td>收货人姓名:</td>
                                <td>孙书华</td>
                                <td>电子邮件地址:</td>
                                <td>shuhua141@163.com</td>
                            </tr>
                            <tr>
                                <td>详细地址:</td>
                                <td>沙河 </td>
                                <td>邮政编码:</td>
                                <td>232322</td>
                            </tr>
                            <tr>
                                <td>电话:</td>
                                <td>23232 </td>
                                <td>手机:</td>
                                <td>1232323</td>
                            </tr>
                            <tr>
                                <td>标志建筑:</td>
                                <td> </td>
                                <td>最佳送货时间:</td>
                                <td></td>
                            </tr>
                        </tbody></table>
                </div>
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>配送方式</span></h6>
                    <table id="shippingTable" cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th width="5%">&nbsp;</th>
                                <th width="25%">名称</th>
                                <th>订购描述</th>
                                <th width="15%">费用</th>
                                <th width="15%">免费额度</th>
                                <th width="15%">保价费用</th>
                            </tr>
                            <tr>
                                <td valign="top"><input name="shipping" value="5"  type="radio" />
                                </td>
                                <td valign="top"><strong>申通快递</strong></td>
                                <td valign="top">江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元</td>
                                <td align="right" valign="top">￥15.00元</td>
                                <td align="right" valign="top">￥0.00元</td>
                                <td align="right" valign="top">不支持保价</td>
                            </tr>
                            <tr>
                                <td valign="top"><input name="shipping" value="3"  type="radio" />
                                </td>
                                <td valign="top"><strong>城际快递</strong></td>
                                <td valign="top">配送的运费是固定的</td>
                                <td align="right" valign="top">￥10.00元</td>
                                <td align="right" valign="top">￥100000.00元</td>
                                <td align="right" valign="top">不支持保价</td>
                            </tr>
                            <tr>
                                <td valign="top"><input name="shipping" value="6"   type="radio" />
                                </td>
                                <td valign="top"><strong>邮局平邮</strong></td>
                                <td valign="top">邮局平邮的描述内容。</td>
                                <td align="right" valign="top">￥3.50元</td>
                                <td align="right" valign="top">￥50000.00元</td>
                                <td align="right" valign="top">不支持保价</td>
                            </tr>
                            <tr>
                                <td colspan="6" align="right"><label for="ECS_NEEDINSURE">
                                        <input name="need_insure" id="ECS_NEEDINSURE"  value="1" disabled="true" type="checkbox" />
                                        配送是否需要保价 </label></td>
                            </tr>
                        </tbody></table>
                </div>
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>支付方式</span></h6>
                    <table id="paymentTable" cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th width="5%">&nbsp;</th>
                                <th width="20%">名称</th>
                                <th>订购描述</th>
                                <th width="15%">手续费</th>
                            </tr>

                            <tr>
                                <td valign="top"><input name="payment" value="1" iscod="0" type="radio" /></td>
                                <td valign="top"><strong>余额支付</strong></td>
                                <td valign="top">使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。</td>
                                <td align="right" valign="top">￥0.00元</td>
                            </tr>

                            <tr>
                                <td valign="top"><input name="payment" value="2" iscod="0" type="radio" /></td>
                                <td valign="top"><strong>银行汇款/转帐</strong></td>
                                <td valign="top">银行名称
                                    收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。
                                    注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。</td>
                                <td align="right" valign="top">￥0.00元</td>
                            </tr>

                            <tr>
                                <td valign="top"><input name="payment" value="3" iscod="1" disabled="true" type="radio" /></td>
                                <td valign="top"><strong>货到付款</strong></td>
                                <td valign="top">开通城市：×××
                                    货到付款区域：×××</td>
                                <td align="right" valign="top"><span id="ECS_CODFEE">￥0.00元</span></td>
                            </tr>
                        </tbody></table>
                </div>
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>商品包装</span></h6>
                    <table id="packTable" cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th scope="col" width="5%">&nbsp;</th>
                                <th scope="col" width="35%">名称</th>
                                <th scope="col" width="22%">价格</th>
                                <th scope="col" width="22%">免费额度</th>
                                <th scope="col">图片</th>
                            </tr>
                            <tr>
                                <td valign="top"><input name="pack" value="0" checked="checked" type="radio" /></td>
                                <td valign="top"><strong>不要包装</strong></td>
                                <td valign="top">&nbsp;</td>
                                <td valign="top">&nbsp;</td>
                                <td valign="top">&nbsp;</td>
                            </tr>
                            <tr>
                                <td valign="top"><input name="pack" value="1" type="radio" />
                                </td>
                                <td valign="top"><strong>精品包装</strong></td>
                                <td align="right" valign="top">￥5.00元</td>
                                <td align="right" valign="top">￥800.00元</td>
                                <td valign="top">
                                    <a href="#" target="_blank" class="f6">查看</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="blank"></div>

                <div class="flowBox">
                    <h6><span>祝福贺卡</span></h6>
                    <table id="cardTable" cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th scope="col" width="5%">&nbsp;</th>
                                <th scope="col" width="35%">名称</th>
                                <th scope="col" width="22%">价格</th>
                                <th scope="col" width="22%">免费额度</th>
                                <th scope="col">图片</th>
                            </tr>
                            <tr>
                                <td valign="top"><input name="card" value="0" checked="checked" onclick="selectCard(this)" type="radio" /></td>
                                <td valign="top"><strong>不要贺卡</strong></td>
                                <td valign="top">&nbsp;</td>
                                <td valign="top">&nbsp;</td>
                                <td valign="top">&nbsp;</td>
                            </tr>
                            <tr>
                                <td valign="top"><input name="card" value="1" onclick="selectCard(this)" type="radio" />
                                </td>
                                <td valign="top"><strong>祝福贺卡</strong></td>
                                <td align="right" valign="top">￥5.00元</td>
                                <td align="right" valign="top">￥1000.00元</td>
                                <td valign="top">
                                    <a href="#" target="_blank" class="f6">查看</a>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td valign="top"><strong>祝福语:</strong></td>
                                <td colspan="3"><textarea name="card_message" cols="60" rows="3" style="width: auto; border: 1px solid rgb(204, 204, 204);"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="blank"></div>

                <div class="flowBox">
                    <h6><span>其它信息</span></h6>
                    <table cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <td><strong>使用红包:</strong></td>
                                <td>
                                    选择已有红包                <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border: 1px solid rgb(204, 204, 204);">
                                        <option value="0" selected="selected">请选择</option>
                                    </select>

                                    或者输入红包序列号               <input name="bonus_sn" class="inputBg" size="15" type="text" /> 

                                    <input name="validate_bonus" class="bnt_blue_1" value="验证红包"  style="vertical-align: middle;" type="button" />
                                </td>
                            </tr>
                            <tr>
                                <td valign="top"><strong>订单附言:</strong></td>
                                <td><textarea name="postscript" cols="80" rows="3" id="postscript" style="border: 1px solid rgb(204, 204, 204);"></textarea></td>
                            </tr>
                            <tr>
                                <td><strong>缺货处理:</strong></td>
                                <td>                <label>
                                        <input name="how_oos" value="0" checked="checked" type="radio" />
                                        等待所有商品备齐后再发</label>
                                    <label>
                                        <input name="how_oos" value="1" type="radio" />
                                        取消订单</label>
                                    <label>
                                        <input name="how_oos" value="2" type="radio" />
                                        与店主协商</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>费用总计</span></h6>
                    <div id="ECS_ORDERTOTAL">
                        <table cellpadding="5" cellspacing="1" width="99%">
                            <tbody><tr>
                                    <td align="right">    该订单完成后，您将获得            <font class="f4_b">5010</font> 积分            ，以及价值               <font class="f4_b">￥0.00元</font>的红包。
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        商品总价: <font class="f4_b">￥5010.00元</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"> 应付款金额: <font class="f4_b">￥5010.00元</font>
                                    </td>
                                </tr>
                            </tbody></table>
                    </div>           <div style="margin: 8px auto;">
                        <input src="<?php echo @IMG_URL;?>
bnt_subOrder.gif" type="image" />
                        <input name="step" value="done" type="hidden" />
                    </div>
                </div>
            </form>
        </div>

        
<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>