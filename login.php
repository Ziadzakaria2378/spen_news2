   <!DOCTYPE html>
   <html lang="en">

   <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="layout/CSS/index.css">
           <title>login</title>
   </head>

   <body>
           <?php
                session_start();
                $noNavbar = '';
                $pagetitle = 'Login';
                if (isset($_SESSION['name'])) {
                        header('location: index.php');  //redirect to dashboard page
                }
                include("init.php");

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                        $username = $_POST['user'];
                        $password = $_POST['pass'];
                        $hashedpass = sha1($password);
                        // check if user exist in database

                        $stmt = $con->prepare("SELECT
                                    user_id ,  name , password 
                                FROM  
                                        user 
                                WHERE
                                        name = ? 
                                AND 
                                        password =?
                                AND
                                        GroupID =0
                                LIMIT 1");

                        $stmt->execute(array($username, $hashedpass));
                        $row = $stmt->fetch();
                        $count = $stmt->rowcount();


                        if ($count > 0) {

                                $_SESSION['name'] = $username; //register session name
                                $_SESSION['ID'] = $row['user_id']; //register session ID
                                header('location:index.php');  //redirect to dashboard page
                                exit();
                        }
                }
                ?>

           <html>
           <div class="login" style="background-color: #002334; padding: 50px; margin-left: 500px; margin-right: 500px; margin-top: 250px; box-shadow: 0px 0px 79px 2px rgba(0,0,0,.7);">
                   <h1 class="h1" style="  display: flex; justify-content: center; text-align: center; align-items: center;">Login</h1>
                   <form style="  display: flex; justify-content: center; text-align: center; align-items: center;" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?> ">
                           <input style="padding: 5px; margin: 10px; display: inline;" type="text" name="user" placeholder="Username" required="required" autocomplete="fulse" />
                           <input style="padding: 5px; margin: 10px; display: inline;" type="password" name="pass" placeholder="Password" required="required" autocomplete="new-password" />
                           <button type="submit" class="btn btn-primary btn-block btn-large" style="cursor: pointer; color: #EEE; padding: 7px; background-color: teal; display: flex; justify-content: center; text-align: center; align-items: center;">login</button>
                   </form>
           </div>


           <script src="js/script.js"></script>


   </body>

   </html>