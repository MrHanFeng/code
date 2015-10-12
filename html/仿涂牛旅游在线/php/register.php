<?php
    $conn=mysql_connect('localhost','root','root');
    mysql_select_db('shixun_test');
    mysql_query('set names utf8');

    function deal_data($str){
        return trim(mysql_real_escape_string($str));
    }

    switch ($_GET['action']){
        case 1:
            check_username($_POST['user_username']);
            break;
        case 2:
            check_password();
            break;
//        case 3:
//            check_password();
//            break;
    }

    function check_username($name){
        $username=deal_data($name);
        $sql="select user_username from ajax_user where user_username='".$username."'";
        $re=mysql_query($sql);
        $num=mysql_num_rows($re);
        exit($num);
    }
    function check_password(){

    }


    function insert_data(){

    }