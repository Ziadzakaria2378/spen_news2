<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="layout/CSS/all.min.css" />
  <link rel="stylesheet" href="layout/CSS/bootstrap.min.css" />
  <link rel="stylesheet" href="layout/fonts/fontawesome-free-6.2.1-web">
  <link rel="stylesheet" href="layout/CSS/jdfndfk.SCSS" />
  <link rel="stylesheet" href="layout/CSS/sports.css" />
  <style>
    .cards {
      padding: 100px 0;
      background-color: #dedada;
    }

    .row-edit {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
    }

    .card-item {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgb(0 0 0 /40%);
      transition: 0.5s;
      overflow: hidden;

    }

    .card-item:hover {
      transform: translateY(-10px);
    }

    .card-item img {
      width: 100%;
      border-top-right-radius: 8px;
      border-top-left-radius: 8px;
      transition: 0.5s;

    }

    .card-item:hover img {
      transform: scale(1.1);
    }

    .card-info {
      padding: 20px;
    }

    .card-info h4 {
      font-weight: bold;
    }

    .card-info p {
      color: #777;
    }

    .card-info .read-more {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: #777 solid 1px;
      padding: 10px 0;


    }

    .card-info .read-more a {
      display: flex;
      text-decoration: none;
      color: #2196f3;
      font-weight: bold;
    }

    .card-info .read-more i {
      font-size: 12px;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  include("init.php");
  ?>

  <!-- image -->
  <div id="image">
    <img src="layout/img/Football_Player.png" alt="football player png" />
  </div>

  <!-- content -->
  <div id="content">
    <h2>SPORTS</h2>
  </div>

  <!-- icons -->
  <div id="icons">
    <!-- visit => "fontawesome.com" for icons -->
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
  </div>
  </div>
  <!-- end nav -->

  <!-- star proPlayers -->

  <div class="cards ">
    <div class="container">
      <div class="row-edit">
        <?php
        $stmt = $con->prepare("SELECT * FROM news WHERE Type='Sport' ORDER BY News_id DESC LIMIT 8");
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
  <?php
  $stmt = $con->prepare("SELECT * FROM advert WHERE Type='sport' LIMIT 1");
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
  <!-- start soccer story -->
  <div class="soccer d-flex justify-content-center position-relative">
    <div class="resentNews m-3 bg-white w-50 ">
      <h3 style="display: flex; justify-content: center; text-align: center; align-items: center;">RECENT NEWS</h3>
      <div style="font-weight: bold" class="text-center p-4">
        <div class="d-flex p-2">
          <img src="../spen_news/layout/img/recent news 1.jpg" width="170" height="110" alt="">
          <p class="p-2">A 48-hour camp at Al-Ahly club in preparation for the Cup final against Pyramids.
            <br>
            <span style="color: #777; font-weight: 100;">Fathy El-Shafei - Friday, April 07, 2023 at 09:00 PM</span>
          </p>

        </div>
        <div class="d-flex p-2">
          <img src="../spen_news/layout/img/recnt news2.jpg" width="170" height="110" alt="">
          <p class="p-2">Muscle strain prevents Shabana from participating in Zamalek's training and Abdelghany's return.
            <br>
            <span style="color: #777; font-weight: 100;">Hossam El-Haj - Friday, April 07, 2023 at 09:00 PM</span>
          </p>
        </div>
        <div class="d-flex p-2">
          <img src="../spen_news/layout/img/recent news 3.jpg" width="170" height="110" alt="">
          <p class="p-2">Hamdi Zaki and Desloun lead Aswan's attack to face Ceramica in the league.
            <br>
            <span style="color: #777; font-weight: 100;">Hossam El-Haj - Friday, April 07, 2023 at 09:00 PM</span>
          </p>
        </div>
        <div class="d-flex p-2">
          <img src="../spen_news/layout/img/recent news 4.jpg" width="170" height="110" alt="">
          <p class="p-2">Tottenham Hotspur and Arsenal are interested in acquiring the services of Lazio midfielder Sergej Milinkovic-Savic.
            <br>
            <span style="color: #777; font-weight: 100;">Hossam El-Haj - Friday, April 07, 2023 at 09:00 PM</span>
          </p>
        </div>
      </div>
    </div>

    <div class="leagueTable m-3 bg-white w-50">
      <h3 style="display: flex; justify-content: center; text-align: center; align-items: center;">LEAGUETABLE</h3>
      <div>
        <div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">1</p>
            <p><img src="../spen_news/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex ">
            <p style="font-weight: bold;" class="p-3">2</p>
            <p><img src="../spen_news/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">3</p>
            <p><img src="../spen_news/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">4</p>
            <p><img src="../spen_news/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">5</p>
            <p><img src="../spen_news/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">6</p>
            <p><img src="../spen_news/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">7</p>
            <p><img src="../spen_news/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">8</p>
            <p><img src="../spen_news/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
        </div>
        <div class="d-grid  gap-2">
          <button style="margin-top: 50px !important;" class="btn bg-transparent btn-outline-light mt-5 " type="button">
            VIEW FULL TABLE
          </button>
        </div>
      </div>
    </div>
    <div class="soccerStory text-left w-50">
      <h2 class="soccerStory">
        SOCCER <br />
        STORY
      </h2>
      <p class="">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus
        similique quae dolorum, quidem veritatis natus. Lorem ipsum dolor sit
        amet, consectetur adipisicing elit. Dolor autem ab itaque saepe
        reiciendis est asperiores, quis neque. <br />
        <br />
        qui nihil libero corrupti sequi. Doloremque ut ipsam ea at eius.lorem
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vel at
        quis itaque cumque odit ex totam neque, minima excepturi.
      </p>
      <div class="d-grid gap-2 p-4">
        <button class="btn bg-transparent btn-outline-light" type="button">
          Button
        </button>
      </div>
    </div>
  </div>
  <!-- end soccer story -->
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Get variables from the form

    $name     = $_POST['playername'];
    $birth    = $_POST['birth'];
    $address  = $_POST['address'];
    $nati     = $_POST['nationality'];
    $phone    = $_POST['phone'];
    $position  = $_POST['position'];

    //validate the form
    $formError = array();
    if (strlen($name) < 6) {
      $formError[] = 'playername cant Be less than 10 characters';
    }
    if (strlen($name) > 20) {
      $formError[] = 'playername cant Be more than 20 characters';
    }
    if (empty($name)) {
      $formError[] = 'playername cant Be Empty';
    }
    if (empty($birth)) {
      $formError[] = 'birth cant Be Empty';
    }
    if (empty($address)) {
      $formError[] = 'address cant Be Empty';
    }
    if (empty($nati)) {
      $formError[] = 'nati cant Be Empty';
    }
    if (empty($phone)) {
      $formError[] = 'phone cant Be Empty';
    }
    if (empty($position)) {
      $formError[] = 'position cant Be Empty';
    }
    foreach ($formError as $error) {
      echo $error . '<br/>';
    }
    //check if theres no errors proceed the update operation

    if (empty($formError)) {

      // check if user ezist in databases
      $check = checkitem("player_name", "club", $user);
      if ($check == 1) {
        echo "<div class='container'>";
        $themsg = "<div class='alert alert-danger'> Sorry this user is exist </div>";
        redirecthome($themsg, 'back');
        echo "</div>";
      } else {

        //Insert userinfo in database

        $stmt = $con->prepare("INSERT INTO 
                                              club( player_name , birth , address , nationality , phone , player_position)
                                              VALUES(:player , :birth , :zaddress , :nationality , :zphone , :zposition)");
        $stmt->execute(array(

          'player'     => $name,
          'birth'      => $birth,
          'zaddress'   => $address,
          'nationality' => $nati,
          'zphone'     => $phone,
          'zposition'  => $position
        ));

        // echo success message

      }
    }
  }
  ?>

  <?php
  echo "sa";
  if (isset($_SESSION['name'])) { ?>
    <h1 class="text-center text-black">Add player</h1>
    <div class="container bg-dark" style="width:600px ;border-radius:20px ;">
      <form class="form-horizontal " style="width:800px ;" action="sports.php" method="POST">
        <div class="photo">
          <img src="layout/img/logo-1.webp" width="100px" height="100px" style="margin-left:450px " alt="">
        </div>
        <!--start player name field-->
        <div class="form-group" style="margin-top: -70px;">
          <label class="col-sm-2 control-label text-white" for="">player name</label>
          <div class="col-sm-10 col-md-4">
            <input type="text" name="playername" class="form-control" autocomplete="off" required="required" placeholder="player name do login">
          </div>
        </div>
        <!--start user birth field-->
        <div class="form-group">
          <label class="col-sm-2 control-label text-white" for="">birth</label>
          <div class="col-sm-10 col-md-4">
            <input type="date" name="birth" class="form-control" required="required" placeholder="">
          </div>
        </div>
        <!--start user address field-->
        <div class="form-group">
          <label class="col-sm-2 control-label text-white" for="">address</label>
          <div class="col-sm-10 col-md-4">
            <input type="text" name="address" class="form-control" required="required" placeholder="">
          </div>
        </div>
        <!--start nationality field-->
        <div class="form-group">
          <label class="col-sm-2 control-label text-white" for="">nationality</label>
          <div class="col-sm-10 col-md-4">
            <input type="text" name="nationality" class="form-control" placeholder="">
          </div>
        </div>
        <!--start phone field-->
        <div class="form-group">
          <label class="col-sm-2 control-label text-white" for="">phone</label>
          <div class="col-sm-10 col-md-4">
            <input type="text" name="phone" class="form-control" placeholder="">
          </div>
        </div>
        <!--start position field-->
        <div class="form-group">
          <label class="col-sm-2 control-label text-white" for="">player position</label>
          <div class="col-sm-10 col-md-4">
            <input type="text" name="position" class="form-control" placeholder="">
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
  }
  ?>


  <!-- start macth result -->
  <div class="container P-5" style="margin-top: 50px;">
    <!-- code here -->
    <div class="match">
      <div class="match-header">
        <div class="match-status p-3">Live</div>
        <div class="match-tournament">
          <img src="layout/img/league-removebg-preview.png" width="60" />English
          Premier League
        </div>
        <div class="match-actions p-5"></div>
      </div>
      <div class="match-content">
        <div class="column">
          <div class="team team--home">
            <div class="team-logo">
              <img src="https://assets.codepen.io/285131/whufc.svg" width="280" height="190" />
            </div>
            <h2 class="team-name P-4" style="margin-top: 50px;">West Ham</h2>
          </div>
        </div>
        <div class="column">
          <div class="match-details">
            <div class="match-date">12 Aug at <strong>19:00</strong></div>
            <div class="match-score">
              <span class="match-score-number match-score-number--leading">1</span>
              <span class="match-score-divider">:</span>
              <span class="match-score-number">6</span>
            </div>
            <div class="match-time-lapsed">72'</div>
            <div class="match-referee">
              Referee: <strong>Joseph Hicks</strong>
            </div>
            <div class="match-bet-options">
              <button class="match-bet-option">1.48</button>
              <button class="match-bet-option">4.98</button>
              <button class="match-bet-option">8.24</button>
            </div>
            <button class="match-bet-place bg-info">Place a bet</button>
          </div>
        </div>
        <div class="column">
          <div class="team team--away">
            <div class="team-logo">
              <img src="https://assets.codepen.io/285131/chelsea.svg" width="280" height="190" />
            </div>
            <h2 class="team-name P-4" style="margin-top: 50px;">Chelsea</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end macth result -->
  <?php
  $stmt = $con->prepare("SELECT * FROM advert WHERE Type='sport' LIMIT 2");
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
  <!-- start footer -->
  <footer class="site-footer" style="margin-top: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">
            Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to
            help the upcoming programmers with the code. Scanfcode focuses on
            providing the most efficient code or snippets as the code wants to
            be simple. We will help programmers build up concepts in different
            programming languages that include C, C++, Java, HTML, CSS,
            Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.
          </p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
            <li>
              <a href="http://scanfcode.com/category/front-end-development/">UI Design</a>
            </li>
            <li>
              <a href="http://scanfcode.com/category/back-end-development/">PHP</a>
            </li>
            <li>
              <a href="http://scanfcode.com/category/java-programming-language/">Java</a>
            </li>
            <li>
              <a href="http://scanfcode.com/category/android/">Android</a>
            </li>
            <li>
              <a href="http://scanfcode.com/category/templates/">Templates</a>
            </li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/about/">About Us</a></li>
            <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
            <li>
              <a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a>
            </li>
            <li>
              <a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a>
            </li>
            <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">
            Copyright &copy; 2023 All Rights Reserved by
            <a href="#">Scanfcode</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li>
              <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
            </li>
            <li>
              <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->
  <script src="layout/js/bootstrap.bundle.min.js"></script>
  <script src="layout/js/main.js"></script>
</body>

</html>