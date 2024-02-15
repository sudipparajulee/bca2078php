<?php
 $server = "localhost";
    $username = "root";
    $password = "";
    $database = "mydatabase";
    $con = mysqli_connect($server, $username, $password, $database);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    //sql to create marks table
    $sql = "CREATE TABLE marks ( 
    id INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    student_id INT(11) UNSIGNED, 
    sub1 INT(6) NOT NULL , 
    sub2 INT(6) NOT NULL , 
    sub3 INT(6) NOT NULL
    )";

    if(mysqli_query($con, $sql)){
        echo "Table created successfully";
    }
    else{
        echo "Error creating table: " . mysqli_error($con);
    }

    mysqli_close($con);
?>