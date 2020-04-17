<?php
function displayLoginPrompt(int $value, String $userFirstName)
{
    switch ($value) {
        case 0:
            echo "<h2> $userFirstName... You've already subscribed mate..</h2>";
            echo "<h2>Please Login!</h2>";
            break;
        case 1:
            echo "<h2>Thank you for subscribing " . $userFirstName;
            echo "<h2>Please Login!</h2>";
            break;
        case 2:
            echo "<h2>Welcome back $userFirstName!</h2>";
            echo "<h3>You are now logged in.</h3>";
            break;
        case 3:
            echo "<h2>Please subscribe to login!";
    }
}
