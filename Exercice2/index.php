<?php
    // my user data
    $data = [
        "username" => "DANIEL",
        "cookiesTime" => time() + (86400 * 30),
    ];

    // encode data in json and base64
    $dataEncoding = base64_encode(json_encode($data));

    // Store Login Detail
    setcookie("userInfos", $dataEncoding, time() + (86400 * 30), "/"); // 86400 = 1 day

    // form submit
    $submit = false;
    // login state
    $logIn = false;

    // submit form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submit = true;

        // decode data base64 and json
        $dataDecrypt = json_decode(base64_decode($_COOKIE["userInfos"]), true);

        if (($dataDecrypt["username"] == $_POST["username"])) {
            $logIn = true;
        }
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
        <label for="name">Username</label>
        <input type="text" name="username" id="username">
        <input type="submit" value="Valider">
    </form>

    <!-- msg connect -->
    <?php if($submit): ?>
        <h3>Login <?= $logIn ? "success" : "error" ?> </h3>
    <?php endif; ?>

</body>
</html>