<?php

require 'header.php';

require 'variables.php'

?>
<h1>Gallery</h1>

<section class="gallerySection">
<?php
    foreach ($images as $image) {    
        ?>
        <div class="clickable item">
            <img src="<?= $image['source']?>" alt="<?= $image['title']?>">
            <div class="overlay">
                <h3><?= $image['title']?></h3>
                <h3><?= $image['size']?></h3>
            </div>
        </div>
        <?php
    }
?>
</section>