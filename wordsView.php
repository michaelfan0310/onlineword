<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>personal dictionary</title>
 <link href="styles.css" rel="stylesheet">

</head>

<body>
<div id="wrapper" class="hffeed">
<img src="jinshan.png" width=30% />


<h1>查询单词</h1>

   <form action="wordProcess.php" method="post" >
          请输入英文单词/Words： <input type="text" name="engword" />
              <input type="hidden" name="type"  value="query" />
    		 

   <p>&nbsp;&nbsp;验证码/checkCode:&nbsp;<input type="text" id="psw2" name="checkCode"  /> 
   <img src="checkCode.php" onclick="this.src='checkCode.php?aa='+Math.random()" /></p>  

      <input type="submit" value="查询" />
    </form>

</div>
</body>
    <?php

    
      //错误类型处理
        if( !empty( $_GET["errno"] ) ){
            
          $err = $_GET["errno"];
          
          if( $err == 1 ){
            echo "<script type='text/javascript'>alert('请填入单词和解释!');</script>";
            echo "<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='red' size='3' >您的用户名或密码错误!</font>";
            
          }else if( $err == 2 ){
            echo "<script type='text/javascript'>alert('单词和解释不能为空!');</script>";
            echo "<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='red' size='3' >用户名或密码不能为空!</font>";
          }else if( $err == 3 ){
              echo "<script type='text/javascript'>alert('验证码出错!');</script>";
              echo "<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='red' size='3' >验证码出错!!</font>";
        }

        }
        // <?php echo $_COOKIE['usrid'];

    ?>


</html>

