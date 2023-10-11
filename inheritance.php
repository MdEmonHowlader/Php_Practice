<!-- Node :: Frist if there is parent class then if there extends in Child class then the value of child class will be printed -->

<?php

class ParentClass{
    protected $name;
    function __construct($name)
    {
        $this->sayhi();
    }
    function sayhi(){
        echo "hi from {$this->name}";
    }
}


class ChildClass extends ParentClass{
    function sayhi(){
        echo "Hello Emon";
    }
}

$ec= new ChildClass(" ");

?>