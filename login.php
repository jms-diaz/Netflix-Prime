<?php
if (isset($_POST["submitButton"])) {
    // echo "form ok";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Welcome to Netflix Prime</title>
</head>

<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="assets/images/logo.png" alt="Site Logo">
                <h3>Login</h3>
                <span>to continue to Netflix Prime</span>
            </div>
            <form method="POST" action="">
                <input type="text" placeholder="Username" name="username" id="username" required>
                <input type="password" placeholder="Password" name="password" id="password" required>
                <input type="submit" value="SUBMIT" name="submitButton">
            </form>

            <a href="register.php" class="signInMessage">No account yet? Register</a>
        </div>
    </div>
</body>

</html>