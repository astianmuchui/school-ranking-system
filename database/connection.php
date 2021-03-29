<?php
 $dbname = "marks";
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpassword = "";
 $connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
 if($connection){
     // echo "connected";
 }
 ?>