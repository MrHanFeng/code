<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends AllowAction {
    public function __construct(){
        parent::__construct();
        $this->user=M('user');
    }
    public function index(){
        $this->display();
    }

    public function header(){
        $this->display();
    }

    public function menu(){
        $username=$_SESSION['admin_username'];
        $sql="select * from user where username='{$username}'";
        $row=$this->user->query($sql);
        $this->assign("powers",$row[0]['powers']);
        $this->display();
    }

    public function main(){
        $this->display();
    }

}