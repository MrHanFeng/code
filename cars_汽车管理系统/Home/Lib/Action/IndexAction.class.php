<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function __construct(){
        parent::__construct();
        $this->news=M('News');  
        $this->chann=M('Chann'); 
        $this->subchann=M('SubChann');
        $this->imagenews=M('ImageNews');
        $this->type=M('Type'); 
        $this->link=M('Link');
        $this->consumer=M('Consumer');
        $this->message=M('Message');
        $this->reply=M('Reply');         
    }
    public function index(){
        //导航遍历
        $arr=$this->chann->query("select * from chann where status=1 order by id");
        foreach ($arr as $key => $value) {
                $arr1 = $this ->subchann-> query("select b.id,b.name from subchann b,chann c where c.id = b.chann_id and c.id = ".$value["id"]);
                  $arr[$key]["subchann"] = $arr1;
            }
        $this ->assign("all",$arr); 
        //幻灯片遍历
        $this->banner=$this->imagenews->query("select * from imagenews where type_id=4");
        //新闻遍历
        $this->zhengcenews=$this->news->query("select * from news where chann_id='5_4' order by id desc limit 5");
        $this->xinxinews=$this->news->query("select * from news where chann_id='5_5' order by id desc limit 5");
        
        //图片新闻遍历
        $this->newsleft=$this->imagenews->query("select * from imagenews where type_id=5 order by id desc limit 1");
        $this->newsright=$this->imagenews->query("select * from imagenews where type_id=6 order by id desc limit 1");
        $this->worldleft=$this->imagenews->query("select * from imagenews where type_id=7 order by id desc limit 1");
        $this->worldright=$this->imagenews->query("select * from imagenews where type_id=8 order by id desc limit 6");
        $this->luntan=$this->imagenews->query("select * from imagenews where type_id=9 order by id desc limit 7");
        $this->luntanhot=$this->imagenews->query("select * from imagenews where type_id=10 order by id desc limit 1");
        $this->luntanhotlogo=$this->imagenews->query("select * from imagenews where type_id=11 order by id desc limit 1");
        $this->luntanhotsmall=$this->imagenews->query("select * from imagenews where type_id=12 order by id desc limit 4");
        $this->luntanhotnone=$this->imagenews->query("select * from imagenews where type_id=20 order by id desc limit 8");
        //房车论坛遍历
        $messages = $this->message->table('message')
        ->join('user on user.id=message.consumer_id')
        ->field('message.*,user.username as uname')->where('message.flag=1')->order('message.id desc')->limit(8)->select();

         foreach ($messages as $key => $value) {
            $arr1 = $this ->reply-> query("select count(id) as mcounts from reply where reply.message_id = ".$value["id"]);
              $messages[$key]["mcounts"] = $arr1;
          }
        $this ->assign("messages",$messages);
        //右边广告遍历
        $this->ad1=$this->imagenews->query("select * from imagenews where type_id=13 order by id desc limit 1");
        $this->ad2=$this->imagenews->query("select * from imagenews where type_id=14 order by id desc limit 1");
        //房车营地遍历
        $this->yingdi=$this->imagenews->query("select * from imagenews where type_id=15 order by id desc limit 1");
        $this->yingdinews=$this->news->query("select * from news where chann_id='6_10' order by id desc limit 3");
        //房车改装遍历
        $this->gaizhuang=$this->imagenews->query("select * from imagenews where type_id=16 order by id desc limit 1");
        $this->gaizhuangnews=$this->news->query("select * from news where chann_id='6_7' order by id desc limit 3");
        //二手交易遍历
        $this->ershounews=$this->news->query("select * from news where chann_id='6_12' order by id desc limit 12");
        //底板长广告遍历
        $this->adbot=$this->imagenews->query("select * from imagenews where type_id=17 order by id desc limit 1"); 
        //房车摄影遍历
        $this->sheyingbig=$this->imagenews->query("select * from imagenews where type_id=18 order by id desc limit 1");
        $this->sheyingsmall=$this->imagenews->query("select * from imagenews where type_id=19 order by id desc limit 6");

        //友情链接遍历
        $this->link=$this->link->query("select * from link"); 
        $this->display();
    }
    public function news_list(){
        //导航遍历
        $arr=$this->chann->query("select * from chann where status=1 order by id");
        foreach ($arr as $key => $value) {
                $arr1 = $this ->subchann-> query("select b.id,b.name from subchann b,chann c where c.id = b.chann_id and c.id = ".$value["id"]);
                  $arr[$key]["subchann"] = $arr1;
            }
        $this ->assign("all",$arr);
        //幻灯片遍历
        $this->banner=$this->imagenews->query("select * from imagenews where type_id=4");
        //新闻列表遍历
        $id=$_GET["id"];
        import('ORG.Util.Page');
        $tot=$this->news->where("chann_id='$id'")->count();
        $page=new Page($tot,20);
        $this->show=$page->show();
        $this->rows = $this->news->table('news')->where("chann_id='$id'")->order('news.id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->display();
    }
    public function info(){
        //导航遍历
        $arr=$this->chann->query("select * from chann where status=1 order by id");
        foreach ($arr as $key => $value) {
                $arr1 = $this ->subchann-> query("select b.id,b.name from subchann b,chann c where c.id = b.chann_id and c.id = ".$value["id"]);
                  $arr[$key]["subchann"] = $arr1;
            }
        $this ->assign("all",$arr);
        //幻灯片遍历
        $this->banner=$this->imagenews->query("select * from imagenews where type_id=4");
        //新闻内容遍历
        $id=$_GET["id"];
        $this->rows=$this->news->find($id);
        $this->display();
    }
     public function imagenewsinfo(){
        //导航遍历
        $arr=$this->chann->query("select * from chann where status=1 order by id");
        foreach ($arr as $key => $value) {
                $arr1 = $this ->subchann-> query("select b.id,b.name from subchann b,chann c where c.id = b.chann_id and c.id = ".$value["id"]);
                  $arr[$key]["subchann"] = $arr1;
            }
        $this ->assign("all",$arr);
        //幻灯片遍历
        $this->banner=$this->imagenews->query("select * from imagenews where type_id=4");
        //新闻内容遍历
        $id=$_GET["id"];
        $this->rows=$this->imagenews->query("select * from imagenews where id='$id'");
        $this->display();
    }
    public function login(){
         //导航遍历
        $arr=$this->chann->query("select * from chann where status=1 order by id");
        foreach ($arr as $key => $value) {
                $arr1 = $this ->subchann-> query("select b.id,b.name from subchann b,chann c where c.id = b.chann_id and c.id = ".$value["id"]);
                  $arr[$key]["subchann"] = $arr1;
            }
        $this ->assign("all",$arr);
        $this->display();
    }
    public function dologin(){
            $condition[username]=$_POST['username'];
            $condition[password]=$_POST['password'];
            $row=$this->consumer->where($condition)->select();
            if($row){
                $_SESSION['consumer_username']=$_POST['username'];
                $sql="select id from consumer where username='{$_POST[username]}'";
                $rows=$this->consumer->query($sql);
                $_SESSION['consumer_id']=$rows[0]['id'];
                $_SESSION['consumer_login']=1;
                $this->success('登录成功',U('Index/index'));
            }else{
                $this->error('登录失败!');
            }
    }
    public function register(){
         //导航遍历
        $arr=$this->chann->query("select * from chann where status=1 order by id");
        foreach ($arr as $key => $value) {
                $arr1 = $this ->subchann-> query("select b.id,b.name from subchann b,chann c where c.id = b.chann_id and c.id = ".$value["id"]);
                  $arr[$key]["subchann"] = $arr1;
            }
        $this ->assign("all",$arr); 
        $this->display();
    }
    public function regist(){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $birthday=$_POST["birthday"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $numbers=$_POST["numbers"];
        $note=$_POST["note"];
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
            $sql="insert into consumer (username,password,email,birthday,phone,address,numbers,note,img_url) 
            values ('$username','$password','$email','$birthday','$phone','$address','$numbers','$note','$img')";
            if($this->consumer->execute($sql)){
                    $this->success('注册成功',U('login'));
                }else{
                    $this->error('注册失败');
                }
        }else{
                $this->error($upload->getErrorMsg());
        }

    }
}