<?php
class pgdca
{
    public $x = 50;
    public $y = 50;
    public function add()
    {
       return $this -> x + $this ->y;
    }
}

$obj = new pgdca;
$z = $obj->add();
echo $z;
?>