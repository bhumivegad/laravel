<?php
 class A
  {
    public function merg()
    {
        echo "this is method";
    }
  } 
 class B extends A
  {
    public function beta()
    {
        echo"hello";
         echo " ";
    }
  }

  $obj= new B;
  $obj ->beta();
  $obj ->merg();
 ?>