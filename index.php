<html>

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
</head>

<body>

  <!--      start    Nav            -->
  <?php 
  session_start();
  include("init.php") ;
  ?>
  <!--      End    Nav            -->


  <!-- start home -->
  <section class=" w-100 vh-100 ">
    <div id="carouselExampleIndicators">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="content1 w-100 vh-100"></div>
          <div class="carousel-caption d-flex justify-content-center align-items-center layer">
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

  </section>
  <!-- end home -->


  <!-- /* start section */ -->
  <div class="SECTION text-center p-0 mt-0 position-relative">
    <div class="">
      <div id="cards_landscape_wrap-2">
        <div class="ECTION pt-5">
          <p><span class="s ">S</span>ECTIONS</p>
          <div class="b1"></div>
          <div class="b2"></div>
          <div class="b3"></div>
        </div>
        <div class="container pt-1" >
          <div class="row">
            
              <?php
                $stmt =$con->prepare("SELECT * FROM news WHERE Type='sport' LIMIT 1 ");
                $stmt->execute();
                $rows =$stmt->fetchall();
                  foreach($rows as $row){
                    echo'<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" ';
                      echo' <a href="sports.php">';
                        echo'<div class="card-flyer">';
                          echo'<div class="text-box">';
                            echo'<div class="image-box">';
                              echo'<img src="layout/img/'.$row['Photo'].'" alt="" />';
                            echo'</div>';
                            echo'<div class="text-container" style="height: 200px;">';
                              echo' <h6>'.$row['Type'].'</h6>';
                              echo' <p>'.$row['Brief'].'</p>';
                            echo'</div>';
                          echo'</div>';
                        echo'</div>';
                      echo'</a>';
                    echo' </div>';
                  }

                  $stmt =$con->prepare("SELECT * FROM news WHERE Type='economy' LIMIT 1 ");
                  $stmt->execute();
                  $rows =$stmt->fetchall();
                    foreach($rows as $row){
                      echo'<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" >';
                        echo' <a href="ecnomy.php">';
                          echo'<div class="card-flyer">';
                            echo'<div class="text-box">';
                              echo'<div class="image-box">';
                                echo'<img src="layout/img/'.$row['Photo'].'" alt="" />';
                              echo'</div>';
                              echo'<div class="text-container" style="height: 200px;">';
                                echo' <h6>'.$row['Type'].'</h6>';
                                echo' <p>'.$row['Brief'].'</p>';
                              echo'</div>';
                            echo'</div>';
                          echo'</div>';
                        echo'</a>';
                      echo' </div>';
                    }

                    $stmt =$con->prepare("SELECT * FROM news WHERE Type='policy' LIMIT 1 ");
                  $stmt->execute();
                  $rows =$stmt->fetchall();
                    foreach($rows as $row){
                      echo'<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">';
                        echo' <a href="politics.php">';
                          echo'<div class="card-flyer">';
                            echo'<div class="text-box">';
                              echo'<div class="image-box">';
                                echo'<img src="layout/img/'.$row['Photo'].'" alt="" />';
                              echo'</div>';
                              echo'<div class="text-container" style="height: 200px;">';
                                echo' <h6>'.$row['Type'].'</h6>';
                                echo' <p>'.$row['Brief'].'</p>';
                              echo'</div>';
                            echo'</div>';
                          echo'</div>';
                        echo'</a>';
                      echo' </div>';
                    }

                    $stmt =$con->prepare("SELECT * FROM news WHERE Type='event' LIMIT 1 ");
                    $stmt->execute();
                    $rows =$stmt->fetchall();
                      foreach($rows as $row){
                        echo'<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">';
                          echo' <a href="event.php">';
                            echo'<div class="card-flyer">';
                              echo'<div class="text-box">';
                                echo'<div class="image-box">';
                                  echo'<img src="layout/img/'.$row['Photo'].'" alt="" />';
                                echo'</div>';
                                echo'<div class="text-container" style="height: 200px;">';
                                  echo' <h6>'.$row['Type'].'</h6>';
                                  echo' <p>'.$row['Brief'].'</p>';
                                echo'</div>';
                              echo'</div>';
                            echo'</div>';
                          echo'</a>';
                        echo' </div>';
                      }
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->

  <!-- start ADS -->

    <?php
      $stmt =$con->prepare("SELECT * FROM advert LIMIT 1 ");
      $stmt->execute();
      $rows =$stmt->fetchall();
        foreach($rows as $row){
          echo'<div class="image-box">';
            echo'<img src="layout/img/'.$row['Photo'].'" style="width: 50%;height:150px;margin-left: 25%;" alt="" />';
          echo'</div>';
        }
    ?>
  <!-- END ADS -->

  <!-- start trending -->
  <div class="trending position-relative m-auto">

    <h2 class="m-auto PB-3 bg-transparent text-dark"><span>T</span>RENDING <span>N</span>EWS</h2>
    <div class="b4" ></div>
    <div class="b5"></div>
    <div class="b6"></div>
    <div class="b7"></div>

    <div class="container bg-transparent PT-0 PB-5">
      <div class="card-carousel">
        <?php
          $stmt =$con->prepare("SELECT * FROM news WHERE Type='trend' ORDER BY News_id DESC LIMIT 5  ");
          $stmt->execute();
          $rows =$stmt->fetchall();
            foreach($rows as $row){
              echo'<div class="card" id="1">';
              echo'<div class="image-container"></div>';
              echo'<img src="layout/img/'.$row['Photo'].'" style="width: 500PX;height: 500px;" alt="">';
              echo'<a href="5ber.php?Newsid='.$row["News_id"].'"><b>Read more...</b></a>';
              echo'</div>';
            }
        ?>
      <a href="#"   class="visuallyhidden card-controller">Carousel controller</a>
    </div>
    <!-- 
  <h2>Check out <a target="_blank" href="https://codepen.io/WillyW/pen/RwRrvjv">Circle Carousel</a></h2> -->
  </div>
  <!-- end trending -->

  <!-- start footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row ">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming programmers with the code.
           Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple.
           We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
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