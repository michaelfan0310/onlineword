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
    
echo '<div  id="enwords" >'; 
    for($i=$words->length-1;$i>=0;$i--){
        $word=$words->item($i);
        $word_en=getNodeVal($word,"en");  
        $word_ch=getNodeVal($word,"ch");    
        
       
// echo '<button type="submit" class="btn5" id="btn'.$i.'" >';   

echo '<button type="submit" class="btn5" value="'.$i.'" >';   
        echo $i.'.'.'&nbsp'.$word_en;
        echo "</button>" ;     
       
         }    
echo '</div >'; 

echo '<div  id="chwords" >'; 
    for($i=$words->length-1;$i>=0;$i--){
          $word=$words->item($i);
          $word_en=getNodeVal($word,"en");  
          $word_ch=getNodeVal($word,"ch");       
// echo '<button type="button" class="btn6" id="btnc'.$i.'" >';       

echo '<button type="button" class="btn6" value="'.$i.'" >';   
        echo $i.'.'.'&nbsp'.$word_ch;          
        echo "</button>" ; 
         
           }  
echo '</div >'; 

    function  getNodeVal(&$MyNode,$tagName){
        return $MyNode->getElementsByTagName($tagName)->item(0)->nodeValue;
          }   
  ?>

</div >
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>

 var $btns = $('.btn5');
  console.log($btns.size(),$btns.length)//4 4
var $btnsC=$('.btn6');
var wordsC=[];
var array=[]
$.each($btnsC,function(i,item){
          console.log(i,item.innerHTML);  
          wordsC.push($(item).text());  
          array.push(i); 
          // console.log(array);  
        
    }) 
  

 
$(':submit').click(function(){
     var length=$btns.length-1;
      var ind=length-$(this).val();
      // alert($($btns2[index]).html());
      alert(wordsC[ind]);
    })

$('.btn6').click(function(){
    //  var length=$btns.length-1;
     var ind=$(this).index();
      // var ind=length-$(this.id).innerHTML;
      // alert($($btns2[index]).html());
      alert($($btns[ind]).text());
    })

// for(var i=0;i<$btns.length;i++){


//   if($($btns[i]).click){
//           alert(words2[i]);
//         } 
//       }
 console.log(wordsC); 


  // for(let i=0; i<$btns.length;i++){
  //   console.log($btns[i].innerHTML);  
  //   $btns[i].click(function(){
  //     var dicwords=$btns[i].innerHTML;
  //     alter('ok');
  //   })
    
  // }


  //需求2. 取出第2个button的文本
  /*[index]/get(index): 得到对应位置的DOM元素*/

  console.log($btns.get(1).innerHTML,$btns[1].innerHTML);
 

// $(function () {
//   $('.btn5').onclick=function(){
//        console.log(this.innerHTML);
//             alert(this.$word_ch);
// }
// })          
       


</script>

</body>
</html>

