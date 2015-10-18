<?php /* Smarty version Smarty-3.1.6, created on 2015-10-17 21:17:35
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:3204656224a6f75b789-36829385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b441270c0d7d3b78b862d9b2ca4f65835dccaa09' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\User\\register.html',
      1 => 1438076775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3204656224a6f75b789-36829385',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56224a6f7d87a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56224a6f7d87a')) {function content_56224a6f7d87a($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

        <div class="block block1">  

            <div class="block box">
                <div class="blank"></div>
                <div id="ur_here">
                    当前位置: <a href="#">首页</a> <code>&gt;</code> 用户注册 
                </div>
            </div>
            <div class="blank"></div>


            <!--放入view具体内容-->

            <div class="block box">

                <div class="usBox">
                    <div class="usBox_2 clearfix">
                        <div class="logtitle3"></div>
                        <form id="yw0" action="<?php echo @__SELF__;?>
" method="post">                <table cellpadding="5" cellspacing="3" style="text-align:left; width:100%; border:0;">
                                <tbody>
                                    <tr>
                                        <td style="width:13%; text-align: right;"><label for="User_username" class="required">用户名 
                                        <span class="required">*</span></label>
                                        </td>

                                        <td style="width:87%;">
                                            <input class="inputBg" size="25" name="username" id="User_username" type="text" value="" />                  
                                            <span style="color:red;">用户名已经存在</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                            <label for="User_password" class="required">密码 <span class="required">*</span></label>
                                        </td>

                                        <td>
                                            <input class="inputBg" size="25" name="password" id="User_password" type="password" value="" />         
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_password2">密码确认</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="password2" id="User_password2" type="password" />
                                        </td>

                                    </tr>
                                    <tr>
                                        <td align="right"><label for="user_email">邮箱</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_email" id="User_user_email" type="text" value="" />    
                                        </td>
                                    </tr>
                                    <tr>

                                        <td align="right"><label for="User_user_qq">qq号码</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_qq" id="User_user_qq" type="text" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_user_tel">手机</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_tel" id="User_user_tel" type="text" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--radioButtonList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><label for="user_sex">性别</label></td>
                                        <td>
                                            
                                            <span id="User_user_sex">
                                            <input id="User_user_sex_0" value="1" checked="checked" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_0">男</label>&nbsp;
                                            <input id="User_user_sex_1" value="2" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_1">女</label>&nbsp;
                                            <input id="User_user_sex_2" value="3" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_2">保密</label></span>                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--dropDownList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_xueli">学历</label></td>
                                        <td>
                                            <select name="user_xueli" id="User_user_xueli">
                                                <option value="1" selected="selected">-请选择-</option>
                                                <option value="2">小学</option>

                                                <option value="3">初中</option>
                                                <option value="4">高中</option>
                                                <option value="5">大学</option>
                                            </select>                                
                                            <div class="errorMessage" id="User_user_xueli_em_" style="display:none"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--checkBoxList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_hobby">爱好</label></td>

                                        <td>
                                            <span id="User_user_hobby">
                                            <input id="User_user_hobby_0" value="1" type="checkbox" name="user_hobby[]" /> 
                                            <label for="User_user_hobby_0">篮球</label>&nbsp;
                                            <input id="User_user_hobby_1" value="2" type="checkbox" name="user_hobby[]" /> 
                                            <label for="User_user_hobby_1">足球</label>&nbsp;
                                            <input id="User_user_hobby_2" value="3" type="checkbox" name="user_hobby[]" /> 
                                            <label for="User_user_hobby_2">排球</label>&nbsp;
                                            <input id="User_user_hobby_3" value="4" type="checkbox" name="user_hobby[]" /> 
                                            <label for="User_user_hobby_3">棒球</label>
                                            </span>                                
                                        </td>
                                    </tr>
                                    <tr>

                                        <!--textArea($model,$attribute,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_introduce">简介</label></td>
                                        <td>
                                            <textarea cols="50" rows="5" name="user_introduce" id="User_user_introduce"></textarea>                      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>

                                        <td align="left">
                                            <input name="Submit" value="" class="us_Submit_reg" type="submit" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>

                        </form>        </div>
                </div>
            </div>
            <!--放入view具体内容-->

        </div>

     <?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>