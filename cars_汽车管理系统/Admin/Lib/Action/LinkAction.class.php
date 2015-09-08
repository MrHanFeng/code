<?php
// 本类由系统自动生成，仅供测试用途
class LinkAction extends AllowAction {
	public function __construct(){
		parent::__construct();
		$this->link=M('Link');		
	}

    public function index(){
        import('ORG.Util.Page');
        $tot=$this->link->count();
        $page=new Page($tot,10);
        $this->show=$page->show();
        $this->rows = $this->link->table('link')->order('link.id')->limit($page->firstRow.','.$page->listRows)->select();
        $this->display();
    }

    public function delete(){
    	$id=$_GET['id'];
    	if($this->link->delete($id)){
    		$this->redirect('Link/index');
    	}
    }

    public function edit(){
    	$this->row=$this->link->find($_GET['id']);
    	$this->display();
    }

    public function update(){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $link_url=$_POST["link_url"];
        $sql="update link set name='{$name}', link_url='{$link_url}' where id='{$id}'";
        if($this->link->execute($sql)){
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
        $link_url=$_POST["link_url"];
        $sql="insert into link (name,link_url) values ('{$name}','{$link_url}')";
        if($this->link->execute($sql)){
            $this->success('添加成功',U('index'));
        }else{
            $this->error('添加失败');
        }

    }
}