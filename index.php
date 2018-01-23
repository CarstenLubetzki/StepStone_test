<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="source/00-atoms/images/16x9/16x9.css"/>
    <link rel="stylesheet" href="source/00-atoms/images/4x3/4x3.css"/>
    <link rel="stylesheet" href="source/00-atoms/headlines/h1/h1.css"/>
    <link rel="stylesheet" href="source/00-atoms/headlines/h2/h2.css"/>
    <link rel="stylesheet" href="source/00-atoms/headlines/h3/h3.css"/>
    <link rel="stylesheet" href="source/00-atoms/videos/video.css">
    <link rel="stylesheet" href="source/00-atoms/images/picture/picture.css">
    <link rel="stylesheet" href="source/00-atoms/lists/olist.css">
    <link rel="stylesheet" href="source/00-atoms/lists/ulist.css">
    <link rel="stylesheet" href="source/00-atoms/dropdown/dropdown.css">
    <link rel="stylesheet" href="source/00-atoms/link/link.css">
    <link rel="stylesheet" href="source/00-atoms/button/button.css">
    <link rel="stylesheet" href="source/00-atoms/input/input.css">
    <link rel="stylesheet" href="source/00-atoms/text/text.css">
    <link rel="stylesheet" href="source/01-molecules/navigation/navigation.css">
    <link rel="stylesheet" href="source/01-molecules/form/form.css">
    <link rel="stylesheet" href="source/01-molecules/text_container/text_container.css">
    <link rel="stylesheet" href="source/01-molecules/CtA_box/cta_box.css">
    <link rel="stylesheet" href="source/02-organismus/cta_container/cta_container.css">
    <link rel="stylesheet" href="source/02-organismus/linksammlung/linksammlung.css">
    <link rel="stylesheet" href="source/02-organismus/bildstoerer/bildstoerer.css">
</head>
<body>
<header>
    <nav>
        <?php include "source/01-molecules/navigation/navigation.php"; ?>
    </nav>
</header>
<article>
    <?php include "source/01-molecules/form/form.php"; ?>
</article>
<article>
    <section>
        <?php include "source/02-organismus/cta_container/cta_container.php"; ?>
    </section>
    <section>
        <?php include "source/02-organismus/linksammlung/linksammlung.php"; ?>
    </section>
</article>
<article>
    <?php include "source/02-organismus/bildstoerer/bildstoerer.php"; ?>
</article>
<?php
/*
include "source/00-atoms/headlines/h1/h1.php";

include "source/00-atoms/images/picture/picture.php";

include "source/00-atoms/videos/video.php";

include "source/00-atoms/lists/olist.php";

include "source/00-atoms/link/link.php";

include "source/00-atoms/headlines/h2/h2.php";

include "source/00-atoms/lists/ulist.php";

include "source/00-atoms/headlines/h3/h3.php";

include "source/00-atoms/icons/icon.php";

include "source/00-atoms/dropdown/dropdown.php";

include "source/00-atoms/input/input.php";

include "source/00-atoms/input/input.php";

include "source/00-atoms/button/button.php";

include "source/00-atoms/text/text.php";

include "source/00-atoms/button/collapsebtn.php";
*/
?>



</body>
</html>