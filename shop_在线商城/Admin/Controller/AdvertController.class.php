<?php
// 后台控制器， 广告

namespace Admin\Controller;
use Component\AdminController;

class AdvertController extends AdminController{

    /**
     * 查询广告信息
     */
    function showlist(){
        $arr=R('Goods/pager',array('ad','10'));
        $this->assign('info',$arr['info']);
        $this->assign('pagelist',$arr['pagelist']);
        $this->display();
    }

    /*添加广告信息*/
    function add_ad(){
        $ad=M('ad');
        if(!empty($_POST)){
            $goods_up_fn=A('Goods');
            $arr=$goods_up_fn->upload_img($_FILES['ad_img']);
            $_POST['ad_big_img']=$arr['big'];
            $_POST['ad_small_img']=$arr['small'];
            $ad->create();
            $re=$ad->add();
            if($re){
                $this->success('添加广告成功',U("Advert/showlist"));
            }else{
                $this->error("添加广告失败",U("Advert/add_ad"));
            }
        }else{
            $this->display();
        }



    }

    /*广告修改*/
    function update_ad(){
        $ad=D('ad');
        if(!empty($_POST)){
//				添加图片删除功能
            $re = $ad->find($_POST['ad_id']);
            if(isset($_POST['del_pic'])){
                unlink(UPLOAD.$re['ad_big_img']);
                unlink(UPLOAD.$re['ad_small_img']);
                unset($_POST['del_pic']);//删除变量$_POST['del_pic']
                $_POST['ad_big_img']='';
                $_POST['ad_small_img']='';
            }
//				如果用户有上传新照片操作
            if(!empty($_FILES['ad_img']['name'])){
                unlink(UPLOAD.$re['ad_big_img']);
                unlink(UPLOAD.$re['ad_small_img']);
                $goods_up_fn=A('Goods');
                $arr=$goods_up_fn->upload_img($_FILES['ad_img']);
                $_POST['ad_big_img']=$arr['big'];
                $_POST['ad_small_img']=$arr['small'];
            }
            $ad->create();
            $re = $ad->save();
//            echo $ad->getLastSql();
            if($re){
                $this->success('修改成功',U('showlist'));
            }else{
                $this->error('修改失败');
            }

        }else{
            $re = $ad->find($_GET['ad_id']);
            $this->assign('info',$re);
            $this->display();
        }
    }

    /*广告删除*/
    function del_ad(){
        $ad=M('ad');
        $re = $ad->delete($_GET['ad_id']);
        if($re){
            $this->success('删除广告成功',U("Advert/showlist"));
        }else{
            $this->error("删除广告失败",U("Advert/add_ad"));
        }
    }


}