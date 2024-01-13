<?php 
declare(strict_types = 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function practices</title>
</head>
<body>
    
    <?php 
    
    /* function sayHello(string $name = "Jake"){
        return "Hello " . $name . "!";
    } */
    $test = "Daniel";
    function calculator(int $num01, int $num02){
        global $test;
        $result = $num01 + $num02;
        // return $result;
        return $test;
    }

   /*  $test = sayHello("Dylson");
    echo $test; */
    $finalCalc = calculator(2,2);
    echo $finalCalc;

    ?>

</body>
</html>