<?php
$servername = "remotemysql.com";
$username = "VeQrto3CUM";
$password = "z7ddZzT72c";
$dbname = "VeQrto3CUM";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset('utf8');
$sql = "SELECT * from students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["student_name"]. " " . $row["student_id"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
