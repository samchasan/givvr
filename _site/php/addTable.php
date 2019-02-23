<?php
$servername = "Samuels-MacBook-Pro.local";
$username = "root";
$password = "1Ab029384756b!";
$dbname = "Givvr";

  // create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // sql to create table
  $sql = "CREATE TABLE test_data (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  business_name VARCHAR(30) NOT NULL,
  address VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  phone VARCHAR(20),
  reg_date TIMESTAMP
  )";

  if ($conn->query($sql) === TRUE) {
      echo "Table test_data created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }

  $conn->close();

?>
