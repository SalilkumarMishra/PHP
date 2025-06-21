<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
    <label>username: </label>
    <input type="text" name="username"><br>
    <label>password: </label>
    <input type="password" name="password"><br>
    <input type="submit" value="submit"><br>

    </form>
</body>
</html>
<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]}";
?>