<?php 
function CashWithdraw($cash){
    $blance=2000000;
    if($cash>$blance){
        throw new Exception("Not Found");
    }
    return true;
}
try{
    CashWithdraw(2000000);
    echo ("Successfully");
}catch(Exception $e){
    echo ($e->getMessage());
}

?>