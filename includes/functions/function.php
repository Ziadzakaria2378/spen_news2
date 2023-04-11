<?php
 function checkitem($select, $from, $value){
    global $con;
    $statement = $con->prepare("SELECT $select FROM $from WHERE $select = ?");
    $statement->execute(array($value));
    $count = $statement->rowCount();
    return $count;
}
//********************************************************* */
function redirecthome($themsg, $url = null , $seconds = 3) {

    if ($url === null) {
        $url = 'index.php';
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
    header("refresh:$seconds;url=$url");
    exit();
}



?>