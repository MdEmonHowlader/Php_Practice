<?php
  function CheckTen($a, $b){
    if($a==10 || $b==10 || ($a+$b)==10){
      return true;
    }else{
      return false;
    }
  }
  fscanf(STDIN, "%d %d", $a, $b);

  if(CheckTen($a , $b)){
    echo "True\n";
  }else{
    echo "False";
  }

?>