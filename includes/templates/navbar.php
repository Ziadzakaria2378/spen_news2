<!-- start nav -->
<div id="container">
  <nav class="nav-color navbar navbar-expand-lg position-fixed top-0 w-100 fw-600 fs-nav z-10">
    <div class="container">
      <a class="navbar-brand ps-5" href="index.php">
        <img src="layout/img/logo.png" alt="nav logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item px-2 pt-3">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <!-- drop down -->
          <div class="dropdown pt-3">
            <a class="btn text-white dropdown-toggle container-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              sections
            </a>
            <ul class="dropdown-menu bg-dark">
              <li>
                <a class="dropdown-item text-white" href="sports.php">sport</a>
              </li>
              <li>
                <a class="dropdown-item text-white" href="Event.php">Event</a>
              </li>
              <li>
                <a class="dropdown-item text-white" href="politics.php">Politics</a>
              </li>
              <li>
                <a class="dropdown-item text-white" href="ecnomy.php">Economy</a>
              </li>
            </ul>
          </div>
          <!-- end drop -->

          <li class="nav-item px-2 pt-3">
            <a class="nav-link" href="contactUs.php">Contact Us</a>
          </li>

          <li class="nav-item px-2 pt-3">
            <a class="nav-link" href="about.php">About As</a>
          </li>
          <div class="dropdown pt-3">
            <a class="btn text-white dropdown-toggle container-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Register
            </a>
            <ul class="dropdown-menu bg-dark">
              <li>
                <a class="dropdown-item text-white" href="signUp.php">Sign Up</a>
              </li>
              <li class="nav-item px-2 pt-3">
            <a class="nav-link" href="login.php">login</a>
          </li>
              <li class="nav-item px-2 pt-3">
              <a class="nav-link" href="logout.php">logout</a>
            </li>
            </li>
              <li class="nav-item px-2 pt-3">
              <a class="nav-link" href="Edit.php?do=Edit&userid=<?php echo $_SESSION['ID'] ?>">Edit profile</a>
            </li>
            </ul>
          </div>
          

          <nav class="navbar px-2 pt-3">
            <div class="container-fluid">

              <form class="d-flex" role="search" action="5ber.php" method="POST">
                <input class="form-control me-2 nav-search" type="text" name="search" placeholder="Search" aria-label="Search" />
                <input class="btn btn-dark text-white" name="Search" type="submit" value="Search">
                
              </form>
            </div>
          </nav>
        </ul>
      </div>
    </div>
  </nav>