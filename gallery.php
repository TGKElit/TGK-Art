<?php

require 'header.php';

require 'variables.php';

require 'functions.php';

if (!empty($_GET)) {
    $images = filterArray($_GET, $images);
}

?>
<section class="titleSection">
    <h1>Gallery</h1>

    <p class="filterButton clickable" onclick="openMenu()">Filter</p>
</section>

<div class="border"></div>

<section class="filterMenu" id="filterMenu">
    <form action="gallery.php" method="GET">

        <h4>Medium</h4>

        <label for="oil">Oil</label>
        <input type="checkbox" name="oil" <?= isChecked($_GET['oil'])?>>

        <label for="pencil">Pencil</label>
        <input type="checkbox" name="pencil" <?= isChecked($_GET['pencil'])?>>

        <label for="digital">Digital</label>
        <input type="checkbox" name="digital" <?= isChecked($_GET['digital'])?>>
        
        <h4>Subject</h4>

        <label for="landscape">Landscape</label>
        <input type="checkbox" name="landscape" <?= isChecked($_GET['landscape'])?>>

        <label for="portrait">Portrait</label>
        <input type="checkbox" name="portrait" <?= isChecked($_GET['portrait'])?>>

        <label for="figure">Figure</label>
        <input type="checkbox" name="figure" <?= isChecked($_GET['figure'])?>>
        <br>

        <button type="submit">Apply Filter</button>
    </form>
    <div class="border"></div>
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