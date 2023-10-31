<?php

include_once('classes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SpaceX Starports</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/4672461ce1.js" crossorigin="anonymous"></script>
</head>

<body data-bs-theme="dark">
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand px-2"><img src="./images/spaceXlogo.png" height="48px" width="100%" alt="spaceX" /></a>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php if ($pagina == "Home") {
                                  echo "active";
                                } ?>" aria-current="page" href="./index">Home Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($pagina == "Flights") {
                                  echo "active";
                                } ?>" href="./vluchten">Flight Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($pagina == "Settings") {
                                  echo "active";
                                } ?>" href="./settings">Settings (crew)</a>
          </li>
        </ul>
        <span id="quotes" class="navbar-text fst-italic">“[placeholder]”</span>
      </div>
    </div>
  </nav>