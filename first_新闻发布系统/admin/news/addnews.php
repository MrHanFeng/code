<?php
header("Content-type:text/html;charset=GBK");
   session_start();

?>
<head>
  <style type="text/css">
      table{
        padding: 0;
        background: gray;
        margin:5,200,auto,5;
        text-align:center;
        /*display: inline;*/
        width:1000px;
        border:1px;
      }


    tr {
    color: black;
    border-right: 1px solid #C1DAD7;
    border-bottom: 1px solid #C1DAD7;
    border-top: 1px solid #C1DAD7;
    margin: 50px;
    }


  </style>
</head>
<body bgcolor="#f5f5f5" >
<table >
         <form name="addnews" action="dealaddnews.php" method="post">
                <tr>
                  <td><h3>�������</h3>
                  </td>
                
                </tr>

                <tr>
                   <td>���ű��⣺</td>
                  <td> <input type="text" name="title" size=81/></td>

                </tr>

                <tr>
                  <td>�������ݣ�</td>
                  <td> <textarea name="content" rows="20" cols="80"></textarea></td>
                </tr>

                <tr>
                  <td>�������ͣ�</td>
                  <td><label>
                      <select name="newstype" >
                        <option value="student">��������</option>
                        <option value="teacher" selected="selected">��������</option>
                      </select>
                      </label>
                 </td>
                </tr>

                <tr>
                  <td>�����ߣ�</td>
                  <td> <input type="text" name="fbname" size=20 value="<?php echo $_SESSION["superuser"]; ?>" /></td>
                </tr>

                <tr>
                  <td><input type="submit" value="����" /></td>
                  <td><input type="reset" value="��д" /></td>
                </tr>



       
           
            
          
        </form>
</table>
</body>