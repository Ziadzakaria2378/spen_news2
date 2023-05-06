<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecnomy</title>
    <link rel="stylesheet" href="layout/CSS/all.min.css">
    <link rel="stylesheet" href="layout/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="layout/CSS/ecnomy.css">
    <style>
      .nav-color {
 
  z-index: 999;
}
      .lyar{
background-image: url('layout/img/ecoooo.jpg');
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
                $stmt =$con->prepare("SELECT * FROM news WHERE Type='economy' ORDER BY News_id DESC LIMIT 8");
                $stmt->execute();
                $rows =$stmt->fetchall();
                  foreach($rows as $row)
                  {
                      echo'<div class="card-item">';
                        echo'<img src="layout/img/'.$row['Photo'].'" alt="" style="height: 200px;">';
                          echo'<div class="card-info" style="height: 350px;">';
                          echo"<h4>".$row["Title"]. "</h4>";
                          echo "<p>".$row["Brief"]."</p>";
                          echo '</div>';
                        echo'<div class="read-more">';
                          echo'
                          <div style="margin-left:20px ;width:130px;">
                          <a href="5ber.php?Newsid='.$row["News_id"].'" class="btn btn-success" ><b>Read more...</b></a>
                          </div>
                          ';
                          echo'<i class="fa-solid fa-arrow-right"></i>';
                        echo'</div>';
                      echo'</div>';
                  }
                ?>
          </div>
        </div>
        </div>
  <!-- اعلانات -->
<div class="adsins">
<div class="adsins">
<?php
  $stmt = $con->prepare("SELECT * FROM advert WHERE Type='sport' ORDER BY Advert_id DESC LIMIT 6 ");
  $stmt->execute();
  $rows = $stmt->fetchall();
  foreach ($rows as $row) {
    echo '<div class="ju item1 "  style=" margin-top:50px;  display: flex; justify-content: center; align-items: center; text-align: center; ">';
      echo '<div>';
        echo '<img src="layout/img/' . $row["Photo"] . '" width="1000px"  class="img-fluid">';
      echo '</div>';
    echo '</div>';
  }

  ?>
</div>
</div>
     <!-- section 3 -->
    
<div class="slaider  ">


  <div id="carouselExampleAutoplaying" class="carousel slide container w-100 " style="margin-top:50px;" data-bs-ride="carousel">
    <div class="carousel-inner container-fluid">
      <div class="carousel-item active">
        <img src="layout/img/ecooo.jpg" class="d-block w-100" width="80%" height="600px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="layout/img/ecooo1.jpg" class="d-block w-100" height="600px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="layout/img/ecooo2.jpg" class="d-block w-100" height="600px" alt="...">
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
<div class="adsins">
<?php
  $stmt = $con->prepare("SELECT * FROM advert WHERE Type='sport' ORDER BY Advert_id DESC LIMIT 6");
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
</div>
<!-- section 4 -->
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
              <li><a class="facebook" href="#"><svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                  </svg></a></li>
              <li><a class="twitter" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                  </svg></a></li>
              <li><a class="dribbble" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z" />
                  </svg></a></li>
              <li><a class="linkedin" href="#"><svg style="border-radius: 50px; position: relative; top: 0;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                  </svg></a></li>
            </ul>
          </div>
    </div>
  </div>
</footer>
<!-- end footer -->
    






    <script src="layout/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="layout/js/ecnomy.js"></script> -->
    <script src="layout/js/home.js"></script>
</body>
</html>