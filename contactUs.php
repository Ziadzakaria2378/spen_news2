<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="layout/CSS/all.min.css" />
  <link rel="stylesheet" href="layout/CSS/bootstrap.min.css" />
  <link rel="stylesheet" href="layout/CSS/home.css" />
    <link rel="stylesheet" href="layout/CSS/contact.css" />
  </head>
  <body>
  <?php
  session_start();
  include("init.php");
  if(isset($_SESSION['name'])){
    ?>
       <div class="background">
      <div class="container">
        <div class="screen">
          <div class="screen-header">
            <div class="screen-header-left">
              <div class="screen-header-button close"></div>
              <div class="screen-header-button maximize"></div>
              <div class="screen-header-button minimize"></div>
            </div>
            <div class="screen-header-right">
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
            </div>
          </div>
          <form action="contactUs.php" method="POST">
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>CONTACT</span>
                <span>US</span>
              </div>
            </div>
            <div class="screen-body-item">
              <div class="app-form">
                <div class="app-form-group">
                  <input type="text" name="username" required="required" class="app-form-control" placeholder="NAME" />
                </div>
                <div class="app-form-group">
                  <input type="text" name="phone" required="required" class="app-form-control" placeholder="PHONE" />
                </div>
                <div class="app-form-group">
                  <input type="Email" name="Email" required="required" class="app-form-control" placeholder="EMAIL" />
                </div>
                <div class="app-form-group message">
                <textarea name="massage"  cols="30" rows="10" class="app-form-control"  placeholder="MESSAGE"></textarea>
                </div>
                <div class="app-form-group buttons">
                  <button class="app-form-button">CANCEL</button>
                  <button class="app-form-button">SEND</button>
                </div>
              </div>
            </div>
          </div>
          </form>

    <?php
  }
  
  

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              $user  =$_POST['username'];
              $phone =$_POST['phone'];
              $Email =$_POST['Email'];
              $massage =$_POST['massage'];
              $uid     =$_SESSION['ID'];
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
              if(empty($phone)){
                $formError[]='Email cant Be Empty';
              }
              if(empty($Email)){
                $formError[]='Email cant Be Empty';
              }
              if(empty($massage)){
                $formError[]='Email cant Be Empty';
              }
              $stmt = $con->prepare("INSERT INTO 
                                          contact_us (UserName , Phone , Email , Massage , user_id)
                                          VALUES(:user , :Phone , :Email , :Massage , :auid)");
                $stmt->execute(array(
                
                'user'  =>$user,
                'Phone' =>$phone,
                'Email' =>$Email,
                'Massage' =>$massage,
                'auid'  =>$uid,
                
    ));
                }
        ?>
        </div>
      </div>
    </div>
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
