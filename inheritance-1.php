<?php
class Constructor{
    public $name;
    public $dep;
    function __construct($name, $dep)
    {
        $this->name=$name;
        $this->dep=$dep;
    }
   function intor()
   {
    echo "Name: {$this->name}\nDep: {$this->dep}\n";
   }
}

class Emon extends Constructor{
    function mass(){
        echo "Hi I am {$this->name}\n";
    }
}