<form action = '/index.php'method = 'post'>
  <input type = 'text' name = 'name'>
  <input type = 'submit'>
</form>
<?php
echo $_POST['name'];


include "database.php";
$sql = "INSERT INTO bands (name) VALUES ('The Beatles')";
if ($conn -> query($sql) === TRUE){
  echo "New record created succesfully";
}else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
if($_Fullstack["REQUEST_METHOD"] == "POST"){
  $name = $_POST['name'];
  $id = $_POST['id'];
  if($name !=''){
    
  }

$sql = $conn->prepare("INSERT INTO Bands (name) VALUES (?)");

 $sql->bind_param("s", $name);

 $sql->execute();
}
?>