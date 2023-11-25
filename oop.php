<?php
class Human{

function __construct()
{
    echo "Emon is Good";
}
    public  $name;
    function sayHi(){
        echo "Hello\n";
    }
}
class Cat{
    function sayHi(){
        echo "\nMeow\n";
    }
}
class Dog{
    function sayHi(){
        echo "new new";
    }
}
$h1= new Human();
$h1->name ="Emon"; //set
$c2= new Cat();
$u3 =new Dog();
$h1->sayHi();
echo $h1->name; //get
$c2->sayHi();
$u3->sayHi();
?>