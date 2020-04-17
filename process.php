<?php include("dbconnect.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Subscribed</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>
<div id="content">
    <?php
    include("functions/checkUsername.php");
    include("functions/storeUserDetails.php");
    include("functions/displayLoginPrompt.php");
    // User details
    $username = $_POST['username'];
    $userFirstName = $_POST['first_name'];
    $userLastName = $_POST['last_name'];

    // Check if username is valid
    $usernameInUse = checkUsername($username, $adviceDatabase);

    if ($usernameInUse) {
        // Display prompt to login.
        $case = 0;
        displayLoginPrompt($case, $userFirstName);

    } else {
        // Store user's details in database, display prompt.
        $case = 1;
        storeUserDetails($username, $userFirstName, $userLastName, $adviceDatabase);
        displayLoginPrompt($case, $userFirstName);
    }
    ?>
</div>
<?php include("inc_footer.php"); ?>
</body>
</html>
