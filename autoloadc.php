<!-- autoload class and include file -->

<?php
spl_autoload_register(function($class)
{
    include $class.'.php';
});
$obj = new stud;
$obj->stud_method();
echo"<br>";
$obj = new emp;
$obj->emp_method();
?>
