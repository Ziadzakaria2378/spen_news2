<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="layout/CSS/all.min.css" />
  <link rel="stylesheet" href="layout/CSS/bootstrap.min.css" />
  <link rel="stylesheet" href="layout/CSS/HOME.css" />
  <link rel="stylesheet" href="layout/fonts/fontawesome-free-6.2.1-web">
  <title>Document</title>
</head>

<body style="background-color: darkslategrey;">
  <?php
  //   echo $_SESSION['name'] ;
  ?>
  <?php
  session_start();

  if (isset($_SESSION['name'])) {
    include("init.php");
    $do = isset($_GET['do']) ? $do = $_GET['do'] : 'Edit';
    if ($do == 'Edit') {
      $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
      $stmt = $con->prepare("SELECT
                                        *
                                    FROM  
                                        user 
                                    WHERE
                                    User_id = ? 
                                    LIMIT 1");

      $stmt->execute(array($userid));
      $row = $stmt->fetch();
      $count = $stmt->rowcount();

      if ($count > 0) {
  ?>
        <div  class="container" style="align-items: center; width: 1000px; padding-left: 30px; padding-right: 30px; background-color: #06423e87; box-shadow: 0px 0px 71px -6px rgba(6,66,62,1) ; ">
          <h1 class="text-center " style="font-family: Century Gothic; color: white;  padding-top: 20px; margin-top: 100px; font-weight: bold">Edit profile</h1>
          <form class="form-horizontal m-5 d-block justify-content-center align-content-center pt-4 pb-4 " style="display: flex; justify-content: center; align-items: center; text-align: center;" action="?do=update" method="POST">
            <input  type="hidden" name="userid" value="<?php echo $userid; ?>" />
            <!--start user name field-->
            <div style=" display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
              <label style="font-weight: bold" class="col-sm-2 control-label text-white" for="">User name :</label>
              <div  class="col-sm-10 col-md-4">
                <input  type="text" name="username" class="form-control" value="<?php echo $row['name'] ?>" autocomplete="off" required="required">
              </div>
            </div>
            <!--start user password field-->
            <div style="display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
              <label  style="font-weight: bold" class="col-sm-2 control-label text-white" for=""> password :</label>
              <div class="col-sm-10 col-md-4">
                <input type="hidden" name="oldpassword" value="<?php echo $row['password'] ?>">
                <input type="password" name="newpassword" class="form-control" autocomplete="new-password" placeholder="leave blank if you dont want to change">
              </div>
            </div>
            <!--start user date field-->
            <div style="display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
              <label  style="font-weight: bold" class="col-sm-2 control-label text-white" for=""> date :</label>
              <div class="col-sm-10 col-md-4">
                <input type="date" name="date" class="form-control" value="<?php echo $row['date'] ?>" required="required">
              </div>
            </div>
            <!--start user Email field-->
            <div style="display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
              <label  style="font-weight: bold" class="col-sm-2 control-label text-white" for=""> Email :</label>
              <div class="col-sm-10 col-md-4">
                <input type="Email" name="Email" class="form-control" value="<?php echo $row['Email'] ?>" required="required">
              </div>
            </div>
            <!--start user full name field-->
            <div style="display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
              <label  style="font-weight: bold" class="col-sm-2 control-label text-white" for="">full name :</label>
              <div class="col-sm-10 col-md-4">
                <input type="text" name="full" class="form-control" value="<?php echo $row['FullName'] ?>">
              </div>
            </div>
            <!--start submit field-->
            <div style="display: flex; justify-content: center; align-items: center; text-align: center;" class="form-group m-3">
              <div class="col-sm-offset-2 col-sm-10 p-3">
                <input type="submit" value="Save" class="btn btn-info bg-outline-dark   m-2" style="background-color: #138D75; align-items: center;  width: 500px;">
              </div>
            </div>
          </form>
        </div>
  <?php

      }
    } elseif ($do == 'update') { // update page 

      echo "<h1 class='text-center'>update member</h1>";

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Get variables from the form

        $id    = $_POST['userid'];
        $user  = $_POST['username'];
        $Email = $_POST['Email'];
        $date  = $_POST['date'];
        $name  = $_POST['full'];

        //password tric

        $pass = empty($_POST['newpassword']) ? $_POST['oldpassword'] : sha1($_POST['newpassword']);

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

          //update the database

          $stmt = $con->prepare(" UPDATE user SET  name= ? , date=? , Email= ? , FullName = ? , password =? WHERE  user_id=? ");
          $stmt->execute(array($user,  $date, $Email, $name, $pass, $id));

          // echo success message

          $themsg = "<div class='alert alert-success'>"  . $stmt->rowCount() . ' record updated  </div>';
          redirecthome($themsg, 'back');
        }
      } else {
        echo "<div class='container'>";
        $themsg = '<div class="alert alert-danger"> sorry you cant browse this page directly</div>';
        redirecthome($themsg);
        echo "</div>";
      }
    }
  }
  ?>
  <!-- start footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row ">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
            <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
            <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
            <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
            <li><a href="http://scanfcode.com/category/android/">Android</a></li>
            <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/about/">About Us</a></li>
            <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
            <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
            <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
            <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by
            <a href="#">Scanfcode</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->





  <script src="layout/js/bootstrap.bundle.min.js"></script>
  <script src="layout/js/main.js"></script>
  <script src="layout/js/home.js"></script>
</body>

</html>