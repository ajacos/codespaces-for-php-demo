<?php
echo "Hello World";

$servername = "sql12.freesqldatabase.com";
$username = "sql12663220";
$password = "V6FYSp57H4";
$dbname = "sql12663220";

// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$stmt = $conn->prepare('SELECT * FROM users');
$stmt->execute();
foreach ($stmt as $row) {
  $id = $row['id'];
  $name = $row["Name"];
  $email = $row["email"];
  $age = $row["age"];
}
?>