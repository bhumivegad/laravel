<?php
class A
{
  public $a = "hi!!";
  public function __construct()
  {
     echo $this ->a;
	 echo"<br>";
  }
}
class B extends A
{
   public $b = "456";
   public function __destruct()
   {
	   echo $this ->b;
	 
   }   
}
class C extends B
{
	public $c="123";
	public function disp()
	{
		echo $this ->c;
	
	}
}
$obj = new C;
$obj -> disp();

?>