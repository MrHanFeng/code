<?php /* Smarty version Smarty-3.1.6, created on 2015-10-17 22:18:26
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3153656224a6d65d1a5-25322231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd13a283476f4dd12dc69544d5da0bb05b1b6b867' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\User\\login.html',
      1 => 1445089591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3153656224a6d65d1a5-25322231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56224a6d6e1ec',
  'variables' => 
  array (
    're' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56224a6d6e1ec')) {function content_56224a6d6e1ec($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

        <div class="block block1">
            <div class="block box">
                <div class="blank"></div>
                <div id="ur_here">
                    当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
                </div>
            </div>
            <div class="blank"></div>

            <div class="block box">

            <div class="usBox clearfix">
                <div class="usBox_1 f_l">
                    <div class="logtitle"></div>
                    <form name="formLogin" action="<?php echo @__SELF__;?>
" method="post">
                        <table align="left" border="0" cellpadding="3" cellspacing="5" width="100%">
                            <tbody><tr>
                                    <td align="right" width="15%">邮箱：</td>
                                    <td width="85%"><input name="user_email" size="25" class="inputBg" type="text" /></td>
                                </tr>
                                <tr>
                                    <td align="right">密&nbsp&nbsp码</td>
                                    <td>
                                        <input name="password" size="15" class="inputBg" type="password" />
                                    </td>

                                </tr>
                                <tr>
                                    <td>验证码</td>
                                    <td>
                                         <input  name="captcha" type="text" style="width:50px;">
                                         <img src="<?php echo @__CONTROLLER__;?>
/verifyImg"  alt="" onClick="this.src=this.src+'?'+Math.random()" height=22/>
                                    </td>
                             
                                </tr>
                                <tr>
                                    <td colspan="2"><input value="1" name="remember" id="remember" type="checkbox" />
                                        <label for="remember">请保存我这次的登录信息。</label></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td align="left">
                                        <input name="act" value="act_login" type="hidden" />
                                        <input name="back_act" value="./index.php" type="hidden" />
                                        <input name="submit" value="" class="us_Submit" type="submit" />
                                    </td>
                                </tr>
                                <tr><td></td><td><a href="#" class="f3">密码问题找回密码</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo @__CONTROLLER__;?>
/email" class="f3">注册邮件找回密码</a></td></tr>
                                <?php echo $_smarty_tpl->tpl_vars['re']->value;?>

                            </tbody></table>
                    </form>
                    <div class="blank"></div>
                </div>
                <div class="usTxt">
                    <div class="regtitle"></div>
                    <div style="padding-left: 50px;">
                        <strong>如果您不是会员，请注册</strong>  <br />
                        <strong class="f4">友情提示：</strong><br />
                        不注册为会员也可在本店购买商品<br />
                        但注册之后您可以：<br />
                        1. 保存您的个人资料<br />
                        2. 收藏您关注的商品<br />
                        3. 享受会员积分制度<br />
                        4. 订阅本店商品信息  <br />
                        <a href="#"><img src="<?php echo @IMG_URL;?>
bnt_ur_reg.gif"></a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="blank"></div>
            <div class="block">
                <a href="#" target="_blank" title="YONGDA商城"><img alt="YONGDA商城" src="<?php echo @IMG_URL;?>
di.jpg"></a>

     <?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>