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




 <h1>ADD WORDS</h1>
  <form action="wordProcess.php" method="post" id="wordForm">
           English Word: <input type="text" name="engword" id="enword" required minlength="2"/><br/>
           请添加中文注释/Chiness: <input type="text" name="chword" id="chword" required minlength="2"/><br/>
           
      <p>&nbsp;&nbsp;验证码/Code:&nbsp;<input type="text" id="psw2" name="checkCode"  required /> 
      <img src="checkCode.php" onclick="this.src='checkCode.php?aa='+Math.random()" /></p>   

         <input type="hidden" name="type"  value="add" />
    		 <input type="submit" value="Submit" />
  
    </form>
    </div>

<script type="text/javascript" src="js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
    // 声明式验证：程序员只需要声明各种验证规则，可以自定义验证错误信息
    $('#wordForm').validate({
        messages: {
            engword: {
                required: 'This field is required.',
                minlength: 'Please enter at least 2 characters.'
            },
            chword: {
                required: 'This field is required.',
                rangelength: 'Please enter at least 2 characters'
            },
            checkCode: {
                required: 'This field is required.',
                // equalTo: '确认密码不相同'
            },
        }
    });
</script>
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
       

    ?>


</html>