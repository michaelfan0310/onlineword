<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>personal dictionary</title>
 <link href="styles.css" rel="stylesheet">

</head>
<body>
<div id="wrapper" >
<img src="jinshan.png" width=30% />



<h1><a href="wordQuery.php">Query_Word</a></h1>

<h1><a href="wordsAdd.php">Add_New_Word</a></h1>
<p>to my personal dictionary</p>   
</div>

<div id="btomfeed">
<?php
    $xmldoc=new DOMDocument();
    $xmldoc->load("words.xml");

    $words=$xmldoc->getElementsByTagName("word");

    echo "<div class='feed'>" ;   
    for($i=$words->length-1;$i>=0;$i--){
        $word=$words->item($i);
        $word_en=getNodeVal($word,"en");  
    // $word_en.onmousedown='alert($word_ch=getNodeVal($word,"ch");); '         
        // $word_ch=getNodeVal($word,"ch");                   
        echo $word_en."&nbsp"."&nbsp"."&nbsp";     
          }
    echo "</div >" ; 

    function  getNodeVal(&$MyNode,$tagName){
        return $MyNode->getElementsByTagName($tagName)->item(0)->nodeValue;
          }            

?>

</div >

</body>
</html>

