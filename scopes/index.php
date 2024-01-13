<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    /* $test = "Jake";
    echo $test; */
    $test = "Jack";

    function myFunction(){
        // $localVar = "Hello World!";
        // global $test;

        // return $test;
        return $GLOBALS["test"];
    }

    echo myFunction();
    /* echo $localVar;
    echo $test; */
    ?>
</body>
</html>