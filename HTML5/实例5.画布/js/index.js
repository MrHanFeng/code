$(function(){
    /*������*/
    var cvs_id1=document.getElementById('cvs_id1');
    var cvs1=cvs_id1.getContext("2d");
    cvs1.fillStyle='red';   //���ɫ
    cvs1.fillRect(100,50,20,30);//(x,y,width,height)

    /*����*/
    var cvs_id2=document.getElementById('cvs_id2');
    var cvs2=cvs_id2.getContext("2d");
     cvs2.moveTo(20,10);  //��һ����
     cvs2.lineTo(150,100);//�ڶ�����
     cvs2.lineTo(20,100);//��������
     cvs2.stroke();          //����

    /*��Բ*/
    var cvs_id3=document.getElementById('cvs_id3');
    var cvs3=cvs_id3.getContext("2d");
    cvs3.fillStyle="green";     //���ɫ
    cvs3.beginPath();           //��ʼ
    cvs3.arc(150,50,15,0,Math.PI*2);//��X��Y��R����ʼ�ǣ������ǣ�
    cvs3.closePath();   //����
    cvs3.fill();        //���
    //cvs3.stroke();

    /*����*/
    var cvs_id4=document.getElementById('cvs_id4');
    var cvs4=cvs_id4.getContext("2d");
    var grd=cvs4.createLinearGradient(0,0,175,50);//����ɫ(X,Y,width,height)
    grd.addColorStop(0,"black");//��ߵĿ�ʼ��ɫ
    grd.addColorStop(1,"white");//�ұߵĽ�����ɫ
    cvs4.fillStyle=grd;
    cvs4.fillRect(10,10,180,50);


});