<?php require("dbconnect.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Home</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php"); ?>
<?php include("inc_nav.php"); ?>
<h2>Advisors</h2>
<div id="content">
    <p>You want only the very best advice, so we have only the best advisors...</p>
</div>
<section id="features" class="clearfix">
    <?php
    # Store adviser names from database and echo HTML h2 tags.
    $namesArray = array();
    $namesQuery = "SELECT author FROM quotes";
    $result = $adviceDatabase->query($namesQuery);

    foreach ($result as $value) {
        $namesArray[] = $value;
    }
    ?>
    <div id="first">
        <?php echo "<h2>" . $namesArray[0]['author'] . "</h2>" ?>
        <img class="img-circle" src="images/devil.png" height="250" alt="Lindsay Ward">
        <blockquote>Mwuhahahahaha!!!</blockquote>

    </div>
    <div id="second">
        <?php echo "<h2>" . $namesArray[1]['author'] . "</h2>" ?>
        <img class="img-circle" src="images/Dalai_250.jpg" height="250" alt="Dalai Lama">
        <blockquote>Seek the happiness...</blockquote>
    </div>
    <div id="third">
        <?php echo "<h2>" . $namesArray[2]['author'] . "</h2>" ?>
        <img class="img-circle" src="images/VanillaIce_250.jpg" height="250" alt="Vanilla Ice">
        <blockquote>Stop. Collaborate and listen.</blockquote>
    </div>
</section>
<?php include("inc_footer.php"); ?>
</body>
</html>
