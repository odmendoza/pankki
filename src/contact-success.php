<?php
include("config/config.php");
include("shared/header.php");
?>

<hr>
<h3 class="text-center">
    Contact success
</h3>
<hr>

<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
?>

<div class="contact-form">
    <?php
    echo "<p class='text-center'><i>$firstname $lastname, thank you for contacting us !</i></p>"
    ?>
</div>

<?php
include("shared/footer.php");
?>
