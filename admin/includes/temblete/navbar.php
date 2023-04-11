<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><?php echo lang('spen') ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"><?php echo lang('home') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mempar.php"><?php echo lang('membar') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="NewsControl.php"><?php echo lang('news') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="advert.php"><?php echo lang('advert') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ContactUS.php"><?php echo lang('massage') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="club.php"><?php echo lang('club') ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="logout.php"><?php echo lang('logout') ?></a></li>
            <li><a class="dropdown-item" href="mempar.php?do=Edit&userid=<?php echo $_SESSION['ID'] ?>"><?php echo lang('Edit'); ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success p-2 m-3" type="submit">Search</button>
      </form>
    </div>
</div>
</nav>