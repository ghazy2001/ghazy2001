<?php
SESSION_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo 'connected';


//$sql = "CREATE TABLE `users` (
        //`u_id` INT NULL AUTO_INCREMENT ,
         // `u_name` VARCHAR(150) NOT NULL ,
          //`u_email` VARCHAR(250) NOT NULL ,
         // `u_pass` VARCHAR(150) NOT NULL ,
        //  PRIMARY KEY (`u_id`)) ENGINE = InnoDB";
//

//if ($conn->query($sql) === TRUE) {
 // echo "Table users created successfully";
//} else {
//  echo "Error creating table: " . $conn->error;
//}


//$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);

//if ($result->num_rows > 0) {
//  // output data of each row
 // while($row = $result->fetch_assoc()) {
 //   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  //}
//} else {
 // echo "0 results";
//}
//$conn->close();
?>