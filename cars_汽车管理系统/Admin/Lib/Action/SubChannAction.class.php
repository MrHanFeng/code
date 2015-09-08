<?php
// 本类由系统自动生成，仅供测试用途
class SubChannAction extends AllowAction {
    public function __construct(){
        parent::__construct();
        $this->subchann=M('subchann');
    }

    public function index(){
        $sql="select subchann.*,chann.name cname from subchann,chann where subchann.chann_id=chann.id order by subchann.id";
        $this->rows=$this->subchann->query($sql);
        $this->display();
    }

    public function delete(){
        $id=$_GET['id'];
        if($this->subchann->delete($id)){
            $this->redirect('SubChann/index');
        }
    }

    public function edit(){
        $chann=M('chann');
        $this->channes=$chann->order('id')->select();
        
        $this->row=$this->subchann->find($_GET['id']);
        $this->display();
    }

    public function update(){
        $this->subchann->create();
        if($this->subchann->save()){
            $this->success('修改成功',U('index'));
        }else{
            $this->error('修改失败',U('index'));
        }
    }

    public function add(){
        $chann=M('chann');
        $this->channes=$chann->order('id')->select();
        $this->display();
    }

    public function insert(){
        $this->subchann->create();
        if($this->subchann->add()){
            $this->success('添加成功',U('index'));
        }

    }
}