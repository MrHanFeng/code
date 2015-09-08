<?php
// 本类由系统自动生成，仅供测试用途
class ConsumerAction extends AllowAction {
	public function __construct(){
		parent::__construct();
		$this->consumer=M('Consumer');

	}

    public function index(){
        import('ORG.Util.Page');
        $tot=$this->consumer->count();
        $page=new Page($tot,10);
        $this->show=$page->show();
        $this->rows = $this->consumer->order('consumer.id')->limit($page->firstRow.','.$page->listRows)->select();
        $this->display();
    }
    public function delete(){
    	$id=$_GET['id'];
    	if($this->consumer->delete($id)){
    		$this->redirect('Consumer/index');
    	}
    }

  public function edit(){
        $this->row=$this->consumer->find($_GET['id']);
        $this->display();
    }

    public function update(){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $repassword=$_POST["repassword"];
        if( $password == $repassword){
            $sql="update consumer set password='{$password}' where username='{$username}'";
            if($this->consumer->execute($sql)){
            $this->success("修改成功！",U('index'));
            }else{
                $this->error("修改失败！");
            }
        }else{
                $this->error('两次密码不一致');
        }
       
    } 
    public function add(){
    	$this->display();
    }

    public function insert(){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $repassword=$_POST["repassword"];
        if( $password == $repassword){
        $sql="insert into consumer (username,password) values ('{$username}','{$password}')";
            if($this->consumer->execute($sql))
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