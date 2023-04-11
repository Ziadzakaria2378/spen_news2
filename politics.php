<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>politics</title>
    <link rel="stylesheet" href="layout/CSS/all.min.css">
    <link rel="stylesheet" href="layout/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="layout/CSS/ecnomy.css">
    <style>
        .nav-color {
          z-index: 999;
        }
        .lyar{
          background-image: url('layout/img/polll.jpg');
          background-size:cover;
          height: 100vh;
          width: 100%;
        }
        .comment h1{
          font-size: 80px;
        
        }
        .comment p{
          font-size: 25px;
        
        }
        #top{
          margin-top: -200px;
        }
    </style>
</head>
<body>

  <!-- section 1 -->
  <header class="home">
  
  <!-- lyar -->
        <div class="lyar">
  <!-- navpar -->
 <!-- start nav -->
 <?php include("init.php") ?>
  <!-- text header -->
<div class="textheader ">
<div class="text11 d-flex ">

<div id="top" class=" justify-content-center align-items-center layer">
            <div class=" comment">
              <h1>SPEN</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, possimus suscipit? <br> Dolor architecto, aspernatur atque consectetur beatae rerum debitis! Aut. <br>Lorem ipsum dolor sit amet consectetur.</p>
              <a href="about.php"><button type="button " class="btn btn-info  my-3 btn-read-more">Read More</button></a>
              <a href="contactUs.php"><button type="button" class="btn btn-outline-light  my-3 contact-btn">Contact</button></a>
            </div>
          </div>

</div>
</div>

        </div>
    </header>
    <!-- section 2 -->

    <div class="cards ">
    <div class="container">
      <div class="row-edit">
        <?php
        $stmt = $con->prepare("SELECT * FROM news WHERE Type='policy' ORDER BY News_id DESC LIMIT 8");
        $stmt->execute();
        $rows = $stmt->fetchall();
        foreach ($rows as $row) {
          echo '<div class="card-item">';
            echo '<img src="layout/img/' . $row['Photo'] . '" alt="" style="height: 200px;">';
            echo '<div class="card-info" style="height: 350px;">';
              echo "<h4>" . $row["Title"] . "</h4>";
              echo "<p>" . $row["Brief"] . "</p>";
              echo '</div>';
              echo '<div class="read-more">';
              echo '
                  <div style="margin-left:20px ;width:130px;">
                  <a href="5ber.php?Newsid=' . $row["News_id"] . '" class="btn btn-success" ><b>Read more...</b></a>
                  </div>
                  ';
              echo '<i class="fa-solid fa-arrow-right"></i>';
            echo '</div>';
          echo '</div>';
        }
        ?>
      </div>
    </div>
  </div>

  <!-- اعلانات -->
<div class="adsins">
<?php
  $stmt = $con->prepare("SELECT * FROM advert WHERE Type='sport' LIMIT 6");
  $stmt->execute();
  $rows = $stmt->fetchall();
  foreach ($rows as $row) {
    echo '<div class="ju item1 "  style=" margin-top:50px;  display: flex; justify-content: center; align-items: center; text-align: center; ">';
      echo '<div>';
        echo '<img src="layout/img/' . $row["Photo"] . '" width="800px"  class="img-fluid">';
      echo '</div>';
    echo '</div>';
  }

  ?>
</div>





     <!-- section 3 -->
    
     <div class="slaider  ">


<div id="carouselExampleAutoplaying" class="carousel slide container w-100 " style="margin-top:50px;" data-bs-ride="carousel">
  <div class="carousel-inner container-fluid">
    <div class="carousel-item active">
      <img src="layout/img/polll.jpg" class="d-block w-100" width="80%" height="600px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="layout/img/poll1.jpg" class="d-block w-100" height="600px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="layout/img/poll3.jpg" class="d-block w-100" height="600px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
  <!-- اعلانات -->
<div class="adsins">
<?php
  $stmt = $con->prepare("SELECT * FROM advert WHERE Type='sport' LIMIT 6");
  $stmt->execute();
  $rows = $stmt->fetchall();
  foreach ($rows as $row) {
    echo '<div class="ju item1 "  style="margin-top:30px;  background-color: transparent;      display: flex; justify-content: center; align-items: center; text-align: center; ">';
      echo '<div>';
        echo '<img src="layout/img/' . $row["Photo"] . '" width="800px"  class="img-fluid">';
      echo '</div>';
    echo '</div>';
  }

  ?>
</div>
<!-- section 4 -->
<!-- start footer -->
<footer class="site-footer" style="margin-top:50px;">
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
    <script src="layout/js/ecnomy.js"></script>
</body>
</html>