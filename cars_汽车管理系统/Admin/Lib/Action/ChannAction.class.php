<?php
// 本类由系统自动生成，仅供测试用途
class ChannAction extends AllowAction {
	public function __construct(){
		parent::__construct();
		$this->chann=M('Chann');		
	}

    public function index(){
        import('ORG.Util.Page');
        $tot=$this->chann->count();
        $page=new Page($tot,10);
        $this->show=$page->show();
        $this->rows = $this->chann->limit($page->firstRow.','.$page->listRows)->select();
        $this->display();
    }

    public function delete(){
    	$id=$_GET['id'];
    	if($this->chann->delete($id)){
    		$this->redirect('Chann/index');
    	}
    }

    public function edit(){
    	$this->row=$this->chann->find($_GET['id']);
    	$this->display();
    }

    public function update(){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $status=$_POST["status"];
        $sql="update chann set name='{$name}', status='{$status}' where id='{$id}'";
        if($this->chann->execute($sql)){
            $this->success('修改成功',U('index'));
        }else{
            $this->error('修改失败');
        }
    } 
    public function add(){
    	$this->display();
    }
    public function insert(){
        $name=$_POST["title"];
        $status=$_POST["status"];
        $sql="insert into chann (name,status) values ('{$name}','{$status}')";
        if($this->chann->execute($sql)){
            $this->success('添加成功',U('index'));
        }else{
            $this->error('添加失败');
        }

    }
}