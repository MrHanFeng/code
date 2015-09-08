<?php
// 本类由系统自动生成，仅供测试用途
class ImageNewsAction extends AllowAction {
	public function __construct(){
		parent::__construct();
		$this->imagenews=M('imagenews');
        $this->type=M('Type');
		
	}
    public function search(){
           $title=$_POST['title'];
           $this->rows=$this->imagenews->query("select imagenews.times,imagenews.id,imagenews.title,imagenews.link_flag as nlink,type.name from imagenews,type where imagenews.type_id=type.id and imagenews.title like '%$title%'");
           if($this->rows){
            $this->display();
           }else{
            $this->error("暂无此图片新闻");
           }
    }

    public function index(){
        import('ORG.Util.Page');
        $tot=$this->imagenews->count();
        $page=new Page($tot,10);
        $this->show=$page->show();
        $this->rows = $this->imagenews->table('imagenews')->join('type on imagenews.type_id=type.id')->field('imagenews.id as kid,imagenews.title as ktitle,type.name as kname,imagenews.times as ktimes,imagenews.link_flag as nlink')->order('imagenews.id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->display();
    }

    public function delete(){
    	$id=$_GET['id'];
    	if($this->imagenews->delete($id)){
    		$this->redirect('ImageNews/index');
    	}
    }

    public function edit(){
        $this->assign("link",$_GET["link"]);
        $this->type=$this->type->order('id')->select();
    	$this->row=$this->imagenews->find($_GET['id']);
    	$this->display();
    }

    public function update(){
        $link=$_POST["link"];
        $id=$_POST["id"];
        $title=$_POST["title"];
        $content=$_POST["content"];
        $link_contents=$_POST["link-contents"];
        $times=time();
        $type_id=$_POST["type_id"];
        $up_flag=$_POST["ups"];
         //图片上传
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->thumb = true;
        $upload->thumbMaxWidth = '';
        $upload->thumbMaxHeight = '';
        $upload->savePath = './Public/uploads/';
        if($upload->upload()){
            $info=$upload->getUploadFileInfo();
            $img=$info[0]['savename'];
            $sqlold="select img_url from imagenews where id=$id";
            $rowimg=$this->imagenews->query($sqlold);
            $oldimg=$rowimg[0]['img_url'];
            if($link==2)
            {
                $sql="update imagenews set title='{$title}', content='{$content}',times='{$times}', type_id='{$type_id}',up_flag='{$up_flag}',img_url='{$img}' where id='{$id}'";
                if($this->imagenews->execute($sql)){
                    unlink('./Public/uploads/'.$oldimg);
                    $this->success('修改成功',U('index'));
                }else{
                    $this->error('修改失败');
                }
            }else{
                $sql1="update imagenews set title='{$title}', link_contents='{$link_contents}',times='{$times}', type_id='{$type_id}',up_flag='{$up_flag}',img_url='{$img}' where id='{$id}'";
                if($this->imagenews->execute($sql1)){
                    unlink('./Public/uploads/'.$oldimg);
                    $this->success('修改成功',U('index'));
                }else{
                    $this->error('修改失败');
                }
            }
        }else{
             if($link==2)
            {
                $sql="update imagenews set title='{$title}', content='{$content}',times='{$times}', type_id='{$type_id}',up_flag='{$up_flag}' where id='{$id}'";
                if($this->imagenews->execute($sql)){
                    $this->success('修改成功',U('index'));
                }else{
                    $this->error('修改失败');
                }
            }else{
                $sql1="update imagenews set title='{$title}', link_contents='{$link_contents}',times='{$times}', type_id='{$type_id}',up_flag='{$up_flag}' where id='{$id}'";
                if($this->imagenews->execute($sql1)){
                    $this->success('修改成功',U('index'));
                }else{
                    $this->error('修改失败');
                }
            }
        }
    } 
    public function add(){
        $this->type=$this->type->order('id')->select();
    	$this->display();
    }
    public function insert(){
        $title=$_POST["title"];
        $content=$_POST["content"];
        $link_contents=$_POST["link-contents"];
        $times=time();
        $type_id=$_POST["type_id"];
        $link=$_POST["radios"];
        $up_flag=$_POST["ups"];
        //图片上传
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->thumb = true;
        $upload->thumbMaxWidth = '';
        $upload->thumbMaxHeight = '';
        $upload->savePath = './Public/uploads/';
        if($upload->upload()){
            $info=$upload->getUploadFileInfo();
            $img=$info[0]['savename'];
            if($link==1){
                $sql="insert into imagenews (title,link_contents,times,type_id,link_flag,focus,up_flag,img_url) values ('{$title}','{$link_contents}','{$times}','{$type_id}','{$link}',0,'{$up_flag}','{$img}')";

                 if($this->imagenews->execute($sql)){
                    $this->success('添加成功',U('index'));
                }else{
                    $this->error('添加失败');
                }
            }else{
                $sql="insert into imagenews (title,content,times,type_id,link_flag,focus,up_flag,img_url) values ('{$title}','{$content}','{$times}','{$type_id}','{$link}',0,'{$up_flag}','{$img}')";

                 if($this->imagenews->execute($sql)){
                    $this->success('添加成功',U('index'));
                }else{
                    $this->error('添加失败');
                }
            }
        }else{
                $this->error($upload->getErrorMsg());
        }
    }
}