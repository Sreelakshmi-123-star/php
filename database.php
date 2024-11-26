<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
{
 echo "Connected Successfully";
}
$sql = "INSERT INTO class (class,rollno,mark,grade)
VALUES ('plustwo', 1, 20,'b')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
