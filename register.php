<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Account.php");
require_once("includes/classes/Constants.php");

$account = new Account($con);

if (isset($_POST["submitButton"])) {
    $firstName = FormSanitizer::santizeFormString($_POST["firstName"]);
    $lastName = FormSanitizer::santizeFormString($_POST["lastName"]);
    $username = FormSanitizer::santizeFormUsername($_POST["username"]);
    $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
    $password = FormSanitizer::santizeFormPassword($_POST["password"]);
    $password2 = FormSanitizer::santizeFormPassword($_POST["password2"]);

    $success = $account->register($firstName, $lastName, $username, $email, $password, $password2);

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
                <h3>Register</h3>
                <span>to continue to Netflix Prime</span>
            </div>
            <form method="POST" action="">
                <?php echo $account->getError(Constants::$fnCharacters); ?>
                <input type="text" placeholder="First Name" name="firstName" id="firstName"
                    value="<?php getInputValue("firstName"); ?>" required>

                <?php echo $account->getError(Constants::$lnCharacters); ?>
                <input type="text" placeholder="Last Name" name="lastName" id="lastName"
                    value="<?php getInputValue("lastName"); ?>" required>

                <?php echo $account->getError(Constants::$unCharacters); ?>
                <?php echo $account->getError(Constants::$unTaken); ?>
                <input type="text" placeholder="Username" name="username" id="username"
                    value="<?php getInputValue("username"); ?>" required>

                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <?php echo $account->getError(Constants::$emTaken); ?>
                <input type="email" placeholder="Email" name="email" id="email" value="<?php getInputValue("email"); ?>"
                    required>

                <?php echo $account->getError(Constants::$pwDontMatch); ?>
                <?php echo $account->getError(Constants::$pwCharacters); ?>
                <input type="password" placeholder="Password" name="password" id="password"
                    value="<?php getInputValue("password"); ?>" required>
                <input type="password" placeholder="Confirm Password" name="password2" id="password2"
                    value="<?php getInputValue("password2"); ?>" required>
                <input type="submit" value="SUBMIT" name="submitButton">
            </form>

            <a href="login.php" class="signInMessage">Already have an account? Login</a>
        </div>
    </div>
</body>

</html>