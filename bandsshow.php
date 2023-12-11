<?php
include('database.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Fullstack";

$sql = "SELECT * FROM bands";

$result = $conn->query($sql);

while($row = $result->fetch_array()){}
  $row['name'];
;
  if ($result->num_rows>0){

  };



?>