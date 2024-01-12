<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- this is php
    $fruits = [
        "apple", 
        "banana",
        "cherry"
    ];

   array_splice($fruits, 0, 1);
    echo $fruits[1];

     -->

    <?php
    /* $tasks = [
        "laundry" => "Daniel",
        "trash" => "Frida",
        "vacuum" => "Basse",
        "dishes" => "Bella"
    ]; */
   /*  $food = [
        array("apple", "mango"), 
        "banana",
        "cherry"
    ];
    echo $food[0][1]; */
/* 
    $test = [
        "Mango"
    ]; */
    
    // echo $tasks["laundry"];
    // print_r($tasks); prints out everything in the array
    // echo count($tasks);
   /*  $sorted = sort($tasks);
    print_r($tasks); */
   /*  array_push($fruits, "Mango");
    print_r($fruits); */

   /*  array_splice($fruits, 2, 0, "mango");
    print_r($fruits) */

    $food = [
        "fruits" => array("apple", "banana", "cherry"), 
        "meat" => array("chicken", "fish"), 
        "vegetables" => array("cucumber", "carrot"), 
    ];

    echo $food["vegetables"][0];

    ?>


</body>

</html>