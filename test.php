<?php
class A
{
	public $a = "hello!!!!";
	public function test()
	{
		echo $this -> a;
	}
}	
class B extends A
{
	public $b = "PGDCA";
	public function disp()
	{
		echo $this -> b;
	}
}	
class C extends B
{
	
}
$obj = new C;
$obj -> test();
$obj -> disp();

?>