<?php
interface b 
{
    public function demo();
}
class c implements b 
{
    public function demo()
        {
            echo " display method";
        }
}
class D extends c
{
    public function xyz()
        {
            echo "two class display method";
        }
}

$obj = new D;
$obj->demo();
echo"<br>";
$obj->xyz();
?>
<!-- display method
two class display method -->