<?php
// 本类由系统自动生成，仅供测试用途
class MessageAction extends AllowAction {
	public function __construct(){
		parent::__construct();
		$this->message=M('Message');
        $this->consumer=M('Consumer');
        $this->reply=M('Reply');
        $this->user=M('User');
	}

    public function index(){
        import('ORG.Util.Page');
        $tot=$this->message->count();
        $page=new Page($tot,10);
        $this->show=$page->show();
        $this->rows = $this->message->table('message')->join('user on message.consumer_id=user.id')->field('message.*,user.username as uname')->order('message.times desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->display();
    }

    public function delete(){
    	$id=$_GET['id'];
        $this->reply->execute("delete from reply where message_id=$id");
    	if($this->message->delete($id)){
    		$this->redirect('Message/index');
    	}
    }

    public function edit(){
        $this->assign('username',$_GET["username"]);
        $id=$_GET['id'];
        import('ORG.Util.Page');
        $tot=$this->reply->where("message_id=$id")->count();
        $page=new Page($tot,10);
        $this->show=$page->show();        
        $this->rrow=$this->reply->table('reply')->join('consumer on consumer.id=reply.consumer_id')->field('reply.flag as rflag,reply.ips as rips,reply.id as rid,reply.content as rcontent,reply.times as times,consumer.username as cusername')->where("reply.message_id=$id")->limit($page->firstRow.','.$page->listRows)->select();
    	$messages=$this->message->find($_GET['id']);
        $this->assign('row',$messages);
        import('ORG.Net.IpLocation');// 导入IpLocation类
        $Ip = new IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
        $area = $Ip->getlocation($messages["ips"]); // 获取某个IP地址所在的位置
        $this->assign('address',$area);
    	$this->display();
    }
    public function update(){
        $title=$_POST["title"];
        $content=$_POST["content"];
        $times=time();
        $flag=$_POST["flag"];
        $id=$_POST["msid"];
        //上传图片
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
            $sqlold="select img_url from message where id=$id";
            $rowimg=$this->message->query($sqlold);
            $oldimg=$rowimg[0]['img_url'];
            $sql="update message set flag=$flag,title='{$title}',content='{$content}',times='{$times}',img_url='{$img}' where id=$id";
            if($this->message->execute($sql))
            {
                unlink('./Public/uploads/'.$oldimg);
                $this->success("修改成功!",U('index'));
            }else{
                $this->error("修改失败！");
            }
        }else{
            $sql="update message set flag=$flag,title='{$title}',content='{$content}',times='{$times}' where id=$id";
            if($this->message->execute($sql))
            {
                $this->success("修改成功!",U('index'));
            }else{
                $this->error("修改失败！");
            }
        }
    }
    public function ajaxdelete(){
          $rid=$_POST["rid"];
          $sql="delete from reply where id=$rid";
          if($this->reply->execute($sql))
          {
            echo "1";
          }
    }
        public function ajaxflag(){
          $rid=$_POST["rid"];
          $sql="update reply set flag=1 where id=$rid";
          if($this->reply->execute($sql))
          {
            echo "1";
          }
    }
     public function insert(){
        $title=$_POST["title"];
        $content=$_POST["content"];
        $times=time();
        $consumer_id=$_SESSION['admin_id']; 
        $up=$_POST["ups"];
        $ips=get_client_ip();
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
                $sql="insert into message (title,content,times,up,consumer_id,flag,ips,img_url) values ('{$title}','{$content}','{$times}','{$up}','{$consumer_id}',2,'{$ips}','{$img}')";
                 if($this->message->execute($sql)){
                    $this->success('添加成功',U('index'));
                }else{
                    $this->error('添加失败');
                }
        }else{
                $this->error($upload->getErrorMsg());
        }     
    }
}