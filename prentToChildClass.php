<?php 
class PrentClass{
    protected $name;
    function __construct($name) {
        $this->name= $name;
        $this->emon();
    }
    function emon(){
        echo "NO entry Emon. {$this->name}\n";
    }
}
class ChiildClass extends PrentClass{
    function emon(){
        parent:: emon();
        echo "Hi Orni\n";
    }
}
$eee= new ChiildClass("He is bad Student.... ");