<?php /* Smarty version Smarty-3.1.6, created on 2015-10-17 22:33:32
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Ucenter\ucenter2.html" */ ?>
<?php /*%%SmartyHeaderCode:2881562254ca677714-07421455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72526db6c2b7bbd1c82ec55bca421c1fdd5e02c4' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Ucenter\\ucenter2.html',
      1 => 1445092404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2881562254ca677714-07421455',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562254ca72b24',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562254ca72b24')) {function content_562254ca72b24($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 





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
u2.gif" /> 用户信息</a>
                                <a href="<?php echo @__CONTROLLER__;?>
/ucenter3"><img src="<?php echo @IMG_URL;?>
u3.gif" /> 我的订单</a>
                                <a href="<?php echo @__MODULE__;?>
/Ucenter/ucenter2" class="curs"><img src="<?php echo @IMG_URL;?>
u4.gif" /> 收货地址</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u5.gif" /> 我的收藏</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u6.gif" /> 我的留言</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u7.gif" /> 我的标签</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u8.gif" /> 缺货登记</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u9.gif" /> 我的红包</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u10.gif" /> 我的推荐</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u11.gif"> 我的评论</a>
                                <!--<a href="user.php?act=group_buy">我的团购</a>-->
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u12.gif" /> 跟踪包裹</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u13.gif" /> 资金管理</a>
                                <a href="#" style="background: none repeat scroll 0% 0% transparent; text-align: right; margin-right: 10px;"><img src="<?php echo @IMG_URL;?>
bnt_sign.gif" /></a>
                            </div>      </div>
                    </div>
                </div>
            </div>

            <div class="AreaR">
                <div class="box">
                    <div class="box_1">
                        <div class="userCenterBox boxCenterList clearfix" style="">
                            <h5><span>收货人信息</span></h5>
                            <div class="blank"></div>
                            <form action="#" method="post" name="theForm">
                                <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                                    <tbody><tr>
                                            <td align="right" bgcolor="#ffffff">配送区域：</td>
                                            <td colspan="3" align="left" bgcolor="#ffffff">
                                                <select name="country" id="selCountries_0" >
                                                    <option value="0">请选择国家</option>
                                                    <option value="1" selected="selected">中国</option>
                                                </select>
                                                <select name="province" id="selProvinces_0">
                                                    <option value="0">请选择省</option>
                                                    <option value="2" selected="selected">北京</option>
                                                    <option value="3">安徽</option>
                                                    <option value="4">福建</option>
                                                    <option value="5">甘肃</option>
                                                    <option value="6">广东</option>
                                                    <option value="7">广西</option>
                                                    <option value="8">贵州</option>
                                                    <option value="9">海南</option>
                                                    <option value="10">河北</option>
                                                    <option value="11">河南</option>
                                                    <option value="12">黑龙江</option>
                                                    <option value="13">湖北</option>
                                                    <option value="14">湖南</option>
                                                    <option value="15">吉林</option>
                                                    <option value="16">江苏</option>
                                                    <option value="17">江西</option>
                                                    <option value="18">辽宁</option>
                                                    <option value="19">内蒙古</option>
                                                    <option value="20">宁夏</option>
                                                    <option value="21">青海</option>
                                                    <option value="22">山东</option>
                                                    <option value="23">山西</option>
                                                    <option value="24">陕西</option>
                                                    <option value="25">北京</option>
                                                    <option value="26">四川</option>
                                                    <option value="27">天津</option>
                                                    <option value="28">西藏</option>
                                                    <option value="29">新疆</option>
                                                    <option value="30">云南</option>
                                                    <option value="31">浙江</option>
                                                    <option value="32">重庆</option>
                                                    <option value="33">香港</option>
                                                    <option value="34">澳门</option>
                                                    <option value="35">台湾</option>
                                                </select>
                                                <select name="city" id="selCities_0">
                                                    <option value="0">请选择市</option>
                                                    <option value="52" selected="selected">北京</option>
                                                </select>
                                                <select name="district" id="selDistricts_0">
                                                    <option value="0">请选择区</option>
                                                    <option value="500">东城区</option>
                                                    <option value="501">西城区</option>
                                                    <option value="502">海淀区</option>
                                                    <option value="503">朝阳区</option>
                                                    <option value="504">崇文区</option>
                                                    <option value="505">宣武区</option>
                                                    <option value="506">丰台区</option>
                                                    <option value="507">石景山区</option>
                                                    <option value="508">房山区</option>
                                                    <option value="509">门头沟区</option>
                                                    <option value="510">通州区</option>
                                                    <option value="511">顺义区</option>
                                                    <option value="512" selected="selected">昌平区</option>
                                                    <option value="513">怀柔区</option>
                                                    <option value="514">平谷区</option>
                                                    <option value="515">大兴区</option>
                                                    <option value="516">密云县</option>
                                                    <option value="517">延庆县</option>
                                                </select>
                                                (必填) </td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">收货人姓名：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="consignee" class="inputBg" id="consignee_0" value="孙书华" type="text" />
                                                (必填) </td>
                                            <td align="right" bgcolor="#ffffff">电子邮件地址：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="email" class="inputBg" id="email_0" value="shuhua141@163.com" type="text" />
                                                (必填)</td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">详细地址：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="address" class="inputBg" id="address_0" value="上地" type="text" />
                                                (必填)</td>
                                            <td align="right" bgcolor="#ffffff">邮政编码：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="zipcode" class="inputBg" id="zipcode_0" value="232322" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">电话：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="tel" class="inputBg" id="tel_0" value="23232" type="text" />
                                                (必填)</td>
                                            <td align="right" bgcolor="#ffffff">手机：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="mobile" class="inputBg" id="mobile_0" value="1232323" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">标志建筑：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="sign_building" class="inputBg" id="sign_building_0" type="text" /></td>
                                            <td align="right" bgcolor="#ffffff">最佳送货时间：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="best_time" class="inputBg" id="best_time_0" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">&nbsp;</td>
                                            <td colspan="3" align="center" bgcolor="#ffffff">                    
                                                <input name="submit" class="bnt_blue_1" value="确认修改" type="submit" />
                                                <input name="button" class="bnt_blue" value="删除" type="button" />
                                                <input name="act" value="act_edit_address" type="hidden" />
                                                <input name="address_id" value="3" type="hidden" />
                                            </td>
                                        </tr>
                                    </tbody></table>
                            </form>
                            <form action="#" method="post" name="theForm">
                                <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                                    <tbody><tr>
                                            <td align="right" bgcolor="#ffffff">配送区域：</td>
                                            <td colspan="3" align="left" bgcolor="#ffffff">
                                                <select name="country" id="selCountries_1" >
                                                    <option value="0">请选择国家</option>
                                                    <option value="1" selected="selected">中国</option>
                                                </select>
                                                <select name="province" id="selProvinces_1">
                                                    <option selected="selected" value="0">请选择省</option>
                                                    <option value="2">北京</option>
                                                    <option value="3">安徽</option>
                                                    <option value="4">福建</option>
                                                    <option value="5">甘肃</option>
                                                    <option value="6">广东</option>
                                                    <option value="7">广西</option>
                                                    <option value="8">贵州</option>
                                                    <option value="9">海南</option>
                                                    <option value="10">河北</option>
                                                    <option value="11">河南</option>
                                                    <option value="12">黑龙江</option>
                                                    <option value="13">湖北</option>
                                                    <option value="14">湖南</option>
                                                    <option value="15">吉林</option>
                                                    <option value="16">江苏</option>
                                                    <option value="17">江西</option>
                                                    <option value="18">辽宁</option>
                                                    <option value="19">内蒙古</option>
                                                    <option value="20">宁夏</option>
                                                    <option value="21">青海</option>
                                                    <option value="22">山东</option>
                                                    <option value="23">山西</option>
                                                    <option value="24">陕西</option>
                                                    <option value="25">北京</option>
                                                    <option value="26">四川</option>
                                                    <option value="27">天津</option>
                                                    <option value="28">西藏</option>
                                                    <option value="29">新疆</option>
                                                    <option value="30">云南</option>
                                                    <option value="31">浙江</option>
                                                    <option value="32">重庆</option>
                                                    <option value="33">香港</option>
                                                    <option value="34">澳门</option>
                                                    <option value="35">台湾</option>
                                                </select>
                                                <select name="city" id="selCities_1">
                                                    <option selected="selected" value="0">请选择市</option>
                                                </select>
                                                <select name="district" id="selDistricts_1" style="display: none;">
                                                    <option selected="selected" value="0">请选择区</option>
                                                </select>
                                                (必填) </td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">收货人姓名：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="consignee" class="inputBg" id="consignee_1" type="text" />
                                                (必填) </td>
                                            <td align="right" bgcolor="#ffffff">电子邮件地址：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="email" class="inputBg" id="email_1" value="shuhua141@163.com" type="text" />
                                                (必填)</td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">详细地址：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="address" class="inputBg" id="address_1" type="text" />
                                                (必填)</td>
                                            <td align="right" bgcolor="#ffffff">邮政编码：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="zipcode" class="inputBg" id="zipcode_1" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">电话：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="tel" class="inputBg" id="tel_1" type="text" />
                                                (必填)</td>
                                            <td align="right" bgcolor="#ffffff">手机：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="mobile" class="inputBg" id="mobile_1" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">标志建筑：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="sign_building" class="inputBg" id="sign_building_1" type="text" /></td>
                                            <td align="right" bgcolor="#ffffff">最佳送货时间：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="best_time" class="inputBg" id="best_time_1" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">&nbsp;</td>
                                            <td colspan="3" align="center" bgcolor="#ffffff">                    
                                                <input name="submit" class="bnt_blue_2" value="新增收货地址" type="submit" />
                                                <input name="act" value="act_edit_address" type="hidden" />
                                                <input name="address_id" value="" type="hidden" />
                                            </td>
                                        </tr>
                                    </tbody></table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>