<?php

session_start();

$pagetitle='Page';

$do = isset($_GET['do']) ? $do= $_GET['do'] : 'manage' ;


//if the page is main page
if ($do == 'manage'){

    echo 'welcome you are manage category page';
    echo''; 
    echo '
        <br/> <a href="page.php?do=Add">Add</a>
        <br/> <a href="page.php?do=Insert">Insert</a>
    
    ';

} elseif($do == 'Add'){

    echo ' you are Add category page'; 

} elseif($do == 'Insert'){

    echo ' you are Insert category page'; 
}
else{
   echo 'Error there’s no page with name';
}