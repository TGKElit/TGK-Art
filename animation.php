<?php

require 'header.php';

?>
<title>Animation</title>
<?php

require 'nav.php';

require 'variables.php'

?>
<main>

    <h1>Animation</h1>

    <div class="border"></div>

    <section class="animationGrid">
        <?php
        foreach ($animations as $key => $animation) {    
            ?>
            <a class="clickable item animationLink" href="https://www.youtube.com/watch?v=<?= $animation?>">
                Link to external youtube video.
                <img src="http://img.youtube.com/vi/<?= $animation?>/maxresdefault.jpg" alt="An animation">
            </a>
            <?php
        }
        ?>
    </section>
</main>
<?php

require 'footer.php';