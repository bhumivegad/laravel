<?php
    class database
    {
        public function insert()
        {
        $con=mysqli_connect("localhost","root","","test");
        if(isset($_REQUEST['roll']))
    {
        $roll=$_REQUEST['roll'];
        $name=$_REQUEST['name'];
        $sql="INSERT INTO `student`(`roll`, `name`) VALUES ('$roll','$name')";
        mysqli_query($con,$sql);
    }
        }
    }
        $obj=new database;
        $obj->insert();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA INSERT</title>
</head>
<body>
    <form action="connection.blade.php" method="REQUEST">
        <label>Roll no.</label><br>
        <input type="text" name="roll" placeholder="Enter a roll no."><br><br>
        <label>Name</label><br>
        <input type="text" name="name" placeholder="Enter a Name"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>