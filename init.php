<?php
include ("connect.php");
include ("includes/functions/function.php");
 //routes
$nav="includes/templates/";

//include the important files

//INclude navbar on all pages expect the one with $onNavbar variable

if(!isset($noNavbar)){include $nav . "navbar.php";};