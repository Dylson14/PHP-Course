<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $bool = true;
    $a = 3;
    $b = 4;

    switch ($a) {
        case 1: 
            echo "The first case is correct";
            break;
        case 2:
            echo "this is the second case";
            break;
        default:
            echo "None of these conditions were true";
    };



    /* if ($a < $b) {
        echo "this statement is true";
    } else if ($a == $b) {
        echo "they are equal to eachother";
    } else {
        echo "none of the above";
    }; */

    ?>


</body>

</html>