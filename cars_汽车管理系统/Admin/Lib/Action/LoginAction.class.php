<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {

    public function index(){
        $this->display();
    }

    public function verify(){
        import('ORG.Util.Image');
        ob_end_clean();
        Image::buildImageVerify(4,5,'png',50,25); 
    }

    public function check(){
        $fcode=md5(strtolower($_POST['fcode']));
        $vcode=$_SESSION['verify'];

        if($fcode===$vcode){
            $user=M('user');
            $condition[username]=$_POST['username'];
            $condition[password]=$_POST['password'];
            $row=$user->where($condition)->select();
            if($row){
                $_SESSION['admin_username']=$_POST['username'];
                $sql="select id from user where username='{$_POST[username]}'";
                $rows=$user->query($sql);
                $_SESSION['admin_id']=$rows[0]['id'];
                $_SESSION['admin_login']=1;
                $this->success('登录成功',U('Index/index'));
            }else{
                $this->error('登录失败!',U('index'));
            }
        }else{
            $this->error('验证码错误!',U('index'));
        }

    }

    public function logout(){
        // 1.清空session数组
        $_SESSION=array();

        // 2.删除客户端cookie文件
        setcookie('PHPSESSID','',time()-1,'/');

        // 3.删除服务器session文件
        session_destroy();

        $this->success('退出成功',U('index'));
    }

}