<!DOCTYPE html>
<?php
session_start();
include "connect.php";
include "includes/functions/function.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/CSS/all.min.css" />
    <link rel="stylesheet" href="layout/CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="layout/fonts/fontawesome-free-6.2.1-web">
    <title>Sign-Up</title>
</head>

<body style="background-color: #34495E; align-items: center;">
    <div class="container " style="align-items: center; background-color: #2C3E50; padding-top: 20px; padding-right: 50px; padding-bottom: 25px; padding-left: 50px;  margin-top: 220px;box-shadow: 0px 0px 58px 1px rgba(86,101,115,1); border-radius: 20px;">
        <h1 class="text-center" style="font-family: Century Gothic; color: white;  padding-top: 20px; padding-bottom: 20px; font-weight: bold">User Sign-Up</h1>
        <form class="form-horizontal  " action="signUp.php" method="POST">
            <!--start user name field-->
            <div style=" display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
                <label style="font-weight: bold" class="col-sm-2 control-label text-white" for="">User name <span style="font-weight: bold; position: relative; left: 30px;" >:</span></label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" name="username" class="form-control" autocomplete="off" required="required" placeholder="user name do login">
                </div>
            </div>
            <!--start user password field-->
            <div style=" display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
                <label style="font-weight: bold" class="col-sm-2 control-label text-white" for=""> password <span style="font-weight: bold; position: relative; left: 34px;" >:</span></label>
                <div class="col-sm-10 col-md-4">
                    <input type="password" name="password" class="form-control" autocomplete="new-password" required="required" placeholder="password must be hard & complex">
                </div>
            </div>
            <!--start user date field-->
            <div style=" display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
                <label style="font-weight: bold"  class="col-sm-2 control-label text-white" for=""> date <span style="font-weight: bold; position: relative; left: 50px;" >:</span></label>
                <div class="col-sm-10 col-md-4">
                    <input type="date" name="date" class="form-control" required="required" placeholder="">
                </div>
            </div>
            <!--start user Email field-->
            <div style=" display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
                <label style="font-weight: bold" class="col-sm-2 control-label text-white" for=""> Email <span style="font-weight: bold; position: relative; left: 45px;" >:</span></label>
                <div class="col-sm-10 col-md-4">
                    <input type="Email" name="Email" class="form-control" required="required" placeholder="Email must be valid ">
                </div>
            </div>
            <!--start user full name field-->
            <div style=" display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
                <label style="font-weight: bold" class="col-sm-2 control-label text-white" for="">full name <span style="font-weight: bold; position: relative; left: 30px;" >:</span></label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" name="full" class="form-control" placeholder="full name appear in your profile page">
                </div>
            </div>
            <!--start submit field-->
            <div style=" display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
                <div class="col-sm-offset-2 col-sm-10 ">
                    <input type="submit"  value="Add Membar" class="btn m-1" style="color: white; font-weight: 500; margin-top: 25px !important; align-content: center; width: 300px !important; background-color: #1A5276;">
                </div>
            </div>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Get variables from the form

            $user  = $_POST['username'];
            $pass  = $_POST['password'];
            $Email = $_POST['Email'];
            $date  = $_POST['date'];
            $name  = $_POST['full'];

            $hashpass = sha1($_POST['password']);

            //validate the form
            $formError = array();
            if (strlen($user) < 6) {
                $formError[] = 'Username cant Be less than 10 characters';
            }
            if (strlen($user) > 20) {
                $formError[] = 'Username cant Be more than 20 characters';
            }
            if (empty($user)) {
                $formError[] = 'Username cant Be Empty';
            }
            if (empty($pass)) {
                $formError[] = 'password cant Be Empty';
            }
            if (empty($Email)) {
                $formError[] = 'Email cant Be Empty';
            }
            if (empty($date)) {
                $formError[] = 'date cant Be Empty';
            }
            if (empty($name)) {
                $formError[] = 'fullname cant Be Empty';
            }
            foreach ($formError as $error) {
                echo $error . '<br/>';
            }
            //check if theres no errors proceed the update operation

            if (empty($formError)) {

                // check if user ezist in databases

                $check = checkitem("name", "user", $user);

                if ($check == 1) {
                    echo "<div class='container'>";
                    $themsg = "<div class='alert alert-danger'> Sorry this user is exist </div>";
                    redirecthome($themsg, 'back');
                    echo "</div>";
                } else {
                    //Insert userinfo in database

                    $stmt = $con->prepare("INSERT INTO 
                                                                user (name , password , date , Email , FullName)
                                                                VALUES(:user , :pass , :zdate , :Email , :zname)");
                    $stmt->execute(array(
                        'user'  => $user,
                        'pass'  => $hashpass,
                        'zdate' => $date,
                        'Email' => $Email,
                        'zname' => $name

                    ));

                    header('location:login.php');
                }
            }
        }
        ?>
    </div>

</body>

</html>