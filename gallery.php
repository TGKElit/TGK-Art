<?php

require 'header.php';

$images = [
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
    "./images/painting.jpg",
];

?>

<section class="gallerySection">
<?php
    foreach ($images as $image) {    
        ?>
        <img src="<?= $image?>" alt="Hello" class="clickable">
        <?php
    }
?>
</section>