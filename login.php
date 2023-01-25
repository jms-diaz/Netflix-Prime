<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Account.php");
require_once("includes/classes/Constants.php");

$account = new Account($con);

if (isset($_POST["submitButton"])) {
    $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
    $password = FormSanitizer::santizeFormPassword($_POST["password"]);

    $success = $account->login($email, $password);

    if ($success) {
        $_SESSION["userLoggedIn"] = $email;
        header("Location: index.php");
    }
}

function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
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
                <?php echo $account->getError(Constants::$loginFailed); ?>
                <input type="email" placeholder="Email" name="email" id="email" value="<?php getInputValue("email"); ?>"
                    required>
                <input type="password" placeholder="Password" name="password" id="password"
                    value="<?php getInputValue("password"); ?>" required>
                <input type="submit" value="SUBMIT" name="submitButton">
            </form>

            <a href="register.php" class="signInMessage">No account yet? Register</a>
        </div>
    </div>
</body>

</html>