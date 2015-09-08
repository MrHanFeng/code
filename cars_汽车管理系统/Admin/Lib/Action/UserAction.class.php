<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends AllowAction {
	public function __construct(){
		parent::__construct();
		$this->user=M('User');
	}

    public function index(){
        import('ORG.Util.Page');
        $tot=$this->user->count();
        $page=new Page($tot,10);
        $this->show=$page->show();
        $this->rows = $this->user->order('user.id')->limit($page->firstRow.','.$page->listRows)->select();
        $this->display();
    }
    public function delete(){
    	$id=$_GET['id'];
    	if($this->user->delete($id)){
    		$this->redirect('User/index');
    	}
    }

  public function edit(){
        $this->row=$this->user->find($_GET['id']);
        $this->display();
    }

    public function update(){
        $username=$_POST["username"];
        $powers=$_POST["powers"];
        $str=implode($powers);//把数组元素转化为字符串
        $sql="update user set powers='{$str}' where username='{$username}'";
        if($this->user->execute($sql)){
            $this->success("修改成功！",U('index'));
        }else{
            $this->error("修改失败！");
        }
    } 
    public function add(){
    	$this->display();
    }

    public function insert(){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $repassword=$_POST["repassword"];
        $powers=$_POST["powers"];
        $str=implode($powers);//把数组元素转化为字符串
        if( $password == $repassword){
        $sql="insert into user (username,password,powers) values ('{$username}','{$password}','{$str}')";
            if($this->user->execute($sql))
            {
                $this->success('添加成功',U('index'));
            }else{
                $this->error('添加失败',U('add'));
            }
        }else{
                $this->error('两次密码不一致',U('add'));
        }
    }
}