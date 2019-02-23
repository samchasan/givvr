<?php
$servername = "Samuels-MacBook-Pro.local";
$username = "itp";
$password = "1Ab029384756b!";

  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Create database
  $sql = "CREATE DATABASE Givvr";
  if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
  } else {
      echo "Error creating database: " . $conn->error;
  }

  $conn->close();
  ?>
