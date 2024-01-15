<?php 
session_start();


$_SESSION["username"] = "Dylsons";
// session_unset();

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions PHP</title>
</head>
<body>
    <h1>Sessions</h1>
    <?php 
    echo $_SESSION["username"] = "Dylsons";
    ?>
</body>
</html>