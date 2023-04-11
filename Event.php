<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="layout/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="layout/CSS/all.min.css">
    <link rel="stylesheet" href="layout/fonts/fontawesome-free-6.2.1-web">

    
    <link rel="stylesheet" href="layout/CSS/event.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <style>
        .lyar{
          background-image: url('layout/img/back.jpg');
          background-size:cover;
          height: 100vh;
          width: 100%;
        }
        .comment b{
        font-size: 80px;

        }
        .comment p{
          font-size: 25px;

        }
        .textheader  {
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        height: 75vh;
        text-align: center;
        }
        .text11{
          margin-top: 20%;
        }
        .textheader h1{
        font-size: 50px;
        font-weight: 750;
        }
        #top{
          margin-top: -200px;
        }
    </style>
</head>
<body>

<?php include("init.php") ?>
<div class="lyar">
    <div class="textheader ">
          <div class="text11 d-flex ">
              <div id="top" class=" justify-content-center align-items-center layer">
                  <div class=" comment">
                    <b>SPEN</b>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, possimus suscipit? <br> Dolor architecto, aspernatur atque consectetur beatae rerum debitis! Aut. <br>Lorem ipsum dolor sit amet consectetur.</p>
                    <a href="about.php"><button type="button " class="btn btn-info  my-3 btn-read-more">Read More</button></a>
                    <a href="contactUs.php"><button type="button" class="btn btn-outline-light  my-3 contact-btn">Contact</button></a>
                  </div>
              </div>
          </div>
    </div>
</div>

  


    <!-- end nav -------------------------------------------------------------------------------- -->


  

<!-- start section 1 -->
    <div class="cards ">
        <div class="container">
          <div class="row-edit">
            <?php
                $stmt =$con->prepare("SELECT * FROM news WHERE Type='event' ORDER BY News_id DESC LIMIT 8");
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

    <!-- end  -->
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
    <!-- start section 2 -->
    <div class="container p-5">
        <div class="cursol-edit">
            <div id="carouselExampleCaptions" class="carousel slide w-100 h-100">
               
            <div class="carousel-inner h-100">
                  <?php
                   $stmt =$con->prepare("SELECT * FROM news WHERE Type='event' LIMIT 3 ");
                   $stmt->execute();
                   $rows =$stmt->fetchall();
                     foreach($rows as $row)
                     {
                      echo'';
                        echo'<div class="carousel-item active h-100">';
                          echo'<img src="layout/img/'.$row['Photo'].'" class="d-block  w-100" alt="...">';
                          echo'<div class="carousel-caption d-none d-md-block">';
                            echo'<h5>'.$row["Type"].'</h5>';
                            echo'<p>'.$row["Title"].'</p>';
                          echo'</div>';
                        echo'</div>';
                      echo'';
                     }
                  ?>
            </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
        </div>
  
    </div>
<!-- end ------------------------------------------------------------------------------------ -->
    

<!-- start section 3 -->


    <section  class="bg-dark text-white h-25">

      <h1 class="text-center py-5">Welcome to my life </h1> 

          <div class="container  ">
              <div class="row">
                <?php
                  $stmt =$con->prepare("SELECT * FROM advert WHERE Type='event' LIMIT 3");
                            $stmt->execute();
                            $rows =$stmt->fetchall();
                            foreach($rows as $row)
                            {
                              echo'<div class="col-md-4 item1">';
                                echo'<div>';
                                  echo'<img src="layout/img/'.$row["Photo"].'" class="img-fluid">';
                                echo'</div>';
                              echo'</div>';
                            }
                          
                ?>
              </div>
          </div>
    </section>
<!-- end  -->

<!-- start footrt -->

<footer class="site-footer">
  <div class="container">
    <div class="row ">
      <div class="col-sm-12 col-md-6">
        <h6>About</h6>
        <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
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

    <script src="layout/js/bootstrap.bundle.js"></script>
    <script src="layout/js/jquery-3.6.1.js"></script>
    <script src="layout/js/event.js"></script>
</body>
</html>