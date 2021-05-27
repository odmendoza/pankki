<?php
include("config/config.php");
include("shared/header.php");
?>

<hr>
    <h3 class="text-center">
        <a name="galery">Galery</a>
    </h3>
<hr>

<div class="container">
    <section class="image-card">
        <img src="assets/images/photo-07.jpg" class="image" alt="Photo 7">
        <div class="content-card">
            <a href="/credits.php"> <h4 class="text-center"><strong>Credits</strong></h4></a>
        </div>
    </section>

    <section class="image-card">
        <img src="assets/images/photo-08.jpg" class="image" alt="Photo 8">
        <div class="content-card">
            <a href="/savings.php"> <h4 class="text-center"><strong>Savings</strong></h4></a>
        </div>
    </section>

    <section class="image-card">
        <img src="assets/images/photo-09.jpg" class="image" alt="Photo 9">
        <div class="content-card">
            <a href="/simulator.php"> <h4 class="text-center"><strong>Simulator</strong></h4></a>
        </div>
    </section>

</div>

<hr>
<h3 class="text-center">
    Mission
</h3>
<hr>
<main>
    <div class="container-fluid">
        <div class="about">
            <p class="text-justify">
                Create solutions and offer services that generate value for our clients and society. To be recognized as the best financial group by its clients and their communities.
            </p>
            <img src="assets/images/bank.jpeg" class="about-img">
        </div>
    </div>
</main>

<?php
include("shared/footer.php");
?>
