<?php

require 'header.php';

$galleryImg = "./images/painting.jpg";
$animationImg = "./images/painting.jpg";
$storeImg = "./images/painting.jpg";

?>

<h1>Home</h1>

<section class="homeSection">
    <div class="clickable">
        <img src="<?= $galleryImg?>" alt="Gallery">
        <div class="overlay"><h3>Gallery</h3></div>
    </div>
    <div class="clickable">
        <img src="<?= $animationImg?>" alt="Animation">
        <div class="overlay"><h3>Animation</h3></div>
    </div>
    <div class="clickable">
        <img src="<?= $storeImg?>" alt="Store">
        <div class="overlay"><h3>Store</h3></div>
    </div>
</section>

<?php

require 'footer.php';