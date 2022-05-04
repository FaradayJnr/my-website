<?php
    //Declare your variables
    $email = $_POST['email'];
    

    //Connect mySql database
    $conn = new mysqli('localhost', 'root', '', 'testToday');

    if ($conn -> connect_error){
        die('Connection Failed:' $conn -> connect_error);
    }
    else{
        $stmt = $conn -> prepare("insert into registration(email) values (?)");
        $stmt -> execute();
        echo "Registration Successful";
        $stmt -> close();
        $conn -> close();
    }
?>