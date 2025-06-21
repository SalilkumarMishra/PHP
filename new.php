<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=new.php method="post">
        <label>X: </label>
        <input type="text" name="x"><br>
        <input type="submit" value="submit"><br>

    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $total =null;
    $total = round($x);
    echo "The rounded value of {$x} is {$total} <br>";
    
?>