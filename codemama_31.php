<?php
function generatePermutations($input){
    $result=[];
    function backtrack(&$input, $start, &$result){
        if($start==strlen($input)){
            $result[]=$input;
            return;
        }
        for($i=$start; $i<strlen($input); $i++){
            $temp=$input[$start];
            $input[$start]=$input[$i];
            $input[$i]=$temp;
            backtrack($input, $start+1, $result);
            $temp=$input[$start];
            $input[$start]=$input[$i];
            $input[$i]=$temp;
        }
    }
    backtrack($input, 0, $result);
    sort($result);
    return implode(" ", $result);

}
$input = trim(fgets(STDIN));
echo generatePermutations($input)."\n";



?>