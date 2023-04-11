<?php

    include ("connect.php");

    //routes

    $lang='includes/languages/';
    $tpl='includes/temblete/';
    $css='layout/CSS/';
    $nav='includes/temblete/';
    $func='includes/functions/';
    $font='';
    
    //include the important files

    include ( $lang . 'english.php') ;
    include  ($tpl . 'header.php'); 
    include  ($func . 'function.php'); 

    //INclude navbar on all pages expect the one with $onNavbar variable

    if(!isset($noNavbar)){include $nav . "navbar.php";};

?>