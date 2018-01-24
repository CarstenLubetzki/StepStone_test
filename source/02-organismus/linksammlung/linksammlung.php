<div class="h1_distances"><?php include "source/00-atoms/headlines/h1/h1.php"; ?></div>
<ul class="linksammlung">
    <?php
        $nrIncludes = 10;
        for ($i=1;$i<$nrIncludes;$i++) {
    ?>
            <li>
            <?php include "source/00-atoms/link/link.php"; ?>
            </li>
    <?php
        }
    ?>
</ul>