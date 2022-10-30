<?php

require 'header.php';

require 'variables.php';

?>

<h1>Home</h1>

<section class="homeSection">
    <div class="clickable">
        <img src="<?= $galleryImg?>" alt="Gallery">
        <div class="overlay"><h3>Gallery</h3></div>
        <a href="./gallery.php"></a>
    </div>
    <div class="clickable">
        <img src="<?= $animationImg?>" alt="Animation">
        <div class="overlay"><h3>Animation</h3></div>
        <a href="./animation.php"></a>
    </div>
    <div class="clickable">
        <img src="<?= $storeImg?>" alt="Store">
        <div class="overlay"><h3>Store</h3></div>
        <a href="./store.php"></a>
    </div>
</section>

<?php

require 'footer.php';