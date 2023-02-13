<?php
    session_start();
    $_SESSION["username"] = "DANIEL";
    //   Username Session

    // Set name user
    $name =  !empty($_POST["name"]) ? $_POST["name"] : $_SESSION["username"];

    // If logout
    if (isset($_GET["logout"])) {
        unset($_SESSION['username']);
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Valider">
    </form>

    <a href="<?= htmlspecialchars($_SERVER["PHP_SELF"]."?logout=true"); ?>">Deconnecter</a>

    <!-- Welcome msg -->
    <h3>Welcome <?= $name ?> </h3>
</body>
</html>