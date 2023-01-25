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
                <h3>Register</h3>
                <span>to continue to Netflix Prime</span>
            </div>
            <form method="POST" action="">
                <input type="text" placeholder="First Name" name="firstName" id="firstName" required>
                <input type="text" placeholder="Last Name" name="lastName" id="lastName" required>
                <input type="text" placeholder="Username" name="username" id="username" required>
                <input type="email" placeholder="Email" name="email" id="email" required>
                <input type="password" placeholder="Password" name="password" id="password" required>
                <input type="password" placeholder="Confirm Password" name="password2" id="password" required>
                <input type="submit" value="SUBMIT" name="submitButton">
            </form>

            <a href="login.php" class="signInMessage">Already have an account? Login</a>
        </div>
    </div>
</body>

</html>