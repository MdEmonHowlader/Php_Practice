<?php
class Funde{
    public $fund;
    function __construct($initialFunde=0)
    {
        $this->fund= $initialFunde;
    }

    public function addFund($money){
        $this->fund+=$money;

    }

    public function deduetFund($money){
        $this->fund-= $money;

    }
    public function getTotal(){
        echo "Total Fund is $this->fund\n";
    }
}
$ourFund= new Funde(100);
$ourFund->getTotal();
$ourFund->addFund(182);
$ourFund->getTotal();
$ourFund->deduetFund(20);
$ourFund->getTotal();



?>