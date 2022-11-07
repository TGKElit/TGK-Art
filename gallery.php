<?php

require 'header.php';

?>
<title>Gallery</title>
<?php

require 'nav.php';

require 'data.php';

require 'functions.php';

if (!empty($_GET)) {
    $images = filterArray($_GET, $images);
}

?>
<main>
    <section class="titleSection">
        <h1>Gallery</h1>

        <!--Opens filtermenu-->
        <p tabindex="0" class="filterButton clickable" onclick="openMenu()">Filter</p>
    </section>

    <div class="border"></div>


    <!--Filter menu -->
    <section class="filterMenu" id="filterMenu">
        <form action="gallery.php" method="GET">

            <h4>Medium</h4>

            <label for="oil">Oil</label>
            <input tabindex="0" type="checkbox" name='medium[oil]' <?= isChecked($_GET['medium']['oil'])?>>

            <label for="pencil">Pencil</label>
            <input tabindex="0" type="checkbox" name="medium[pencil]" <?= isChecked($_GET['medium']['pencil'])?>>

            <label for="digital">Digital</label>
            <input tabindex="0" type="checkbox" name="medium[digital]" <?= isChecked($_GET['medium']['digital'])?>>

            <h4>Subject</h4>

            <label for="landscape">Landscape</label>
            <input tabindex="0" type="checkbox" name="subject[landscape]" <?= isChecked($_GET['subject']['landscape'])?>>

            <label for="portrait">Portrait</label>
            <input tabindex="0" type="checkbox" name="subject[portrait]" <?= isChecked($_GET['subject']['portrait'])?>>

            <label for="figure">Figure</label>
            <input tabindex="0" type="checkbox" name="subject[figure]" <?= isChecked($_GET['subject']['figure'])?>>
            <br>

            <button tabindex="0" type="submit">Apply Filter</button>
        </form>
        <div class="border"></div>
    </section>


    <section class="gallerySection">

        <?php

        foreach ($images as $image) {
        ?>
            <div tabindex="0" class="clickable item" onclick="selectImage()">
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
</main>

<?php

require 'footer.php';
