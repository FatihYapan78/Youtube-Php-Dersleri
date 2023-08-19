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
    <a class="navbar-brand" href="#">Kurslar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Kurs Ekle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item me-auto">
          <a class="nav-link" href="register.php">Register</a>
        </li>
      </ul>
      <form action="index.php" class="d-flex" method="GET">
        <input class="form-control me-2" type="text" placeholder="Arama Yap" name="q">
        <button class="btn btn-outline-success" type="submit">Ara</button>
      </form>
    </div>
  </div>

</nav>