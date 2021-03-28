<?php
    // echo rsort($marks);
    $dbname = "marks";
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
    if($connection){
        // echo "connected";
    }
    $query = "SELECT * FROM results ORDER BY marks desc";
    $result = mysqli_query($connection,$query);
    $marks = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connection);
    
?>