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
  <div id="icons" style="background-color: #1c5da4 !important ; ">
    <!-- visit => "fontawesome.com" for icons -->
    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.
        <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
      </svg></a>
    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
      </svg></a>
    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
      </svg></a>
    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
      </svg></a>
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
          <img src="../spen_news2/layout/img/recent news 1.jpg" width="170" height="110" alt="">
          <p class="p-2">A 48-hour camp at Al-Ahly club in preparation for the Cup final against Pyramids.
            <br>
            <span style="color: #777; font-weight: 100;">Fathy El-Shafei - Friday, April 07, 2023 at 09:00 PM</span>
          </p>

        </div>
        <div class="d-flex p-2">
          <img src="../spen_news2/layout/img/recnt news2.jpg" width="170" height="110" alt="">
          <p class="p-2">Muscle strain prevents Shabana from participating in Zamalek's training and Abdelghany's return.
            <br>
            <span style="color: #777; font-weight: 100;">Hossam El-Haj - Friday, April 07, 2023 at 09:00 PM</span>
          </p>
        </div>
        <div class="d-flex p-2">
          <img src="../spen_news2/layout/img/recent news 3.jpg" width="170" height="110" alt="">
          <p class="p-2">Hamdi Zaki and Desloun lead Aswan's attack to face Ceramica in the league.
            <br>
            <span style="color: #777; font-weight: 100;">Hossam El-Haj - Friday, April 07, 2023 at 09:00 PM</span>
          </p>
        </div>
        <div class="d-flex p-2">
          <img src="../spen_news2/layout/img/recent news 4.jpg" width="170" height="110" alt="">
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
            <p><img src="../spen_news2/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex ">
            <p style="font-weight: bold;" class="p-3">2</p>
            <p><img src="../spen_news2/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">3</p>
            <p><img src="../spen_news2/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">4</p>
            <p><img src="../spen_news2/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">5</p>
            <p><img src="../spen_news2/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">6</p>
            <p><img src="../spen_news2/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">7</p>
            <p><img src="../spen_news2/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
            <p style="font-weight: bolder; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">Al Ahly</p>
            <p style="font-weight: bold; padding: 15px;">100</p>
          </div>
          <div style="display: flex; justify-content: center; text-align: center; align-items: center;" class="m-2 d-flex">
            <p style="font-weight: bold;" class="p-3">8</p>
            <p><img src="../spen_news2/layout/img/kisspng-al-ahly-sc-zamalek-sc-al-masry-sc-egyptian-premier-egypt-football-team-5b21fb456313e0.7375021115289536694058-removebg-preview.png" width="50px" alt=""></p>
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
  <script src="layout/js/main.js"></script>
</body>

</html>