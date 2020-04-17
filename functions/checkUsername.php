<?php

function checkUsername(String $username, PDO $database)
{
    // Return boolean value if username exists or not.

    // Query database for existing username.
    $usernameQuery = "SELECT username FROM users WHERE username = '$username'";
    $result = $database->query($usernameQuery);

    if (is_null($result)) {
        return false;
    } else {
        return true;
    }
}
