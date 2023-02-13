<?php
    // Start a PHP session
    session_start();
    $_SESSION["firstName"] = "ADJOUMANI";
    $_SESSION["lastName"] = "DANIEL";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <h3>Hello  <?= $_SESSION["firstName"] ." ". $_SESSION["lastName"] ?> </h3>
</body>
</html>