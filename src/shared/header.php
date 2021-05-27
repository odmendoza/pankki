<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Pankki | Bank</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png"/>

    <link rel="stylesheet" type="text/css" href="assets/styles/main.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/slider.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/contact.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
            integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            Pankki
        </a>
        <button class="navbar-toggler" type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/credits.php">Credits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/savings.php">Savings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/simulator.php">Simulator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active"
                 style="background-image: url('assets/images/slide-1.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Pankki</h3>
                    <p class="lead">A modern bank</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                 style="background-image: url('assets/images/slide-2.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Savings plans</h3>
                    <p class="lead">Choose yours</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                 style="background-image: url('assets/images/slide-3.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Let's grow together</h3>
                    <p class="lead">Use our services</p>
                </div>
            </div>
            <!-- Slide Four - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                 style="background-image: url('assets/images/slide-4.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Worry about making money</h3>
                    <p class="lead">We take care of it</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>