<?php
    interface a 
    {
        public function disp();
    }
    class demo implements a 
    {
        public function disp()
        {
            echo "display method";
        }
    }
$obj = new demo;
$obj->disp();

?>

<!-- display method -->

