<?php 
// title all
    function gettitle(){
        global $pagetitle;
        if (isset($pagetitle)){
            echo $pagetitle;
        }else{
            echo 'Default';
        }
    }

    /*
     **home Redirect function [this function accept parameters]
     **$themsg = Echo the error message 
     **$url= the link you want to redirect to
     **$seconds = seconds before redirecting
    */
    function redirecthome($themsg, $url = null , $seconds = 3) {

        if ($url === null) {
            $url = 'index.php';
            $link ='Homepage';
        }
        else{

                if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== ''){
                $url = $_SERVER['HTTP_REFERER'];
                $link ='previound page';
                }else{
                    $url = 'index.php';
                    $link ='Homepage';
                }
            }
        echo $themsg;
        echo "<div class='alert alert-info'> you will be redirected to $link after $seconds Seconds</div>";
        header("refresh:$seconds;url=$url");
        exit();
    }

    
    
     /*
     **check item function v1.0
     **function to check item to database[function accept prameters]
     ** $select = the item to select [Example: user , item , category]
     **$from = the table to select from [Example: users , items , categories]
     **$value = the value of select
    */

    function checkitem($select, $from, $value){
        global $con;
        $statement = $con->prepare("SELECT $select FROM $from WHERE $select = ?");
        $statement->execute(array($value));
        $count = $statement->rowCount();
        return $count;
    }

    /*
     **count number of items function v1.0
     **function to count numer of items rows
     ** $item=the item count
     ** $table=the to choose from
    */

    function countItems($item, $table) {
        global $con;
        $stmt2 = $con->prepare("SELECT COUNT($item) FROM $table");
        $stmt2->execute();
        return $stmt2->fetchcolumn();
    }

    /*
    **Get latest records function v1.0
    **function Get latest items from databese [user , news , advert , contactus]
    **$select= field to select
    **$table=the table to choose from
    **$limit =Number of records to get
    */

    function getlatest($select, $table, $order, $limit = 5){
        global $con;
        $getstmt = $con->prepare("SELECT $select FROM $table ORDER BY $order DESC LIMIT $limit");
        $getstmt->execute();
        $rows = $getstmt->fetchAll();
        return $rows;
    }
?>