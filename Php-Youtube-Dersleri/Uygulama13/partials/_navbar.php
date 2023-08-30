<?php

    if(!empty($_GET["q"])){
        $q = $_GET["q"];

        $kurslar = array_filter($kurslar, function($kurs) use ($q){
            return stristr($kurs["baslik"], $q) or stristr($kurs["altbaslik"], $q);
        });

    }



?>



<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Kurslar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php if(isAdmin()):?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="categories.php">Kategoriler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="kurslar.php">Kurslar</a>
        </li>
        <?php endif?>
        </ul>

        <ul class="navbar-nav me-2">
        <?php if(isLoggedIn()):?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Hoşgeldin <?php echo $_SESSION["username"]?></a>
        </li>
        <?php else:?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item me-auto">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <?php endif?>
        </ul>

      <form action="index.php" class="d-flex" method="GET">
        <input class="form-control me-2" type="text" placeholder="Arama Yap" name="q">
        <button class="btn btn-outline-success" type="submit">Ara</button>
      </form>
    </div>
  </div>

</nav>