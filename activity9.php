<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Set a cookie with the user's name
    $name = htmlspecialchars($_POST['name']);
    setcookie('username', $name, time() + (86400 * 30), "/"); // Cookie valid for 30 days
    header("Location: Activity8.php"); // Reload the page to display the greeting
    exit();
}

// Check if the cookie is set
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Greeting</title>
</head>
<body>
    <?php if ($username): ?>
        <h1>Welcome back, <?php echo $username; ?>!</h1>
        <p>Not you? <a href="Activity8.php?clear=true">Click here</a> to reset.</p>
    <?php else: ?>
        <h1>Welcome!</h1>
        <form method="POST" action="">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Submit</button>
        </form>
    <?php endif; ?>

    <?php
    // Clear the cookie if requested
    if (isset($_GET['clear']) && $_GET['clear'] == 'true') {
        setcookie('username', '', time() - 3600, "/"); // Expire the cookie
        header("Location: Activity8.php"); // Reload the page
        exit();
    }
    ?>
</body>
</html>