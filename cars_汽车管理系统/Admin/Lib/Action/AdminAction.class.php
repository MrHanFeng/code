<?php
// 本类由系统自动生成，仅供测试用途
class AdminAction extends AllowAction {
	public function __construct(){
		parent::__construct();
		$this->user=M('user');
		
	}
    public function edit(){
        $username=$_SESSION['admin_username'];
    	$sql="select * from user where username='{$username}'";
        $this->row=$this->user->query($sql);
    	$this->display();
    }

    public function update(){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $repassword=$_POST["repassword"];
        if($password == $repassword){
            $sql="update user set password='{$password}' where username='{$username}'";
            if($this->user->execute($sql))
                {
                    $this->success('修改成功');
                }else{
                    $this->error('修改失败',U('edit'));
                }
        }else{
             $this->error('两次密码不一致',U('edit'));
        }
    } 
}