<?php

 /* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO(php data object)
*/
// Connecting to the Database we need:-
   $servername = "localhost";
   $username = "root";
   $Password = "";
   $database = "bloodbank";

// Create a connection
  $conn = mysqli_connect($servername, $username, $Password,$database);

// Die if connection was not successful
   if (!$conn){
       die("Sorry we failed to connect: ". mysqli_connect_error());
  }
  else{
     // echo "Connection was successful";
  }

?>



