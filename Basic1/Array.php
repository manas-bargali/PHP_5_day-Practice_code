<?php 
 $arr=array("apple","banana","Cherry");
 print_r($arr);


 $arra=["appple ",
 "banana",];
 print_r($arra);


 for($i=0;$i<count($arr);$i++){
    print_r($arr[$i]);
    echo "\n";

 }
 echo "\n";

 $count=0;
 while($count<count($arra)){
      print_r($arra[$count]);
      echo "\n";
      $count++;
   
 }
 ?>