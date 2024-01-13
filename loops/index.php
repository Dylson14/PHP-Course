<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHp</title>
</head>
<body>
    
    <?php
    /* $test = 5;
    for($i = 0; $i <= $test; $i++) {
        echo "This is iteration number " . $i . "<br>";
    } */

   /*  $test = 10;
    do {
        echo $test . "<br>";
        $test++;
    } while ($test < 10);
 */
    // $fruits = ["Apple", "Banana", "Orange"];
    $fruits = ["Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange"];

    // echo $fruits[0];
/* 
    for($i = 0; $i < count($fruits); $i++){
        echo $fruits[$i] . "<br>";

    } */

    foreach($fruits as $fruit => $color) {
        echo "This is a " . $fruit . " That has a color of " . $color . "<br>";
    }

    ?>

</body>
</html>