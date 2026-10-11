<?php
$usernameErr = $emailErr = $phoneErr = $passwordErr = "";
$username = $email = $phone = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $usernameErr = "Username is required.";
    } else {
        $username = trim($_POST["username"]);
        $usernameRegex = "/^[a-zA-Z0-9_]{3,16}$/";
        if (!preg_match($usernameRegex, $username)) {
            $usernameErr = "Username must be 3–16 characters long (letters, numbers, underscores only).";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    } else {
        $email = trim($_POST["email"]);
        $emailRegex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        if (!preg_match($emailRegex, $email)) {
            $emailErr = "Invalid email format (e.g., student@example.com).";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required.";
    } else {
        $phone = trim($_POST["phone"]);
        $phoneRegex = "/^09\d{9}$/";
        if (!preg_match($phoneRegex, $phone)) {
            $phoneErr = "Phone number must start with '09' followed by 9 digits (e.g., 09998887777).";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required.";
    } else {
        $password = $_POST["password"];
        $passwordRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d@$!%*?&]{8,}$/";
        if (!preg_match($passwordRegex, $password)) {
            $passwordErr = "Password must be at least 8 characters long, containing 1 uppercase, 1 lowercase, and 1 number.";
        }
    }

    if (empty($usernameErr) && empty($emailErr) && empty($phoneErr) && empty($passwordErr)) {
        $successMsg = "Registration successful! Welcome, " . htmlspecialchars($username) . ".";
        $username = $email = $phone = "";
    }
}
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>
    <h2>Create an Account</h2>

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
            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" placeholder="09171234567" value="<?php echo htmlspecialchars($phone); ?>">
            <span class="error"><?php echo $phoneErr; ?></span>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span class="error"><?php echo $passwordErr; ?></span>
        </div>

        <button type="submit">Register</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>