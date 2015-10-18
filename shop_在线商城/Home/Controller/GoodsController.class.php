<?php

    //商品控制器
    namespace Home\Controller;
    use Component\HomeController;

    class GoodsController extends HomeController{
        //商品列表
        function showlist(){
            //获得User控制器的number方法返回的信息
            //当前UserController会通过自动加载机制引入
            //ThinkPHP/Library/Think/Think.class.php  
            // function autoload();
            // $user = new UserController();
            
            //通过快捷函数实例化控制器对象
            //new一个控制器对象给我们返回
            //A([项目://][模块/]控制器标志);
            // $user = A("User"); 
            // echo $user -> number();
            // $goods = A("Admin/Goods");
            // echo $goods -> getMoney();
            
            //跨项目、跨模块调用指定控制器
            //$index = A("book://Home/Index");
            //echo $index -> getName();
            
            //简便操作
            //R("[项目://][模块/]控制器/操作方法")
            //实例化对象之后再调用其对应的方法
            // echo R("User/number");   
            // echo R("Admin/Goods/getMoney");
            //echo R("book://Home/Index/getName");
            
            R('Index/sql');//实力换Index控制器下的INDEX方法，提高代码重用性???为什么用它后边分页显示就无效了？？
           
            /*分页显示*/
            $goods = D('goods');
            //1.获得当前记录总条数
            $total = $goods -> count();
            $per = 12;   //每页条数
            //2.实例化分页对象
            $page = new \Component\Page($total,$per);//实例化分页类
            // 3.写SQL语句
            $sql = "select * from sw_goods ";
            $sql .= " ".$page->limit;
            $goods_hot = $goods ->query($sql);
            // 4.获得页码列表
            $pagelist = $page->fpage();
            // $this->assign('goods_hot',$goods_hot);
            $this->assign('pagelist',$pagelist);


            $this -> display();
        }
        //商品详细信息
        function detail($goods_id){
            $goods = D('goods')->find($goods_id);
            $brand = D('brand')->find($goods['goods_brand_id']);//查询该商品的品牌
            $this->assign('goods_info',$goods);
            $this->assign('brand_info',$brand);
            $this -> display();
        }


        //        购物车页面
        function gwc1(){
            $this->display();
        }
        //       下订单页面
        function gwc2(){
            $this->display();
        }
        //      订单处理
        function do_order(){
            $this -> redirect('gwc3');
        }
        //        成功页面
        function gwc3(){
            $this->display();
        }
    }

