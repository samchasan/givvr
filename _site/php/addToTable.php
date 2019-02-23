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

  // sql to add data to table
  $sql = "INSERT INTO test_data (business_name, address, email, phone)
  VALUES ('Melany Kitchen', '100 Flatbush Ave', 'melanykitchen@gmail.com','949-212-9876')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

?>
