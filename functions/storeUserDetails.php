<?php
function storeUserDetails(string $username, string $firstName, string $lastName, PDO $database)
{
    // Insert user details into database.
    $insertNewUser = "INSERT INTO users (username, first_name, last_name) VALUES ('$username', '$firstName', '$lastName')";
    try {
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $database->beginTransaction();
        $database->exec($insertNewUser);
        $database->commit();

    } catch (Exception $exception) {
        $database->rollBack();
        echo "Failed: " . $exception->getMessage();
    }
}
