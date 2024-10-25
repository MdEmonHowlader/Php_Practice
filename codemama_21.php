<?php
function caesCiph($str, $shi){
    $result = '';
    $shi=$shi % 26;
    for($i=0; $i<strlen($str); $i++){
        $chr=$str[$i];
        if(ctype_lower($chr)){
            $result .= chr((ord($chr)+$shi-97)%26+97);
        }
        else if(ctype_upper($chr)){
            $result .= chr((ord($chr)+$shi-65)%26+65);
        }
        else{
            $result .=$chr;
        }
    }
    return $result;

}
$input=trim(fgets(STDIN));
list($inputStr, $shiftNum)=explode(' ', $input, 2);
$shiftNum=intval($shiftNum);
$en=caesCiph($inputStr, $shiftNum);
echo $en . PHP_EOL;