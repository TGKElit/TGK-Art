<?php

require 'header.php';

?>
<title>Animation</title>
<?php

require 'nav.php';

require 'variables.php'



?>

<h1>Animation</h1>
<main>
    <section class="animationSection">
        <section class="animationGrid">
            <?php
            foreach ($animations as $key => $animation) {    
                ?>
                <a class="clickable item" href="https://www.youtube.com/watch?v=<?= $animation?>">
                    <img src="http://img.youtube.com/vi/<?= $animation?>/maxresdefault.jpg" alt="An animation">
                </a>
                    <?php
            }
            ?>
        </section>
    </section>
</main>
<?php

require 'footer.php';