<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Kuva</title>

    <link rel="icon" type="image/png" href="images/favicon.png"/>

    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/slider.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
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
            <img src="images/favicon.png" width="30px" height="50px" alt="">
            Kuva
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
                    <a class="nav-link" href="#galery">Galery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
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
            <div class="carousel-item active" style="background-image: url('images/slide-1.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Kuva</h3>
                    <p class="lead">Originality, beauty and elegance in each photo</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/slide-2.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Professional photographers</h3>
                    <p class="lead">The best photos</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/slide-3.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Adventurous spirit</h3>
                    <p class="lead">Landscapes never seen</p>
                </div>
            </div>
            <!-- Slide Four - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/slide-4.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Photo camera</h3>
                    <p class="lead">High performance devices</p>
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

<hr>
    <h3 class="text-center">
        <a name="galery">Galery</a>
    </h3>
<hr>

<div class="container">
    <section class="image-card">
        <img src="images/photo-01.jpeg" class="image" alt="Photo 1">
        <div class="content-card">
            <img src="images/author.jpg" alt="" class="author-img">
            <div>
                <p class="author-name"><strong>Ruth Beck</strong><br>
                    <small><i>Photographer</i></small>
                <br>
                <a rel="license"
                   target="_blank"
                   href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                    <img alt="Licencia de Creative Commons"
                         src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png"/>
                </a>
                </p>
            </div>
        </div>
    </section>

    <section class="image-card">
        <img src="images/photo-02.jpeg" class="image" alt="Photo 2">
        <div class="content-card">
            <img src="images/author.jpg" alt="" class="author-img">
            <div>
                <p class="author-name"><strong>Ruth Beck</strong><br>
                    <small><i>Photographer</i></small>
                    <br>
                    <a rel="license"
                       target="_blank"
                       href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                        <img alt="Licencia de Creative Commons"
                             src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png"/>
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section class="image-card">
        <img src="images/photo-03.jpg" class="image" alt="Photo 3">
        <div class="content-card">
            <img src="images/author.jpg" alt="" class="author-img">
            <div>
                <p class="author-name"><strong>Ruth Beck</strong><br>
                    <small><i>Photographer</i></small>
                    <br>
                    <a rel="license"
                       target="_blank"
                       href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                        <img alt="Licencia de Creative Commons"
                             src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png"/>
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section class="image-card">
        <img src="images/photo-04.jpeg" class="image" alt="Photo 4">
        <div class="content-card">
            <img src="images/author.jpg" alt="" class="author-img">
            <div>
                <p class="author-name"><strong>Ruth Beck</strong><br>
                    <small><i>Photographer</i></small>
                    <br>
                    <a rel="license"
                       target="_blank"
                       href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                        <img alt="Licencia de Creative Commons"
                             src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png"/>
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section class="image-card">
        <img src="images/photo-05.jpeg" class="image" alt="Photo 5">
        <div class="content-card">
            <img src="images/author.jpg" alt="" class="author-img">
            <div>
                <p class="author-name"><strong>Ruth Beck</strong><br>
                    <small><i>Photographer</i></small>
                    <br>
                    <a rel="license"
                       target="_blank"
                       href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                        <img alt="Licencia de Creative Commons"
                             src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png"/>
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section class="image-card">
        <img src="images/photo-06.jpg" class="image" alt="Photo 6">
        <div class="content-card">
            <img src="images/author.jpg" alt="" class="author-img">
            <div>
                <p class="author-name"><strong>Ruth Beck</strong><br>
                    <small><i>Photographer</i></small>
                    <br>
                    <a rel="license"
                       target="_blank"
                       href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                        <img alt="Licencia de Creative Commons"
                             src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png"/>
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section class="image-card">
        <img src="images/photo-07.jpg" class="image" alt="Photo 7">
        <div class="content-card">
            <img src="images/author.jpg" alt="" class="author-img">
            <div>
                <p class="author-name"><strong>Ruth Beck</strong><br>
                    <small><i>Photographer</i></small>
                    <br>
                    <a rel="license"
                       target="_blank"
                       href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                        <img alt="Licencia de Creative Commons"
                             src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png"/>
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section class="image-card">
        <img src="images/photo-08.jpeg" class="image" alt="Photo 8">
        <div class="content-card">
            <img src="images/author.jpg" alt="" class="author-img">
            <div>
                <p class="author-name"><strong>Ruth Beck</strong><br>
                    <small><i>Photographer</i></small>
                    <br>
                    <a rel="license"
                       target="_blank"
                       href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                        <img alt="Licencia de Creative Commons"
                             src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png"/>
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section class="image-card">
        <img src="images/photo-09.jpeg" class="image" alt="Photo 9">
        <div class="content-card">
            <img src="images/author.jpg" alt="" class="author-img">
            <div>
                <p class="author-name"><strong>Ruth Beck</strong><br>
                    <small><i>Photographer</i></small>
                    <br>
                    <a rel="license"
                       target="_blank"
                       href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                        <img alt="Licencia de Creative Commons"
                             src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png"/>
                    </a>
                </p>
            </div>
        </div>
    </section>

</div>

<hr>
<h3 class="text-center">
    <a name="about">About</a>
</h3>
<hr>
<main>
    <div class="container-fluid">
        <div class="about">
            <p class="text-justify">
                My name is Ruth Beck, I am a professional photographer and the creator of Kava, a website where I share with the world the best of my photographs under a Creative Commons license.
                I am passionate about the world of color and image.
            </p>
            <img src="images/author.jpg" class="about-img">
        </div>
    </div>
</main>

<hr>
<h3 class="text-center">
    <a name="contact">Contact</a>
</h3>
<hr>

<!-- Footer -->
<div class="footer">
    <footer>
        <div class="social">
            <a href="#"><i class="icon ion-social-instagram"></i></a>
            <a href="#"><i class="icon ion-social-snapchat"></i></a>
            <a href="#"><i class="icon ion-social-twitter"></i></a>
            <a href="#"><i class="icon ion-social-facebook"></i></a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="/">Home</a></li>
            <li class="list-inline-item"><a href="/">Galery</a></li>
            <li class="list-inline-item"><a href="/">About</a></li>
            <li class="list-inline-item"><a href="/">Contact</a></li>
        </ul>
        <p class="copyright">Kuva © 2021</p>
    </footer>
</div>

</body>
</html>
