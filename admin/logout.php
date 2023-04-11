<?php
    $pagetitle='loguot';
    session_start();  //start the session

    session_unset();  //unset the data

    session_destroy();  //destroy the session

    header('location: index.php');

    exit();

?>