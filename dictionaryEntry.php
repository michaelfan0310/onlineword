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
  

    for($i=$words->length-1;$i>=0;$i--){
        $word=$words->item($i);
        $word_en=getNodeVal($word,"en");  
        $word_ch=getNodeVal($word,"ch");    
        
       
        echo '<button type="button" class="btn5" >';                 
        echo $i.'.'.'&nbsp'.$word_en;
        echo "</button>" ;     
       
         }    
         
         for($i=$words->length-1;$i>=0;$i--){
          $word=$words->item($i);
          $word_en=getNodeVal($word,"en");  
          $word_ch=getNodeVal($word,"ch");       
          
  
        echo '<button type="button" class="btn6" >';                 
          echo $i.'&nbsp'.$word_ch;          
          echo "</button>" ; 
         
           }  

    function  getNodeVal(&$MyNode,$tagName){
        return $MyNode->getElementsByTagName($tagName)->item(0)->nodeValue;
          }   
  ?>

</div >
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>

 var $btns = $('.btn5');
  console.log($btns.size(),$btns.length)//4 4
var $btns2=$('.btn6');
var words2=[];

$.each($btns2,function(i,item){
          console.log(i,item.innerHTML);  
          words2.push(item.innerHTML);         
        
    }) 
  
  $(function(){
 
    $($('.btn5')).click(function(index,item){
      var index=this.innerHTML.$i;
      alert($($btns2[index]).html());
    })
  }) 

// for(var i=0;i<$btns.length;i++){


//   if($($btns[i]).click){
//           alert(words2[i]);
//         } 
//       }
 console.log(words2); 


  // for(let i=0; i<$btns.length;i++){
  //   console.log($btns[i].innerHTML);  
  //   $btns[i].click(function(){
  //     var dicwords=$btns[i].innerHTML;
  //     alter('ok');
  //   })
    
  // }


  //需求2. 取出第2个button的文本
  /*[index]/get(index): 得到对应位置的DOM元素*/
  // $.foreach()
  console.log($btns.get(1).innerHTML,$btns[1].innerHTML)
 

// $(function () {
//   $('.btn5').onclick=function(){
//        console.log(this.innerHTML);
//             alert(this.$word_ch);
// }
// })          
       


</script>

</body>
</html>

