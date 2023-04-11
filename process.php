<?php


        
        
    
        ?>

<?php

//including the database connection
include 'connect.php';

if(ISSET($_POST['btn'])){
    // Setting variables
    $username   = $_POST['user'];
    $password   = $_POST['pass'];
    $date       = $_POST['date'];
    $Email      = $_POST['email'];
    $Fullname   = $_POST['fullname'];
    $hashedpass = sha1($password);
    
    // Insertion Query
    $stmt = $con->prepare("INSERT INTO
                                    user(name, password, date, Email, FullName) 
                                    VALUES(:user, :pass, :zdate, :mail, :zfull)");
    $stmt->execute(array(

        'user'  => $username,
        'pass'  => $hashedpass,
        'zdate' => $date,
        'mail'  => $Email,
        'zfull' => $Fullname,
    ));

    if(empty($username) || empty($password) || empty($date) || empty($Email) || empty($Fullname))
        {
            header('location:signUp.php');
        }
        
        else {
            header('location:index.php');
           
        }
    
}
    ?>