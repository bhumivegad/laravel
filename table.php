<?php
  class database
  {
    public function createdb()
    {
        $con=mysqli_connect("localhost","root","","geet1");
        if(isset($_REQUEST['submit']))
        {
            $email=$_REQUEST['email']; 
            $psw=$_REQUEST['psw']; 
            $sql="INSERT INTO `wood`(`email`, `password`) VALUES ('$email','$psw')";
            mysqli_query($con,$sql);
        }
    }
  }
  $obj = new database; 
  $obj -> createdb();   
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA INSERT</title>
</head>
<body>
    <form action="table.php" method="REQUEST">
        <label>EMAIL</label><br>
        <input type="text" name="email" placeholder=" enter email"><br><br>
        <label>PASSWORD</label><br>
        <input type="password" name="psw" placeholder="enter password"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>