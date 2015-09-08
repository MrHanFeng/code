<?php
// 本类由系统自动生成，仅供测试用途
class NewsAction extends AllowAction {
	public function __construct(){
		parent::__construct();
		$this->news=M('News');
        $this->chann=M('Chann');
		
	}
    public function search(){
           $title=$_POST['title'];
           $this->rows=$this->news->query("select news.times,news.id,news.title,news.link_flag as nlink,chann.name from news,chann where news.chann_id=chann.id and news.title like '%$title%'");
           if($this->rows){
            $this->display();
           }else{
            $this->error("暂无此新闻");
           }
    }

    public function index(){
        import('ORG.Util.Page');
        $tot=$this->news->count();
        $page=new Page($tot,10);
        $this->show=$page->show();
        $this->rows = $this->news->table('news')->field('news.id as kid,news.title as ktitle,news.chann_id as nchann_id,news.times as ktimes,news.link_flag as nlink')->order('news.id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->display();
    }

    public function delete(){
    	$id=$_GET['id'];
    	if($this->news->delete($id)){
    		$this->redirect('News/index');
    	}
    }

    public function edit(){
        $this->assign("link",$_GET["link"]);
        $this->channs=$this->chann->order('id')->select();
    	$this->row=$this->news->find($_GET['id']);
    	$this->display();
    }

    public function update(){
        $link=$_POST["link"];
        $id=$_POST["id"];
        $title=$_POST["title"];
        $content=$_POST["content"];
        $link_contents=$_POST["link-contents"];
        $times=time();
        $chann_id=$_POST["chann_id"];
        $up_flag=$_POST["ups"];
        if($link==2)
        {
            $sql="update news set title='{$title}', content='{$content}',times='{$times}', chann_id='{$chann_id}',up_flag='{$up_flag}' where id='{$id}'";
            if($this->news->execute($sql)){
                $this->success('修改成功',U('index'));
            }else{
                $this->error('修改失败');
            }
        }else{
            $sql1="update news set title='{$title}', link_contents='{$link_contents}',times='{$times}', chann_id='{$chann_id}',up_flag='{$up_flag}' where id='{$id}'";
            if($this->news->execute($sql1)){
                $this->success('修改成功',U('index'));
            }else{
                $this->error('修改失败');
            }
        }
    } 
    public function add(){
        $this->channs=$this->chann->order('id')->select();
    	$this->display();
    }
    public function insert(){
        $title=$_POST["title"];
        $content=$_POST["content"];
        $link_contents=$_POST["link-contents"];
        $times=time();
        $chann_id=$_POST["chann_id"];
        $link=$_POST["radios"];
        $up_flag=$_POST["ups"];
        if($link==1){
            $sql="insert into news (title,link_contents,times,chann_id,link_flag,focus,up_flag) values ('{$title}','{$link_contents}','{$times}','{$chann_id}','{$link}',0,'{$up_flag}')";

             if($this->news->execute($sql)){
                $this->success('添加成功',U('index'));
            }else{
                $this->error('添加失败');
            }
        }else{
            $sql="insert into news (title,content,times,chann_id,link_flag,focus,up_flag) values ('{$title}','{$content}','{$times}','{$chann_id}','{$link}',0,'{$up_flag}')";

             if($this->news->execute($sql)){
                $this->success('添加成功',U('index'));
            }else{
                $this->error('添加失败');
            }
        }
    }
}