<?php
    $checkCode=$_POST['checkCode'];
  
    session_start();   
    
    
    if($checkCode != $_SESSION['myCheckCode']){
        header("Location: wordsView.php?errno=3");
        exit();
    } 

    $type=$_REQUEST['type'];
    
    $xmldoc=new DOMDocument();
    $xmldoc->load("words.xml");
    
    
    if($type=="query"){
        //接受新的单词
        $query_word=$_REQUEST['engword'];
        
        $words=$xmldoc->getElementsByTagName("word");
        $isEnter=false;
        for($i=0;$i<$words->length;$i++){
            $word=$words->item($i);
            $word_en=getNodeVal($word,"en");
            
            if($query_word==$word_en){                
                $isEnter=true;
                echo $query_word."&nbsp;对应中文是：".getNodeVal($word,"ch")."<br/>";
            }
        }       
        if(!$isEnter){
           echo "<br/>查询无此词条！！";
    }
    echo '<a href="wordsView.php">返回主界面</a>';
    }elseif($type=="add"){
        $root=$xmldoc->getElementsByTagName("words")->item(0);
        $new_word=$xmldoc->createElement("word");
        $new_word_en=$xmldoc->createElement("en");
        $new_word_ch=$xmldoc->createElement("ch");
        $new_word_en->nodeValue=$_REQUEST['engword'];
        $new_word_ch->nodeValue=$_REQUEST['chword'];
        $root->appendChild($new_word);
        $new_word->appendChild($new_word_en);
        $new_word->appendChild($new_word_ch);
        
        $b=$xmldoc->save("words.xml");
        if(!$b){
            echo "添加失败！！";
        }else{
            echo "添加成功！！";
            }
            echo "<br/>".'<a href="dictionaryEntry.php">返回主界面</a>';
    }
   
    
    function  getNodeVal(&$MyNode,$tagName){
        return $MyNode->getElementsByTagName($tagName)->item(0)->nodeValue;
    }
     
?>