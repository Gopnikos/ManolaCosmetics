<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manola Cosmetics</title>

    <!--link Bootstrap, font-awesome-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

  <?php

    require('functions.php');

  ?>

</head>
<body>
    
  <header id="header">
    <nav class="navbar navbar-expand-lg border-bottom">
      <div class="container-fluid">
          <a class="navbar-brand font-size-24" href="#" style="padding-left: 10%; color: #666666;">
            <img src="./images/logo.jpg" alt="" width="96" height="49.6" class="d-inline-block align-text-center">
            Manola Cosmetics
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-image: url('./images/hanmburger.png');"></span>
          </button>
          <div class="collapse navbar-collapse" style="justify-content: right; padding-right: 10%;" id="navbarNavAltMarkup">
            <div class="navbar-nav font-size-18 fw-light font-roboto">
              <a class="nav-link" style="color: #666666;" href="intro.php">ÚVOD</a>
              <a class="nav-link" style="color: #666666;" href="about.php">O NÁS</a>
              <a class="nav-link" style="color: #666666;" href="index.php">ESHOP</a>
              <a class="nav-link" style="color: #666666;" href="contact.php">KONTAKT</a>
              <a class="nav-link" style="color: #666666;" href="calendar.php">KALENDÁŘ AKCÍ</a>
              <a class="nav-link" style="color: #666666;" href="blog.php">BLOG</a>
              <a class="nav-link" style="color: #666666;" >|</a>
              <a class="nav-link" style="color: #666666;" href="cart.php">KOŠÍK</a>
            </div>
            <form action="#" class="font-size-18 ps-3">
              <a href="cart.php" class="py-3 rounded-pill" style="text-decoration:none">
                <span class="font-size-18" style="color: #666666;"><i class="fas fa-shopping-bag"></i></span>
                <span class="py-3" style="color: #666666;"><?php echo count($product->getData('cart'))?></span>
              </a>
            </form>
          </div>
      </div>
    </nav>
  </header>

  <main id="main">