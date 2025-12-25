<?php
  $arr=["Apple"=>"Red",
        "Banana"=>"Yellow",
        "Grapes"=>"Purple"];
  print_r($arr);

  foreach($arr as $fruit=>$color){
    echo "This fruit is ".$fruit." of color ".$color."\n";
  }
?>