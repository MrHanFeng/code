<?php
// 本类由系统自动生成，仅供测试用途
class TypeAction extends AllowAction {
	public function __construct(){
		parent::__construct();
		$this->type=M('Type');		
	}

    public function index(){
        import('ORG.Util.Page');
        $tot=$this->type->count();
        $page=new Page($tot,10);
        $this->show=$page->show();
        $this->rows = $this->type->limit($page->firstRow.','.$page->listRows)->select();
        $this->display();
    }

    public function delete(){
    	$id=$_GET['id'];
    	if($this->type->delete($id)){
    		$this->redirect('Type/index');
    	}
    }

    public function edit(){
    	$this->row=$this->type->find($_GET['id']);
    	$this->display();
    }

    public function update(){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $status=$_POST["status"];
        $sql="update type set name='{$name}' where id='{$id}'";
        if($this->type->execute($sql)){
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
        $sql="insert into type (name) values ('{$name}')";
        if($this->type->execute($sql)){
            $this->success('添加成功',U('index'));
        }else{
            $this->error('添加失败');
        }

    }
}