<?php

function testConnections(){
  $servername = "127.0.0.1";
  $database = "u240012342_Jordan_profile";
  $username = "Jordan";
  $password = "k/ZkMYj59";
  $port = "3306";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database , $port);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      return false;
  }else{
    return true;
  }

}
// $servername = "localhost";
// $database = "u240012342_Jordan_profile";
// $username = "Jordan";
// $password = "k/ZkMYj59";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// mysqli_close($conn);
?>
