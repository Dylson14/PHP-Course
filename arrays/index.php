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

   /*  $food = [
        "fruits" => array("apple", "banana", "cherry"), 
        "meat" => array("chicken", "fish"), 
        "vegetables" => array("cucumber", "carrot"), 
    ];

    echo $food["vegetables"][0];
 */

    // $string = "Hello World!";

    // echo strlen($string); //counts the length of the string
    // echo strpos($string, "o"); //allows you to locate the position of a string
    // echo strpos($string, "Wo"); //allows you to locate the position of a string
    // echo str_replace("World", "Daniel", $string); //allows you to replace a section of a string with something else
  /*   echo strtoupper($string); //makes the string all caps
    echo strtolower($string); //makes the string lowercase */
    // echo substr($string, 2, 2); //allows you to select specific parts of a string
    // echo substr($string, 2, -2); //allows you to select specific parts of a string
    
    // print_r(explode(" ", $string));

    // $number = -5.5;

    // echo abs($number);//gets the actual value of the item without caring for it's sign pos or neg
    // echo round($number);
    // echo pow(2, 3); //exponentials
    // echo sqrt(16); //gives us the square root
    // echo rand(1, 100); // generates a random number between a range

    $array = ["apple","banana","orange"];
    
    // echo count($array);//counts the items inside of the array
    // echo is_array($array);// checks to see if what was passed in the function is an array or now, 1 being true, and 0 being false.
    
    // echo array_push($array, "kiwi");
    /* array_push($array, "kiwi");
    print_r($array); */
    
    
    /* array_pop($array);
    print_r($array); */
    // print_r(array_reverse($array));

    /* $array1 = ["apple","banana","orange"];
    $array2 = ["kiwi"];

    print_r(array_merge($array1, $array2)); */

    // echo date("Y-m-d H:i:s");
    $date = "2023-04-11 12:00:00";
    // echo time();
    echo strtotime($date);
    
    ?>


</body>

</html>