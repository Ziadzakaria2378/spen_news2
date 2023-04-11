<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="layout/CSS/all.min.css" />
    <link rel="stylesheet" href="layout/CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="layout/CSS/home.css" />
</head>
    <title>Document</title>

    <style>
      .ty
      {
        text-shadow:2px 2px 8px gray ;
        margin-top: 100px;
        margin-left: 5% ;
        font-size: 50px;
      
      }
      .ti{
        margin-left: 15%;
        margin-top: 20px;
      }
      .ph img
      {
        margin-left: 25%;
        box-shadow:4px 4px 15px black ;

      }
      .titel
      {
        text-align: center;
        width: 60%;
        height: 300px;
        margin: auto;
        margin-top: 30px;
        font-size: 25px;

      }
     
    </style>
</head>
<body>
<?php  include("init.php"); ?>

<div class="search">
  <?php
    if(isset($_POST['Search'])){

      $search=$_POST['search'];

      $stmt=$con->prepare("SELECT
                                     * 
                                FROM 
                                    news
                                WHERE 
                                  Type like '%$search%'
                                OR
                                  Title like '%$search%'
                                OR
                                  New like '%$search%'
                                OR
                                  Name_Author like '%$search%'
                               LIMIT 8");

        $stmt->execute();
        $row = $stmt->fetch();
        $count = $stmt->rowcount();

        if($count > 0)
        {
            echo'
            
                <div class="ty"><h1>'.$row['Type'].'</h1></div>
                <div class="ti"><h2>'.$row['Title'].'</h2></div>
                <div class="ph"><img src="layout/img/'.$row['Photo'].'" width="50%" alt=""></div>
                <div class="titel">
                <div class="ne"><p>'.$row['New'].'</p></div>
                <div class="at"><h4 style="color:blue">'.$row['Name_Author'].'</h4></div>
                </div>
            ';
        }
       
    }
  ?>

</div>
   
<?php
       
        echo' <div class="grup" ">';
        $Newsid=isset($_GET['Newsid'])&& is_numeric($_GET['Newsid']) ? intval($_GET['Newsid']) : 0;

        $stmt=$con->prepare("SELECT
                                     * 
                                FROM 
                                    news
                                WHERE 
                                    News_id=? 
                                LIMIT 1");

        $stmt->execute (array( $Newsid));
        $row = $stmt->fetch();
        $count = $stmt->rowcount();

        if($count > 0)
        {
            echo'
                <div class="ty" ><h1>'.$row['Type'].'</h1></div>
                <div class="ti"><h2>'.$row['Title'].'</h2></div>
                <div class="ph"><img src="layout/img/'.$row['Photo'].'" width="50%"  alt=""></div>
                <div class="titel">
                <div class="ne"><p>'.$row['New'].'</p></div>
                <div class="at"><h4 style="color:blue">'.$row['Name_Author'].'</h4></div>
                </div>
            ';
        }
        echo'</div>';
        $stmt = $con->prepare("SELECT * FROM advert WHERE Type='sport' LIMIT 6");
  $stmt->execute();
  $rows = $stmt->fetchall();
  foreach ($rows as $row) {
    echo '<div class="ju item1 "  style=" margin-top:50px;  display: flex; justify-content: center; align-items: center; text-align: center;margin-top:200px; ">';
      echo '<div>';
        echo '<img src="layout/img/' . $row["Photo"] . '" width="800px"  class="img-fluid">';
      echo '</div>';
    echo '</div>';
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