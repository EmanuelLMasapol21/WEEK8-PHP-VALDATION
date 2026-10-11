<?php
$usernameErr = $passwordErr = "";
$username = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $usernameErr = "Username is required.";
    } else {
        $username = trim($_POST["username"]);
        $usernameRegex = "/^[a-zA-Z0-9_]{3,16}$/";
        if (!preg_match($usernameRegex, $username)) {
            $usernameErr = "Invalid username format.";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required.";
    } else {
        $password = $_POST["password"];
        $passwordRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d@$!%*?&]{8,}$/";
        if (!preg_match($passwordRegex, $password)) {
            $passwordErr = "Invalid password format.";
        }
    }

    if (empty($usernameErr) && empty($passwordErr)) {
        $successMsg = "Login successful! Welcome back, " . htmlspecialchars($username) . ".";
        $username = "";
    }
}
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>
    <h2>Account Login</h2>

    <?php if (!empty($successMsg)): ?>
        <div class="success"><?php echo $successMsg; ?></div>
    <?php endif; ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>">
            <span class="error"><?php echo $usernameErr; ?></span>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span class="error"><?php echo $passwordErr; ?></span>
        </div>

        <button type="submit">Login</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>