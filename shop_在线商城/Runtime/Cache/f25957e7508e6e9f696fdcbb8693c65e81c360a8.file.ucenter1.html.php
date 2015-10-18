<?php /* Smarty version Smarty-3.1.6, created on 2015-10-17 22:33:28
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Ucenter\ucenter1.html" */ ?>
<?php /*%%SmartyHeaderCode:30718562252a62a1932-24082117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f25957e7508e6e9f696fdcbb8693c65e81c360a8' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Ucenter\\ucenter1.html',
      1 => 1445092404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30718562252a62a1932-24082117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562252a62f784',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562252a62f784')) {function content_562252a62f784($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 


        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
            </div>
        </div>
        <div class="blank"></div>
        <div class="block clearfix">
            <div class="AreaL">
                <div class="box">
                    <div class="box_1">
                        <div class="userCenterBox">
                            <div class="userMenu">
                                <a href="<?php echo @__CONTROLLER__;?>
/ucenter1" class="curs"><img src="<?php echo @IMG_URL;?>
u1.gif" /> 欢迎页</a>
                                <a href="#"><img src="<?php echo @IMG_URL;?>
u2.gif" /> 用户信息</a>
                                <a href="<?php echo @__CONTROLLER__;?>
/ucenter3"><img src="<?php echo @IMG_URL;?>
u3.gif" /> 我的订单</a>
                                <a href="<?php echo @__MODULE__;?>
/Ucenter/ucenter2"><img src="<?php echo @IMG_URL;?>
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
/u12.gif" /> 跟踪包裹</a>
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

                            <font class="f5"><b class="f4">finisher</b> 欢迎您回到 YONGDA！</font><br />
                            <div class="blank"></div>
                            您的上一次登录时间: 2012-10-06 20:12:04<br />
                            <div class="blank5"></div>
                            您的等级是 注册用户  ,您还差 10000 积分达到 vip <br />
                            <div class="blank5"></div>
                            您还没有通过邮件认证 <a href="#" style="color: rgb(0, 107, 208);">点此发送认证邮件</a><br />
                            <div style="margin: 5px 0pt; border: 1px solid rgb(247, 221, 152); padding: 10px 20px; background-color: rgb(255, 250, 213);">
                                <img src="<?php echo @IMG_URL;?>
note.gif" alt="note" />&nbsp;用户中心公告！           </div>
                            <br /><br />
                            <div class="f_l" style="width: 350px;">
                                <h5><span>您的账户</span></h5>
                                <div class="blank"></div>
                                余额:<a href="#" style="color: rgb(0, 107, 208);">￥0.00元</a><br />
                                红包:<a href="#" style="color: rgb(0, 107, 208);">共计 0 个,价值 ￥0.00元</a><br />
                                积分:0积分<br />
                            </div>
                            <div class="f_r" style="width: 350px;">
                                <h5><span>用户提醒</span></h5>
                                <div class="blank"></div>
                                您最近30天内提交了1个订单<br />
                            </div>
                            <div class="blank5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
   <?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>