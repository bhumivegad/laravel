
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h2>Table </h2>
<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Message</th>
    <th>city</th>
  </tr>

<?php
    $con = new mysqli("localhost","root","","bhumi");
    $sql = "SELECT * FROM `table1`";
    $res = $con->query($sql);
    while($a = $res->fetch_array())
    {
?> 
  <tr>
  <td><?php echo $a['fnm'];?></td>
  <td><?php echo $a['lnm'];?></td>
  <td><?php echo $a['msg'];?></td>
  <td><?php echo $a['city'];?></td>
<?php
    }
    ?>
    </table>
</body>
</html>
