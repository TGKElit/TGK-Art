<?php

require 'header.php';

?>
<title>Home</title>
<?php

require 'nav.php';

require 'data.php';

?>

<main>

<h1>Home</h1>

    <div class="border"></div>


    <!--Three clickable images that navigate to respective pages.-->
    <section class="homeSection">
        <div class="clickable">
            <img src="<?= $galleryImg?>" alt="Gallery">
            <div class="overlay"><h3>Gallery</h3></div>
            <a href="./gallery.php">Gallery</a>
        </div>
        <div class="clickable">
            <img src="<?= $animationImg?>" alt="Animation">
            <div class="overlay"><h3>Animation</h3></div>
            <a href="./animation.php">Animation</a>
        </div>
        <div class="clickable">
            <img src="<?= $storeImg?>" alt="Store">
            <div class="overlay"><h3>Store</h3></div>
            <a href="./store.php">Store</a>
        </div>
    </section>
</main>

<?php

require 'footer.php';
