<?php

require 'header.php';

$animations = [
    "C7oHALwfX38",
    "p9gyoEpo4rg",
    "RpFTe5ZqLPg",
    "RXjjARXBsbs",
    "GZLuq2tiIjE",
    "4xYmU0OLeCU",
    "62cS9CMWygc",
    "MTNKILB_HqM",
    "2BhV87MNbtk",
    "tjWEaCB8mr4",
];



?>

<h1>Animation</h1>

<section class="animationSection">
    <div class="full">
        <iframe id="feature" width="640" height="360" src="https://www.youtube.com/embed/<?= $animations[0]?>?autoplay=1&mute=1&loop=1&playlist=<?= $animations[0]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <section class="animationGrid">
        <?php
        foreach ($animations as $key => $animation) {    
            ?>
            <div class="clickable item" onclick="changeFeature(<?= $key?>)">
                <img src="http://img.youtube.com/vi/<?= $animation?>/maxresdefault.jpg" alt="An animation">
            </div>
                <?php
        }
        ?>
    </section>
</section>

<?php

require 'footer.php';