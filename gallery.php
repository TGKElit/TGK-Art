<?php

require 'header.php';

require 'variables.php'

?>
<section class="titleSection">
    <h1>Gallery</h1>

    <p class="filterMenu">Filter</p>
</section>

<section class="gallerySection">

    
<?php

    foreach ($images as $image) {    
        ?>
        <div class="clickable item" onclick="selectImage()">
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

<?php

require 'footer.php';