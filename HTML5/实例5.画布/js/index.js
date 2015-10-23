$(function(){
    /*画矩形*/
    var cvs_id1=document.getElementById('cvs_id1');
    var cvs1=cvs_id1.getContext("2d");
    cvs1.fillStyle='red';   //填充色
    cvs1.fillRect(100,50,20,30);//(x,y,width,height)

    /*画线*/
    var cvs_id2=document.getElementById('cvs_id2');
    var cvs2=cvs_id2.getContext("2d");
     cvs2.moveTo(20,10);  //第一个点
     cvs2.lineTo(150,100);//第二个点
     cvs2.lineTo(20,100);//第三个点
     cvs2.stroke();          //结束

    /*画圆*/
    var cvs_id3=document.getElementById('cvs_id3');
    var cvs3=cvs_id3.getContext("2d");
    cvs3.fillStyle="green";     //填充色
    cvs3.beginPath();           //开始
    cvs3.arc(150,50,15,0,Math.PI*2);//（X，Y，R，起始角，结束角）
    cvs3.closePath();   //结束
    cvs3.fill();        //填充
    //cvs3.stroke();

    /*渐变*/
    var cvs_id4=document.getElementById('cvs_id4');
    var cvs4=cvs_id4.getContext("2d");
    var grd=cvs4.createLinearGradient(0,0,175,50);//渐变色(X,Y,width,height)
    grd.addColorStop(0,"black");//左边的开始颜色
    grd.addColorStop(1,"white");//右边的结束颜色
    cvs4.fillStyle=grd;
    cvs4.fillRect(10,10,180,50);


});