<!DOCTYPE html>

<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>金山词霸</title>
   <style type="text/css">

   </style>

</head>

<body>
   <img src="jinshan.png" width=15% />


   <h1>查询单词</h1>

   <form action="wordProcess.php" method="post">
      请输入英文单词： <input type="text" name="engword" />
      <input type="hidden" name="type" value="query" />
      <input type="submit" value="查询" />

   </form>
   <h1>添加单词</h1>
   <form action="wordProcess.php" method="post">
      请添加英文单词： <input type="text" name="engword" /><br />
      请添加中文注释： <input type="text" name="chword" /><br />
      <input type="hidden" name="type" value="add" />
      <input type="submit" value="添加" />

   </form>

</body>

</html>