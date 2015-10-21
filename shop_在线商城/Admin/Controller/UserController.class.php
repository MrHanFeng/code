<?php
namespace Admin\Controller;
use Component\AdminController;

// 会员控制器
class UserController extends AdminController{
    /**
     * 评论列表
     */
    function comment(){
        /*0.评论查询*/
        /*跨控制器调用。方法一*/
        $goods=A('Goods');
        if(!empty($_GET['brand_s'])){
            $arr= $goods->pager('goods',6," where goods_brand_id ={$_GET['brand_s']}");
        }else{
            $arr= $goods->pager('goods',6);
        }
        /*跨控制器调用。方法二*/
//        $arr=R("Goods/pager",array('goods',6,'goods_brand_id',$_GET['brand_s']));

        $this->assign('pagelist',$arr['pagelist']);
        $this->assign('goods_info',$arr['info']);

        /*1.品牌查询,返回下标为ID，值为品牌名的数组*/
        $brand_info = D('brand')->select();
        $brand_arr = array();
        foreach ($brand_info as $k => $v) {$brand_arr[$v['brand_id']] = $v['brand_name'] ;//下标为ID，POST传过来的值也为ID
        }
        $this->assign('brand_info',$brand_arr);

        /*2.分类查询，返回下标为ID，值为分类名的数组*/
        $cate_info = D('category')->select();
        $cate_arr =array();
        foreach ($cate_info as $k => $v) {
            $cate_arr[$v['cat_id']] = $v['cat_name'];
        }
        $this->assign('cate_info',$cate_arr);

        /*3.评论查询，返回下标为文章ID，值为评论数量名的数组*/
        $comment = D('comment');
        $sql="SELECT count(*) AS com_num,cm_goods_id FROM sw_comment GROUP BY cm_goods_id";
        $re =$comment->query($sql);
        $num=array();
        foreach($re as $v){
            $num[$v['cm_goods_id']]=$v['com_num'];
        }
        $this->assign('cm_num',$num);

        $this->display();
    }

    /**
     * 具体商品评论列表
     */
    function comment_detail(){
        $goods=A('Goods');
        $comment_info= $goods->pager('comment',6,"where cm_goods_id={$_GET['goods_id']}");
//        $comment_info=M('comment')->where("cm_goods_id=")->select();
//        show($comment_info);
        $this->assign('comment_info',$comment_info['info']);
        $this->assign('pagelist',$comment_info['pagelist']);


        /*查询会员信息，返回下标是会员ID，值为会员帐号的数组*/
        $user_info=D('user')->select();
        $arr=array();
        foreach($user_info as $v){
            $arr[$v['user_id']]=$v['username'];
        }
        $this->assign('user',$arr);
        $this->display();
    }

    /**
     * 改变评论状态
     */
    function commend_change(){
        $cm=D('comment');
        if($_GET['flag']){
            $re =$cm->where("cm_id=$_GET[cm_id]")->data("cm_status=$_GET[flag]")->save();
        }else{
            $re =$cm->where("cm_id=$_GET[cm_id]")->data("cm_status=$_GET[flag]")->save();
        }
//        echo $cm->getLastSql();
//        exit;
        if($re){
//            $this->redirect("commend_change?$_GET[flag]=0&cm_id=$_GET[cm_id]");
            $this->success('修改成功',U("User/comment_detail?goods_id={$_GET['goods_id']}"));
//            $this->error('修改成功',U('comment'));
        }else{
            $this->error('修改失败',U("User/comment_detail?goods_id={$_GET['goods_id']}"));
        }
    }


    /*会员列表*/
    function user_list(){
        $user=D('User');
        $info=$user->user_list_fn();
        $this->assign('info',$info);
        $this->display();
    }

    /*会员添加*/
    function user_add(){
        $user=D('User');
        if(!empty($_POST)){
            $user->create();
//            show($user->getError());
            $re=$user->add();
            $this->if_re($re,array('添加会员成功','user_list'),array('添加会员失败','user_add'));
        }else{
            $this->display();
        }
    }

    function user_update(){
        $user=D('User');
        $info=$user->user_list_fn($_GET['user_id']);
        if($_POST){
            $user->create();
            $re=$user->save();
            $this->if_re($re,array('会员修改成功','user_list'),array('会员修改失败',''));
        }else{
            $this->assign('user_info',$info);

            $arr=$user->user_identify($_GET['user_id']);
            $this->assign('all_idy',$arr['all_idy']);
            $this->assign('cur_idy',$arr['cur_idy']);
            $this->display();
        }
    }


    function user_del(){
        $user=M('User');
        $re=$user->where("user_id={$_GET['user_id']}")->data("user_status=delete")->save();
//        echo $user->getLastSql();exit;
        $this->if_re($re,array('会员删除成功','user_list'),array('会员删除失败','user_list'));
    }
}