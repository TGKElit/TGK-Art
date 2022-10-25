<?php

require 'header.php';

$galleryImg = "./images/painting.jpg";
$animationImg = "./images/painting.jpg";
$storeImg = "./images/painting.jpg";

?>


<section class="homeSection">
    <div class="clickable">
        <img src="<?= $galleryImg?>" alt="Gallery">
    </div>
    <div class="clickable">
        <img src="<?= $animationImg?>" alt="Animation">
    </div>
    <div class="clickable">
        <img src="<?= $storeImg?>" alt="Store">
    </div>
</section>