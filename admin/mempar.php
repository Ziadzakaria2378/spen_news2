<?php
/*
    ====================================================================
    == Manage Memberrs page
    ==You can  Add | Edit | Delete Membersfrom Here
    ====================================================================
    */

session_start();

$pagetitle='Members';

if(isset($_SESSION['name'])){
    
    include 'init.php';
    
    $do= isset($_GET['do']) ? $do= $_GET['do'] : 'manage' ;

    //start manage page

    if( $do == 'manage'){ //manage membar page 

        //select All users Excpt Admin 

        $stmt =$con->prepare("SELECT * FROM user WHERE GroupID !=1 ORDER BY user_id DESC");
        //execute the statment
        $stmt->execute();
        //Assign to variabl
        $rows =$stmt->fetchall();
    ?>
       
       <h1 style="font-weight:bold;margin:auto;color:white; padding-top: 25px; padding-bottom: 25px; display: flex; justify-content: center; text-align: center; align-items: center; font-weight:bold;margin:auto;color:white;">Manage Member</h1>
        <div class="hrading" style="display:flex; align-items: center;">
            <div class="outer-wrapper">
                <div class="table-wrapper"style="max-height:550px;overflow-y:scroll;margin:20px;border:1px solid white">
                    <table style="border:1px solid white; color:white; width: 1856px;">
                    <tr>
                        <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center; ">#ID</td>
                        <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">Username</td>
                        <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">Date</td>
                        <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">Email</td>
                        <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">FullName</td>
                        <td style="position:static;top:0px;border:1px solid white; padding: 10px; text-align: center;">control</td>
                    </tr>
                    <?php
                        foreach($rows as $row){
                            echo'<tr>';
                                echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['user_id'] . "</td>" ;
                                echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['name'] . "</td>" ;
                                echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['date'] . "</td>" ;
                                echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['Email'] . "</td>" ;
                                echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'>" . $row['FullName'] . "</td>" ;
                                echo"<td style='position:static;top:0px;border:1px solid white;width:230px;height:60px; padding: 10px; text-align: center;'><a href='mempar.php?do=Edit&userid=" . $row["user_id"] . "'  class='btn btn-success' ><b>Edit</b></a>
                                <a    href='mempar.php?do=Delete&userid=" . $row["user_id"] . "' class='btn btn-danger confirm'><b>Delete</b></a></td>" ;
                            echo'</tr>';
                        }
                    ?>
                </table>
            </div>
            </div>
            </div>
            <br/><a href="mempar.php?do=Add" class="btn btn-primary" style="padding: 15px; display: flex; justify-content: center; text-align: center; align-items: center; font-weight:bold; color:white; width: 200px; margin: auto;"><b>Add New Membar</b></a>
        </div>

    <?php   }
        else if($do=='Add'){ //Add membar page ?>

                <h1 class="text-center text-white">Add member</h1>
                <div class="container bg-dark" style="max-height:700px;overflow-y:scroll;border:1px solid white">
                    <form class="form-horizontal  " action="?do=Insert" method="POST" >
                        <!--start user name field-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-white" for="">User name</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="username" class="form-control"  autocomplete="off" required="required" placeholder="user name do login">
                            </div>
                        </div>
                        <!--start user password field-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-white" for=""> password</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="password" name="password" class="form-control" autocomplete="new-password" required="required" placeholder="password must be hard & complex">
                            </div>
                        </div>
                        <!--start user date field-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-white" for=""> date</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="date" name="date" class="form-control"   required="required" placeholder="">
                            </div>
                        </div>
                        <!--start user Email field-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-white" for=""> Email</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="Email" name="Email"  class="form-control" required="required" placeholder="Email must be valid ">
                            </div>
                        </div>
                        <!--start user full name field-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-white" for="">full name</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="full" class="form-control" placeholder="full name appear in your profile page" >
                            </div>
                        </div>
                        <!--start submit field-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10 ">
                                <input type="submit" value="Add Membar" class="btn btn-info bg-outline-dark w-25 m-2">
                            </div>
                        </div>
                    </form>
                </div>

<?php
        }else if($do == 'Insert'){//Insert new membar

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Get variables from the form
    
                $user  =$_POST['username'];
                $pass  =$_POST['password'];
                $Email =$_POST['Email'];
                $date  =$_POST['date'];
                $name  =$_POST['full'];
                
                $hashpass=sha1($_POST['password']);

                //validate the form
                $formError=array();
                if(strlen($user) < 6){
                    $formError[]='Username cant Be less than 10 characters';
                }
                if(strlen($user) > 20){
                    $formError[]='Username cant Be more than 20 characters';
                }
                if(empty($user)){
                    $formError[]='Username cant Be Empty';
                }
                if(empty($pass)){
                    $formError[]='password cant Be Empty';
                }
                if(empty($Email)){
                    $formError[]='Email cant Be Empty';
                }
                if(empty($date)){
                    $formError[]='date cant Be Empty';
                }
                if(empty($name)){
                    $formError[]='fullname cant Be Empty';
                }
                foreach($formError as $error){
                    echo $error . '<br/>';
                }
                //check if theres no errors proceed the update operation
    
                if(empty($formError)){
                
                    // check if user ezist in databases

                    $check = checkitem("name", "user", $user);
                    
                    if($check == 1){
                        echo "<div class='container'>";
                        $themsg ="<div class='alert alert-danger'> Sorry this user is exist </div>";
                        redirecthome($themsg, 'back');
                        echo"</div>";
                    }
                    else{

                        //Insert userinfo in database

                        $stmt = $con->prepare("INSERT INTO 
                                                        user (name , password , date , Email , FullName)
                                                        VALUES(:user , :pass , :zdate , :Email , :zname)");
                        $stmt->execute(array(

                            'user'  =>$user,
                            'pass'  =>$hashpass,
                            'zdate' =>$date,
                            'Email' =>$Email,
                            'zname' =>$name

                        ));

                        // echo success message
                        echo "<div class='container'>";
                        $themsg ="<div class='alert alert-success'>" . $stmt->rowCount() . ' record INSERT</div>';
                        redirecthome($themsg, 'back');
                        echo"</div>";
                    }
                }
            }
            else{
                echo"<div class='Container'";
                $themsg= '<div class="alert alert-danger">Sorry you cant browsernthis page directly</div>';
                redirecthome($themsg, 'back');
                echo"</div>";
            }

        }

        elseif( $do == 'Edit'){  // Edit page 


            $userid=isset($_GET['userid'])&& is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
            $stmt = $con->prepare("SELECT
                                        *
                                    FROM  
                                        user 
                                    WHERE
                                    User_id = ? 
                                    LIMIT 1");

            $stmt->execute (array( $userid)) ;
            $row= $stmt->fetch();
            $count = $stmt->rowcount();

            if($count > 0){    ?>

                <h1 class="text-center text-white">Edit member</h1>
                <div class="container bg-dark">
                    <form class="form-horizontal m-5  justify-content-center align-content-center pt-4 pb-4 " action="?do=update" method="POST">
                        <input type="hidden" name="userid" value="<?php echo $userid; ?>" />
                        <!--start user name field-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-white" for="">User name</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="username" class="form-control" value="<?php echo $row['name']?>" autocomplete="off" required="required">
                            </div>
                        </div>
                        <!--start user password field-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-white" for=""> password</label>
                            <div class="col-sm-10 col-md-4">
                            <input type="hidden" name="oldpassword" value="<?php echo $row['password']?>">
                                <input type="password" name="newpassword" class="form-control" autocomplete="new-password" placeholder="leave blank if you dont want to change">
                            </div>
                        </div>
                        <!--start user date field-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-white" for=""> date</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="date" name="date" class="form-control"  value="<?php echo $row['date']?>" required="required">
                            </div>
                        </div>
                        <!--start user Email field-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-white" for=""> Email</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="Email" name="Email"  class="form-control" value="<?php echo $row['Email']?>" required="required">
                            </div>
                        </div>
                        <!--start user full name field-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-white" for="">full name</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="full" class="form-control" value="<?php echo $row['FullName']?>">
                            </div>
                        </div>
                        <!--start submit field-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10 ">
                                <input type="submit" value="Save" class="btn btn-info bg-outline-dark w-25 m-2">
                            </div>
                        </div>
                    </form>
                </div>
            <?php    
            } 
            else{
                echo"<div class='container'>";
                $themsg = '<div class="alert alert-danger"> theres no such id </div>';
                redirecthome($themsg);
                echo"</div>";
            }
    }       
    elseif( $do == 'update') { // update page 
    
    echo "<h1 class='text-center'>update member</h1>";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Get variables from the form

            $id    =$_POST['userid'];
            $user  =$_POST['username'];
            $Email =$_POST['Email'];
            $date  =$_POST['date'];
            $name  =$_POST['full'];

            //password tric
            
            $pass= empty($_POST['newpassword']) ? $_POST['oldpassword'] : sha1($_POST['newpassword']);

            //validate the form
            $formError=array();
            if(strlen($user) < 6){
                $formError[]='Username cant Be less than 10 characters';
            }
            if(strlen($user) > 20){
                $formError[]='Username cant Be more than 20 characters';
            }
            if(empty($user)){
                $formError[]='Username cant Be Empty';
            }
            if(empty($Email)){
                $formError[]='Email cant Be Empty';
            }
            if(empty($date)){
                $formError[]='date cant Be Empty';
            }
            if(empty($name)){
                $formError[]='fullname cant Be Empty';
            }
            foreach($formError as $error){
                echo $error . '<br/>';
            }
            //check if theres no errors proceed the update operation

            if(empty($formError)){

            //update the database

            $stmt= $con->prepare(" UPDATE user SET  name= ? , date=? , Email= ? , FullName = ? , password =? WHERE  user_id=? "); 
            $stmt->execute(array($user  ,  $date  ,$Email , $name , $pass , $id ));

            // echo success message

           $themsg = "<div class='alert alert-success'>"  . $stmt->rowCount() . ' record updated  </div>';
            redirecthome($themsg, 'back');
            }
        }
        else{
            echo"<div class='container'>";
            $themsg = '<div class="alert alert-danger"> sorry you cant browse this page directly</div>';
            redirecthome($themsg);
            echo"</div>";
        }
        ?>

<?php
        
    }elseif($do=='Delete'){ // Delete Membar page

        echo "<h1 class='text-center'>Delete member</h1>";
        $userid=isset($_GET['userid'])&& is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
            
        $stmt = $con->prepare("SELECT
                                    *
                                FROM  
                                    user 
                                WHERE
                                User_id = ? 
                                LIMIT 1");

    //select all data depend on this id

        $check=checkitem('User_id', 'user', $userid);

        if($check > 0){ 

           $stmt = $con->prepare("DELETE FROM user WHERE user_id = :zuser");
           $stmt->bindParam(":zuser" , $userid);
           $stmt->execute();

           $themsg = "<div class='alert alert-success'>" . 
           $stmt->rowCount() . ' record Deleted</div>';
           redirecthome($themsg);
        }else{
            echo "<div class='container'>";
            $themsg = '<div class="alert alert-danger"> this id not exist</div>';
            redirecthome($themsg);
            echo"</div>";
        }


    }
    include $tpl . "footer.php";
}
else{
    header('location: index.php');
    exit();
}

?>