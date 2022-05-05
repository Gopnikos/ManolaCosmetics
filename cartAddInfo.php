<?php 

    ob_start();

    include('header.php');

?>

<section id="banner">
    <div class="container-fluid .bg-image" style="background-image: url('./images/sulRuze.jpg'); height: 60vh;">
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8 fw-light font-roboto" style="color: white; padding-top: 4%;">
            <p class="text-center font-size-36 pt-5">Přidáno do košíku</p>
            <a class="nav-link font-size-20 font-roboto fw-light pt-5 text-center" href="index.php" style="color: white; text-decoration: underline;">Pokračovat v nákupu</a>
            <div class="col-2">
            </div>
        </div>
    </div>
</section>

<?php 

    include('footer.php');

?>
