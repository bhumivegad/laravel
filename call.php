<?php
class test
{
    public function __call($name,$parametres)
    {
        echo $name;
        echo $parametres;
    }
    public function demo($name,$parametres)
    {
        echo $name;
        echo $parametres;
    }
   
}
$obj = new test();
$obj -> demo("hello!");
?>