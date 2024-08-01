<?php
function remoDuplCate($input){
    $seen =array();
    $result= "";

    for($i=0; $i<strlen($input); $i++){
        $char =$input[$i];
        if(!isset($seen[$char])){
            $seen[$char]=true;
            $result.=$char;
        }
    }
    return $result;

}
$input =trim(fgets(STDIN));
echo remoDuplCate($input);
?>